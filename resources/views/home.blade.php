@extends('layouts.app')


@section('title-block')Venus Trading (Import from Russia and Ukraine)@endsection
@section('description-block')Venus Trading (Import from Russia &amp; Ukraine)@endsection


@section('content')
{{-- <div style="height: 100px; background-color: yellow;">
<a href="/user/1">user {{ '123' }} </a>
<div>
    test1 view = {{ view('test.test1') }}<br>
    @include('test.test1')
</div>

@inject('winget_online', 'App\Models\Currency')
<div>
    Monthly Revenue: {{ $winget_online->RUB_USD }}.
</div>

</div> --}}

    <section id="portfolio" style="padding-top: 30px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; padding-bottom: 5px; font-weight: 600; font-size: large; text-transform: uppercase;">
                    Industry
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="page/good-steel1">
                        <div class="portfolio-thumb">
                            <img src="/images/goods/stainless-steel/stainless-steel.min1.jpg" class="img-responsive" alt="Stainless steel">
                            <div class="portfolio-overlay">
                                <div class="portfolio-item">
                                    <h3>Stainless steel</h3>
                                    <small>Russia</small>
                                </div>
                            </div>
                        </div>
                    </a>
    <!-- 				<span class="sale"><span class="bold">$730</span><br>per tons</span> -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="page/good-fittings1">
                        <div class="portfolio-thumb">
                            <img src="/images/goods/fittings/fittings.jpg" class="img-responsive" alt="Steel rebar" title="Steel rebar">
                            <div class="portfolio-overlay">
                                <div class="portfolio-item">
                                    <h3>Steel rebar</h3>
                                    <small>Russian, Ukraine</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <span class="sale"><span class="bold">$730</span><br>CIF</span>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <div class="portfolio-thumb">
                            <img src="/images/goods/coal/coal.jpg" class="img-responsive" alt="Coal">
                            <div class="portfolio-overlay">
                                <div class="portfolio-item">
                                    <h3>Coal</h3>
                                    <small>Russian, Ukraine</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <span class="sale"><span class="bold">$150</span><br>per tons</span>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12" style="text-align: center; padding: 50px 0; font-weight: 600; font-size: large; text-transform: uppercase;">
                    Medical products
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="page/good-nitrile-blue1">
                        <div class="portfolio-thumb" style="border: 0.5px dotted gray;">
                            <img src="/images/goods/good-nitrile-blue1/nitrile-gloves.jpg" class="img-responsive" alt="Nitrile gloves">
                            <div class="portfolio-overlay">
                                <div class="portfolio-item">
                                    <h3>Nitrile gloves</h3>
                                    <small>Turkey</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <span class="sale"><span class="bold">$9</span><br>100 pcs</span>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="page/good-suite-white1">
                        <div class="portfolio-thumb" style="border: 0.5px dotted gray;">
                            <img src="/images/goods/good-suite-white1/suite.min.jpg" class="img-responsive" alt="Suite anti-Covid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-item">
                                    <h3>Suite anti-Covid</h3>
                                    <small>Turkey</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <span class="sale"><span class="bold">$4</span><br>per 1 pcs</span>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="page/good-suite-white1">
                        <div class="portfolio-thumb" style="border: 0.5px dotted gray;">
                            <img src="/images/goods/good-suite-white1/suite.min.jpg" class="img-responsive" alt="Suite anti-Covid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-item">
                                    <h3>Suite anti-Covid</h3>
                                    <small>Turkey</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <span class="sale"><span class="bold">$4</span><br>per 1 pcs</span>
                </div>

                <div class="col-md-12 col-sm-12 text-center">
                    <h3>If you cooperation interests, simply send the message from <a href="contact">this page</a> or call by phone or whatsapp <a href="https://api.whatsapp.com/send?phone=79017210711" style="color: green; white-space: nowrap" target="_blank" rel="nofollow"><i class="fa fa-whatsapp" aria-hidden="true"></i> +90 (553) 434-82-42</a></h3>
                </div>

            </div>
        </div>
        <div style="padding: 50px 0;">
    </section>
@endsection
