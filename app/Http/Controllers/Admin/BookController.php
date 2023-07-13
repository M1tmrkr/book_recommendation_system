<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends DM_BaseController
{
    protected $panel = 'Book';
    protected $base_route = 'admin.book';
    protected $view_path = 'admin.book';
    protected $model;

    protected $table = 'books';

    protected $folder_path_image;
    protected $folder_path_file;
    protected $folder = 'book';
    protected $prefix_path_image = '/upload_file/book/';

    public function __construct(Book $model)
    {
        $this->model = $model;
        $this->folder_path_image = getcwd() . DIRECTORY_SEPARATOR . 'upload_file' . DIRECTORY_SEPARATOR . $this->folder . DIRECTORY_SEPARATOR;
    }
    public function index()
    {
        $data['rows'] =  $this->model->getData();
        return view(parent::loadView($this->view_path . '.index'), compact('data'));
    }
    public function create()
    {
        $data['category'] = Category::where('status',1)->get();
        return view(parent::loadView($this->view_path . '.create'),compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $model                        = $this->model;
        $model->title                 = $request->title;
        $model->description           = $request->description;
        $model->published_date        = $request->published_date;
        $model->publisher             = $request->publisher;
        $model->author                = $request->author;
        $model->category_id           = $request->category_id;
        $model->status                = $request->status;
        if ($request->hasFile('file')) {
            $model->file = parent::uploadFile($request, $this->folder_path_image, $this->prefix_path_image, 'file', '', '');
        }
        $success                      = $model->save();
        if ($success) {
            session()->flash('alert-success', $this->panel . '  Successfully Added !');
        } else {
            session()->flash('alert-danger', $this->panel . '  can not be Added');
        }
        return redirect()->route($this->base_route . '.index');
    }

    public function edit($id)
    {
        $data['rows'] = $this->model::where('id', '=', $id)->first();
        $data['category'] = Category::where('status',1)->get();
        return view(parent::loadView($this->view_path . '.edit'), compact('data'));
    }

    public function update(Request $request, $id)
    {
        $model                         = $this->model::where('id', '=', $id)->first();
        $model->title                 = $request->title;
        $model->description           = $request->description;
        $model->published_date        = $request->published_date;
        $model->publisher             = $request->publisher;
        $model->author                = $request->author;
        $model->category_id           = $request->category_id;
        $model->status                = $request->status;

        if ($request->hasFile('file')) {
            $file_path = getcwd() . $model->file;
            if (is_file($file_path)) {
                unlink($file_path);
            }
            $model->file = parent::uploadFile($request, $this->folder_path_image, $this->prefix_path_image, 'file', '', '');
        }
        $success                      = $model->save();
        if ($success) {
            session()->flash('alert-success', $this->panel . '  Successfully Updated !');
        } else {
            session()->flash('alert-danger', $this->panel . '  can not be Updated');
        }
        return redirect()->route($this->base_route . '.index');
    }


    public function destroy(Request $request, $id)
    {
        $data = $this->model->findOrFail($id);
        if (!$data) {
            $request->session()->flash('success_message', $this->panel . 'does not exists.');
            return redirect()->route($this->base_route);
        }
        $file_path = getcwd() . $data->file;
        if (is_file($file_path)) {
            unlink($file_path);
        }
        $data->destroy($id);
        return redirect()->route($this->base_route . '.index');
    }
}
