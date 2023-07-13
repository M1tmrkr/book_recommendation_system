@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/css/gallery.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/glightbox/css/glightbox.min.css')}}">
<style type="text/css">
    div#toc_container ul li {
        font-size: 100%
    }
</style>

@endsection
@section('content')

<div class="all_posts">
    <div class="container">
        <div class="allposts_header pt-3">
            <h3 class="section_title">Related Search Result 2</h3>
        </div>
        <div>
        <i class="fa fa-calendar" aria-hidden="true"> Softech foundation</i>
            <p>June 26,2022</p>
            <hr>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="{{ asset('assets/site/plugin/wow-master/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/site/plugin/animate/main.mjs')}}"></script>

<script src="{{ asset('assets/site/plugin/glightbox/js/glightbox.min.js')}}"></script>

<script>
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();

    /**
     * Initiate gallery lightbox 
     */
    (function() {

        const galleryLightbox = GLightbox({
            selector: '.gallery-lightbox'
        });



    })()
</script>
@endsection