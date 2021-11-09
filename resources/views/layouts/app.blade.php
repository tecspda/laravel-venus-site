@inject('winget_online', 'App\Models\Currency')
@include('inc.top.header')

{{-- <div class="alert alert-danger">
</div> --}}


@if (Route::is('home'))
    <!-- block TOP-BANNER -->
    @include('inc.top-banner')
@endif

<!-- block TOP-MAIN -->
<div class="container">
	<div class="row">
		<!-- CONTENT -->
		<div id="main" class="col-sm-12 col-md-9 pl-2">
			@yield('content')
		</div>
        <!-- ASIDE -->
        <div id="aside" class="col-sm-12 col-md-3">@include('inc.aside')</div>
	</div>
</div>


@include('inc.footer.footer')
