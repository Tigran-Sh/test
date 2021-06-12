<?php


namespace App\Traits;


trait DeleteRelationalImagesTrait
{
    /**
     * Delete one to many relations images method
     *
     * @param $model
     */
    public function deleteImages($model)
    {
        $images = $model->images()->get();
        foreach ($images as $image) {
            unlink(public_path('storage/'.$image->url));
        }
        $model->images()->delete();
    }
}
