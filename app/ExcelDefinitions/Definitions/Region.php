<?php


namespace App\ExcelDefinitions\Definitions;


use App\ExcelDefinitions\BaseExcelDefinitions;

class Region extends BaseExcelDefinitions
{
    public static $headers = [
        'name' => 'Region'
    ];

    public static function getHeaders(): array
    {
        return self::$headers;
    }
}
