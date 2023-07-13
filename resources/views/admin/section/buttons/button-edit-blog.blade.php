@if(Route::has($_base_route.'.edit'))
<a href="{{ URL::route($_base_route.'.edit', ['post_unique_id' => $row->post_unique_id]) }}">
    <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit" style="cursor: pointer;"><i class="fa fa-pencil font-14"></i></button></a>
@endif