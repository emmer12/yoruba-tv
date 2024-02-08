<?php

namespace App\Http\Controllers;

use BinshopsBlog\Traits\UploadFileTrait;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use UploadFileTrait;
    public function create(Request $request)
    {
        $this->increaseMemoryLimit();
        $photo = $request->file('upload');

        // to save in db later
        $uploaded_image_details = [];

        $sizes_to_upload = $request->get("sizes_to_upload");

        // now upload a full size - this is a special case, not in the config file. We only store full size images in this class, not as part of the featured blog image uploads.
        if (isset($sizes_to_upload['binshopsblog_full_size']) && $sizes_to_upload['binshopsblog_full_size'] === 'true') {

            $uploaded_image_details['binshopsblog_full_size'] = $this->UploadAndResize(null, $request->get("image_title"), 'fullsize', $photo);
        }

        foreach ((array)config('binshopsblog.image_sizes') as $size => $image_size_details) {

            if (!isset($sizes_to_upload[$size]) || !$sizes_to_upload[$size] || !$image_size_details['enabled']) {
                continue;
            }

            // this image size is enabled, and
            // we have an uploaded image that we can use
            $uploaded_image_details[$size] = $this->UploadAndResize(null, $request->get("image_title"), $image_size_details, $photo);
        }

        dd($uploaded_image_details);
    }
}
