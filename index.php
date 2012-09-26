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
        <title>*** TITLE ***</title>
        <meta charset="utf-8" />
        <meta name="robots" content="all">
        <meta name="description" content="*** DESCRIPTION ***"/>
        <meta name="keywords" content="*** KEYWORDS ***"/>
                
        <!-- /// VIEWPORT /// -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <?php /* FACEBOOK OG */ include_once("/plugins/load/assets/includes/facebook-open-graph.php"); ?>
        <?php /* GOOGLE PLUS SNIPPET */ include_once("/plugins/load/assets/includes/google-snippet.php"); ?>
        
        <!-- /// ICONS /// -->
        <link rel="icon" type="image/x-icon" href="/assets/images/lib/icons/favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="/assets/images/lib/icons/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" href="/assets/images/lib/icons/lib/icons/apple-touch-icon-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/lib/icons/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/lib/icons/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/lib/icons/apple-touch-icon-144x144-precomposed.png">
        
        <!-- /// CSS /// -->
        <link type="text/css" rel="stylesheet" href="/assets/css/lib/normalize.css" />  
        <link type="text/css" rel="stylesheet" href="/assets/css/lib/load.css" />
        <link type="text/css" rel="stylesheet" href="/assets/css/main.css" />    
        
        <!-- /// JS /// -->
        <script src="/assets/js/lib/jquery-1.8.2.min.js"></script>
        <script src="/assets/js/lib/modernizr-2.6.2.min.js"></script>        
        <script src="/assets/js/lib/plugins.js"></script>
        <script src="/assets/js/lib/jquery-1.0.load.js"></script>
        <script src="/assets/js/main.js"></script>
        
        <!-- /// EXAMPLE STYLES /// -->
        <style type="text/css">
            .example {
                background:url(/assets/images/load/bg-default.jpg); 
                background-size:cover !important; 
                width:100%; 
                height:100%;
            }
        </style>
        
        <!-- /// LOAD /// -->
        <script>
          $(function() {
            $('#your_plugin').load({
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