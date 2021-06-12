<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 25.07.2019
 * Time: 14:59
 */

namespace App\Services;

use App\Traits\DeleteRelationalImagesTrait;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileService
{
    use DeleteRelationalImagesTrait;
    /**
     * Save image
     * @param $file
     * @param $object
     * @param $path
     * @param $field
     */
    public function saveImage($file, $object, $path, $field = 'image')
    {
        $imageFileName = time() . rand(1000000, 9999999) . '.' . $file->getClientOriginalExtension();
        $storage = Storage::disk(config('filesystems.default'));
        $storage->put('/'. $path . '/' . $imageFileName, file_get_contents($file), 'public');

        $img = Image::make($file)->resize('352', null, function ($constraint) {
            $constraint->aspectRatio();
        })->response();
        $storage->put('/thumb/' . $path . '/' . $imageFileName, $img->getContent(), 'public');

        $object->$field = $path . '/' . $imageFileName;
        $object->save();
    }


    /**
     * Save image
     * @param $file
     * @param $object
     * @param $field
     */
    public function saveFile($file, $object, $field = 'file')
    {
        $fileName = time() . rand(1000000, 9999999) . '.' . $file->getClientOriginalExtension();
        $storage = Storage::disk(config('filesystems.default'));
        $storage->put('/files/' . $fileName, file_get_contents($file), 'public');
        $object->$field = $fileName;
        $object->save();
    }

    /**
     * @param $images
     * @param $path
     * @param $object
     * @param false $updateAction
     */
    public function saveMultipleImages($images, $path, $object, bool $updateAction = false)
    {
        $allImagesPaths = [];
        foreach ($images as $image) {
            $filename = $path.'/'.time() . rand(1000000, 9999999) . '.' . $image->getClientOriginalExtension();
            $storage = Storage::disk(config('filesystems.default'));
            $storage->put('/'. $filename, file_get_contents($image), 'public');

            $allImagesPaths[]['url'] = $filename;
        }
        if ($updateAction) {
            $this->deleteImages($object);
            $object->images()->delete();
        }
        $object->images()->createMany($allImagesPaths);
    }
}
