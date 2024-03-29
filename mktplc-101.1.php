<?php

/* Understanding the Civic Commons Marketplace API
/  based on:
/  http://marketplace.civiccommons.org/api
/  
/  @TODO put more informative stuff here
*/

// includes and libraries and stuff



// mission-abort conditions



// generate opening HTML
?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Learning about the Civic Commons Marketplace API</title>
  <meta name="description" content="Live documentation for the Civic Commons Marketplace API">
  <meta name="author" content="James Craner" >

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
       
</head>
<body>

  <div id="container">
  
    <header>
<h1 id="page_title">Civic Commons Marketplace API Explorer</h1>
<p>Based on <a href="http://marketplace.civiccommons.org/api" target="_BLANK"> Civic Commons Marketplace API documentation</a><br />
Contact jim -- at -- codeforamerica.org for more info about this Explorer.</p>
    </header>
    
    <div id="options">
    <h2>Query-building</h2>
<p><em>Select from the following options to build your API query.  The resulting query will be displayed below.</em></p>
    </div><!-- end options div -->
    
    
    <div id="query">
    <h2>API Query</h2>
<p><em>The resulting API query, based on the selections above, is:</em></p>
    
    </div><!-- end query div -->
    
    
    <div id="results">
		<h2>Query Results</h2>    
<p><em>Live query results are displayed below.</em></p>
    </div> <!-- end results div -->
    
  <footer>

  </footer>
    
        
    
    
    </div><!-- end container div -->



<!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  
  
</body></html>

    