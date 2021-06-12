<?php

namespace App\Observers;

use App\Models\ExtraService;
use App\Traits\DeleteRelationalImagesTrait;

class ExtraServiceObserver
{
    use DeleteRelationalImagesTrait;

    /**
     * @param ExtraService $extraService
     */
    public function deleting(ExtraService $extraService)
    {
        $this->deleteImages($extraService);
    }
}
