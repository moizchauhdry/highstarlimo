<?php include('header.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>
    .wpcf7 select {
        padding: 16px 19px;
        width: 100% !important;
        font-size: 13px;
        border: 0px;
    }

    .limoking-page-title-wrapper .limoking-page-title {
        font-size: 35px;
    }
</style>

<div class=content-wrapper>
    <div class=limoking-content>
        <div class=above-sidebar-wrapper>
            <section id=content-section-1>
                <div class="limoking-full-size-wrapper gdlr-show-all " style="padding-bottom: 0px;  background-color: #ffffff; ">
                    <div class="limoking-item limoking-content-item" style="margin-bottom: 0px;">
                        <div class="wpgmp_map_container wpgmp-map-1" rel=map1>
                            <iframe style="width:100%; height:480px; border:0" src="https://maps.google.com/maps?q=scarsdale%20nyc%20usa&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450"></iframe>
                            <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
                            </div>
                        </div>
                        <div class=clear></div>
                        <div class=clear></div>
                    </div>
                    <div class=clear></div>
            </section>
        </div>
        <div class=with-sidebar-wrapper>
            <div class="with-sidebar-container container">
                <div class="with-sidebar-left eight columns">
                    <div class="with-sidebar-content twelve columns">
                        <section id=content-section-2>
                            <div class="section-container container">
                                <div class="limoking-item limoking-content-item" style="margin-bottom: 60px;"><span class=clear></span><span class=limoking-space style="margin-top: -22px; display: block;"></span>
                                    <h5 class="limoking-heading-shortcode " style="font-weight: bold;">Please fulfil the form below for reservation.</h5>
                                    <p> <span class=clear></span><span class=limoking-space style="margin-top: 25px; display: block;"></span>
                                    <div role=form class=wpcf7 id=wpcf7-f5-o1 lang=en-US dir=ltr>
                                        <div class=screen-reader-response></div>
                                        <form class="quform" action="process.php" method="post" enctype="multipart/form-data" onclick="">

                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="name" type="text" name="phone" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Phone*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="name" type="text" name="pickup" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Pickup Address*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="name" type="text" name="destination" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Destination Address*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="name" type="datetime-local" name="datetime" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Date and Time*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="name" type="text" name="nop" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Number of Passangers*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input id="name" type="text" name="nol" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Number of Luggages*" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <select name="vehicle">
                                                        <option>Select Vehicle</option>
                                                        <option>Luxury Sedan</option>
                                                        <option>Sports Utility Vehicle </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <select name="plan">
                                                        <option>Planning</option>
                                                        <option>Airport Pick up</option>
                                                        <option>Airport Drop off</option>
                                                        <option>Sight Seeing</option>
                                                        <option>Nightout</option>
                                                        <option>Wedding</option>
                                                        <option>Bachelor Party</option>
                                                        <option>Others(As Directed)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <textarea id="message" name="message" cols="40" rows="5" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 mt-4">
                                                    <button type="submit" name="submit" class="submit-button text-center "><span>Send</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </p>
                                </div>
                                <div class=clear></div>
                            </div>
                        </section>
                    </div>
                    <div class=clear></div>
                </div>
                <div class="limoking-sidebar limoking-right-sidebar four columns">
                    <div class="limoking-item-start-content sidebar-right-item">

                        <div id=text-7 class="widget widget_text limoking-item limoking-widget">
                            <h3 class="limoking-widget-title">Contact Information</h3>
                            <div class=clear></div>
                            <div class=textwidget>
                                <p style="font-weight:bold;">Highstar Limousine Services</p>
                                <p>Office Hours: 24 hours, Monday till Sunday</p>
                                <p style="font-weight:bold;">Call us anytime or leave us a message.</p>
                                <p>We will get back to you shortly!</p>
                                <p>(914)202-0910</p>
                                <p>info@highstarlimo.com</p>
                                <p>Scarsdale NYC</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=clear></div>
            </div>
        </div>

        <div class=clear></div>
        </section>
    </div>
</div>
<div class=clear></div>
</div>

<?php include('footer.php'); ?>