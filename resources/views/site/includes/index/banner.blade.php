@if(isset($data['banner']))
<div class="">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($data['banner'] as $row)
            <div style="width:fit-content; height:fit-content" class="swiper-slide"><img src="{{asset($row->image)}}" alt="" srcset="">
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
@endif