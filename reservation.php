<?php include('header.php'); ?>
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

                                            <div class="quform-elements">
                                                <div style="display:flex;">
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Name*</label>
                                                            <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                        </span>

                                                    </div>
                                                    <div class="quform-element">

                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-email">
                                                            <label>Email*</label>
                                                            <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                        </span>

                                                    </div>
                                                </div>
                                                <div style="display:flex;">
                                                    <div class="quform-element">

                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Phone*</label>
                                                            <input id="name" type="text" name="phone" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                        </span>

                                                    </div>
                                                    <div class="quform-element">

                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Pickup*</label>
                                                            <input id="name" type="text" name="pickup" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                        </span>

                                                    </div>
                                                </div>
                                                <div class="quform-element">

                                                    <br>
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <label>Destination*</label>
                                                        <input id="name" type="text" name="destination" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                    </span>

                                                </div>
                                                <div style="display:flex;">
                                                    <div class="quform-element">

                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Number of Passangers*</label>
                                                            <input id="name" type="text" name="nop" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                        </span>

                                                    </div>
                                                    <div class="quform-element">

                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Number of Lugages*</label>
                                                            <input id="name" type="text" name="nol" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                        </span>

                                                    </div>
                                                </div>
                                                <div style="display:flex;">
                                                    <div class="quform-element">

                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Vehicle*</label>
                                                            <select name="vehicle" required="required">
                                                                <option value="">Select Vehicle</option>
                                                                <option value="Black Car Service">Black Car Service</option>
                                                                <option value="Executive SUV Service">Executive SUV Service </option>
                                                                <option value="Executive Black Car Service">Executive Black Car Service </option>
                                                            </select>
                                                        </span>

                                                    </div>
                                                    <div class="quform-element">

                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Plan*</label>
                                                            <select name="plan">
                                                                <option value="">Planning</option>
                                                                <option value="Airport Pick up">Airport Pick up</option>
                                                                <option value="Airport Drop off">Airport Drop off</option>
                                                                <option value="Sight Seeing">Sight Seeing</option>
                                                                <option value="Nightout">Nightout</option>
                                                                <option value="Wedding">Wedding</option>
                                                                <option value="Bachelor Party">Bachelor Party</option>
                                                                <option value="Others(As Directed)">Others(As Directed)</option>
                                                            </select>
                                                        </span>

                                                    </div>
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <label>Date and Time*</label>
                                                            <input id="name" type="datetime-local" name="datetime" size="40" class="input1" aria-required="true" aria-invalid="false" required="required">
                                                        </span>

                                                    </div>
                                                </div>
                                                <div class="quform-element">

                                                    <br>
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <label>Message*</label>
                                                        <textarea id="message" name="message" cols="40" rows="5" class="input1" aria-invalid="false"></textarea>
                                                    </span>

                                                </div>

                                                <!-- Begin Submit button -->
                                                <div class="quform-submit">
                                                    <div class="quform-submit-inner">
                                                        <button type="submit" name="submit" class="submit-button"><span>Send</span></button>
                                                    </div>
                                                    <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
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
                                <p>highstarlimo3@gmail.com</p>
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