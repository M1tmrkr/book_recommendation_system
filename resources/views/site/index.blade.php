@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
<style>




</style>
@endsection
@section('content')
<!-- Swiper -->

<div class="slider-area ">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="slider-carousel owl-carousel owl-theme">
                    <div class="single-slider slider-bg-1 text-center">
                        <div class="slider-inner">
                            <!-- <h1 class="text-uppercase">WELCOME TO SOFTECH</h1>
                            <h5>IT in an innovative, quick and effective way</h5> -->
                            <!-- <a class="btn10 get-started-btn" href="#MainSlider">Get Started</a> -->
                        </div>
                    </div>
                    <!-- <div class="single-slider slider-bg-2 text-center">
                            <div class="slider-inner">
                                <h1>Free MULTIPURPSE TEMPLATE</h1>
								<h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis n</h5>
                                <a class="btn10 get-started-btn" href="#">Get Started</a>
                            </div>
                        </div> -->
                    <div class="single-slider slider-bg-3 text-center">
                        <div class="slider-inner">
                            <h1 class="text-uppercase">WE PROMOTE YOUR BUSINESS</h1>
                            <h5>We Digitalize Your Product That Shift Your Business At Top</h5>
                            <a class="btn10 get-started-btn" href="#MainSlider">Get Started</a>
                        </div>
                    </div>
                    <div class="single-slider slider-bg-4 text-center">
                        <div class="slider-inner">
                            <h1 class="text-uppercase">Client-Centric Approach</h1>
                            <h5>We Prioritize Your Satisfaction And Success</h5>
                            <a class="btn10 get-started-btn" href="#MainSlider">Get Started</a>
                        </div>
                    </div>
                    <div class="single-slider slider-bg-5 text-center">
                        <div class="slider-inner">
                            <h1 class="text-uppercase">Quick and Effective Solutions</h1>
                            <h5>We Provide Swift And Efficient Solutions That Address Your Business Needs</h5>
                            <a class="btn10 get-started-btn" href="#MainSlider">Get Started</a>
                        </div>
                    </div>
                    <div class="single-slider slider-bg-6 text-center">
                        <div class="slider-inner">
                            <h1 class="text-uppercase">Expertise in Web Development</h1>
                            <h5>We Create Visually Stunning And User-Friendly Websites</h5>
                            <a class="btn10 get-started-btn" href="#MainSlider">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->
<!--2nd slider-->
<section id="MainSlider">

    <div class="container Cust">

        <div class="CntnSec">
            <div class="SubTxt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">How We Develop</div>
            <div class="MainTxt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                We Digitalize <br>Your Product That Shift Your Business At Top </div>
            <div class="infoTxt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                See How we Develop and<br> Help Your Business to grow. </div>
        </div>
        <div class="SliderWrp">
            <svg id="SliderPathSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1441.7 801.8" preserveAspectRatio="none">
                <clipPath id="SliderClippPath">
                    <path fill="#005DAB" class="st0" d="M20.6,219.8c-25.8,63.2-31,134.7,5.8,194.7c7.6,12.5,16.7,24,26.6,34.8c28.7,31,62.9,54.4,99.8,74
                            c23.3,12.3,47.3,23.2,71.2,34.5c20.1,9.6,40.1,19.2,60.6,27.7c31.9,13.3,63.9,26.5,96.4,38.2c38.7,13.8,77.6,27.1,117.1,38.6
                            c50.2,14.7,100.8,28,151.5,40.7c37.8,9.5,75.9,17.5,114,25.5c78.4,16.4,156.9,32.4,236.4,41.5c252.8,29.2,436.5,31.3,441.6,31.7
                            L1441.4,0H175.6c-27,28.4-52.8,57.9-76.6,89C67.8,129.5,40,172.3,20.6,219.8z" />
                </clipPath>
            </svg>
            <div class="SliderClipp">
                <div id="mainSlide" class="splide" role="group" aria-label="Splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="SliderCntnBox">
                                    <img id="Round" src="assets/images/ball.png" alt="">
                                    <img id="Circle" src="assets/images/Circle.png" alt="">
                                    <div class="FrameWrppr">
                                        <div class="Frame">
                                            <img src="{{asset('assets/site/images/2nd_sliders/slider1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <img id="AppLady" src="{{asset('assets/site/images/2nd_sliders/image1.png')}}" alt="">
                                </div>
                            </li>


                            <li class="splide__slide">
                                <div class="SliderCntnBox">
                                    <img id="Round" src="assets/images/ball.png" alt="">
                                    <img id="Circle" src="assets/images/Circle.png" alt="">
                                    <div class="FrameWrppr">
                                        <div class="Frame">
                                            <img src="{{asset('assets/site/images/2nd_sliders/slider2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <img id="AppLady" src="{{asset('assets/site/images/2nd_sliders/image2.png')}}" alt="">
                                </div>
                            </li>


                            <li class="splide__slide">
                                <div class="SliderCntnBox">
                                    <img id="Round" src="assets/images/ball.png" alt="">
                                    <img id="Circle" src="assets/images/Circle.png" alt="">
                                    <div class="FrameWrppr">
                                        <div class="Frame">
                                            <img src="{{asset('assets/site/images/2nd_sliders/slider3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <img id="AppLady" src="{{asset('assets/site/images/2nd_sliders/image3.png')}}" alt="">
                                </div>
                            </li>


                            <li class="splide__slide">
                                <div class="SliderCntnBox">
                                    <img id="Round" src="assets/images/ball.png" alt="">
                                    <img id="Circle" src="assets/images/Circle.png" alt="">
                                    <div class="FrameWrppr">
                                        <div class="Frame">
                                            <img src="{{asset('assets/site/images/2nd_sliders/slider4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <img id="AppLady" src="{{asset('assets/site/images/2nd_sliders/image4.png')}}" alt="">
                                </div>
                            </li>


                            <li class="splide__slide">
                                <div class="SliderCntnBox">
                                    <img id="Round" src="assets/images/ball.png" alt="">
                                    <img id="Circle" src="assets/images/Circle.png" alt="">
                                    <div class="FrameWrppr">
                                        <div class="Frame">
                                            <img src="{{asset('assets/site/images/2nd_sliders/slider5.png')}}" alt="">
                                        </div>
                                    </div>
                                    <img id="AppLady" src="{{asset('assets/site/images/2nd_sliders/image5.png')}}" alt="">
                                </div>
                            </li>


                            <li class="splide__slide">
                                <div class="SliderCntnBox">
                                    <img id="Round" src="assets/images/ball.png" alt="">
                                    <img id="Circle" src="assets/images/Circle.png" alt="">
                                    <div class="FrameWrppr">
                                        <div class="Frame">
                                            <img src="{{asset('assets/site/images/2nd_sliders/slider6.png')}}" alt="">
                                        </div>
                                    </div>
                                    <img id="AppLady" src="{{asset('assets/site/images/2nd_sliders/image6.png')}}" alt="">
                                </div>
                            </li>




                        </ul>
                    </div>
                </div>
            </div>

            <div id="thumbSlide" class="splide container-fluid" role="group" aria-label="Splide">
                <div class="splide__track">
                    <ul class="splide__list">




                        <li class="splide__slide">
                            <div class="SlideInfoBtn">
                                <div class="Icon">
                                    <div class="IconInner">
                                        <img src="{{ asset('assets/site/images/2nd_sliders/planning.png')}}" alt="">
                                    </div>
                                </div>
                                <svg id="DotLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 36">
                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="miter" fill="rgb(0, 93, 171)" d="M2.999,1.998 L2.999,32.998 " />
                                </svg>
                                <div class="Txt">
                                    Planning </div>
                            </div>
                        </li>



                        <li class="splide__slide">
                            <div class="SlideInfoBtn">
                                <div class="Icon">
                                    <div class="IconInner">
                                        <img src="{{ asset('assets/site/images/2nd_sliders/analysis.png')}}" alt="">
                                    </div>
                                </div>
                                <svg id="DotLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 36">
                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="miter" fill="rgb(0, 93, 171)" d="M2.999,1.998 L2.999,32.998 " />
                                </svg>
                                <div class="Txt">
                                    Analysis </div>
                            </div>
                        </li>



                        <li class="splide__slide">
                            <div class="SlideInfoBtn">
                                <div class="Icon">
                                    <div class="IconInner">
                                        <img src="{{ asset('assets/site/images/2nd_sliders/ldesign.png')}}" alt="">
                                    </div>
                                </div>
                                <svg id="DotLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 36">
                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="miter" fill="rgb(0, 93, 171)" d="M2.999,1.998 L2.999,32.998 " />
                                </svg>
                                <div class="Txt">
                                    Logical Design </div>
                            </div>
                        </li>



                        <li class="splide__slide">
                            <div class="SlideInfoBtn">
                                <div class="Icon">
                                    <div class="IconInner">
                                        <img src="{{ asset('assets/site/images/2nd_sliders/pdesign.png')}}" alt="">
                                    </div>
                                </div>
                                <svg id="DotLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 36">
                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="miter" fill="rgb(0, 93, 171)" d="M2.999,1.998 L2.999,32.998 " />
                                </svg>
                                <div class="Txt">
                                    Physical Design </div>
                            </div>
                        </li>



                        <li class="splide__slide">
                            <div class="SlideInfoBtn">
                                <div class="Icon">
                                    <div class="IconInner">
                                        <img src="{{ asset('assets/site/images/2nd_sliders/implementation.png')}}" alt="">
                                    </div>
                                </div>
                                <svg id="DotLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 36">
                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="miter" fill="rgb(0, 93, 171)" d="M2.999,1.998 L2.999,32.998 " />
                                </svg>
                                <div class="Txt">
                                    Implementation </div>
                            </div>
                        </li>



                        <li class="splide__slide">
                            <div class="SlideInfoBtn">
                                <div class="Icon">
                                    <div class="IconInner">
                                        <img src="{{ asset('assets/site/images/2nd_sliders/maintenance.png')}}" alt="">
                                    </div>
                                </div>
                                <svg id="DotLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5 36">
                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="miter" fill="rgb(0, 93, 171)" d="M2.999,1.998 L2.999,32.998 " />
                                </svg>
                                <div class="Txt">
                                    Maintenance</div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide carousel-fade Mob" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="10000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 ltB">
                            <div class="CarouselCntnt">
                                <div class="MainTitle">
                                    How We Develop ?<span> We Digitalize Your Product <br> That Shift Your Business At Top</span>
                                </div>
                                <div class="smT">
                                    See How we Develop and <br> Help Your Business to grow.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="imgBx">
                                <img src="{{asset('assets/site/images/2nd_sliders/slider1.png')}}" alt="">
                            </div>


                            <div class="Txt">
                                Planning</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item " data-bs-interval="10000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 ltB">
                            <div class="CarouselCntnt">
                                <div class="MainTitle">
                                    How We Develop ?<span> We Digitalize Your Product <br> That Shift Your Business At Top</span>
                                </div>
                                <div class="smT">
                                    Covering complete project lifecycle from<br> Inception to Deployment.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="imgBx">
                                <img src="{{asset('assets/site/images/2nd_sliders/slider2.png')}}" alt="">
                            </div>


                            <div class="Txt">
                                Analysis </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item " data-bs-interval="10000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 ltB">
                            <div class="CarouselCntnt">
                                <div class="MainTitle">
                                    How We Develop ?<span> We Digitalize Your Product <br> That Shift Your Business At Top</span>
                                </div>
                                <div class="smT">
                                    Covering complete project lifecycle from<br> Inception to Deployment.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="imgBx">
                                <img src="{{asset('assets/site/images/2nd_sliders/slider3.png')}}" alt="">
                            </div>


                            <div class="Txt">
                                Logical Design</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item " data-bs-interval="10000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 ltB">
                            <div class="CarouselCntnt">
                                <div class="MainTitle">
                                    How We Develop ?<span> We Digitalize Your Product <br> That Shift Your Business At Top</span>
                                </div>
                                <div class="smT">
                                    Covering complete project lifecycle from<br> Inception to Deployment.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="imgBx">
                                <img src="{{asset('assets/site/images/2nd_sliders/slider4.png')}}" alt="">
                            </div>


                            <div class="Txt">
                                Physical Design </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item " data-bs-interval="10000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 ltB">
                            <div class="CarouselCntnt">
                                <div class="MainTitle">
                                    How We Develop ?<span> We Digitalize Your Product <br> That Shift Your Business At Top</span>
                                </div>
                                <div class="smT">
                                    Covering complete project lifecycle from<br> Inception to Deployment.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="imgBx">
                                <img src="{{asset('assets/site/images/2nd_sliders/slider5.png')}}" alt="">
                            </div>


                            <div class="Txt">
                                Implementation </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item " data-bs-interval="10000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 ltB">
                            <div class="CarouselCntnt">
                                <div class="MainTitle">
                                    How We Develop ?<span> We Digitalize Your Product <br> That Shift Your Business At Top</span>
                                </div>
                                <div class="smT">
                                    Covering complete project lifecycle from<br> Inception to Deployment.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="imgBx">
                                <img src="{{asset('assets/site/images/2nd_sliders/slider6-m.png')}}" alt="">
                            </div>


                            <div class="Txt">
                                Maintenance </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container carousel-indicators">


            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>


            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" class="" aria-current="" aria-label="Slide 2"></button>


            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" class="" aria-current="" aria-label="Slide 3"></button>


            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" class="" aria-current="" aria-label="Slide 4"></button>


            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" class="" aria-current="" aria-label="Slide 5"></button>


            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" class="" aria-current="" aria-label="Slide 6"></button>






        </div>
    </div>
</section>

<section id="abtSec">
    <div class="lftImgBx" data-aos="fade-right">
        <div class="bg1">
            <img src="{{asset('assets/site/images/abt-1.png')}}" alt="">
        </div>

        <svg id="aboutPthSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.7 626.1" xml:space="preserve">
            <clipPath id="AbtCpTh">
                <path fill="#fff" class="st0" d="M0,266.1c0.1,2.9,0.2,5.7,0.3,8.6c0.5,19.5,0.4,38.1-0.3,56v295.4c82.7-20.5,198.9-55.9,283.8-108.2
                        C362.9,469.3,555.3,378,70.8,43.6C46.2,27.7,22.5,13.2,0,0h0V266.1z" />
        </svg>
        <div class="imgLft wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="{{asset('assets/site/images/first1.jpg')}}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="lftBx">
                    <div class="HeadBx">
                        <div class="title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">About Us</div>
                        <div class="txt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">About Us</div>
                        <div class="mainTxt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">In A Innovative,Quick, And Effective Way.<br> <span> Because We Are Digitally Awesome </span></div>
                    </div>
                    <p class=" wow fadeInUp" style="text-align:justify;" data-wow-duration="1s" data-wow-delay="0.5s">Softech Fondation its operations in 2007 with an aim to develop a single-stop solution
                        hub for the entire information technology requirements of modern organizations. With
                        products and services technologically advanced, Softech founadtion is well-known as one of
                        the leading software development companies and solution providers serving clients
                        across the globe.</p>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="ritBx">
                    <div class="bgImg">
                        <img src="{{asset('assets/site/images/white-logo.png')}}" alt="">
                    </div>
                    <div class="txtBx">
                        <div class="expSlide owl-carousel">


                            <div class="item">
                                <div class="txt">Since </div>
                                <div class="year">2007</div>
                            </div>


                            <div class="item">
                                <div class="txt"> Our Verticals </div>
                                <div class="year">Web development</div>
                            </div>


                            <div class="item">
                                <div class="txt"> Our Verticals </div>
                                <div class="year">Digital Marketing</div>
                            </div>


                            <div class="item">
                                <div class="txt"> Our Verticals </div>
                                <div class="year">Data Digitization</div>
                            </div>


                            <div class="item">
                                <div class="txt"> Our Verticals </div>
                                <div class="year">Enterprise Resource Planning </div>
                            </div>


                            <div class="item">
                                <div class="txt">Our Verticals </div>
                                <div class="year">Education Technology (EdTech)</div>
                            </div>


                            <div class="item">
                                <div class="txt">Our Verticals </div>
                                <div class="year">Government and Public Sector</div>
                            </div>


                            <div class="item">
                                <div class="txt">Our Verticals </div>
                                <div class="year">Professional Services</div>
                            </div>


                            <div class="item">
                                <div class="txt">Our Verticals </div>
                                <div class="year">IT Consultancy</div>
                            </div>


                            <div class="item">
                                <div class="txt">Our Verticals </div>
                                <div class="year">E-Commerce</div>
                            </div>


                            <div class="item">
                                <div class="txt">Our Verticals </div>
                                <div class="year">General Trading</div>
                            </div>




                        </div>
                    </div>
                </div>
                <div class="abtImg">
                    <img src="{{asset('assets/images/abt1.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="bgB">
        <img src="{{asset('assets/images/bgB.png')}}" alt="">
    </div>
</section>



<section id="ServiceSec">
    <div class="bg2">
        <img src="assets/images/bg.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="bg1" data-aos="fade-up">
                <img src="images/common-content/second1.png" alt="">
            </div>
            <div class="col-lg-3">
                <div class="lftBx" data-aos="fade-up">
                    <div class="HeadBx" data-aos="fade-up">
                        <div class="title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Our Services</div>
                        <div class="txt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Our Services</div>
                        <div class="mainTxt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            We Deliver Effective & <span>Quality Services</span> </div>
                    </div>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="text-align:justify;">Softech Foundation ensures to adapt an innovative approach towards offering a full range of
                        professional services</p>
                    <div class="imgBx" data-aos="fade-up">
                        <img src="images/common-content/image1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="ritBx">
                    <div class="gridBx">
                        <div class="mobImg">
                            <img src="assets/images/h1.png" alt="">
                        </div>

                        <a href="https://new.softechfoundation.com/services/#Software-development" class="cmnGrd wow fadeInLeft " data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">

                                <img src="{{asset('assets/site/images/services-icon/icon1.svg')}}" alt="">
                            </div>
                            <div class="title">Software development</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>
                            </div>
                        </a>



                        <a href="https://new.softechfoundation.com/services/#Web-development" class="cmnGrd wow fadeInLeft " data-wow-duration="1s" data-wow-delay="1s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">

                                <img src="{{asset('assets/site/images/services-icon/world-wide-web.png')}}" alt="">

                            </div>
                            <div class="title">Web development</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>
                            </div>
                        </a>



                        <a href="https://new.softechfoundation.com/services/#Mobile-Application-development" class="cmnGrd wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">


                                <img src="{{asset('assets/site/images/services-icon/app-development.png')}}" alt="">

                            </div>
                            <div class="title">Mobile Application development</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>




                            </div>
                        </a>



                    </div>
                </div>
            </div>
            <div class="col-lg-12 pt-2">
                <div class="ritBx">
                    <div class="gridBx2">

                        <a href="https://new.softechfoundation.com/services/#Data-Digitization" class="cmnGrd wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">


                                <img src="{{asset('assets/site/images/services-icon/data-processing.png')}}" alt="">

                            </div>
                            <div class="title">Data Digitization</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>




                            </div>
                        </a>



                        <a href="https://new.softechfoundation.com/services/#Digital-Marketing" class="cmnGrd wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">
                                <img src="{{asset('assets/site/images/services-icon/bullhorn.png')}}" alt="">
                            </div>
                            <div class="title">Digital Marketing</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>




                            </div>
                        </a>



                        <a href="https://new.softechfoundation.com/services/#Search-Engine-Optimization" class="cmnGrd wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">


                                <img src="{{asset('assets/site/images/services-icon/search-engine-optimization.png')}}" alt="">
                            </div>
                            <div class="title">Search Engine Optimization</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>




                            </div>
                        </a>



                        <a href="https://new.softechfoundation.com/services/#GIS-Solutions" class="cmnGrd wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">
                                <img src="{{asset('assets/site/images/services-icon/map.png')}}" alt="">
                            </div>
                            <div class="title">GIS Solution</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>
                            </div>
                        </a>
                        <a href="https://new.softechfoundation.com/services/#It-Consultant" class="cmnGrd wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">
                            <div class="fdIco">
                                <img src="assets/images/op1.png" alt="">
                            </div>
                            <div class="icon">
                                <img src="{{asset('assets/site/images/services-icon/consultant.png')}}" alt="">
                            </div>
                            <div class="title">It Consultant</div>
                            <div class="mre">View More
                                <svg viewBox="0 0 24 24">
                                    <path d="m9.29 20.71a1 1 0 0 0 1.42 0l8-8a1 1 0 0 0 .29-.71 1 1 0 0 0 -.29-.71l-8-8a1 1 0 0 0 -1.42 1.42l7.3 7.3-7.3 7.28a1 1 0 0 0 0 1.42z" />
                                </svg>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- services -->

<!-- <section class="services_main">
    <div class="row container">
        <div class="col-md-6">
            <div class="Headtitle">
                <h3 class="">Our Services</h3>
            </div>

        </div>

        <div class="col-md-6">
            <img src="{{asset('assets/site/images/banner-images3.png')}}" alt="">
        </div>

    </div>
</section> -->

<!-- portfolio -->

<section id="portfolio" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <li data-filter=".filter-app" class="filter-active active">Software-Application</li>
                    <li data-filter=".filter-card">Mobile-Apllication</li>
                    <li data-filter=".filter-web">Website</li>
                    <!-- <li data-filter=".filter-ecc">Ecommerce-Website</li>
                    <li data-filter=".filter-news">News-Portal-Website</li> -->

                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/attendence.jpg')}}" class="img-fluid" alt="">
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Online Attendance System </a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/legal.jpg')}}" class="img-fluid" alt="">
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Legal Case System</a></h4>
                        <!-- <p>Web</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/PIS.jpg')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Personal Information System (PIS)</a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/e-profile.jpg')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">e-profile</a></h4>
                        <!-- <p>Card</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/lumbinidevtrust.gov.np.png')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Lumbini Development Trust Sacred Garden Lumbini, Nepal.</a></h4>
                        <!-- <p>Web</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/paperless.jpg')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Paperless Document Management System</a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-web ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/pfco.karnali.gov.np.png')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Province Financial Comptroller Office</a></h4>
                        <!-- <p>Web</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/pravidhistore.png')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Pravidhi Store</a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/naarinepal.png')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Naarinepal</a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web ">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/primetvhd.png')}}" class="img-fluid" alt="">

                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Primetv HD</a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/sifarish-big.jpg')}}" class="img-fluid" alt="">
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Sifarish Management System </a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ asset('assets/site/images/portfolio/application/Planning-big.jpg')}}" class="img-fluid" alt="">
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Planning Management System </a></h4>
                        <!-- <p>App</p> -->
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- #portfolio -->
<div class="container">
<header class="section-header">
            <h3 class="section-title">Technology We Use</h3>
        </header>

    <div class="techno-slider swiper pt-4">
        <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide text-center d-flex flex-column">
                <div class="d-flex align-items-center" style="height:5rem;max-height:84px;">
                    <img style="height:auto;max-height: auto;" src="{{asset('assets/site/images/technology-used/dot-net.png')}}" class="img-fluid" alt="">
                </div>
                <p class="text-center">.NET</p>
            </div>
            <div class="swiper-slide text-center d-flex flex-column">
                <div class="d-flexalign-items-center" style="height:5rem;max-height:84px;">
                    <img style="height:auto;max-height: auto;" src="{{asset('assets/site/images/technology-used/bootstrap.png')}}" class="img-fluid" alt="">
                </div>
                <p class="text-center">Bootstrap</p>
            </div>
            <div class="swiper-slide  text-center d-flex flex-column">
                <div class="d-flex align-items-center"  style="height:5rem;max-height:84px;">
                    <img style="height:auto;max-height: auto;" src="{{asset('assets/site/images/technology-used/new-php-logo.png')}}" class="img-fluid" alt="">
                </div>
                <p class="text-center">PHP</p>
            </div>
            <div class="swiper-slide  text-center d-flex flex-column">
                <div class="d-flex align-items-center" style="height:5rem;max-height:84px;">
                    <img style="height:auto;max-height: auto;" src="{{asset('assets/site/images/technology-used/React-icon.png')}}" class="img-fluid" alt="">
                </div>
                <p class="text-center">React</p>
            </div>
            <div class="swiper-slide  text-center d-flex flex-column">
                <div class="d-flex align-items-center " style="height:5rem;max-height:84px;">
                    <img style="height:auto;max-height: auto;" src="{{asset('assets/site/images/technology-used/tailwind-css-icon.png')}}" class="img-fluid" alt="">
                </div>
                <p class="text-center">Tailwind</p>
            </div>
            <div class="swiper-slide  text-center d-flex flex-column">
                <div class="d-flex align-items-center " style="height:5rem;max-height:84px;">

                    <img style="height:auto;max-height: auto;" src="{{asset('assets/site/images/technology-used/wordpress.png')}}" class="img-fluid" alt="">
                </div>
                <p class="text-center">Wordpress</p>
            </div>
            <div class="swiper-slide  text-center d-flex flex-column">
                <div class="d-flex align-items-center " style="height:5rem;max-height:84px;">

                    <img style="height:auto;max-height: auto;" src="{{asset('assets/site/images/technology-used/laravel.png')}}" class="img-fluid" alt="">
                </div>
                <p class="text-center">Laravel</p>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>



<!-- #support -->

<section id="geTInTch">
    <div class="bg3">
        <img src="assets/images/bg.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="lftBx" data-aos="fade-up">
                    <div class="HeadBx">
                        <div class="title">Get In Touch</div>
                        <div class="txt">Get In Touch</div>
                        <div class="mainTxt">

                            Tell Us Your Needs & <span>Our Support Team Will Respond</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ritBx" data-aos="fade-up">


                    <form action="#" class="contact-form" method="post" data-aos="fade-up">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Client name" pattern="[a-zA-Z\s]+" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Xyz@gmail.com /Xyz@gmail.in" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Client Phone no." id="number" class="form-control" placeholder="Client phone no." pattern="[a-zA-Z\s]+" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="Problem date" id="problem-date" class="form-control" placeholder="Problem start date">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="Problem" id="message" class="form-control" placeholder="Problem" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Remarks" id="name" class="form-control" placeholder="Remarks" pattern="[a-zA-Z\s]+" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Office Name" id="office-name" class="form-control" placeholder="Office Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="btn-sec">
                                    <button type="submit" class="send btn hoveranim"><span>Submit</span></button>
                                    <div class="testmsg"></div>
                                </div>
                            </div>
                        </div>

                    </form>
                    <div class="imgBx">
                        <img src="{{asset('assets/site/images/touch2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
@section('js')

<script src="{{ asset('assets/site/plugin/wow-master/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/site/plugin/animate/main.mjs')}}"></script>
<!-- TOUCH_SWIPE -->
<script type="text/javascript" src="{{ asset('assets/site/plugin/jquery.touchswipe/jquery.touchSwipe.min.js')}}">
</script>

<!-- SPLIDE-->
<link rel="stylesheet" href="{{ asset('assets/site/plugin/@splidejs/css/splide.min.css')}}">
<script type="text/javascript" src="{{ asset('assets/site/plugin/@splidejs/js/splide.min.js')}}">
</script>

<!-- aos-->
<link rel="stylesheet" href="{{ asset('assets/site/plugin/aos/aos.css')}}">
<script type="text/javascript" src="{{ asset('assets/site/plugin/aos/aos.js')}}">
</script>



<script>
    AOS.init({
        duration: 600,
    });

    // MAINSLIDER

    var main = new Splide('#mainSlide', {
        type: "fade",
        speed: 1000,
        rewind: true,
        heightRatio: 0.5,
        interval: 2500,
        pagination: true,
        arrows: false,
        cover: true,
        drag: true,
        autoplay: true,
        breakpoints: {
            1551: {
                fixedHeight: 985,
            },
        },
    });

    var thumbnails = new Splide('#thumbSlide', {
        rewind: true,
        wheel: false,
        fixedWidth: 170,
        autoplay: true,
        isNavigation: true,
        gap: 30,
        pagination: false,
        cover: true,
        perPage: 6,
        arrows: false,
        Drag: false,
        // breakpoints: {
        //     1551: {
        //         fixedWidth: 170,
        //         perPage: 5,
        //         gap: 20,
        //     },
        //     1200: {
        //         fixedWidth: 83,
        //         fixedHeight: 100,
        //         perPage: 5,
        //         gap: 10,
        //     },
        //     1200: {
        //         fixedWidth: 170,
        //         perPage: 5,
        //         gap: 10,
        //     },
        // },
    });

    main.sync(thumbnails);
    main.mount();
    thumbnails.mount();
    // slider
    $(".carousel").swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
        },
        allowPageScroll: "vertical"
    });



    $(function() {
        $('#MainSlider #thumbSlide').addClass('display');
        $('#abtSec .ritBx').addClass('display');
    });


    jQuery(document).ready(function($) {

        // Porfolio isotope and filter


        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'masonry'
        });

        // Set the default filter
        var defaultFilter = '.filter-app';
        portfolioIsotope.isotope({
            filter: defaultFilter
        });

        $('#portfolio-flters li').on('click', function() {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            portfolioIsotope.isotope({
                filter: $(this).data('filter')
            });
        });

    });
</script>
<!--2nd slider end-->

<script>
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();

    // Start Slider Carousel
    $(document).ready(function() {
        $('.slider-carousel').owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            thumbs: false,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 3000,
            autoplayHoverPause: false,


        });

        $(".expSlide").owlCarousel({
            nav: false,
            dots: false,
            loop: true,
            autoplay: true,
            smartSpeed: 1000,
            items: 1,
            autoplayTimeout: 4000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            touchDrag: false,
            mouseDrag: false,
            responsive: {

            }
        });

    });
</script>
<script>
    window.addEventListener('scroll', function(e) {
        if ($(window).scrollTop() <= 50) {
            $('.wow').removeClass('animated');
            $('.wow').removeAttr('style');
            new WOW().init();
        }
    });


    /**
     * technology Slider
     */
    new Swiper('.techno-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        slidesPerView:'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            480: {
                slidesPerView:4,
                spaceBetween: 60
            },
            640: {
                slidesPerView: 5,
                spaceBetween: 80
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 120
            },
          
        }
    });
</script>
<script type="text/javascript" src="{{ asset('assets/site/js/isotope/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/site/js/isotope/isotope.pkgd.js')}}"></script>

<!-- wow -->
<!-- wow -->
<script src="{{ asset('assets/site/plugin/wow-master/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/site/plugin/animate/main.mjs')}}"></script>

<!-- swiper -->
<script src="{{ asset('assets/site/plugin/swiper/swiper-bundle.min.css')}}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection