<?php


namespace App\ExcelDefinitions\Definitions;


use App\ExcelDefinitions\BaseExcelDefinitions;

class PackageType extends BaseExcelDefinitions
{
    public static $headers = [
        'name' => 'PackageType Name'
    ];

    /**
     * Get all headers for excel import
     *
     * @return string[]
     */
    public static function getHeaders(): array
    {
        return self::$headers;
    }
}
