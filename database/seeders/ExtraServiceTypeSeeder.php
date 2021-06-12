<?php

namespace Database\Seeders;

use App\Models\ExtraServiceType;
use App\Models\ExtraServiceTypeData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ExtraServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Activities', 'Culinary', 'Sport'];
        foreach ($names as $name){
            $this->seedType($name);
        }
    }


    /**
     * @param $name
     */
    public function seedType($name)
    {
        $imageFileName = time() . rand(1000000, 9999999) . '.jpg';
        $storage = Storage::disk(config('filesystems.default'));
        $path = 'extra_service_types';
        $storage->put('/'. $path . '/' . $imageFileName, file_get_contents(public_path('img/seed/' . strtolower($name) . '.png')), 'public');

        $img = Image::make(public_path('img/seed/' . strtolower($name) . '.png'))->resize('352', null, function ($constraint) {
            $constraint->aspectRatio();
        })->response();
        $storage->put('/thumb/' . $path . '/' . $imageFileName, $img->getContent(), 'public');

        $image_name =  $path . '/' . $imageFileName;
        $type = ExtraServiceType::updateOrCreate(['name' => $name], ['image' => $image_name]);
        $langs = LaravelLocalization::getSupportedLocales();
        foreach ($langs as $localeCode => $properties) {
            ExtraServiceTypeData::updateOrCreate(['extra_service_type_id' =>  $type->id, 'lang' => $localeCode], [ 'name' => $name]);
        }

    }
}
