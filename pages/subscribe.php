<?php include_once "header.php"; ?>
<div id="subscribe">
    <div class="container">
        <div class="row">
            <h1 class="sub-heading-title">Subscribe</h1>
        </div>
        <div class="row p-0">
            <!-- <div class="col-lg-6">
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
                    </div>
                </div>
            </div> -->
            <div class="col-12 p-0">
                <div class="subscribe-thanks">
                    <p>Thanks for your interest in the best commodity research available. We have different subscription options available. You can check it from the below tab.</p>
                    <p>If you do not see a combination of market segments you are interested in, please drop us an <a href="mailto:gaurav@agpulse.net">email</a> or <a href="tel:+919368017351" class="phone">919368017351</a> and we'll be happy to get you what you need.</p>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="row package">
            <div class="col-12 p-0">
                <div class="tabs">
                    <button class="tablinks" onclick="openCountry(event, India)">India</button>
                    <button class="tablinks" onclick="openCountry(event, International)">International</button>
                </div>
                <div id="India" class="tabcontent">
                    <form action="payment.php" method="POST">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <h4>All Markets</h4>
                                <input type="radio" name="optradio" class="form-check-input" value="All Market Quaterly $2100">
                                <span>Quaterly $2100</span>
                                <br>
                                <input type="radio" name="optradio" class="form-check-input" value="All Market Annually $2100">
                                <span>Annually $2100</span>
                            </div>
                            <div class="col-md-2 text-center">
                                <h4>Pulse</h4>
                                <input type="radio" name="optradio"  class="form-check-input" value="Pulse Quaterly $600">
                                <span>Quaterly $600</span>
                                <br>
                                <input type="radio" name="optradio"  class="form-check-input" value="Pulse Annually $1800">
                                <span>Annually $1800</span>
                            </div>
                            <div class="col-md-2 text-center">
                                <h4>Wheat</h4>
                                <input type="radio" name="optradio" class="form-check-input" value="Wheat Quaterly $600">
                                <span>Quaterly $600</span>
                                <br>
                                <input type="radio" name="optradio" class="form-check-input" value="Wheat Annually $1800">
                                <span>Annually $1800</span>
                            </div>
                            <div class="col-md-2 text-center">
                                <h4>Corn</h4>
                                <input type="radio" name="optradio" class="form-check-input" value="Corn Quaterly $600">
                                <span>Quaterly $600</span>
                                <br>
                                <input type="radio" name="optradio" class="form-check-input" value="Corn Annually $1800">
                                <span>Annually $1800</span>
                            </div>
                            <div class="col-md-2 text-center">
                                <h4>Oilseeds</h4>
                                <input type="radio" name="optradio" class="form-check-input" value="600">
                                <span>Quaterly $600</span>
                                <br>
                                <input type="radio" name="optradio" class="form-check-input" value="Oilseeds Annually $1800">
                                <span>Annually $1800</span>
                            </div>
                            <div class="col-md-2 text-center">
                                <h4>Grains & Oilseeds</h4>
                                <input type="radio" name="optradio" class="form-check-input" value="Grains & Oilseeds Quaterly $1600">
                                <span>Quaterly $1600</span>
                                <br>
                                <input type="radio" name="optradio" class="form-check-input" value="Grains & Oilseeds Annually $4800">
                                <span>Annually $4800</span>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success" value="next">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>