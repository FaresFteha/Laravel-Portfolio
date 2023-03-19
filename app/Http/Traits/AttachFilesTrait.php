<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;


trait AttachFilesTrait
{
    public function uploadFile($request, $name, $folder)
    {
        $file_name = $request->file($name)->getClientOriginalName();
        $request->file($name)->storeAs('Attachments/', $folder . '/' . $file_name, 'upload_attachments');
    }


    public function deleteFile($name)
    {
        $exists = Storage::disk('CV')->exists('Attachments/CV/' . $name);

        if ($exists) {
            Storage::disk('CV')->delete('Attachments/CV/' . $name);
        }
    }

    public function deleteFilephoto($name)
    {
        $exists = Storage::disk('About')->exists('Attachments/About_Photo/' . $name);

        if ($exists) {
            Storage::disk('About')->delete('Attachments/About_Photo/' . $name);
        }
    }

    public function deletePortfoliophoto($name)
    {
        $exists = Storage::disk('Portfolio')->exists('Attachments/Portfolio_Photo/' . $name);

        if ($exists) {
            Storage::disk('Portfolio')->delete('Attachments/Portfolio_Photo/' . $name);
        }
    }


    public function deleteWorkphoto($name)
    {
        $exists = Storage::disk('Work')->exists('Attachments/Work/' . $name);

        if ($exists) {
            Storage::disk('Work')->delete('Attachments/Work/' . $name);
        }
    }

    public function deleteTestimonialphoto($name)
    {
        $exists = Storage::disk('Testimonial')->exists('Attachments/Testimonial_Photo/' . $name);

        if ($exists) {
            Storage::disk('Testimonial')->delete('Attachments/Testimonial_Photo/' . $name);
        }
    }

    public function deleteBlogphoto($name)
    {
        $exists = Storage::disk('Blog')->exists('Attachments/Testimonial_Photo/' . $name);

        if ($exists) {
            Storage::disk('Blog')->delete('Attachments/Testimonial_Photo/' . $name);
        }
    }
}
