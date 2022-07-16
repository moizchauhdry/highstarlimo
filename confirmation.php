<?php include('header.php');?>

<?php if(isset($_GET['transactionId'])){?>
    <div class="limoking-page-title-wrapper header-style-2-title-wrapper">
        <div class=limoking-page-title-overlay></div>
        <div class="limoking-page-title-container container">
            <h1 class="limoking-page-title" style="margin-top:70px;margin-bottom:70px;">Thank you for your payment</h1></div>
    </div>
    
    
   <section id=content-section-6>
                    <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin" id=limoking-parallax-wrapper-3 data-bgspeed=0 style="padding-top: 70px; ">
                        <div class=container>
                            <div class=limoking-title-item>
                                <div class="limoking-item-title-wrapper limoking-item  limoking-center-divider limoking-medium ">
                                    <div class="limoking-item-title-container container">
                                        <div class=limoking-item-title-head-inner>
                                            <div class="limoking-item-title-center-divider limoking-left"></div>
                                            <h3 class="limoking-item-title limoking-skin-title limoking-skin-border" style="color:black;">Payment Confirmation</h3>
                                            <div class="limoking-item-title-center-divider limoking-right"></div>
                                        </div>
                                        <div class="limoking-item-title-caption limoking-skin-info" style="color:black;">We have recieved your payment. Our team will contact you soon.</div>
                                    </div>
                                </div>
                            </div>
                            <div class=clear></div>
                            <div class=clear></div>
                        </div>
                    </div>
                    <div class=clear></div>
                </section>
<?php }else{?>
    <div class="limoking-page-title-wrapper header-style-2-title-wrapper">
        <div class=limoking-page-title-overlay></div>
        <div class="limoking-page-title-container container">
            <h1 class="limoking-page-title" style="margin-top:70px;margin-bottom:70px;">Payment Declined</h1></div>
    </div>
    
    
   <section id=content-section-6>
                    <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin" id=limoking-parallax-wrapper-3 data-bgspeed=0 style="padding-top: 70px; ">
                        <div class=container>
                            <div class=limoking-title-item>
                                <div class="limoking-item-title-wrapper limoking-item  limoking-center-divider limoking-medium ">
                                    <div class="limoking-item-title-container container">
                                        <div class=limoking-item-title-head-inner>
                                            <div class="limoking-item-title-center-divider limoking-left"></div>
                                            <h3 class="limoking-item-title limoking-skin-title limoking-skin-border" style="color:black;">Payment Declined</h3>
                                            <div class="limoking-item-title-center-divider limoking-right"></div>
                                        </div>
                                        <div class="limoking-item-title-caption limoking-skin-info" style="color:black;">Your payment was declined due to some reason. Once your card is working try using the same payment link again.</div>
                                    </div>
                                </div>
                            </div>
                            <div class=clear></div>
                            <div class=clear></div>
                        </div>
                    </div>
                    <div class=clear></div>
                </section>
<?php }?>

    <?php include('footer.php');?>