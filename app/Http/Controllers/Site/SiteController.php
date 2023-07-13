<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\DM_BaseController;
use App\Models\Eloquent\DM_Post;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Clients;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class SiteController extends DM_BaseController
{
    protected $panel;
    protected $base_route = 'site';
    protected $view_path = 'site';
    protected $model;
    protected $table;
    protected $contact_email;

    public function __construct(Request $request, DM_Post $dm_post, Setting $setting)
    {
        $this->dm_post = $dm_post;
    }

    //Home Page 
    public function index()
    {
      
        return view(parent::loadView($this->view_path . '.index'));
    }

    //Show Post
    public function showPost($post_unique_id)
    {
        $data['row'] = $this->dm_post::getSinglePost($post_unique_id);
        $data['file'] = $this->dm_post::getFile($post_unique_id);
        $data['blog_recent'] = Blog::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->take(3)->get();
        return view(parent::loadView($this->view_path . '.single'), compact('data'));
    }

    //Show Blog
    public function showBlog($post_unique_id)
    {
        $data['row'] = $this->dm_post::getSingleBLog($post_unique_id);
        $data['file'] = $this->dm_post::getFile($post_unique_id);
        $data['blog_recent'] = Blog::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->take(3)->get();
        return view(parent::loadView($this->view_path . '.single-blog'), compact('data'));
    }
    //Contact Us 
    public function contact()
    {
        return view(parent::loadView($this->view_path . '.contact'));
    }

    //product
    public function product()
    {
        $data['product'] = Product::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->get();
        return view(parent::loadView($this->view_path . '.product'), compact('data'));
    }

    //blog
    public function blog()
    {
        $data['blog'] = Blog::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->get();
        return view(parent::loadView($this->view_path . '.blog'), compact('data'));
    }
     //services
     public function services()
     {
         //$data['blog'] = Blog::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->get();
         return view(parent::loadView($this->view_path . '.services'));
     }
     //company
     public function company()
     {
         //$data['blog'] = Blog::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->get();
         return view(parent::loadView($this->view_path . '.company'));
     }
    //album
    public function album()
    {
        return view(parent::loadView($this->view_path . '.album'));
    }

    //client
    public function client()
    {
        $data['client'] = Clients::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->get();
        return view(parent::loadView($this->view_path . '.client'), compact('data'));
    }
     //event
     public function event()
     {
        // $data['client'] = Clients::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->get();
         return view(parent::loadView($this->view_path . '.event'));
     }
      //search
      public function search()
      {
         // $data['client'] = Clients::where('status', '=', 1)->where('deleted_at', '=', null)->orderBy('id', 'desc')->get();
          return view(parent::loadView($this->view_path . '.search'));
      }
    //internship
    public function internship()
    {
        return view(parent::loadView($this->view_path . '.internship'));
    }
    //career
    public function career()
    {
        $data['career'] = Career::where('status', '=', 1)->orderBy('id', 'desc')->get();
        $data['career_count'] = count($data['career']);
        return view(parent::loadView($this->view_path . '.career'), compact('data'));
    }
}
