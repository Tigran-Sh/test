<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 26.07.2019
 * Time: 11:09
 */

namespace App\Services;


use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DataService
{

    /**
     * @param $requestData
     * @param $object
     * @param $dataObject
     * @return array
     */
    public static function saveData($requestData, $object, $dataObject)
    {
        $fillableArray = array_flip($dataObject->getFillable());
        $langs = LaravelLocalization::getSupportedLocales();
        foreach ($langs as $localeCode => $properties) {
            $dataToFind = [];
            $data = [];
            foreach ($fillableArray as $key => $value) {
                if ($key == $dataObject->foreigenKey) {
                    $dataToFind[$key] = $object->id;
                } elseif ($key == 'lang') {
                    $dataToFind[$key] = $localeCode;
                } else {
                    $requestDataKey = $key . '_' . $localeCode;
                    $data[$key] = $requestData[$requestDataKey];
                }
            }
            $dataObject::updateOrCreate($dataToFind, $data);
        }
        return $data;
    }
}
