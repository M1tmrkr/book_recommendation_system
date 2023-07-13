<div class="all_posts ">
    <div class="container">
        <div class="allposts_header">
            <h3 class="section_title">Our Clients</h3>
            <div class="alllink">
                <a href="{{ route('site.client')}}">View All Posts</a>
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