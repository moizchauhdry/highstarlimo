    <?php
    $url = $_SERVER['REQUEST_URI'];

    // *****************************************
    // **************** HOME PAGE **************
    // *****************************************
    if ($url == '/') { ?>
        <meta name="title" content="home">
        <meta name="description" content="home">
        <meta name="keyword" content="home">
    <?php  }

    // *****************************************
    // ************ ABOUT US PAGE **************
    // *****************************************
    else if ($url == '/about-us.php') { ?>
        <meta name="title" content="about">
        <meta name="description" content="about">
        <meta name="keyword" content="about">
    <?php }

    // *****************************************
    // ************ FLEET PAGE *****************
    // *****************************************
    else if ($url == '/our-fleet.php') { ?>
        <meta name="title" content="fleet">
        <meta name="description" content="fleet">
        <meta name="keyword" content="fleet">
    <?php }

    // *****************************************
    // ************ RESERVATION PAGE **************
    // *****************************************
    else if ($url == '/reservation.php') { ?>
        <meta name="title" content="reservation">
        <meta name="description" content="reservation">
        <meta name="keyword" content="reservation">
    <?php }

    // *****************************************
    // ************ CONTACT PAGE ***************
    // *****************************************
    else if ($url == '/contact-us.php') { ?>
        <meta name="title" content="contact">
        <meta name="description" content="contact">
        <meta name="keyword" content="contact">
    <?php }

    ?>