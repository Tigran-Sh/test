<?php

namespace App\Imports;

use App\Services\DataService;
use Illuminate\Support\Collection;
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
        $modelName = 'App\Models\\'.basename($this->excel_type);
        $model = new $modelName;
        $savedData = [];
        foreach ($collection as $rows) {
            foreach ($defObject as $modelField => $excelTypeField) {
                $savedData = [
                    $modelField => $rows[strtolower(str_replace(' ','_',$excelTypeField))]
                ];
            }
            $createdModel = $model::create($savedData);
            if (method_exists($createdModel,'data')) {
                $relatedData = [];
                $className = get_class($model->data()->getRelated());
                $languages = LaravelLocalization::getSupportedLocales();
                foreach ($languages as $lang => $item) {
                    foreach ($savedData as $key => $value) {
                        $relatedData[$key.'_'.$lang] = $value;
                    }
                }
                DataService::saveData($relatedData, $createdModel, new $className);
            }
            $savedData = [];
        }
    }
}
