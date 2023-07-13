<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\File;


class DM_BaseController extends Controller
{
    protected $lang;
    public function __construct() {
        
    }
    /**
     * loads the default view for every model
     * 
     * call from child controller
     * 
     * 
     */
    protected function loadView($view_path)
    {
        // Using Closure based composers...
        View::composer($view_path, function ($view) {
            $view->with('flash_message_path', 'admin.common.flash_messages');
            $view->with('_base_route', $this->base_route);
            $view->with('_view_path', $this->view_path);
            $view->with('_panel', $this->panel);
            $view->with('folder', property_exists($this, 'folder') ? $this->folder : '');
        });
        return $view_path;
    }
    /**
     * to get the id of language
     * 
     * call from child controller
     * 
     */

    protected function getLangId($lang_code) {
        $lang_id = Language::where('code', '=', $lang_code)->pluck('id')->all();
        return $lang_id;
    }

    /**
     * To upload single file 
     * 
     * call from child controller
     * 
     */
    protected function uploadFile(Request $request,$folder_path, $image_prefix_path, $name, $logo) {
        if($request->hasFile($name)){ 
            $this->createFolder($folder_path); 
               $file = $request->file($name);
               $file_name = time().'_'.rand().'_'.$file->getClientOriginalName();
            //    $file_extension = $file->getClientOriginalExtension();
               $file->move($folder_path, $file_name);
               $file_path = $image_prefix_path.$file_name;
               return $file_path;
           }
        return false;
    }

    public function deleteFile($folder_path, $row,$name){
        if(is_file($folder_path.$row->$name)){ 
            unlink($folder_path.$row->$name);
         } 
    }
    /**
     * Method to upload Images 
     * 
     * call from child controller
     * 
     */
    protected function uploadImage(Request $request, $folder_path_image, $prefix_path_image, $name, $image_width = '', $image_height = '') {
        if($request->hasFile($name)){  
            $this->createFolder($folder_path_image);     
                $file = $request->file($name);
                $file_name = time().'_'.rand().'_'.$file->getClientOriginalName();
            //    $file_extension = $file->getClientOriginalExtension();
                if(isset($image_height) && isset($image_width)){
                    $file_resize = Image::make($file->getRealPath());
                    $file_resize->resize($image_width, $image_height);
                    $file_resize->save($folder_path_image.$file_name);
                }
                else{
                    $file->move($folder_path_image, $file_name);
                }
                $file_path = $prefix_path_image.$file_name;
               return $file_path;
           }
        return false;
    }
    /**
     * upload Multiple Files 
     * call from child controller
     */
    protected function uploadMultipleFiles(Request $request, $folder_path_file, $prefix_path_file, $name) {
        if($request->hasFile($name)){  
            $this->createFolder($folder_path_file);     
                $files = $request->file($name);
                foreach($files as $file){
                    $file_name = time().'_'.rand().'_'.$file->getClientOriginalName();
                //    $file_extension = $file->getClientOriginalExtension();
                    $file->move($folder_path_file, $file_name);
                    $files_path[] = $prefix_path_file.$file_name;
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

    /** Parse the json data for the menu 
     * Used for nestable 
    */
    protected function parseJsonArray($jsonArray, $parentID = Null) {
        $return = array();
        foreach ($jsonArray as $subArray) {
            $returnSubSubArray = array();
            if (isset($subArray->children)) {
                $returnSubSubArray = $this->parseJsonArray($subArray->children, $subArray->id );
            }
            $return[] = array('id' => $subArray->id, 'parentID' => $parentID);
            $return = array_merge($return, $returnSubSubArray);
        }
        return $return;
    }

    protected function uniqueParseJsonArray($jsonArray, $parentID = Null) {
        $return = array();
        foreach($jsonArray as $subArray) {
            $returnSubSubArray = array();
            if (isset($subArray->children)) {
                $returnSubSubArray = $this->parseJsonArray($subArray->children, $subArray->id );
            }
           $return[] = array('id' => $subArray->id, 'unique' => $subArray->unique, 'parentID' => $parentID);
           $return = array_merge($return, $returnSubSubArray);
        }
        return $return;
    }
}