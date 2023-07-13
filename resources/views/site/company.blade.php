@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">

@endsection
@section('content')



<div id="pageWrapper" class="aboutPage">
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="capBx">
                        <div class="Headtitle">
                       It In An Innovative, Quick And  <br> <span>Effective Way.</span> </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="graphics">
                        <img src="{{ asset('assets/site/images/about-us/banner-images1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
          
        </div>
    </section>
    <section id="welcome">
        <div class="container">
            <div class="row lftBx">
                <div class="col-md-4 HeadBx">
                        <div class="title wow fadeInUp text-uppercase"  data-wow-duration="1s" data-wow-delay="0.5s">About Us</div>
                        <div class="txt wow fadeInUp text-uppercase"  data-wow-duration="1s" data-wow-delay="0.5s">About Us</div>
                        <div class="mainTxt wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Softech Foundation</div>

                </div>
                <div class="col-md-8 rtSec" >
                    <p style="text-align:justify" class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">SOFTECH Foundation Pvt. Ltd. is a company established with concrete aims to catapult the growing prospect of IT in Nepal to the un-scalable height by providing qualitative training, developing web based applications, desktop based application, GIS solution and consultancy services, Data Entry and electronic document management solution, webpage design and development, IT consultancy & other computer related job independently.
In today's fast-paced and rapidly changing Information Technology environment, the appropriate use of technology and strategic business planning solutions tailored to your business needs and objectives is the key to your success. With an in-depth understanding of business process and technology along with hands-on experience gained through working on critical issues in key industries of the IT marketplace, Softech Foundation is committed to provide you with top-end consulting services and solutions to meet unique business challenges.
</p>

                    <p style="text-align:justify" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Since its establishment, Softech Foundation has been a leading custom and common software, web & database development company delivering world-class services for both government and non-government organization around the Nepal. A trusted business partner and adviser to our customers, Softech Foundation leverages a powerful blend of the best industry-proven practices and leading standards, refined business acumen and deep market understanding, profound technical skills and extensive hands-on experience to meet the toughest challenges that our clients face, help them, compete successfully in the dynamically changing IT marketplace and achieve the maximum return on investment. When you outsource to Softech Foundation for IT solution, you have the freedom to focus on your core business while a dedicated team of qualified experts is committed to deliver a turn-key solution taking on all and every aspect of your IT needs starting with strategy consulting and concept development, design and architecture, up to deployment, training, maintenance and future enhancement. However, it is to the satisfactory level that we have produced the efficient manpower, software and web products and provided excellent services, which have made excellent impression in the relevant field.</p>
                    <p style="text-align:justify " class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Softech Foundation has its own characteristics, beyond the competition with any other kinds of Institutions. It is having its own vision to act for valued education, reliable and secure software and web products has catered customer satisfaction under superior professionalism.
Softech Foundation has achieved the honor to be Microsoft Certified Gold Partner, Prometric Test Center and member of Computer Association of Nepal. As a Microsoft Certified Gold Partner, Softech Foundation has attained and achieved the honor of Security Solution Competency, Information Worker Solution Competency, Desktop Platform Competency, System Management Competency and Business Intelligence Competency of Microsoft Corporation which has proved the technical expertise and work efficiency on those arenas.</p>

                </div>
            </div>
        </div>
    </section>
    <section id="mission">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="cardBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/site/images/about-us/vision1.jpg')}}" alt="">
                        </div>
                        <div class="cardText">Vision</div>
                        To be the leader in IT Solution Providers that values customer relation above anything else
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1s">
                    <div class="cardBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/site/images/about-us/mission1.jpg')}}" alt="">
                        </div>
                        <div class="cardText">mission</div>
                        To deliver seamless IT Services that empowers our clients to stay one step ahead of the competition.
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.5s">
                    <div class="cardBx">
                        <div class="imgBx">
                            <img src="{{asset('assets/site/images/about-us/motto1.jpg')}}" alt="">
                        </div>
                        <div class="cardText">Strength & Motto</div>
                        Digitalize Your Product That Shift Your Business At Top
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>





@endsection
@section('js')

<script src="{{ asset('assets/site/plugin/wow-master/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/site/plugin/animate/main.mjs')}}"></script>
<script>
   window.addEventListener('scroll', function(e) {
        if( $(window).scrollTop() <= 50) {
            $('.wow').removeClass('animated');
            $('.wow').removeAttr('style');
            new WOW().init();
        }
});
    
</script>
@endsection