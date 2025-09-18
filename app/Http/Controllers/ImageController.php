<?php
namespace App\Http\Controllers;use App\Models\ImageCropResize;
class ImageController extends Controller {
    public function getResize() {
        @ImageCropResize::start();
    }
}
