@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/css/contactus.css')}}">

<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">

@endsection
@section('content')
<!-- Swiper -->
<!-- contact us -->
<br>
<div class="container-contact all_posts all_posts wow fadeInUp">
    <div class="content container">
        <div class="left-side">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">{{ $all_view['setting']->site_first_address }}</div>
                <div class="text-two">{{ $all_view['setting']->site_second_address }}</div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">{{ $all_view['setting']->site_phone }}</div>
                <div class="text-two">{{ $all_view['setting']->site_mobile }}</div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">{{ $all_view['setting']->site_email }}</div>
                <div class="text-two">{{ $all_view['setting']->site_url }}</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
            <form action="#">
                <div class="input-box">
                    <input type="text" placeholder="Enter your name">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="input-box message-box">
                    <input type="text" placeholder="Enter your message">
                </div>
                <div class="button">
                    <input type="button" value="Send Now">
                </div>
            </form>
        </div>
    </div>
</div>

<br>

<!-- map -->

<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.7102319956216!2d85.33431801415963!3d27.695349482796892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a77520a339%3A0x4df14616bdef4f1c!2sSoftech%20Foundation%20Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1669982178035!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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