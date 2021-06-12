<?php


namespace App\ExcelDefinitions;


use App\ExcelDefinitions\Definitions\ExtraServiceType;
use App\ExcelDefinitions\Definitions\PackageType;

class ExcelTypes
{
    public static $types = [
        PackageType::class => 'Package Type',
        ExtraServiceType::class => 'Extra Service Type',
    ];
}
