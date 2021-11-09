@section('nav')<!-- Navigation section  -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                {{-- <!--<i class="fa fa-magnet"></i>--> --}}
                <img src="../images/logo/logo2.jpg" style="max-height: 3em;">
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li @if(Route::is('home')) class="active" @endif><a href="{{ route('home') }}">Home</a></li>
                <li @if(Route::is('about')) class="active" @endif><a href="{{ route('about') }}">About us</a></li>
                <li @if(Route::is('news')) class="active" @endif><a href="{{ route('news') }}"><i class="fa fa-comment" style="color: green;" aria-hidden="true"></i> News</a></li>
                <li @if(Route::is('contact')) class="active" @endif><a href="{{ route('contact') }}"><i class="fa fa-user" style="color: green;" aria-hidden="true"></i> Contacts</a></li>
            </ul>
        </div>

    </div>
</div>
