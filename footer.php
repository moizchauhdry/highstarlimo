<footer class=footer-wrapper>
    <div class="footer-container container">
        <div class="footer-column four columns" id=footer-widget-1>
            <div id=text-5 class="widget widget_text limoking-item limoking-widget">
                <h3 class="limoking-widget-title">About Us</h3>
                <div class=clear></div>
                <div class=textwidget>
                    <p>Highstar Limo is perfessional limousine service in New York city and surrounding areas</p>
                    <p><img src=images/logo.png style="width: 170px;" alt></p>
                </div>
            </div>
        </div>
        <div class="footer-column four columns" id=footer-widget-2>
            <div id=text-9 class="widget widget_text limoking-item limoking-widget">
                <h3 class="limoking-widget-title">Contact Info</h3>
                <div class=clear></div>
                <span class=limoking-space style="margin-top: 10px; display: block;"></span><i class="limoking-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> (914)202-0910<span class=clear></span><span class=limoking-space style="margin-top: 10px; display: block;"></span><i class="limoking-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> highstarlimo3@gmail.com
                <span class=limoking-space style="margin-top: 10px; display: block;"></span><i class="limoking-icon fa fa-map-marker" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> Scarsdale NYC<span class=clear></span>
            </div>
        </div>
    </div>
    <div class="footer-column four columns" id=footer-widget-3>
        <div id=recent-posts-5 class="widget widget_recent_entries limoking-item limoking-widget">
            <h3 class="limoking-widget-title">Our Services</h3>
            <div class=clear></div>
            <p>Highstar Limousine Inc. We provide an excellent service to our customers for Connecticut Limo Services, Westchester Limo Services, Airport Limo Service, JFK Limo Service, LGA Limo Service</p>
        </div>
    </div>

    <div class=clear></div>
    </div>
    <div class=copyright-wrapper>
        <div class="copyright-container container">
            <div class=copyright-left> Copyright 2022 All Right Reserved</div>
            <div class=copyright-right>
                <a href="https://www.facebook.com/highstarlimo/" class="fa fa-facebook" style="margin-right:5px;font-size:20px;"></a>
                <a href="javascript:void;" class="fa fa-instagram" style="font-size:20px;margin-right:5px;"></a>
                <a href="javascript:void;" class="fa fa-twitter" style="font-size:20px;"></a>
            </div>
            <div class=clear></div>
        </div>
    </div>

    <div class="whatsapp" id="whatsapp-img" style="display: block;">
        <a href="https://api.whatsapp.com/send?phone=13477242108" target="_blank">
            <img src="https://www.parklaneproperties.com/userfiles/templates/plp/assets/images/whatsapp.png" alt="whatsapp"></a>
    </div>
</footer>
</div>
<script src='js/jquery/jquery.js'></script>
<script src='js/jquery/jquery-migrate.min.js'></script>
<script>
    var ms_grabbing_curosr = 'plugins/masterslider/public/assets/css/common/grabbing.html',
        ms_grab_curosr = 'plugins/masterslider/public/assets/css/common/grab.html';
</script>
<script>
    (function(url) {
        if (/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)) {
            return;
        }
        var addEvent = function(evt, handler) {
            if (window.addEventListener) {
                document.addEventListener(evt, handler, false);
            } else if (window.attachEvent) {
                document.attachEvent('on' + evt, handler);
            }
        };
        var removeEvent = function(evt, handler) {
            if (window.removeEventListener) {
                document.removeEventListener(evt, handler, false);
            } else if (window.detachEvent) {
                document.detachEvent('on' + evt, handler);
            }
        };
        var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
        var logHuman = function() {
            if (window.wfLogHumanRan) {
                return;
            }
            window.wfLogHumanRan = true;
            var wfscr = document.createElement('script');
            wfscr.type = 'text/javascript';
            wfscr.async = true;
            wfscr.src = url + '&r=' + Math.random();
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(wfscr);
            for (var i = 0; i < evts.length; i++) {
                removeEvent(evts[i], logHuman);
            }
        };
        for (var i = 0; i < evts.length; i++) {
            addEvent(evts[i], logHuman);
        }
    });
</script>


<script src='plugins/superfish/js/superfish.js'></script>
<script src='js/hoverIntent.min.js'></script>
<script src='plugins/dl-menu/modernizr.custom.js'></script>
<script src='plugins/dl-menu/jquery.dlmenu.js'></script>
<script src='plugins/jquery.easing.js'></script>
<script src='plugins/fancybox/jquery.fancybox.pack.js'></script>
<script src='plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
<script src='plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
<script src='plugins/flexslider/jquery.flexslider.js'></script>
<script src='plugins/jquery.isotope.min.js'></script>
<script src='js/plugins.js'></script>

<script src='js/master.js'></script>
<script src='plugins/jquery.transit.min.js'></script>
<script src='plugins/gdlr-car/gdlr-car-script.js'></script>


<script>
    jQuery(function() {
        var masterslider_d1da = new MasterSlider();

        // slider controls
        masterslider_d1da.control('arrows', {
            autohide: true,
            overVideo: true
        });
        masterslider_d1da.control('bullets', {
            autohide: false,
            overVideo: true,
            dir: 'h',
            align: 'bottom',
            space: 6,
            margin: 25
        });
        // slider setup
        masterslider_d1da.setup("MS5c9b6f3967f07", {
            width: 1140,
            height: 700,
            minHeight: 0,
            space: 0,
            start: 1,
            grabCursor: false,
            swipe: true,
            mouse: false,
            keyboard: true,
            layout: "fullwidth",
            wheel: false,
            autoplay: false,
            instantStartLayers: false,
            mobileBGVideo: false,
            loop: true,
            shuffle: false,
            preload: 0,
            heightLimit: true,
            autoHeight: false,
            smoothHeight: true,
            endPause: false,
            overPause: true,
            fillMode: "fill",
            centerControls: true,
            startOnAppear: false,
            layersMode: "center",
            autofillTarget: "",
            hideLayers: false,
            fullscreenMargin: 0,
            speed: 20,
            dir: "h",
            parallaxMode: 'swipe',
            view: "basic"
        });



        jQuery("head").append("<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />");

        window.masterslider_instances = window.masterslider_instances || {};
        window.masterslider_instances["5_d1da"] = masterslider_d1da;
    });
</script>

<script>
    jQuery(function() {
        var masterslider_d1da2 = new MasterSlider();

        // slider setup
        masterslider_d1da2.setup("MS5c9b6f396d4d0", {
            width: 1140,
            height: 660,
            minHeight: 0,
            space: 0,
            start: 1,
            grabCursor: false,
            swipe: true,
            mouse: false,
            keyboard: true,
            layout: "fullwidth",
            wheel: false,
            autoplay: false,
            instantStartLayers: false,
            mobileBGVideo: false,
            loop: true,
            shuffle: false,
            preload: 0,
            heightLimit: true,
            autoHeight: false,
            smoothHeight: true,
            endPause: false,
            overPause: true,
            fillMode: "fill",
            centerControls: true,
            startOnAppear: false,
            layersMode: "center",
            autofillTarget: "",
            hideLayers: false,
            fullscreenMargin: 0,
            speed: 20,
            dir: "h",
            parallaxMode: 'swipe',
            view: "basic"
        });


        window.masterslider_instances = window.masterslider_instances || {};
        window.masterslider_instances["5_d1da"] = masterslider_d1da2;
    });
</script>


</body>

<!-- Mirrored from max-themes.net/demos/limoking/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 09:42:44 GMT -->

</html>