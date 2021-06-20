<?php


namespace App\ExcelDefinitions\Definitions;


use App\ExcelDefinitions\BaseExcelDefinitions;

class Hotel extends BaseExcelDefinitions
{
    public static $headers = [
        'id' => 'Hotel ID',
        'name' => 'Hotel Name',
        'destination_id' => 'Destination',
        'longitude' => 'longitude',
        'latitude' => 'latitude',
        'stars' => 'Stars',
        'details' => 'Description',
        'payment_conditions' => 'Payment Conditions',
        'refund_conditions' => 'Cancellation Condition',
        'short_description' => '3 Words Description',
        'month' => 'Season',
        'weekday' => 'Weekdays'
    ];

    public static function getHeaders(): array
    {
        return self::$headers;
    }
}
