@if(Route::has($_base_route.'.destroyFile'))
<button id="delete" data-id="{{ $row->id }}" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete" data-url="{{ URL::route($_base_route.'.destroy', ['id' => $row->id]) }}" style="cursor:pointer;"><i class="fa fa-trash font-14"></i></button>
@endif
