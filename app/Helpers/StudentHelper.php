<?php
namespace App\Helpers;

use Illuminate\Http\UploadedFile;

class StudentHelper
{
    public static function uploadImage(UploadedFile $image)
    {
        $upDir = public_path('/assets/img/student/');
        if(!is_dir($upDir)) mkdir($upDir);

        $name = 'student' . time() . rand(1, 20) . '.' . $image->getClientOriginalExtension();
        $image->move($upDir, $name);

        return $name;
    }
}
