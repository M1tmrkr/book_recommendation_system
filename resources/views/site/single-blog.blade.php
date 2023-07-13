@extends('site.layouts.app')
@section('tags')
{{ $data['row']->tags }}
@endsection
@section('seo')
{{ $data['row']->meta_keyword }}
@endsection
@section('title')
Softech Foundation | {{ $data['row']->title }}
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/css/product_details.css')}}" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
<style type="text/css">
    div#toc_container ul li {
        font-size: 100%
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-9">
        <div style="width:auto;justify-content: space-around;" class=" d-flex">
            <h2>
                {{ $data['row']->title }}
            </h2>
        </div>
        <section class="u-align-center u-clearfix u-section-1" id="carousel_714a">
            <i class="fa-solid fa-bars"></i>Category: @if(isset($data['row']->postCategory)) {{ $data['row']->postCategory->title }} @endif &nbsp;&nbsp; <i class="fa-solid fa-clock"></i>
            Published: {{ date('F d, Y', strtotime($data['row']->created_at)) }} &nbsp;&nbsp;<i class="fa fa-eye pr-2"></i> Views: {{ $data['row']->visit_no }}
            <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
                <div class="u-expanded-width u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
                <div class="u-align-center-xs u-container-style u-product u-product-1">
                    <div class=" container u-container-layout u-valign-top u-container-layout-1">
                        <!-- ShareThis BEGIN -->

                        <div class="sharethis-inline-share-buttons">
                        </div>
                        <!-- ShareThis END --> <br>
                        <!--product_image-->
                        <img src="{{$data['row']->thumbs}}" alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-1">
                        <!--/product_image-->
                        <div style="text-align: justify;">
                            <p >{!! $data['row']->description !!}</p>
                        </div>
                        @if(count($data['file']) != 0)

                        <table width="100%" border="0" class="table table-bordered table-striped">
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Download Count</th>
                                    <th scope="col">View &amp; Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['file'] as $row)
                                <tr>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->download_count }}</td>
                                    <td>
                                        <a href="{{ asset( $row->file) }}" class="btn btn-sm btn-danger" target="_blank"><i class="fa fa-eye">&nbsp;</i> View</a>&nbsp;
                                        <a href="" class="btn btn-sm btn-success"><i class="fa fa-download">&nbsp;</i> Download</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif

                    </div>
                </div>
        </section>
    </div>
    <div class="col-md-3">
        <div class="all_posts">
            <div class="container">
                <div class="allposts_header">
                    <h3 class="section_title pt-5">Recent Blog</h3>

                </div>
                @if(isset($data['blog_recent']))
                @foreach($data['blog_recent'] as $row)
                <div class="card card-fixer1" style="width: 18rem;">
                    <img src="{{$row->thumbs}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">{{ $row->title }}</p>
                        <a href="" class="btn btn-primary" style="color: #fff;">Read More..</a>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>

    </div>


</div>
@endsection
@section('js')
<script src="{{ asset('assets/site/plugin/wow-master/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/site/plugin/animate/main.mjs')}}"></script>

<script>
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();
</script>
@endsection