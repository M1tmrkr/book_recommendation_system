@section('social_title')
{{$data['row']->title }}
@endsection
@section('social_url')
{{ route('site.post.show', ['id'=> $data['row']->post_unique_id]) }}
@endsection
@section('social_description')
{!! $data['row']->description  !!}
@endsection
@section('social_thumbs')
{!! $data['row']->thumbs  !!}
@endsection