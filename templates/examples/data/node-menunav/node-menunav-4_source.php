<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>YUI Library Examples: MenuNav Node Plugin</title>

<?php
	if ($ydn) {
?>
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?<?php echo $yuiCurrentVersion; ?>/build/cssreset/reset-min.css&<?php echo $yuiCurrentVersion; ?>/build/cssfonts/fonts-min.css&<?php echo $yuiCurrentVersion; ?>/build/cssgrids/grids-min.css&<?php echo $yuiCurrentVersion; ?>/build/cssbase/base-min.css">
<?php
	}
	else {
?>
		<link rel="stylesheet" type="text/css" href="<?php echo $buildDirectory; ?>cssreset/reset-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $buildDirectory; ?>cssfonts/fonts-min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $buildDirectory; ?>cssgrids/grids-min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $buildDirectory; ?>cssbase/base-min.css">
<?php
	}
?>
		<link rel="stylesheet" type="text/css" href="<?php echo $assetsDirectory; ?>node-menunav-examples-base.css">

		<!-- YUI Seed -->
		<script type="text/javascript" src="<?php echo $buildDirectory; ?>yui/yui.js"></script>

		<script type="text/javascript">

			//	Call the "use" method, passing in "node-menunav".  This will load the 
			//	script and CSS for the MenuNav Node Plugin and all of the required 
			//	dependencies.

			YUI(<?php echo $yuiConfig ?>).use(<?php echo $requiredModules; ?>, function(Y) {

				//	Use the "contentready" event to initialize the menu when the subtree of 
				//	element representing the root menu (<div id="productsandservices">) is ready to 
				//	be scripted.

				Y.on("contentready", function () {

					//	The scope of the callback will be a Node instance representing 
					//	the root menu (<div id="productsandservices">).  Therefore, since "this"
					//	represents a Node instance, it is possible to just call "this.plug"
					//	passing in a reference to the MenuNav Node Plugin.

					this.plug(Y.plugin.NodeMenuNav, { autoSubmenuDisplay: false, mouseOutHideDelay: 0 });

				}, "#productsandservices");

			});
		
		</script>

    </head>
    <body class="yui-skin-sam">

		<div class="yui-d0">					

			<h1>Header</h1>

			<div class="yui-t1">

				<div class="yui-main">
					<div class="yui-b">

					   <div id="productsandservices" class="yui-menu yui-menu-horizontal yui-splitbuttonnav">
							<div class="yui-menu-content">
								<ul>
									<li>

										<span class="yui-menu-label">
											<a href="http://answers.yahoo.com">Answers</a>
											<a href="#answers-options" class="yui-menu-toggle">Answers Options</a>
										</span>											

										<div id="answers-options" class="yui-menu">
											<div class="yui-menu-content">
												<ul>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://answers.yahoo.com/dir/">Answer</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://answersonthestreet.yahoo.com/">Answers on the Street</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://answers.yahoo.com/question/;_ylt=Av3Nt22Mr7YNs651NWFv8YUPzKIX;_ylv=3?link=ask">Ask</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://answers.yahoo.com/dir/;_ylt=Aqp_jJlsYDP7urcq2WGC6HBJxQt.;_ylv=3?link=over&amp;amp;more=y">Discover</a></li>
												</ul>
											</div>
										</div>

									</li>

									<li>

										<span class="yui-menu-label">
											<a href="http://www.flickr.com">Flickr</a>
											<a href="#flickr-options" class="yui-menu-toggle">Flickr Options</a>
										</span>									
										
										<div id="flickr-options" class="yui-menu">
											<div class="yui-menu-content">
												<ul>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.flickr.com/explore/">Explore</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.flickr.com/groups/">Groups</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.flickr.com/photos/organize/">Organize Your Photos</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://flickr.com/photos/friends/">Photos From Contacts</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.flickr.com/signup/">Sign Up</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.flickr.com/tour/">Take a Tour</a></li>
												</ul>
											</div>
										</div>

									</li>

									<li>

										<span class="yui-menu-label">
											<a href="http://www.jumpcut.com/">Jumpcut</a>
											<a href="#jumpcut-options" class="yui-menu-toggle">Jumpcut Options</a>
										</span>									
										
										<div id="jumpcut-options" class="yui-menu">
											<div class="yui-menu-content">
												<ul>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.jumpcut.com/explore/?type=">Explore</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.jumpcut.com/groups/">Groups</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.jumpcut.com/create/">Make a Movie</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.jumpcut.com/explore/?type=movie&amp;amp;sort=rank&amp;amp;viewtype=thumb&amp;amp;pcount=1">Recently Popular Movies</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://www.jumpcut.com/upload/">Upload</a></li>
												</ul>
											</div>
										</div>

									</li>

									<li>

										<span class="yui-menu-label">
											<a href="http://mobile.yahoo.com">Mobile</a>
											<a href="#mobile-options" class="yui-menu-toggle">Mobile Options</a>
										</span>									
										
										<div id="mobile-options" class="yui-menu">
											<div class="yui-menu-content">
												<ul>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://mobile.yahoo.com/developers">Developers Home</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://mobile.yahoo.com/mail">Mail</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://mobile.yahoo.com/gallery">Widget Gallery</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://mobile.yahoo.com/oneconnect">Y! oneConnect</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://mobile.yahoo.com/go">Yahoo! Go</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://mobile.yahoo.com/iphone">Yahoo! on the iPhone</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://mobile.yahoo.com/mail">More Mobile Services</a></li>
												</ul>
											</div>
										</div>

									</li>

									<li>

										<span class="yui-menu-label">
											<a href="http://upcoming.yahoo.com/">Upcoming</a>
											<a href="#upcoming-options" class="yui-menu-toggle">Upcoming Options</a>
										</span>									
										
										<div id="upcoming-options" class="yui-menu">
											<div class="yui-menu-content">
												<ul>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://upcoming.yahoo.com/event/add/">Add New Event</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://upcoming.yahoo.com/event/">Events</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://upcoming.yahoo.com/friend/">Friends</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://upcoming.yahoo.com/group/">Groups</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://upcoming.yahoo.com/place/">Places</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://upcoming.yahoo.com/popular/">Popular</a></li>
												</ul>
											</div>
										</div>

									</li>

									<li>

										<span class="yui-menu-label">
											<a href="http://forgood.yahoo.com/index.html">Yahoo! for Good</a>
											<a href="#for-good-options" class="yui-menu-toggle">Yahoo! for Good Options</a>
										</span>									
										
										<div id="for-good-options" class="yui-menu">
											<div class="yui-menu-content">
												<ul>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/take_action/donate.html">Donate</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/everyday_heroes/index.html">Everyday Heroes</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/go_green/index.html">Go Green</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/good_causes/index.html">Good Causes</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/purple_acts/index.html">Purple Acts</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/social_responsibility/index.html">Social Responsibility</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/take_action/index.html">Take Action</a></li>
													<li class="yui-menuitem"><a class="yui-menuitem-content" href="http://forgood.yahoo.com/take_action/volunteer.html">Volunteer</a></li>
												</ul>
											</div>
										</div>

									</li>
									
								</ul>            
							</div>
						</div>

						<p class="first-of-type">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<form>

							<div>
								<label for="field-1">Field One</label>
								<input type="text" id="field-1" name="field-1">
							</div>

							<div>
								<label for="field-2">Field Two</label>
								<input type="text" id="field-2" name="field-2">
							</div>							

							<div>
								<label for="field-3">Field Three</label>
								<select id="field-3" name="field-3">
									<option value="1">Field Three - Option One</option>
									<option value="2">Field Three - Option Two</option>
									<option value="3">Field Three - Option Two</option>								
								</select>
							</div>

						</form>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					</div>
				</div>
				<div class="yui-b">

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>						

				</div>
			
			</div>
        
			<div id="footer">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas sit amet metus. Nunc quam elit, posuere nec, auctor in, rhoncus quis, dui. Aliquam erat volutpat. Ut dignissim, massa sit amet dignissim cursus, quam lacus feugiat.</p>
			</div>

		</div>        
        
    </body>
</html>