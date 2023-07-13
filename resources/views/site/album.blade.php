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
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery pt-3">
      <div class="container">
        <h3 class="section_title">Gallery</h3>
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/site/images/Gallery/image-1.jpg')}}" class="gallery-lightbox">
              <img style="min-width:14rem;max-width:14rem;min-height: 9rem;" src="{{asset('assets/site/images/Gallery/image-1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('assets/site/images/Gallery/image-2.jpg')}}" class="gallery-lightbox">
              <img style="min-width:14rem;max-width:14rem;min-height: 9rem;" src="{{asset('assets/site/images/Gallery/image-2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('assets/site/images/Gallery/image-3.jpg')}}" class="gallery-lightbox">
              <img  style="min-width:14rem;max-width:14rem;min-height: 9rem;" src="{{asset('assets/site/images/Gallery/image-3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
            <a href="{{asset('assets/site/images/Gallery/image-4.jpg')}}" class="gallery-lightbox">
              <img  style="min-width:14rem;max-width:14rem;min-height: 9rem;" src="{{asset('assets/site/images/Gallery/image-4.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

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