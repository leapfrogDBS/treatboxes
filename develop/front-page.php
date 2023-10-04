<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package treatboxes
 */

get_header();
?>

<main id="primary" class="site-main">

	<section id="logo-header" class="bg-white">
		<div class="container">
			<div class="row">
				<div class="col flex justify-center">
					<div class="flex flex-col items-center">
						<a href="https://barkbites.co.uk/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BB-logo.png" alt="Bark Bites Logo" class="h-11 w-auto mb-1"></a>
						<a href="https://uk.trustpilot.com/review/barkbites.co.uk" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/truspilot.png" alt="Truspilot Logo" class="h-6 w-auto"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/dog-teeth.jpeg)" class="bg-cover bg-center py-24 text-white relative z-10">
		<div class="absolute inset-0 bg-black bg-opacity-50"></div>
		<div class="container z-20 relative">
			<div class="row">
				<div class="col md:w-1/2">
					<h1 class="text-5xl mb-2">Did You Know That 2/3 Of Dogs Over The Age Of 3 Suffer From Periodontal Disease?</h1>
					<p class="mb-2">It's the most common health issue plaguing our four-legged friends (Hiscox and Bellows, 2021).</p>
					<p class="mb-2">This dental dilemma begins innocently enough—with the formation of plaque and tartar. But here's the good news: you have the power to change this. Imagine giving your dog a treat they'll love, which also keeps their teeth clean and gums healthy.</p>
					<h2 class="text-2xl mb-2">Clean Gnashers Monthly Subscription Boxes</h2>
					<p class="mb-2">With our monthly Clean Gnashers subscription boxes, filled with firm, chewable treats, you can consistently remove troublesome plaque before it hardens, effectively tackling the root cause of dental issues</p>
					<a href="whats-in-the-box" class="btn text-black bg-green-500 px-2 py-1 inline-block">More Info</a>
				</div>
			</div>
		</div>
	</section>

	<section id="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpeg)" class="bg-center bg-cover py-24">
		<div class="container">
			<div class="row">
				<div class="col text-white text-center">
					<h2 class="text-5xl">100% Natural, Grain-Free, and Rawhide-Free for Your Peace of Mind</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="whats-in-the-box" class="py-24">
		<div class="container">
			<div class="row grid grid-cols-2 gap-x-12">
				<div class="col">
					<h2 class="text-3xl mb-2">What is in the box?</h2>
					<p>These all-natural dog treats not only taste great, but they also help to keep your furry friend's teeth clean and healthy. 🦷</p>
					<p>These treats have been specially selected to help to scrape away plaque and tartar buildup on your dog's teeth.</p>
					<p>Free from artificial colors, flavors, and preservatives, you can feel good about giving them to your furry friend as a healthy and wholesome snack.<p>
					<p>Try these natural dog treats today and see the difference they can make for your hound's dental health</p>
					<p>Suitable for small dogs 3kg+</p>
					<p class="font-semibold">Contains:</p>
					<ul class="list-disc list-inside">
						<li>Hairy Rabbit Ear</li>
						<li>2 x Hairless Rabbit Ears</li>
						<li>2 x Chicken feet </li>
						<li>2 x Small Beef Muscle Piece</li>
						<li>Small Camel Skin Piece</li>
						<li>Small Goat Skin Piece</li>
						<li>Small moon bone </li>
						<li>2 x Skinny Pizzle</li>
						<li>Pork spaghetti 50g</li>
					</ul>
					<p class="text-sm">PLEASE NOTE any items that are out of stock will be swapped with an item(s) of equivalent value that is as close as possible to the out of stock item.</p>
				</div>
				<div class="col" id="offer">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/treatbox.png" alt="Clean Gnashers Treat Box" class="w-full mb-2">
					<h2 class="text-3xl">Here's what you get - Offer headline</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero ratione distinctio corporis vel accusantium recusandae praesentium incidunt, eveniet sequi perspiciatis.</p>
					<div class="btn text-black bg-green-500 px-2 py-1 inline-block">Get 30% Off Your First Box = Free Shipping</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>Image and testimonial text</p>
				</div>
				<div class="col">
					<button>CTA Button</button>
				</div>
			</div>
		</div>
	</section>

	<section id="education">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>The Science Behind Clean Gnashers</h1>
					<h2>Wondering How A Simple Treat Can Make Such A Big Difference In Your Dog's Dental Health?</h2>
					<p> It all starts with understanding plaque and tartar. When your furry friend eats, food particles combine with saliva and bacteria in the mouth, forming plaque. If this plaque isn't adequately removed, it hardens into tartar, setting the stage for periodontal disease—the most common disease affecting dogs.</p>
					<p>But here's the good news: scientific research shows that firm, chewy treats can combat this dental dilemma. According to a study by Hiscox and Bellows in 2021, chewing on specific types of treats helps to mechanically "brush" your dog's teeth, aiding in the removal of plaque before it can mineralize into tartar. By offering a consistent chewing experience, Clean Gnashers treats target the root cause of most dental issues, keeping your pet's teeth clean and gums healthy.</p>
					<p>Our handpicked selection of treats is not just a random assortment; each treat is chosen for its unique texture and chewing resistance. For instance, our Hairy Rabbit Ear and Beef Muscle Pieces are more than just tasty—they work like natural toothbrushes, scraping away plaque and tartar as your dog chews. It's a delicious, all-natural approach to dental care that supports not just a healthy mouth, but overall well-being.</p>
				</div>
				<div class="col">
					<h3>Why Choose Natural Over Mass-Produced Dental Sticks?</h3>
					<p>You might wonder, "What sets Clean Gnashers natural treats apart from the dental sticks you commonly find in stores?" It's a valid question, and the answer lies in the quality of ingredients and the approach to dental care.</p>
					<h4>Purity of Ingredients</h4>
					<p>Mass-produced dental sticks often contain artificial additives, preservatives, and colorings that may not be beneficial for your dog's overall health. Clean Gnashers treats, on the other hand, are 100% natural, grain-free, and rawhide-free. We believe that fewer ingredients mean fewer complications—our treats are free from anything artificial, focusing solely on wholesome goodness.</p>
					<h4>Effectiveness</h4>
					<p>While dental sticks do offer some level of dental care, their uniform texture and limited range of ingredients may not provide the comprehensive cleaning that natural treats can. Our diverse selection offers varying textures and hardness levels that more effectively scrape away plaque and tartar. Different treats target different areas of the mouth, making for a more thorough clean.</p>
					<h4>Nutritional Value</h4>
					<p>Unlike many mass-produced options that prioritize longevity on the shelf over nutritional content, our natural treats also serve as a healthy supplement to your dog's diet. Rich in proteins and low in fat, they provide nutritional benefits in addition to dental care.</p>
					<h4>Sustainability and Ethics</h4>
					<p>Our commitment goes beyond your pet; it extends to the environment and local businesses. Sourced exclusively from British and EU-approved ingredients, Clean Gnashers treats not only ensure quality but also support local farmers and the UK meat industry.</p>
					By choosing Clean Gnashers, you're not just making a choice for superior dental care; you're making a choice for a more ethical, healthier lifestyle for your furry friend.
				</div>
			</div>
		</div>
	</section>

	<section id="final-cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Ready To Give Your Dog The Gift Of Healthy Teeth And Gums?</h2>
					<h3>Click Here to Get 30% Off Your First Box Today!</h3>
					<button>Get Started Today - Claim Offer</button>
				</div>
			</div>
		</div>
	</section>

	<section id="countdown-timer">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>Today Only 30% off your first box Plus Free Shipping</p>
					<p>Cancel anytime</p>
				</div>
				<div class="col">
					<p>Timer element</p>
				</div>
				<div class="col">
					<button>CTA Button</button>
				</div>
			</div>
		</div>
	</section>


	</main><!-- #main -->

<?php
get_footer();
