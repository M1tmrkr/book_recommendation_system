@extends('layouts.admin')
@section('title')
Admin {{ $_panel }} Add | SCMS
@endsection
@section('style')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('assets/cms/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
@section('content')
@include('admin.section.flash_message_error')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit {{ $_panel }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route($_base_route.'.update', $data['rows']->id )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Book Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="@if(isset($data['rows']->title)) {{ $data['rows']->title   }} @endif" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" class="form form-control " id="summernote" cols="10" rows="6" placeholder="Enter Description">@if(isset($data['rows']->description)) {{ $data['rows']->description   }} @endif</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Published Date</label>
                                <input type="date" class="form-control" id="published_date" value="@if(isset($data['rows']->published_date)) {{$data['rows']->published_date}} @endif" name="published_date" placeholder="Enter Published Date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Publisher</label>
                                <input type="text" class="form-control" id="title" value="@if(isset($data['rows']->publisher)) {{ $data['rows']->publisher   }} @endif" name="publisher" placeholder="Enter Publisher">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <input type="text" class="form-control" id="title" value="@if(isset($data['rows']->author)) {{ $data['rows']->author   }} @endif" name="author" placeholder="Enter Author">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Book Types</label>
                                @if($data['category'])
                                <select name="category_id" id="" class="form form-control">
                                    <option value="">Select Book Types</option>
                                    @foreach($data['category'] as $row)
                                    <option value="{{ $row->id}}" @if($data['rows']->category_id == $row->id) selected @endif >{{ $row->title }}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Book</label>
                                <input type="file" class="form-control" id="title" name="file" placeholder="Enter file" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf"><br>
                                @if($data['rows']->file)
                                <iframe src="{{ asset($data['rows']->file)}}" style="width:400px; height:400px;" frameborder="0"></iframe>
                                @else
                                file Not found !
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <div class="form-group">
                                    <label class="ui-checkbox">
                                        <input type="hidden" name="status" value=0><span class="input-span"></span>
                                        <input type="checkbox" name="status" value=1 @if($data['rows']->status){{ "checked" }} @endif ><span class="input-span"></span>
                                    </label>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route($_base_route.'.index')}}" class="btn btn-warning "><i class="fa fa-undo"></i> Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection
@section('scripts')
<!-- Summernote -->
<script src="{{ asset('assets/cms/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Book Description',
        tabsize: 2,
        height: 200
    });
</script>
@endsection