@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
@endsection
@section('content')

<section class="services_main pt-5 mt-5">
    <div class="row container">
        <div class="col-md-6">
            <div class="Headtitle">
                Our Services
            </div>

        </div>

        <div class="col-md-6">
            <img src="{{asset('assets/site/images/banner-images3.png')}}" alt="">
        </div>

    </div>
</section>

<div id="pageWrapper" class="servicePage pt-5 mt-5">
    <section id="serviceSec">
       <div class="container">
            <div class="row" id="Software-development">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="imgBx wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="imgIn">
                            <img src="{{asset('assets/site/images/services/image1.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">Software Development </div>
                        </div>
                        <p style="text-align:justify;">Softech Foundation has carved out a successful niche for itself in custom software design and development. We provide complete software implementation process, starting with software design and development, software quality assurance testing, software deployment, up to further software upgrades and enhancements.</p>

                        <p style="text-align:justify;">The core software design and development services provided by Softech Foundation include, but are not limited to, desktop application development, high-end client-server application development, enterprise application development and building end-to-end enterprise application integration (EAI) solutions, re-engineering, software systems maintenance and support.</p>
                   </div>
                </div>
            </div>
            <div class="row" id="Web-development">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="bgIco1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="images/services/thumb_image2.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="imgBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="imgIn">
                                <img src="{{asset('assets/site/images/services/image2.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">Web Development </div>
                        </div>
                        <p style="text-align:justify;">By combining marketing expertise and design skills, Softech Foundation offers a full spectrum of professional, quality-driven services on custom website design and re-design, Flash web site design and programming, multimedia presentation design and development, corporate identity, custom print graphics, and original art work.</p>

                        <p style="text-align:justify;">The team of design and marketing professionals at Softech Foundation blends inspiration, creative approach and technical skills to help you communicate with your clients and network more effectively, position your brand, or take your business to new heights.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="Mobile-Application-development">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="bgIco1">
                    <img src="images/services/thumb_image4.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                        <div class="imgBx wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                            <div class="imgIn">
                            <img src="{{asset('assets/site/images/services/image3.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInRight"  data-wow-delay="0.5s" data-wow-duration="1s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInRight" data-wow-delay="1s" data-wow-duration="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">Mobile Application Development</div>
                        </div>
                        <p style="text-align:justify;">We provide affordable mobile application for commercial purpose, social use, businesses transaction and individuals. We are able to provide you and your company or business, large or small with a range of options to ensure we can create the mobile application you require.</p>

                        <p style="text-align:justify;">We offer value for money packages for new business, established companies and individuals.By combining marketing expertise and design skills, Softech Foundation offers a full spectrum of professional, quality-driven services on custom mobile application development services, and mobile application programming, multimedia presentation design and development, corporate identity, custom print graphics, and original art work.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="Digital-Marketing">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="bgIco1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="images/services/thumb_image2.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="imgBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="imgIn">
                                <img src="{{asset('assets/site/images/services/image4.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">Digital Marketing</div>
                        </div>
                        <p style="text-align:justify;">Digital marketing refers to the practice of using digital channels, technologies, and strategies to promote products, services, brands, or businesses. It encompasses various online platforms and tactics to reach and engage with target audiences, drive website traffic, generate leads, increase conversions, and build brand awareness. </p>

                        <p style="text-align:justify;">Digital marketing leverages channels such as search engines, social media, email, websites, mobile apps, and other online platforms to deliver targeted messages and campaigns to the right audience at the right time. It involves a combination of techniques including search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing, content marketing, email marketing, influencer marketing, and more.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="Search-Engine-Optimization">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="bgIco1">
                    <img src="images/services/thumb_image4.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                        <div class="imgBx wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                            <div class="imgIn">
                            <img src="{{asset('assets/site/images/services/image5.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInRight"  data-wow-delay="0.5s" data-wow-duration="1s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInRight" data-wow-delay="1s" data-wow-duration="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">Search Engine Optimization (SEO)</div>
                        </div>
                        <p style="text-align:justify;">Search Engine Optimization (SEO) refers to the process of optimizing a website and its content to improve its visibility and ranking on search engine results pages (SERPs). It involves a set of techniques and strategies to make a website more attractive to search engines like Google, Bing, or Yahoo. The ultimate goal of SEO is to increase organic (non-paid) traffic to a website by improving its relevance, authority, and user experience.</p>

                        <p style="text-align:justify;">Effective SEO requires a deep understanding of search engine algorithms, user behavior, and website analytics. By improving a website's SEO, businesses can increase their visibility, drive more traffic, and improve their online presence.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="GIS-Solutions">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="bgIco1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="images/services/thumb_image2.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="imgBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="imgIn">
                                <img src="{{asset('assets/site/images/services/image6.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">GIS Solutions</div>
                        </div>
                        <p style="text-align:justify;">Softech Foundation provides GIS Services, GIS Remote Sensing services, GIS Mapping services, and GIS Data conversions Services. Our GIS services allow for the visualization of geographic data, analysis of spatial relationships, and efficient data management. GIS data conversions allow data from different sources to be merged in one common format, which allows for easy access, analysis and utilization. </p>

                        <p style="text-align:justify;"> Based on paper or electronic data either captured by our customers or otherwise collected, Softech Foundation undertakes GIS data conversions and prepares electronic maps using Geographic Information Systems (GIS) technology By integrating GIS, Computer Aided Design (CAD) and Global Positioning Systems (GPS), using high-end GIS Mapping and GIS data conversions software, our GIS Services assist our customers in producing maps including contour maps, spatial maps, atlas maps, cadastral maps, thematic and zonal maps, landscape maps, environmental maps</p>
                    </div>
                </div>
            </div>
            <div class="row" id="It-Consultant">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="bgIco1">
                    <img src="images/services/thumb_image4.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                        <div class="imgBx wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                            <div class="imgIn">
                            <img src="{{asset('assets/site/images/services/image7.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInRight"  data-wow-delay="0.5s" data-wow-duration="1s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInRight" data-wow-delay="1s" data-wow-duration="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">IT Consultant</div>
                        </div>
                        <p style="text-align:justify;">An IT consultant, short for Information Technology consultant, is a professional who provides advice, guidance, and expertise in the field of information technology to businesses and organizations. IT consultants are hired to help organizations solve specific technology-related problems, improve their IT infrastructure, implement new systems, optimize processes, and achieve their technology goals.</p>

                        <p style="text-align:justify;">IT consultants typically have a strong background in technology, with expertise in specific areas such as networking, cybersecurity, software development, or cloud computing. They stay updated on the latest industry trends and technologies to provide relevant and effective advice to their clients.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="Data-Digitization">
                <div class="bgC">
                    <img src="assets/images/bg.png" alt="">
                </div>
                <div class="bgIco1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="images/services/thumb_image2.png" alt="">
                </div>
                <div class="col-lg-6 b1">
                    <div class="lftBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="imgBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="imgIn">
                                <img src="{{asset('assets/site/images/services/image8.jpg')}}" alt="">
                            </div>
                            <div class="imgBg wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/bgW.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 b2 rtB">
                    <div class="ritBx wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="HeadBx" data-aos="fade-up">
                            <div class="mainTxt">Data Digitization</div>
                        </div>
                        <p style="text-align:justify;">Data digitization is the process of converting analog or physical data into a digital format that can be stored, manipulated, and processed electronically. It involves capturing, encoding, and organizing data so that it can be easily accessed, analyzed, and shared using computers and digital systems.</p>

                        <p style="text-align:justify;">By digitizing data, it is transformed into a series of binary digits (0s and 1s) that represent the information. This allows for greater efficiency in data storage, retrieval, and manipulation, as digital data can be easily duplicated, transmitted, and processed by computers and other digital devices.Overall, data digitization plays a fundamental role in the digital transformation of industries, facilitating the transition from analog to digital workflows and unlocking the potential of data in today's digital era.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- <section id="demoSec">
        <div class="bg7">
            <img src="assets/images/ring2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="lftBx">
                        <div class="title">Still have a question about AFI?</div>
                        <p>We’ve had a lot of success helping all types of beauty,<br> Wellness and fitness businesses.
                            Tell us a bit about yours.</p>
                        <div class="btnBx">
                            <a href="#!" class="book hoveranim"><span>book now</span></a>
                            <a href="#!" class="dwnld hoveranim" data-bs-toggle="modal"
                                data-bs-target="#dwnldMdl"><span>Download Brochure</span></a>
                            <a href="#!" class="book hoveranim"><span>view price</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="ritBx">
                        <div class="imgBx">
                            <img src="assets/images/humen.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- modal -->
    <div class="modal fade" id="dwnldMdl" tabindex="-1" aria-labelledby="careerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="formBx">
                        <div class="title">Download Brochure</div>
                        <div class="txt">Provide us with your details and we will contact you.</div>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" autocomplete="off" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" autocomplete="off" name="Email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" autocomplete="off" name="mobile Number" placeholder="Mobile Number" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="send hoveranim"><span>Download</span></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GSAP --->
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js">
    </script>
    <!-- wow -->
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

    <script>

        $(document).ready(function() {

            var timeout;
            $('#serviceSec').mousemove(function(e) {
                if (timeout) clearTimeout(timeout);
                setTimeout(callParallax.bind(null, e), 200);

            });
            if ($(window).width() >= 768) {
                function callParallax(e) {
                    parallaxIt(e, '#serviceSec .row .bgIco1', -80);
                }
            }

            function parallaxIt(e, target, movement) {
                var $this = $('#serviceSec');
                var relX = e.pageX - $this.offset().left;
                var relY = e.pageY - $this.offset().top;

                TweenMax.to(target, 1, {
                    x: (relX - $this.width() / 2) / $this.width() * movement,
                    y: (relY - $this.height() / 2) / $this.height() * movement,
                    ease: Power2.easeOut
                })
            }

        });
    </script>
</div>



@endsection
@section('js')

@endsection