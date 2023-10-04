<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package treatboxes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header  sticky top-0 z-50">
		<section id="top-bar" class="bg-black text-white shadow-lg">
			<div class="container">
				<div class="row grid sm:grid-cols-3 sm:gap-x-12 items-center">
					<div class="col text-center">
						<h2><span class="text-green-500">Today only</span> 30% off</h2>
						<h3>plus free delivery</h3>
						
					</div>
					<div class="col">
						<div class="countdown flex items-center justify-center text-2xl">
							<div class="flex flex-col items-center mx-2">
								<span class="hours font-mono">00</span>
								<span class="text-xs">Hours</span>
							</div>
							<span class="mx-2">:</span>
							<div class="flex flex-col items-center mx-2">
								<span class="minutes font-mono">00</span>
								<span class="text-xs">Minutes</span>
							</div>
							<span class="mx-2">:</span>
							<div class="flex flex-col items-center mx-2">
								<span class="seconds font-mono">00</span>
								<span class="text-xs">Seconds</span>
							</div>
						</div>
					</div>
					<div class="col text-center">
						<div class="btn text-black bg-green-500 px-2 py-1 inline-block cursor-pointer hover:bg-white openModalBtn">Unlock Offer</div>
					</div>
				</div>
			</div>
		</section>
	</header><!-- #masthead -->

<!-- The Modal -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-40 hidden">
  <!-- Modal content -->
	<div class="modal-content bg-white p-5 rounded shadow-lg w-1/3 relative">
		<span id="closeModalBtn" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 cursor-pointer z-50">&times;</span>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/BB-logo.png" alt="logo" class="h-10 w-auto mx-auto mb-2">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/truspilot.png" alt="Truspilot Logo" class="h-6 w-auto mx-auto mb-2">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, maxime esse. Ratione ea provident nihil quam ullam reprehenderit sunt omnis temporibus natus. Optio, deleniti tempore!</p>
		<div class="countdown flex items-center justify-center text-2xl">
			<div class="flex flex-col items-center mx-2">
				<span class="hours font-mono">00</span>
				<span class="text-xs">Hours</span>
			</div>
			<span class="mx-2">:</span>
			<div class="flex flex-col items-center mx-2">
				<span class="minutes font-mono">00</span>
				<span class="text-xs">Minutes</span>
			</div>
			<span class="mx-2">:</span>
			<div class="flex flex-col items-center mx-2">
				<span class="seconds font-mono">00</span>
				<span class="text-xs">Seconds</span>
			</div>
		</div>
		
		<div class="maichimp-embed">
			<div id="mc_embed_shell">
				<link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
				<style type="text/css">
						#mc_embed_signup{background:#fff; false;clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
						We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
					<form action="https://leapfrogdbs.us20.list-manage.com/subscribe/post?u=e92500706a7c2cec505da7c52&amp;id=1b725511af&amp;f_id=003700eaf0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
						<div id="mc_embed_signup_scroll"><h2></h2>
						<div class="mc-field-group"><label for="mce-FNAME">First Name </label><input type="text" name="FNAME" class=" text" id="mce-FNAME" value=""></div>
							<div class="mc-field-group"><label for="mce-EMAIL">Email Address</label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""><span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span></div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display: none;"></div>
							<div class="response" id="mce-success-response" style="display: none;"></div>
						</div><div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_e92500706a7c2cec505da7c52_1b725511af" tabindex="-1" value=""></div><div class="clear"><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Get 30% Off Your First Box + FREE Delivery"></div>
					</div>
				</form>
				</div>
				<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script></div>
		</div>
		
	</div>
</div>
