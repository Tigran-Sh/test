<?php


namespace App\ExcelDefinitions;


use App\ExcelDefinitions\Definitions\Destination;
use App\ExcelDefinitions\Definitions\ExtraServiceType;
use App\ExcelDefinitions\Definitions\Hotel;
use App\ExcelDefinitions\Definitions\PackageType;
use App\ExcelDefinitions\Definitions\Region;
use App\ExcelDefinitions\Definitions\Service;

class ExcelTypes
{
    public static $types = [
        PackageType::class => 'Package Type',
        ExtraServiceType::class => 'Extra Service Type',
        Region::class => 'Region',
        Destination::class => 'Destination',
        Hotel::class => 'Hotel',
        Service::class => 'Hotel Services'
    ];
}
