<!DOCTYPE html>
<html>
    <head>

        <?php require_once 'metas.php' ?>

        <link rel="stylesheet" href="css/default.css" type="text/css" />
        <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="js/jquery.jplayer.min-2.1.0.js" type="text/javascript"></script>
        <script src="js/jquery.corner-2.12.js" type="text/javascript"></script>
        <script src="js/jquery.scrollto-1.4.2.js" type="text/javascript"></script>        
        <script src="js/functions.js" type="text/javascript"></script>        
        <link rel="stylesheet" href="css/blue.monday/jplayer.blue.monday.compress.css" type="text/css"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> 
        <link rel="image_src" href="images/escucharadio.png"/>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-28147533-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <title>escuchar radio por internet gratis | radio en vivo</title>

    </head>
    <body oncontextmenu="return false;"> 

        <div id="zero"></div>
        
        <div class="_1"> 

            <div class="_2">
                <img src="images/escucharadio.png" height="41" width="359" alt="" />
                <span class="_9">
                    <span class="_10">
                        <a href="javascript:ajaxFirtsStations()" onmouseover="javascript:innerHtml(11,'todas las estaciones')" onmouseout="javascript:innerHtml(11,'')">
                            <img src="images/radio.png" height="32" width="32" alt=""/>
                        </a>
                    </span>
                    <span class="_10">
                        <a href="javascript:ajaxCookieStations();" onmouseover="javascript:innerHtml(11,'mis estaciones favoritas')" onmouseout="javascript:innerHtml(11,'')">
                            <img src="images/fav.png" height="32" width="32" alt=""/>
                        </a>
                    </span>
                    <span class="_10">
                        <a href="javascript:ajaxCountries()" onmouseover="javascript:innerHtml(11,'estaciones por pais')" onmouseout="javascript:innerHtml(11,'')">
                            <img src="images/world.png" height="32" width="32" alt="" />
                        </a>
                    </span>
                    <a href="javascript:ajaxSearch()" onmouseover="javascript:innerHtml(11,'buscar estaciones')" onmouseout="javascript:innerHtml(11,'')">
                        <img src="images/search.png" height="32" width="32" alt=""/>
                    </a>
                </span>
                <div>
                    <div id="11" class="_11"></div>
                </div>
            </div> <!-- /2 --> 

            <div class="_4">
                <div class="_5">
                    <script type="text/javascript"><!--
                        google_ad_client = "ca-pub-1035423102956365";
                        /* 300x250escucharadio */
                        google_ad_slot = "2918472177";
                        google_ad_width = 300;
                        google_ad_height = 250;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>
                <div class="_7">
                    <?php require_once 'player.php'; ?>
                    <?php require_once '6.php'; ?>
                </div>
                <div class="_6">
                    <script type="text/javascript"><!--
                        google_ad_client = "ca-pub-1035423102956365";
                        /* escucharadioRight */
                        google_ad_slot = "7056920429";
                        google_ad_width = 300;
                        google_ad_height = 250;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>
            </div> <!-- /4 -->

            <div class="_3"></div> <!-- /3 -->

            <div class="_8">

            </div> <!-- /8 -->

            <div class="_18">
                <div id="12" class="_12">

                </div>
            </div>

            <div class="_3"></div> <!-- line -->

            <div class="_27">
                <div class="_23">
                    <div class="_26">NUEVAS ESTACIONES</div>
                    <div id="45"></div>
                </div>
                <div class="_25">
                    <div class="_26">ESTACIONES MAS ESCUCHADAS</div>
                    <div id="46"></div>
                </div>
                <div class="_24">
                    <div class="_26">ESTACIONES RECIENTES</div>
                    <div id="47"></div>
                </div>
            </div>

            <div class="_3"></div> <!-- line -->

            <div class="_20">
                <br/>todos los derechos reservados de autor skuarch | las estaciones son de sus autores | <a href="14.php">terminos legales</a>
            </div>

        </div> <!-- /1 -->

    </body>
</html>
