@inject('winget_online', 'App\Models\Currency')
@include('inc.top.header')

<!-- block TOP-MAIN -->
<div class="container" style="padding-top: 30px">
	<div class="row">
		<!-- CONTENT -->
		<div id="main" class="col-sm-12 col-md-9">
			@yield('content')
		</div>
        <!-- ASIDE -->
        <div id="aside" class="col-sm-12 col-md-3">@include('inc.aside')</div>
	</div>
</div>

@include('inc.footer.footer')

