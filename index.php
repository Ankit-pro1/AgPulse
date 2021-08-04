<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgPulse - Market Data to Market Intelligence</title>
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Bootstrap CSS (Version--4.5.3) -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>

    <!------------------------- Navigation Section --------------------------->
    <div id="navigation-bar">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="./logo/agpulse-black-logo.png" alt="" width="230px">
                </a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-custom-icon"><i class="fas fa-bars"></i></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                                About us <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Who we are</a>
                                <a class="dropdown-item" href="#">What we do</a>
                                <a class="dropdown-item" href="#">Our Team</a>
                                <a class="dropdown-item" href="#">Presention</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-login-btn" href="#">LOGIN</a>
                        </li>

                        <!-- Dropdown -->

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-------------XX------------ Navigation Section ------------XX--------------->

    <!------------------------------ Hero Section ------------------------------->
    <div id="hero-section">
        <div class="hero-section-inner">
            <div class="container">
                <div class="row">
                    <div class="hero-content text-center">
                        <h1>MARKET DATA TO MARKET INTELLIGENCE</h1>
                        <p>AgPulse Analytica provides fundamental, technical and statistical analysis into global agriculture markets to help stakeholders make informed investment and risk management decisions</p>
                    </div>
                </div>
                <form id="hero-form" action="/action_page.php">
                    <div>
                        <input type="text" name="userName" id="userName" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div>
                        <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Enter corporate email" required>
                    </div>
                    <div class="d-flex">
                    <select name="countryCode" id="" style="width: 36%;">
                            <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
                            <option data-countryCode="US" value="1">USA (+1)</option>
                            <optgroup label="Other countries">
                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                <option data-countryCode="CN" value="86">China (+86)</option>
                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                <option data-countryCode="FR" value="33">France (+33)</option>
                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                <option data-countryCode="IN" value="91">India (+91)</option>
                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                <option data-countryCode="SI" value="963">Syria (+963)</option>
                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                            </optgroup>
                        </select>
                        <input type="tel" name="userNumber" id="userNumber" class="form-control" placeholder="phone number" required>
                    </div>
                    <div>
                        <input type="password" name="userPass" id="userPass" class="form-control" placeholder="Choose password" required>
                    </div>
                    <div>
                        <button type="submit" class="custom-btn">TRY FOR FREE</button>
                    </div>
                </form>
                <div id="form-disclaimer" class="text-center mt-2">
                    <marquee behavior="" direction="right"><span>TWO WEEK TRIAL FREE</span><span>NO CREDIT CARD REQUIRED</span></marquee>
                </div>
            </div>
        </div>
    </div>
    <!--------------XX---------------- Hero Section End---------------XX---------------->

    <!------------------------------- Coverage Section ---------------------->
    <div id="coverage-section" class="margin-top">
        <div class="coverage-section-overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="heading-title">What we cover</h1>
                </div>
                <div class="row coverage-section-items">
                    <div class="col-lg-3 col-md-6 item item1">
                        <div class="item-inner">
                            <img src="./images/pulse.jpg" alt="">
                            <div class="item-inner-content">
                                <p>Pulses</p>
                                <div class="item-inner-content-toggle">
                                    <li>Yellow Peas</li>
                                    <li>Lentils</li>
                                    <li>Kabuli Chickpe</li>
                                    <li>Desi Chickpe</li>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 item item2">
                        <div class="item-inner">
                            <img src="./images/wheat.jpg" alt="">
                            <div class="item-inner-content">
                                <p>Wheat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item item3">
                        <div class="item-inner">
                            <img src="./images/maize.jpg" alt="">
                            <div class="item-inner-content">
                                <p>Corn</p>
                                <div class="item-inner-content-toggle">
                                    <li>Corn</li>
                                    <li>Barley</li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item item4">
                        <div class="item-inner">
                            <img src="./images/musturd.jpg" alt="">
                            <div class="item-inner-content">
                                <p>Oilseeds</p>
                                <div class="item-inner-content-toggle">
                                    <li>Soyabean</li>
                                    <li>Canola(Rapeseed)</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------XX----------------- Coverage Section End ----------XX------------>

    <!-------------------------------- Subscription Section ------------------------>
    <div class="free-subscrition-section padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>TWO WEEK FREE TRIAL</h3>
                </div>
                <div class="col-md-6">
                    <button class="custom-btn" data-toggle="modal" data-target="#myModal">Subscribe Now</button>
                    <!-- Modal -->
                    <div id="myModal" class="modal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Fill the Form</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" name="userName" id="userName2" class="form-control" placeholder="Enter your name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="userEmail" id="userEmail2" class="form-control" placeholder="Enter corporate email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="userNumber" id="userNumber2" class="form-control" placeholder="Enter phone number" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="userPass" id="userPass2" class="form-control" placeholder="Choose password" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn primary-default btn-block">SIGN UP</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------XX----------------- Subscription Section End ------------XX------------>

    <!---------------------------------- Blogs Section ------------------------------------>
    <div id="blog-section" class="margin">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="heading-title">Read Our Blogs</h1>
            </div>
            <!-- First Row Containing Four Blogs -->
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Grains</h2>
                    <div class="row mb-3">
                        <!---------- Blog 1 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog1">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog1" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!---------- Blog 2 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog2">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog2" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-default btn-success">Read more</button>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2 class="text-center">Pulses</h2>
                    <div class="row mb-3">
                        <!---------- Blog 3 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog3">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog3" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------- Blog 4 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog1">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog1" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-default btn-success">Read more</button>
                    </div>
                </div>
            </div>
            <!-- seconds Row Containing Next Four Blogs -->
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Wheat</h2>
                    <div class="row  mb-3">
                        <!---------- Blog 5 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog5">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog5" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------- Blog 6 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog1">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog1" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-default btn-success">Read more</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Oilseeds</h2>
                    <div class="row  mb-3">
                        <!---------- Blog 7 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog7">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog7" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------- Blog 8 ---------->
                        <div class="col-md-6">
                            <div class="blog-content">
                                <h3 class="blog-heading">Soyoil Usage</h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span>02 Aug, 2020</span>
                                    </span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex aliquid cum voluptatem libero, sint perferendis. Voluptatem, esse incidunt. <button class="blog-btn btn-dark btn" data-toggle="modal" data-target="#moreBlog8">read more</button></p>

                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog8" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Soyoil Usage</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span>02 Aug, 2020</span>
                                                    </span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, commodi! Sit perspiciatis voluptates, cumque placeat exercitationem explicabo ipsam est corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet corporis optio quas placeat, fugiat cum reprehenderit quod ipsa recusandae iusto perspiciatis autem totam pariatur a adipisci. Sequi sapiente impedit eveniet?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-default btn-success">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------XX------------------- Blogs Section End ----------------XX-------------------->

    <!----------------------------------- Our Services Section -------------------------------->
    <div id="services-section" class="padding">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="heading-title">Our Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-content">
                        <h3 class="services-heading">WEEKLY/MONTHLY REPORT</h3>
                        <div class="services-content-inner">
                            <ul class="p-0">
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Market Commentary
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Crop Progress & Condition
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Supply Demand Sheets
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Trade Flows
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Seasonality
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Prices
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Weather Updates
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Policy Updates
                                </li>
                            </ul>
                            <div class="row justify-content-center subscribe-btn">
                                <a href="" class="btn btn-success">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-content">
                        <h3 class="services-heading">BESPOKE</h3>
                        <div class="services-content-inner">
                            <ul class="p-0">
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Specific Geography
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Individual Product Variety
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Historical Data Sets
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Trade Flow Analysis
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Acreage/Production/Yield
                                </li>
                                <li>
                                    <i class="far fa-check-circle"></i>
                                    Government Policies
                                </li>
                            </ul>
                            <div class="row justify-content-center subscribe-btn">
                                <button class="btn btn-dark" data-toggle="modal" data-target="#gitPop">Get in touch</button>
                                <!-- Modal Pop up for Get in touch -->
                                <div id="gitPop" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Get in touch</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------XX------------------- Our Services Section -------------XX----------------->

    <!------------------------------------ Twitter Feed Section ----------------------------->
    <div id="twitter-feed" class="padding">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="heading-title">Twitter Feed</h1>
            </div>
            <div class="row">
            <a class="twitter-timeline" data-width="500" data-height="500" data-theme="light" href="https://twitter.com/ankitkumar0506?ref_src=twsrc%5Etfw">Tweets by ankitkumar0506</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="twitter-content"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="twitter-content"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="twitter-content"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="twitter-content"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="twitter-content"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="twitter-content"></div>
                </div> -->
            </div>
        </div>
    </div>
    <!----------------XX-------------------- Twitter Feed Section End ---------------XX-------------->

    <!-------------------------------------- Footer Section ----------------------------------------->
    <div id="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <img src="./logo/agpulse-white-logo.png" alt="" width="230px" class="mb-2">
                        <div class="footer-content-desc">
                            <p>AgPulse Analytica provides fundamental, technical and statistical analysis into global agriculture <span id="dots">...</span><span class="footer-read-more">markets to help stakeholders make informed investment and risk management decisions</span> <span class="footer-read-more-btn">read more</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h5 class="footer-content-heading">Quick Links</h5>
                        <ul>
                            <li>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <a href="">Blogs</a>
                            </li>
                            <li>
                                <a href="">Services</a>
                            </li>
                            <li>
                                <a href="">Subscribe</a>
                            </li>
                            <li>
                                <a href="">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h5 class="footer-content-heading">Our Policy</h5>
                        <ul>
                            <li>
                                <a href="">Disclaimer</a>
                            </li>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h5 class="footer-content-heading">Office</h5>
                        <ul>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:+919368017351">+91 9368017351</a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <a href="https://goo.gl/maps/vCtPxxaftuvAWY19A">B-7 Express Green Plaza Vaishali Sector 1, Ghaziabad, Uttar Pradesh, India - 201010</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------- Footer Section ----------------------------------------->

    <!------------------------------------ Footer Footer Section --------------------------------------->
    <div id="footer-footer-section">
        <div class="container">
            <div class="row justify-content-center p-2">
                <p class="m-0">Copyright &copy; <span id="copyright-year"></span> <a href="index.php" class="text-white">AgPulse Analytica</a></p>
            </div>
        </div>
    </div>
    <!----------------------XX------------ Footer Footer Section End -----------------XX----------------->

    <!-------------------------------------- AgPulse Socials -------------------------------------------------->
    <div id="AgPulseSocials">
        <ul>
            <li><a href="https://twitter.com/TraderGJ" class="twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/company/agpulse" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="mailto:gaurav@agpulse.net" class="mail"><i class="far fa-envelope"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=%20+919368017351%20Chat%20with%20AgPulse%20Analytica" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="tel:++919368017351" class="phone"><i class="fas fa-phone"></i></a></li>
        </ul>
    </div>
    <!-------------------------------------- AgPulse Socials -------------------------------------------------->
    <!------------------------ Bootstrap JS (version 4.5.3) ----------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- External Javascript -->
    <script src="./js/main.js"></script>
</body>

</html>