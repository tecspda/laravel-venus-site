@extends('layouts.app')

@section('title-block')Our contact - Venus Trading LTD Istambul
@endsection
@section('title-description')About our company in Turkey
@endsection

@section('content')
<!-- Contact Section -->
<section id="contact">
    <div class="container-liquid">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="section-title">
                    <h3 class="mt-0">Contacts</h3>
                    <p style="font-size: large">You can contact us on whatsapp, phone or email. Our managers will answer any your questions.</p>
                </div>
            </div>

            <div class="hidden-sm col-md-2"></div>
            <div class="col-md-8 col-sm-12">
                <h3>Company details</h3>
                <table class="tbl" style="margin: auto;">
                    <tbody>
                        <tr>
                            <td><b>Company name</b></td>
                            <td><b>VENÜS TRADİNG SAĞLIK VE MEDİKAL MALZEMELERİ SANAYİ TİCARET LİMİTED ŞİRKETİ</b></td>
                        </tr>
                        <tr>
                            <td><b>Address</b></td>
                            <td>TURKEY<br>İSTANBUL<br>BÜYÜKÇEKMECE<br>DİZDARİYE MAH. MİMAR SİNAN CAD. TOPÇUOĞLU İŞ HANI<br>BLOK NO: 26
                            </td>
                        </tr>
                        <tr>
                            <td><b>Tax number</b></td>
                            <td>9240922643</td>
                        </tr>
                        <tr>
                            <td><b>SEO</b></td>
                            <td>FERZENDE ŞEN</td>
                        </tr>
                        <tr>
                            <td>Bank</td>
                            <td>TURKIYE CUMHURIYETI ZIRAAT BANKASI A.S.</td>
                        </tr>
                        <tr>
                            <td>SWIFT</td>
                            <td>TCZBTR2A</td>
                        </tr>

                        <tr>
                            <td>Account</td>
                            <td>On demand</td>
                        </tr>
                        <tr>
                            <td>Google map</td>
                            <td><a href="https://goo.gl/maps/EMkcupdsjbn4icjdA" target="_blank" rel="nofollow">Link</a></td>
                        </tr>
                        <tr>
                            <td>Contacts</td>
                            <td>
                                <h5><b>Email</b></h5>
                                <p><a href="mailto:info@venus-turkey.com"><i class="fa fa-envelope-o" aria-hidden="true">
                                        </i> info@venus-turkey.com</a>
                                </p>
                                <h5 class="mt-3"><b>Phone</b></h5>
                                <p><a href="tel:+902128822634"><i class="fa fa-phone" aria-hidden="true">
                                        </i> +90 (212) 882-26-34</a> Office
                                </p>
                                <p><a href="tel:+905534348242"><i class="fa fa-phone" aria-hidden="true">
                                        </i> +90 (553) 434-82-42</a> Mobile
                                </p>
                                <h5><b>Whatsapp</b></h5>
                                <p><a href="https://api.whatsapp.com/send?phone=79017210711" target="_blank" rel="nofollow">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> +90 (553) 434-82-42 whatsapp</a>
                                </p>
                                <p><a href="https://api.whatsapp.com/send?phone=79017210711" target="_blank" rel="nofollow">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> +90 (555) 089-65-39 (eng whatsapp, manager)</a>
                                </p>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hidden-sm col-md-2"></div>
        </div>


        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12 text-center" style="margin-top: 50px;">

                <h3>Send question</h3>
                <form action="contact" method="post" style="margin-left: 10px; margin-right: 10px;">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="fname" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" name="femail" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="telephone" name="fphone" class="form-control" placeholder="Phone">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <select class="form-control" name="fsumma">
                            <option>Order budget, USD</option>
                            <option>50 000 to 100 000</option>
                            <option>100 000 to 1 000 000</option>
                            <option>1 000 000 to 10 000 000</option>
                            <option>10,000,000 and more</option>
                        </select>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea name="ftext" class="form-control" rows="5" placeholder="Your text"></textarea>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <input type="submit" class="form-control" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
