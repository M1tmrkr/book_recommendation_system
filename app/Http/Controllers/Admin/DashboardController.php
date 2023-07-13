<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountGeneralInformation;
use App\Models\AccountOpening;
use App\Models\ApplicationGeneralInformation;
use App\Models\Blog;
use App\Models\Clients;
use App\Models\Internship;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends DM_BaseController
{
    protected $panel = 'Dashboard';
    protected $base_route ='';
    protected $view_path = 'admin.';

    public function __construct(User $user){
        $this->user = $user;
       
    }
    public function index()
    {
        $data['count_user'] = $this->user::count();
      
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }
}
