<?php


namespace App\ExcelDefinitions\Definitions;


use App\ExcelDefinitions\BaseExcelDefinitions;

class ExtraServiceType extends BaseExcelDefinitions
{
    public static $headers = [
        'name' => 'ExtraserviceTyp'
    ];

    /**
     * @return string[]
     */
    public static function getHeaders(): array
    {
        return self::$headers;
    }
}
