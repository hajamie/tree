<?php
	// Subdirectory site is in.  Set to "" if in root.  
	$subdirectory = "";
	
	header ('Content-Type: text/html; charset=iso-8859-1');
	$page = "";
	if (isset($_REQUEST['page'])) {
		$page = htmlspecialchars($_REQUEST['page']);
	}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tree Identification<?php
			if (strlen($page) > 0) {
			echo ' - '.str_replace('-', ' ', $page);
			}
		?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


		<div id="wrapper-header">
			<div id="header">
				<h1>Tree Identification</h1>
			</div>
		</div>

		<div id="wrapper-menu">
			<div id="menu">
				<ul>
					<li><a href="<?php echo $subdirectory ?>" title="Home">Home</a></li>
					<li><a href="<?php echo $subdirectory ?>/what-is-a-tree.html" title="What is a tree">What is a tree?</a></li>
					<li><a href="<?php echo $subdirectory ?>/kids-tree-identification.html" title="A kids guide to tree identification">A kids guide to tree identification</a></li>
					<li><a href="<?php echo $subdirectory ?>/leaf-tree-identification.html" title="Tree identification by leaf shape">Tree identification by leaf shape</a></li>
					<li><a href="<?php echo $subdirectory ?>/leaf-shape.html" title="Why leaves are the shape they are?">Why leaves are the shape they are?</a></li>
					<li><a href="<?php echo $subdirectory ?>/bark-tree-identification.html" title="Tree identification by bark">Tree identification by bark</a></li>
					<li><a href="<?php echo $subdirectory ?>/tree-evolution.html" title="The evolution of trees">The evolution of trees</a></li>
					<li><a href="<?php echo $subdirectory ?>/dendrology.html" title="Dendrology - the study of trees">Dendrology - the study of trees</a></li>
					<li><a href="<?php echo $subdirectory ?>/tree-benefits.html" title="The benefits of trees">The benefits of trees</a></li>
					<li><a href="<?php echo $subdirectory ?>/tree-growing-regions.html" title="Why do different trees grow in different places?">Why do different trees grow in different places?</a></li>
					<li><a href="<?php echo $subdirectory ?>/identifying-tree-health-problems.html" title="Identifying tree health problems">Identifying tree health problems</a></li>
					<li><a href="<?php echo $subdirectory ?>/elm-tree-identification.html" title="Elm Tree Identification">Elm Tree Identification</a></li>
					<li><a href="<?php echo $subdirectory ?>/fruit-trees-identification.html" title="Fruit Trees Identification">Fruit Trees Identification</a></li>
					<li><a href="<?php echo $subdirectory ?>/maple-tree-identification.html" title="Maple Tree Identification">Maple Tree Identification</a></li>
					<li><a href="<?php echo $subdirectory ?>/oak-tree-identification.html" title="Oak Tree Identification">Oak Tree Identification</a></li>
					<li><a href="<?php echo $subdirectory ?>/palm-tree-identification.html" title="Palm Tree Identification">Palm Tree Identification</a></li>
					<li><a href="<?php echo $subdirectory ?>/pine-tree-identification.html" title="Pine Tree Identification">Pine Tree Identification</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
		
			<div class="centreAlign">
				<script type="text/javascript">
					<!--
					google_ad_client = "pub-8240030949919487";
					google_alternate_color = "ccddee";
					google_ad_width = 728;
					google_ad_height = 15;
					google_ad_format = "728x15_0ads_al_s";
					google_ad_channel ="8163397857";
					google_color_border = "CCDDEE";
					google_color_bg = "CCDDEE";
					google_color_link = "000000";
					google_color_url = "000000";
					google_color_text = "000000";
					//-->
				</script>
				<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
			</div>
			
			<!-- Place this tag where you want the +1 button to render -->
			<g:plusone count="false"></g:plusone>

			<!-- Place this tag after the last plusone tag -->
			<script type="text/javascript">
				window.___gcfg = {lang: 'en-GB'};

				(function() {
					var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				})();
			</script>
		
			<?php
				$pageToInclude = "";
				$pageToIncludePart2 = "";
				if (strlen($page) > 0) {
					$pageToInclude = 'pages/'.$page.'.inc';
					$pageToIncludePart2 = 'pages/'.$page.'-part-2.inc';
					$pageToIncludePart2link = $page.'-part-2.html';
				} else {
					$pageToInclude = 'pages/index.inc';
				}
				
				if (file_exists($pageToInclude)) {
					include $pageToInclude;
					if (strlen($pageToIncludePart2) > 0 && file_exists($pageToIncludePart2)) {
						echo "<p class=\"rightAlign\"><a href=\"$pageToIncludePart2link\">Page 2</a></p>";
					}
				} else {
					echo "<h2>Page Not Found</h2>";
					echo "<strong>Unable to identify what you're looking for...</strong>";
				}
			?>
			
				<div class="google">
					<script type="text/javascript"><!--
						google_ad_client = "pub-8240030949919487";
						google_alternate_color = "ccddee";
						google_ad_width = 125;
						google_ad_height = 125;
						google_ad_format = "125x125_as";
						google_ad_type = "text";
						google_ad_channel ="8163397857";
						google_color_border = "CCDDEE";
						google_color_bg = "CCDDEE";
						google_color_link = "000000";
						google_color_url = "000000";
						google_color_text = "000000";
						//-->
					</script>
					<script type="text/javascript"
						src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
					<img class="leaf" src="img/leaf.png" alt="Leaf Identification" />
				</div>
				<div class="stretchToFooter"></div>
		</div>

		<div id="footer">
			This is the footer. 
		</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/{{JQUERY_VERSION}}/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-827049-1','auto');ga('send','pageview');
        </script>
    </body>
</html>
