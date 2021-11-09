@section('aside')
@if (Route::is('about', 'news', 'blog', 'contact'))
    @php ($margin_top_aside = "70")
@elseif (Route::is('home'))
    @php ($margin_top_aside = "90")
@endif



<aside class="mr-2">
    <div class="aside-right" style="margin-top: {{ $margin_top_aside ?? '0' }}px;">
        @include('inc.widget.currency-rate')
    </div>

    <div class="aside-right pt-3">
        @include('inc.widget.widget2')
    </div>

    <div class="aside-right pt-3">
        @include('inc.widget.widget3')
    </div>


</aside>
