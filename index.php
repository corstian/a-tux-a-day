<!DOCTYPE>
<html>
    <head>
        <meta encoding="utf-8" />
        <link rel="stylesheet" type="text/css" href="Reset.css" />
        <link rel="stylesheet" type="text/css" href="Style.css" />
    </head>
    <body>
        <div id="head">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style " style="padding: 12px; float: right; width: auto; margin-right: 12px;">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                <a class="addthis_counter addthis_pill_style"></a>
            </div>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ee1c32746f29e14"></script>
            <!-- AddThis Button END -->
            <h1 style="margin-left: 48px;">A Tux A Day</h1>
            <p style="margin-left: 48px;">Adicting, check it out! Every day a new tux!</p>
        </div>
        <div id="left">
            <div id="todaystux">
                <h2>Today's Tux:</h2>
                <image id="image" src="image.php" alt="Today's Tux: <?php echo(date('d F')); ?>" style="margin: auto; width: auto; height: auto;"/>
            </div>    
        </div>
        <div id="right">
            <div id="article">
                <h2>"A Tux A Day" Windows Phone App</h2>
                <p>"A Tux A Day" has an official Windows Phone app available in the marketplace. Please download it and share the tux with the world!</p>
                <a href="#" style="padding: 12px;"><img src="WindowsPhoneMarketplaceDownload.png" alt="download from marketplace" /></a>
            </div>
            <div id="article">
                <h2>"A Tux A Day" Windows Sidebar Gadget</h2>
                <p>"A Tux A Day" has also a sidebar gadget. You can download the package <a href="ATuxADayGadget.gadget">here</a> and install it onto your desktop so you see everyday a new tux right onto your desktop.</p>
            </div>
        </div>
    </body>
</html>
