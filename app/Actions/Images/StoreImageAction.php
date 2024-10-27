<?php

namespace App\Actions\Images;

use Illuminate\Http\UploadedFile;

class StoreImageAction
{
    public function execute(UploadedFile $image, $storingPath): bool|string
    {
        $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();

        $uniqueFileName = $fileName . '_' . now()->timestamp . '.' . $extension;

        return $image->storeAs($storingPath, $uniqueFileName, 'public');
    }

}