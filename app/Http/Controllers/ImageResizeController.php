<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
class ImageResizeController extends Controller
{
    public function resizeimage(){
        return view("resize-image");
    }

    public function uploadimage(Request $request){

        $image = $request->file;
        $fileName = time().".".$request->file->extension();
        $resize_image = Image::make($image->getRealPAth());
        $resize_image->resize(100, 100);
        $resize_image->save(public_path('assets/images/'.$fileName));

        return "<p>File Resized Successfully</p>
        <a href='/'>Go back</a>";




    }
}
