<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="ie6 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 7]>   <html lang="en" class="ie7 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]>   <html lang="en" class="ie8 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]>   <html lang="en" class="ie9 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if LT IE 9]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
<html lang="en">
    <!--
    
    =====================
    .....................
    ... .................
    .. + ................
    ... ...... ..........
    ......... ^ .........
    .......... ..........
    ......... ^ .........          
    ........ ^^^ ........
    ....... ^^^^^ .......
    ...... ^^^^^^^ ......
    ..... ^^^^^^^^^ .....     
    =====================
    WITH  <3  SIMON CORRY
    =====================
    
    http://simoncorry.com
              
    -->
    <head>
        <title>jQuery Preloader | Moomba Plugins</title>
        <meta charset="utf-8" />
        <meta name="robots" content="all">
        <meta name="description" content="jQuery Preloader, a stylish way to hide content while your page loads."/>
        <meta name="keywords" content="jquery preloader, jquery preloaders, javascript preloader, css preloader, css3 preloader, html5 preloader, preload content, preload page, moomba plugins, simon corry"/>
                
        <!-- /// VIEWPORT /// -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        
        <!-- /// ICONS /// -->
        <link rel="icon" type="image/x-icon" href="assets/images/lib/icons/favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/lib/icons/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="assets/images/lib/icons/lib/icons/apple-touch-icon-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/lib/icons/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/lib/icons/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/lib/icons/apple-touch-icon-144x144-precomposed.png">
        
        <!-- /// EXAMPLE PAGE STYLES /// -->
        <style type="text/css">
            html,
            body {
                background:rgb(246,246,246); /* Recommended default */
                margin:0;
                width:100%;
                height:100%;
            }
            .example {
                background:red url(assets/images/example/bg-default.jpg); 
                background-size:cover !important; 
                width:100%;
                height:100%;
            }
        </style>    
        
        <!-- /// PLUGIN /// -->
        <link type="text/css" rel="stylesheet" href="assets/css/lib/jquery.preloader-1.0.css" />
        <script type="text/javascript" src="assets/js/lib/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="assets/js/lib/jquery.preloader-1.0.js"></script>             
        <script>
          $(function() {
            $('#your_plugin').moombaPreloader({
              type      : '1',                /* Rectangle(1), Circle(2) */
              box_color : 'rgb(254,254,254)', /* Outer shell         - CSS color values */
              bar_color : 'rgb(204,102,51)' , /* Animated properties - CSS color values */
            });
          }); 
        </script>
    </head>
    <body id="your_plugin">
        <div class="example"></div>
    </body>
</html>