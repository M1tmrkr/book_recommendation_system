@if(Route::has($_base_route.'.edit'))
<a href="{{ URL::route($_base_route.'.view_my_application', ['unique_id' => $row->unique_id]) }}"><button type="button" data-original-title="Reports"  onclick="report(this)" data-toggle="tooltip" class="btn btn-info btn-xs" style="cursor:pointer;"><i class="fa fa-file"></i>&nbsp;रिपोर्ट हेर्नुस्</button></a>
@endif