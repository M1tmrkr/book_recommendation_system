@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
<style type="text/css">
    div#toc_container ul li {
        font-size: 100%
    }
</style>

@endsection
@section('content')
<!-- latest blog -->
<br>
<div class="all_posts ">
    <div class="container">
        <div class="allposts_header">
            <h3 class="section_title">Our Clients</h3>
            <div class="alllink">
            </div>
        </div>
        @if(isset($data['client']))

        <!-- Clients -->
        <div class="container wow animate__fadeInBottomLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row" id="themelist">
                @foreach($data['client'] as $row)

                <div class="col-md-4">
                    <div class="theme-box">
                        <a href="{{$row->url}}" target="_blank" rel="bookmark">
                            <img src="{{ $row->image }}" alt="Softech Store" class="img-responsive">
                        </a>
                        <div class="theme-info">
                            <div class="clearfix">
                                <h2> <a href="{{$row->url}}" target="_blank" rel="bookmark">{{ $row->name }}</a></h2>

                            </div>
                            <p> {{ strlen($row->description) > 50 ? substr($row->description,0,50).'..' : $row->description }}
                            <div class="buttons">
                                <a href="{{$row->url}}" rel="nofollow" target="_blank"><i class="fa fa-eye"></i> &nbsp;Preview</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
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