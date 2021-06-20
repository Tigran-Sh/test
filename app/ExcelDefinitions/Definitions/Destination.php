<?php


namespace App\ExcelDefinitions\Definitions;


use App\ExcelDefinitions\BaseExcelDefinitions;

class Destination extends BaseExcelDefinitions
{
    public static $headers = [
        'name' => 'Destination',
        'region_id' => 'Region'
    ];

    public static function getHeaders(): array
    {
        return self::$headers;
    }
}
