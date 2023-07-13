{{-- error-message --}}

@if($errors->any())
<div>
    @foreach ($errors->all() as $error)
    {{-- @php dd($error) @endphp --}}
    <div class="alert alert-block alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ $error }}
    </div>
    @endforeach
</div>
@endif