@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/css/internship.css')}}">

<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
<link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
<!-- Swiper -->
<div class="form-body internship-main">
    <div class="container form-container all_posts all_posts wow fadeInUp">
        <div class="title">Please Fill Up This Form To Apply For Internship:</div>
        <div class="content">
            <form action="#">
                <div class="user-details row align-items-center">
                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" required class="" />
                    </div>

                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" required />
                    </div>
                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" required />
                    </div>

                    <div class="gender-details col-lg-3 col-md-4">
                        <input type="radio" name="gender" id="dot-1" />
                        <input type="radio" name="gender" id="dot-2" />
                        <input type="radio" name="gender" id="dot-3" />
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender pr-2">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender pr-2">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender pr-2">Other</span>
                            </label>
                        </div>
                    </div>

                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">Country</span>
                        <select name="Country" id="Coun" class="form-control">
                            <option value="Nepal">Nepal</option>
                            <option value="India">India</option>
                            <option value="US">US</option>
                        </select>
                    </div>

                    <div class="input-box col-lg-3 col-md-4" >
                        <span class="details">State</span>
                        <select name="State" id="Stat" class="form-control">
                            <option value="State1">State1</option>
                            <option value="State2">State2</option>
                            <option value="State3">State3</option>
                        </select>
                    </div>
                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">City</span>
                        <select name="City" id="Cty" class="form-control">
                            <option value="Citya">Citya</option>
                            <option value="Cityb">Cityb</option>
                            <option value="Cityc">Cityc</option>
                        </select>
                    </div>
                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">Collage Name</span>
                        <input type="text" placeholder="Enter Collage Name" required />
                    </div>

                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">Faculty</span>
                        <select name="Faculty" id="Faculty" class="form-control">
                            <option value="BCA">BCA</option>
                            <option value="BIT">BIT</option>
                            <option value="BSC CSIT">BSC CSIT</option>
                            <option value="BIM">BIM</option>
                            <option value="BCIS">BCIS</option>
                            <option value="BE">BE</option>
                            <option value="IT">IT</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="input-box col-lg-3 col-md-4">
                        <span class="details">Internship Apply For</span>
                        <select name="Apply_for" id="Apply_for" class="form-control">
                            <option value=".net">.net</option>
                            <option value="php">php</option>
                            <option value="Web Designing">Web Designing</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Technical Support">Technical Support</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <button class="btn btn-primary" style="margin-top: 12px; margin-left: 20px" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            More...
                        </button>
                    </div>
                    <div class="offset-lg-3 ">

                    </div>
                </div>
               

                <div class="collapse" id="collapseExample">
                    <div class="user-details row  justify-content-start">
                        <div class="input-box col-lg-3 col-md-4">
                            <span class="details">Citizenship Number</span>
                            <input type="text" placeholder="Citizenship Number" required />
                        </div>
                        <div class="input-box col-lg-3 col-md-4">
                            <span class="details">Internship Start Date </span>
                            <input type="text" placeholder="Date" class="nepali-date-picker" id="nepali-datepicker1" />
                        </div>

                        <div class="input-box col-lg-3 col-md-4">
                            <span class="details">Internship Start End </span>
                            <input type="text" placeholder="Date" class="nepali-date-picker" id="nepali-datepicker2" />
                        </div>
                        <div class="input-box col-lg-3 col-md-4">
                            <span class="details">Photo Upload</span>
                            <input class=" form-control" id="file" type="file" name="image" required />
                        </div>
                        <div class="input-box col-lg-3 col-md-4">
                            <span class="details">CV Upload</span>
                            <input class=" form-control" id="file" type="file" name="image" required />
                        </div>
                        <div class="input-box col-lg-3 col-md-4">
                            <span class="details">Letter Upload</span>
                            <input class=" form-control" id="file" type="file" name="image" required />
                        </div>
                        
                    </div>
                    <div class="form-group input-box">
                        <labe style="font-weight: 500;" for="exampleFormControlTextarea1">Remarks</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="button col-lg-3 col-md-4">
                    <input type="submit" value="Submit" />
                </div>
                </div>
                

            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="{{ asset('assets/site/plugin/wow-master/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/site/plugin/animate/main.mjs')}}"></script>
<!-- datpicker -->
<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.1.min.js" type="text/javascript"></script>
  


<script>
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();

var mainInput = document.getElementById("nepali-datepicker1"); 
 /* Initialize Datepicker with options */
 mainInput.nepaliDatePicker({
    language: "english"
});

var mainInput2 = document.getElementById("nepali-datepicker2"); 
 /* Initialize Datepicker with options */
 mainInput2.nepaliDatePicker({
    language: "english"
});

</script>
@endsection