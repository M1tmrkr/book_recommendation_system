<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends DM_BaseController
{
    protected $panel = 'Setting';
    protected $base_route = 'admin.setting';
    protected $view_path = 'admin.setting';
    protected $setting;
    protected $table;
    protected $folder = 'setting';
    protected $image_prefix_path = 'upload_file/setting/';


    public function __construct(Setting $setting)
    {
        $this->folder_path = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;   
        $this->setting = $setting;
    }
    public function index()
    {
        $data['setting'] = DB::table('settings')->first();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }

    public function update(Request $request , $id)
    {
        $model = $this->setting->findOrFail($id);
        $model->site_name = $request->site_name;
        $model->site_email = $request->site_email;
        $model->site_phone = $request->site_phone;
        $model->site_mobile = $request->site_mobile;
        $model->site_first_address = $request->site_first_address;
        $model->site_second_address = $request->site_second_address;
        $model->site_url = $request->site_url;
        $model->site_description = $request->site_description;
        $model->map = $request->map;
        //$model->logo = $request->logo;
        // dd($request->logo);
        if($request->hasFile('logo')){
            $model->logo = parent::uploadFile($this->folder_path, $this->image_prefix_path, 'logo', $request->logo, $request); 
        }
       
        $check = $model->save(); 
        if ($check) {
            session()->flash('alert-success', ' Setting Information Updated ');
            return redirect()->route($this->view_path . '.index');
        } else {
            session()->flash('alert-danger', 'Setting Information can not be updated');
            return redirect()->route($this->view_path . '.index');
        }        
    }

    public function getSocialProfiles(){
        $this->panel = 'Social Profile';
        $row = DB::table('settings')->select('id', 'social_profile_fb', 'social_profile_twitter', 'social_profile_insta', 'social_profile_linkedin', 'social_profile_youtube')->first();
        if(!isset($row) || !is_object($row) ) {
            $data = $this->model;
            $data->social_profile_fb = null;
            $data->save();
        }
        return view(parent::loadView($this->view_path.'.social.index'), compact('row'));
    }

    public function updateSocialProfiles(Request $request, $id){
       // dd($request->all());
        // $request->validate([
        //     'facebook' => 'url',
        //     'twitter' => 'url',
        //     'insta' => 'url',
        //     'youtube' => 'url',
        //     'linkedin' => 'url',
        // ]);
        $row = $this->setting->findOrFail($id);
        //  dd($row);
        $row->social_profile_fb = $request->facebook;
        $row->social_profile_twitter = $request->twitter;
        $row->social_profile_insta = $request->insta;
        $row->social_profile_youtube = $request->youtube;
        $row->social_profile_linkedin = $request->linkedin;
        $row->update();
        session()->flash('alert-success', $this->panel.' Successfully added');
        return back();
    }
}
