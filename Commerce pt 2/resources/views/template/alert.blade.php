@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show m-5" role="alert">
    <div>
        {{ session()->get('success') }}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
{{-- @dd($errors->all()) --}}
<div class="alert alert-danger alert-dismissible fade show m-5" role="alert">
    <div>
        @foreach ($errors->all() as $e)
        {{ $e }} <br>
        @endforeach
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
