@extends('layouts.app')

@section('title-block')About our company in Turkey
@endsection
@section('title-description')About our company in Turkey
@endsection


@section('content')
<section id="about">
    <div class="container-liqud">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="section-title">
                    <h3 class="mt-0">About us</h3>
                    <p style="font-size: large">Our mission is to provide the Turkish and EU markets with raw materials and finished products manufactured in the countries: Turkey, Russia, Ukraine, Romania, Moldova.</p>
                </div>

                <h2 style="text-align: center; margin-top: 0">Venus Trading Ltd.Şti</h2>
                <div class="col-md-8 col-sm-12">
                    <img src="images/about-image.jpg" class="img-responsive" alt="About">
                </div>

                <div class="col-md-4 col-sm-12">
                    <p>7 years in the market of logistics and deliveries of metallurgical raw materials, wood, textiles.</p>
                    <p>Direct international contracts with producers of aluminum, steel, coil, magnesium, and wood.</p>
                </div>

                {{-- <div class="clearfix"></div> --}}

                {{-- <hr> --}}

                <div class="col-sm-12" style="padding-bottom: 3em">
                <p class="text-justify"><i class="fa fa-exclamation-circle" style="color: red;" aria-hidden="true"></i> We provide weekly deliveries from abroad the highest quality. All goods are delivered with the appendix of the international certificates <a href="https://www.sgs.com/" target="blank_" title="SGS">SGS (www.sgs.com)</a>.</p>
                </div>

                <hr>

                <div class="col-md-4 col-sm-6">
                    <h3>Suppliers</h3>
                    <ul>
                        <li>Turkey</li>
                        <li>Russia</li>
                        <li>Ukraine</li>
                        <li>Turkey</li>
                        <li>Moldova</li>
                        <li>Romania</li>
                        <li>Azerbaijan</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3>Brands</h3>
                    <ul>
                        <li>Rusal</li>
                        <li>Rosneft</li>
                        <li>Urals</li>
                        <li>Turkey Harir Gloves</li>
                        <li>JSC Magny</li>
                        <li>NAR</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <h3>Branches</h3>
                    <ul>
                        <li>Steel</li>
                        <li>Fttings</li>
                        <li>Wood</li>
                        <li>Coal</li>
                        <li>Oil</li>
                        <li>Overalls for Covid</li>
                        <li>Nitrile gloves</li>
                        <li>Latex gloves</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
