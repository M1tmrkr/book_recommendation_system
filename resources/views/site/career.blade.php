@extends('site.layouts.app')
@section('title')
Softech Foundation : Software company in Nepal - Software development - Web development - Mobile Apps development- Software products- Nepal Government Website Development - Outsourcing Nepal
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/site/plugin/wow-master/css/libs/animate.css')}}">
<link rel="stylesheet" href="{{ asset('assets/site/plugin/animate/animate.min.css')}}">
@endsection
@section('content')
<!-- latest blog -->
<br>
<section class="career all_posts all_posts wow fadeInUp">
    <div class="career_search">
        <br>
        <h2 class="text-center">Job Opening</h2>
        <div class="search_c1 container">
            <div class="form-group  d-flex">
                <input class="form-control m-1" type="text" pattern="[A-Za-z]" placeholder="Search Jobs">
                <select class="form-control m-1">
                    <option selected="Selected" disabled="disabled">Job Level</option>
                    <option value="Any">Any</option>
                    <option value="Internship"> Internship </option>
                    <option value="Entry Level"> Entry Level</option>
                    <option value="Mid Level" selected> Mid Level</option>
                    <option value="Senior Level"> Senior Level</option>
                </select>
                <div class="d-flex">
                    <a href=""><button class="button-70 " role="button">Search</button></a>
                </div>
                <div class="d-flex">
                    <a href="{{route('site.career')}}"><button style="width: 110px;" class="button-70 " role="button">Clear Filters</button></a>
                </div>
            </div>
        </div>

        <div class="listing_job_no container">
            <h3>{{ $data['career_count'] }} Jobs offered !</h2>
        </div>
    </div>
    @if(isset($data['career']))
    @foreach($data['career'] as $row)
    <div class="container careers_card mb-2 mt-2">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="career_part_left d-flex">
                    <h3>{{ $row->title }}</h3>
                    <span>Time :{{ $row->time }}</span>
                    <span>Job Level: {{ $row->level }}</span>
                    <span>Openings {{ $row->number }}</span>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="career_part_right d-flex">
                    <span><b>Category:</b> {{ $row->category }}</span>
                    <span><b>Experience:</b> {{ $row->experience }}</span>
                    <span><b>Salary:</b> {{ $row->salary }}</span>
                    <span><b>Apply Before</b>: {{ $row->apply_before }}</span>
                    <!-- HTML !-->
                    <div class="d-flex">
                        <a href="{{route('site.contact')}}"><button class="button-70 " role="button">Apply Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</section>

<section class="career all_posts all_posts wow fadeInUp pb-4">
    
        <h2 class="text-center pt-5 pb-2">Tranning Program</h2>
    

        <div class="listing_traning_no container">
            <h3>1 Traning Program available !</h2>
        </div>
        <div class="container careers_card mb-2 mt-2">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="career_part_left d-flex">
                    <h3>Software Tester</h3>
                    <span>Time :Full TIme</span>
                    <span>Job Level: trainee</span>
                    <span>Openings 2</span>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="career_part_right d-flex">
                    <span><b>Category:</b> Software Tranning</span>
                    <!-- <span><b>Experience:</b> </span>
                    <span><b>Salary:</b> {{ $row->salary }}</span> -->
                    <span><b>Apply Before</b>:2080-1-3</span>
                    <!-- HTML !-->
                    <div class="d-flex">
                        <a href="{{route('site.contact')}}"><button class="button-70 " role="button">Apply Now</button></a>
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