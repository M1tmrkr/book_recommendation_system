<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class DM_BaseModel extends Model
{
    /**
     * upload image 
     * 
     * call from child model
     */
    protected function uploadImage(Request $request, $folder_path_image, $prefix_path_image, $title, $image_width = '', $image_height = '')
    {
        if ($request->hasFile($title)) {
            $this->createFolder($folder_path_image);
            $file = $request->file($title);
            $file_name = time() . '_' . rand() . '_' . $file->getClientOriginalName();
           // dd($file_name);
            //    $file_extension = $file->getClientOriginalExtension();
            if (isset($image_height) && isset($image_width)) {
                $file_resize = Image::make($file->getRealPath());
                $file_resize->resize($image_width, $image_height);
                $file_resize->save($folder_path_image . $file_name);
            } else {
                $file->move($folder_path_image, $file_name);
            }
            $file_path = $prefix_path_image . $file_name;
            return $file_path;
        }
        return false;
    }

    /**
     * upload multiple file 
     * 
     * call from child model
     */
    protected function uploadMultipleFiles(Request $request, $folder_path_file, $prefix_path_file, $name)
    {
        if ($request->hasFile($name)) {
            $this->createFolder($folder_path_file);
            $files = $request->file($name);
            foreach ($files as $file) {
                $file_name = time() . '_' . rand() . '_' . $file->getClientOriginalName();
                //    $file_extension = $file->getClientOriginalExtension();
                $file->move($folder_path_file, $file_name);
                $files_path[] = $prefix_path_file . $file_name;
            }
            return $files_path;
        }
        return false;
    }


    /**
     * if folder does not exist then create new and give permission
     *  */
    protected function createFolder($path)
    {
        if (!file_exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
    }

    // /**
    //  * get language id
    //  */
    // protected function getLangId($lang_code) {
    //     $lang_id = Language::where('code', '=', $lang_code)->pluck('id')->all();
    //     return $lang_id;
    // }

}
