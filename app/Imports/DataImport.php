<?php

namespace App\Imports;

use App\Models\Hotel;
use App\Models\Price;
use App\Models\Service;
use App\Services\DataService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DataImport implements ToCollection, WithHeadingRow
{
    protected $excel_type;

    public function __construct($excel_type)
    {
        $this->excel_type = $excel_type;
    }

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $defObject = $this->excel_type::getHeaders();
        $modelName = 'App\Models\\' . basename($this->excel_type);
        $model = new $modelName;
        $contact = array_key_exists('user_id', $defObject) ? 2 : null;
        DB::transaction(function () use ($collection, $defObject, $model, $modelName, $contact) {
            $savedData = $createdModel = [];
            try {
                foreach ($collection as $rows) {
                    if ($rows->filter()->isNotEmpty()) {
                        foreach ($defObject as $modelField => $excelTypeField) {
                            if ($excelTypeField) {
                                $savedData[$modelField] = $rows[strtolower(str_replace(' ', '_', $excelTypeField))];
                            }
                        }
                        $savedData['user_id'] = $contact ?? null;
                        $createdModel = $model::create($savedData);
                    }
                    if (method_exists($createdModel, 'data')) {
                        $relatedData = [];
                        $className = get_class($model->data()->getRelated());
                        $languages = LaravelLocalization::getSupportedLocales();
                        foreach ($languages as $lang => $item) {
                            foreach ($savedData as $key => $value) {
                                $relatedData[$key . '_' . $lang] = $value;
                            }
                        }
                        DataService::saveData($relatedData, $createdModel, new $className);
                        if ($modelName == Hotel::class) {
                            if (isset($savedData['month']) && isset($savedData['weekday'])) {
                                $month = $savedData['month'];
                                $weekDay = $savedData['weekday'];
                                $savedData['month'] = json_decode($month, true);
                                $savedData['weekday'] = json_decode($weekDay, true);
                                $savedData['item_id'] = $createdModel->id;
                                $savedData['item_type'] = get_class($createdModel);
                                Price::create($savedData);
                            }
                        }
                    }
                    $savedData = [];
                }
                DB::commit();
            } catch (\Throwable $exception) {
                DB::rollBack();
                dd($exception);
            }
        });
    }
}
