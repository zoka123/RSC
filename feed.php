<!DOCTYPE html>
<html lang="en">
<head>
    <title>RSC</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:title"
          content="Ready, Steady, Code! - Studentsko natjecanje"/>
    <meta property="og:site_name" content="Ready, Steady, Code!"/>
    <meta property="og:url"
          content="http://rsc.foi.hr"/>
    <meta property="og:description" content="Ready, steady, code! je studentsko natjecanje u kojem sudionici pokazuju svoje znanje i vještine razvoja
        programskih proizvoda. Natjecanje traje intenzivnih 24 sata tokom kojih natjecatelji rješavaju zadani problem
        nakon čega svoje rješenje prezentiraju stručnom žiriju koji se sastoji od stručnjaka iz privrede i akademske
        zajednice."/>
    <meta property="og:image"
          content="http://rsc.foi.hr/images/FB/fb_profile.png"/>
    <meta property="og:type" content="website"/>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!--== CSS Files ==-->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/flexslider.css" rel="stylesheet" media="screen">
    <link href="css/fancySelect.css" rel="stylesheet" media="screen">
    <link href="css/flipclock.css" rel="stylesheet" media="screen">
    <link href="css/responsive.css" rel="stylesheet" media="screen">

    <!--== Google Fonts ==-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin-ext,latin' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54414bba5feb262b"></script>
</head>
<body>
<div class="content">
    <div class="">
        <section id="schedule" class="clearfix col-sm-6">

            <div class="text-center">
                <div id="countdown-container">
                    <br/>
                    <br/>
                    <br/>

                    <h3 class="">Još samo</h3>
                    <br/>

                    <div class="your-clock"></div>
                    <h3 class="">do kraja natjecanja</h3>
                </div>
            </div>
        </section>

        <section class="col-sm-6" style="margin-top:0px">
            <iframe name="feed-iframe" id="feed-iframe"
                    src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FReadySteadyCode&amp;width&amp;height=750&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=557565797709500"
                ></iframe>
        </section>


        <!--== Javascript Files ==-->
        <script src="js/jquery-2.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flipclock.min.js"></script>

        <script>

            var now = new Date(); // 9:00 AM
            now.setTime(now.getTime());

            //var end = new Date("Nov 11, 2014 23:59:59 GMT+01:00");
            var end = new Date("Nov 23, 2014 10:00:00 GMT+01:00");

            var diff = end - now;
            if (diff > 0) {
                diff = diff / 1000;
                var clock = $('.your-clock').FlipClock(diff, {
                    clockFace: 'DailyCounter',
                    countdown: true,
                    language: 'Croatian'
// ... your options here
                });

            }

            setInterval(refreshIframe2, 15000);
            function refreshIframe2() {
                var frame = document.getElementById("feed-iframe");
                frame.src = frame.src;
            }

        </script>

</body>
</html>