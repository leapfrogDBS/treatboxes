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
	<header id="masthead" class="site-header  sticky top-0">
		<section id="top-bar" class="bg-black text-white shadow-lg">
			<div class="container">
				<div class="row grid grid-cols-3 gap-x-12 items-center">
					<div class="col text-center">
						<h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
						<h3>Lorem ipsum dolor sit amet.</h3>
					</div>
					<div class="col">
						<div id="countdown" class="grid grid-cols-3">
							<div class="time-unit">
								<span id="hours">00</span>
								<div>Hours</div>
							</div>
							<div class="time-unit">
								<span id="minutes">00</span>
								<div>Minutes</div>
							</div>
							<div class="time-unit">
								<span id="seconds">00</span>
								<div>Seconds</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="btn">Call to action</div>
					</div>
				</div>
			</div>
		</section>
	</header><!-- #masthead -->

	<script>
        function updateCountdown() {
            const now = new Date();
            const nowUtc = new Date(now.getTime() + now.getTimezoneOffset() * 60000);
            const midnightUtc = new Date(nowUtc);
            midnightUtc.setHours(24, 0, 0, 0);

            const difference = midnightUtc - nowUtc;
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            document.getElementById('hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
        updateCountdown(); // Call the function immediately to avoid 1-second delay
    </script>