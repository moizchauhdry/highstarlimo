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
        font-size: 45px;
    }

    .rsv-lable {
        font-weight: 600;
    }

    .hidden {
        display: none !important;
    }
</style>

<div class=content-wrapper>
    <div class=limoking-content>
        <div class="limoking-page-title-wrapper header-style-2-title-wrapper" style="background-image:url(../images/reservation.jpg);">
            <div class=limoking-page-title-overlay></div>
            <div class="limoking-page-title-container container">
                <h1 class="limoking-page-title" style="margin-top:70px;margin-bottom:70px;">ONLINE RESERVATION</h1>
            </div>
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
                                                    <label class="rsv-lable">Name*</label>
                                                    <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Email*</label>
                                                    <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Phone*</label>
                                                    <input id="name" type="text" name="phone" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Pickup*</label>
                                                    <input id="name" type="text" name="pickup" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Destination*</label>
                                                    <input id="name" type="text" name="destination" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Number of Passangers*</label>
                                                    <input id="name" type="text" name="nop" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Number of Luggages*</label>
                                                    <input id="name" type="text" name="nol" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Date and Time*</label>
                                                    <input id="name" type="datetime-local" name="datetime" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Vehicle*</label>
                                                    <select name="vehicle" required="required">
                                                        <option value="" selected>Select Vehicle</option>
                                                        <option value="Black Car Service">Black Car Service</option>
                                                        <option value="Executive SUV Service">Executive SUV Service </option>
                                                        <option value="Executive Black Car Service">Executive Black Car Service </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label class="rsv-lable">Plan*</label>
                                                    <select name="plan" id="rsv_plan">
                                                        <option value="" selected>Select Plan</option>
                                                        <option value="Airport Pick up">Airport Pick up</option>
                                                        <option value="Airport Drop off">Airport Drop off</option>
                                                        <option value="Sight Seeing">Sight Seeing</option>
                                                        <option value="Nightout">Nightout</option>
                                                        <option value="Wedding">Wedding</option>
                                                        <option value="Bachelor Party">Bachelor Party</option>
                                                        <option value="Others(As Directed)">Others(As Directed)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12 hidden" id="flight_no_div">
                                                    <label class="rsv-lable">Flight Number</label>
                                                    <input id="flight_no" type="text" name="flight_no">
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <label class="rsv-lable">Message*</label>
                                                    <textarea id="message" name="message" cols="40" rows="5" class="input1" aria-invalid="false"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group text-center mt-4">
                                                    <button type="submit" name="submit" class="submit-button"><span>Send</span></button>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
    $('#rsv_plan').change(function(e) {
        e.preventDefault();
        var plan = $(this).val();
        if (plan == 'Airport Pick up' || plan == 'Airport Drop off') {
            $("#flight_no_div").removeClass('hidden');
        } else {
            $("#flight_no_div").addClass('hidden');
        }
    });
</script>
<?php include('footer.php'); ?>