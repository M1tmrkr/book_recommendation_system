@include('user.section.header')
@include('user.section.top-nav')
@include('user.section.sidebar')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        @yield('content')
    </div>
    @include('user.section.copy')
</div>
@include('user.section.footer')