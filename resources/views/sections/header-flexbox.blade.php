{{--<div class="container-fluid nav-container">--}}
    {{--<nav>--}}
        {{--<ul class="bar">--}}
            {{--<li class="icon">--}}
                {{--<a href="#">HOTEL SURETTA</a>--}}
            {{--</li>--}}
            {{--<li class="icon">--}}
                {{--<a href="#">SONDER ANGEBOTE</a>--}}
            {{--</li>--}}
            {{--<li class="icon">--}}
                {{--<a href="#">WINTER SAISON</a>--}}
            {{--</li>--}}
            {{--<li class="icon logo">--}}
                {{--<a href="{{ url('/') }}"><img src="{{ asset('assets/images/svg/Surreta_Logo.svg') }}" alt="" width="320"></a>--}}
            {{--</li>--}}
            {{--<li class="icon">--}}
                {{--<a href="#">SOMMER SAISON</a>--}}
            {{--</li>--}}
            {{--<li class="icon">--}}
                {{--<a href="#">PREISE</a>--}}
            {{--</li>--}}
            {{--<li class="icon">--}}
                {{--<a href="#">KONTAKT</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</nav>--}}
{{--</div>--}}

<header class="site-header">
    <div class="site-header-navbar">
        <div class="container-desktop">
            <div class="site-header-brand">
                <a href="http://suretta.ithedesign.com"><img src="http://suretta.ithedesign.com/themes/suretta/assets/images/logo.svg" alt="Hotel Suretta" width="320"></a>
            </div>

            <nav class="site-header-nav">

                <nav class="site-header-nav">
                    <ul>
                        <li class="site-header-nav-menu">Menu</li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><span>HOTEL SURETTA</span></a>

                            <div class="dropdown-menu">
                                <div class="container-desktop">
                                    <ul>
                                        <li class="site-header-nav-menu">Zuruck</li>
                                        <li>
                                            <a href="http://suretta.ithedesign.com/hotel-suretta/vorstellung/"><span>VORSTELLUNG</span></a>
                                        </li>

                                        <li>
                                            <a href="http://suretta.ithedesign.com/hotel-suretta/umgebung/"><span>UMGEBUNG</span></a>
                                        </li>

                                        <li>
                                            <a href="http://suretta.ithedesign.com/hotel-suretta/restaurant/"><span>RESTAURANT</span></a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown"><span>ZIMMER</span></a>

                                            <div class="dropdown-menu">
                                                <div class="container-desktop">
                                                    <ul>
                                                        <li class="site-header-nav-menu">Zuruck</li>
                                                        <li>
                                                            <a href="http://suretta.ithedesign.com/hotel-suretta/zimmer/einzelbett/"><span>EINZELBETT</span></a>
                                                        </li>

                                                        <li>
                                                            <a href="http://suretta.ithedesign.com/hotel-suretta/zimmer/doppelbett/"><span>DOPPELBETT</span></a>
                                                        </li>

                                                        <li>
                                                            <a href="http://suretta.ithedesign.com/hotel-suretta/zimmer/dreibett/"><span>DREIBETT</span></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </li>

                                        <li>
                                            <a href="http://suretta.ithedesign.com/hotel-suretta/gastgeber/"><span>GASTGEBER</span></a>
                                        </li>

                                        <li>
                                            <a href="http://suretta.ithedesign.com/hotel-suretta/gada-bar/"><span>GADA BAR</span></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </li>

                        <li>
                            <a href="http://suretta.ithedesign.com/sonder-angebote/"><span>SONDER ANGEBOTE</span></a>
                        </li>

                        <li>
                            <a href="http://suretta.ithedesign.com/winter-saison/"><span>WINTER SAISON</span></a>
                        </li>

                        <li class="site-header-nav-brand"><a href="http://suretta.ithedesign.com"><img src="http://suretta.ithedesign.com/themes/suretta/assets/images/logo.svg" alt="Hotel Suretta"></a></li>
                        <li>
                            <a href="http://suretta.ithedesign.com/sommer-saison/"><span>SOMMER SAISON</span></a>
                        </li>

                        <li>
                            <a href="http://suretta.ithedesign.com/preise/"><span>PREISE</span></a>
                        </li>

                        <li>
                            <a href="http://suretta.ithedesign.com/kontakt/"><span>KONTAKT</span></a>
                        </li>

                    </ul>
                </nav>            </nav>

            <div class="site-header-nav-toggle">
                <div class="site-header-nav-toggle-bar"></div>
                <div class="site-header-nav-toggle-bar"></div>
                <div class="site-header-nav-toggle-bar"></div>
            </div>
        </div>
    </div>

    <div class="site-header-booking">
        <div class="container">
            <div class="row">
                <div class="col-md-2 site-header-viamala">
                    <a href="http://suretta.ithedesign.com/" target="_blank"><img src="http://suretta.ithedesign.com/themes/suretta/assets/images/viamala.png"></a>
                </div>
                <div class="col-md-10">
                    <form action="http://suretta.ithedesign.com/booking/" method="post" class="form-inline">
                        <div class="input-group">
                            <div class="form-group">
                                <label class="text-italic">Check-in</label>
                                <input type="text" name="check_in" class="form-control form-control--dark form-datepicker form-datepicker--check-in-dark" value="11/01/2016">
                            </div>
                            <div class="form-group">
                                <label class="text-italic">Check-out</label>
                                <input type="text" name="check_out" class="form-control form-control--dark form-datepicker form-datepicker--check-out-dark" value="11/08/2016">
                            </div>
                        </div>
                        <div class="form-group" style="margin-left: 40px">
                            <label class="text-italic">Erwachsene</label>
                            <select name="adults" class="form-control form-select form-control--dark" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><div class="chosen-container chosen-container-single form-control form-select form-control--dark chosen-container-single-nosearch" style="width: ;" title=""><a class="chosen-single"><span>1</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
                        </div>
                        <div class="form-group" style="margin-left: 25px">
                            <label class="text-italic">Kinder</label>
                            <select name="children" class="form-control form-select form-control--dark" style="display: none;">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="0">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><div class="chosen-container chosen-container-single form-control form-select form-control--dark chosen-container-single-nosearch" style="width: ;" title=""><a class="chosen-single"><span>0</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
                        </div>
                        <div class="form-group" style="margin-left: 40px">
                            <label class="text-italic">Zimmer</label>
                            <select name="room" class="form-control form-control--dark form-select form-select--bed" style="display: none;">
                                <option value="1">EINZELBETT</option>
                                <option value="2">Doppelbett</option>
                                <option value="3">Dreibett</option>
                                <option value="4">Vierbett</option>
                            </select><div class="chosen-container chosen-container-single form-control form-control--dark form-select form-select--bed chosen-container-single-nosearch" style="width: ;" title=""><a class="chosen-single"><span>EINZELBETT</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chosen-results"></ul></div></div>
                        </div>
                        <div class="form-group" style="margin-left: 50px">
                            <label>&nbsp;</label>
                            <button class="btn btn-dark btn-sm">BUCHEN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>