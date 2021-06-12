<?php

namespace Database\Seeders;

use App\Models\ExtraServiceType;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Berlin', 'Munich'];
        foreach ($names as $name){
            $this->seedRegion($name);
        }
    }


    /**
     * @param $name
     */
    public function seedRegion($name)
    {
        $imageFileName = time() . rand(1000000, 9999999) . '.jpg';
        $storage = Storage::disk(config('filesystems.default'));
        $path = 'regions';
        $storage->put('/'. $path . '/' . $imageFileName, file_get_contents(public_path('img/seed/' . strtolower($name) . '.png')), 'public');

        $img = Image::make(public_path('img/seed/' . strtolower($name) . '.png'))->resize('352', null, function ($constraint) {
            $constraint->aspectRatio();
        })->response();
        $storage->put('/thumb/' . $path . '/' . $imageFileName, $img->getContent(), 'public');

        $image_name =  $path . '/' . $imageFileName;
        Region::updateOrCreate(['name' => $name], ['image' => $image_name]);
    }
}
