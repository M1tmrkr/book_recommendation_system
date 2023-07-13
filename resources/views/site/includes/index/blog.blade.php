<!-- latest blog -->
@if(isset($data['blog']))

<div class="all_posts">
    <div class="container">
        <div class="allposts_header">
            <h3 class="section_title">Latest Blogs</h3>
            <div class="alllink">
                <a href="{{route('site.blog')}}">View All Posts</a>
            </div>
        </div>
        <div class="loop_wrapper wow animate__fadeInBottomRight" data-wow-duration="1s" data-wow-delay="0.5s">
            @foreach($data['blog'] as $row)
            <article id="post-11338" class="latest_post post-11338 post type-post status-publish format-standard has-post-thumbnail hentry category-blogs category-latest-blog category-offers tag-featured">
                <a class="post-thumbnail" href="{{ route('site.blog.show', ['id'=> $row->post_unique_id,]) }}" aria-hidden="true" tabindex="-1">
                    <img width="1200" height="700" src="{{$row->thumbs}}" class="attachment-full size-full wp-post-image" alt="Redeem your eSewa Reward Points" loading="lazy" srcset="" sizes="(max-width: 1200px) 100vw, 1200px" /> </a>
                <div class="text-holder">
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="{{ route('site.blog.show', ['id'=> $row->post_unique_id,]) }}" rel="bookmark">{{ $row->title }}
                            </a></h2>
                    </header>
                    <footer class="entry-footer">
                        <span class="cat-links">
                            <a href="{{ route('site.blog.show', ['id'=> $row->post_unique_id,]) }}" rel="category tag">@if(isset($row->postCategory)) {{ $row->postCategory->title }} @endif</a>,
                             <!-- <a href="category/latest-blog/index.html" rel="category tag">Latest Blog</a>,  -->
                             </span><span>{{ date('F d, Y', strtotime($row->created_at)) }}</span>
                    </footer>
                    <div class="entry-content">
                    <p>{!! strlen($row->description) > 150 ? substr($row->description,0,150).'..' : $row->description !!}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</div>
@endif