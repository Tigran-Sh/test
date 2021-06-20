<?php


namespace App\ExcelDefinitions\Definitions;


use App\ExcelDefinitions\BaseExcelDefinitions;

class Service extends BaseExcelDefinitions
{

    public static $headers = [
        'name' => 'HotelService Headline',
        'hotel_id' => 'Hotel ID',
        'user_id' => null,
        'duration' => 'Duration in hrs',
        'slogan' => 'Slogan',
    ];

    public static function getHeaders(): array
    {
        return self::$headers;
    }
}
