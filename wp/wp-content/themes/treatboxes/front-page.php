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

	<section id="logo-header" class="bg-white py-2">
		<div class="container">
			<div class="row">
				<div class="col flex justify-center">
					<div class="flex flex-col items-center">
						<a href="https://barkbites.co.uk/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BB-logo.png" alt="Bark Bites Logo" class="h-11 w-auto mb-1"></a>
						<a href="https://uk.trustpilot.com/review/barkbites.co.uk" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/truspilot.png" alt="Truspilot Logo" class="h-9 w-auto"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/dog-teeth.jpeg)" class="bg-cover bg-center py-12 text-white relative z-10">
		<div class="container z-20 relative">
			<div class="row">
				<div class="col lg:w-1/2 bg-white text-[#242424] p-10">
					<h1 class="text-2xl md:text-3xl lg:text-4xl mb-2 font-commuters text-center">Give Your Dog a Healthy Smile!</h1>
					<h2 class="text-xl font-commuters mb-2 text-center">Did You Know That 2/3 Of Dogs Over The Age Of 3 Suffer From Periodontal Disease?</h2>
					<p class="mt-4 mb-2">It's the most common health issue plaguing our four-legged friends (Hiscox and Bellows, 2021).</p>
					<p class="mb-2">This dental dilemma begins innocently enough—with the formation of plaque and tartar. But here's the good news: you have the power to change this. Imagine giving your dog a treat they'll love, which also keeps their teeth clean and gums healthy.</p>
					<h2 class="text-lg md:text-2xl text-3xl mb-2 font-semibold text-center">Clean Gnashers Monthly Subscription Boxes</h2>
					<p class="mb-2">Our Clean Gnashers subscription box delivers all-natural, chewable treats right to your doorstep, making dental care for your dog not just easy but also enjoyable.</p>
					<a href="#whats-in-the-box" class="btn text-white font-bold bg-[#067A46] px-9 py-3 inline-block cursor-pointer hover:bg-black hover:text-white rounded text-base mt-5 w-full text-center">What's in the box?</a>
				</div>
			</div>
		</div>
	</section>

	<section id="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpeg)" class="bg-center bg-cover py-12 lg:py-24 relative">
		<div class="inset-0 absolute bg-black bg-opacity-20 z-10"></div>
		<div class="container z-20 relative">
			<div class="row">
				<div class="col text-white text-center">
					<h2 class="text-3xl md:text-4xl lg:text-5xl font-commuters font-semibold">100% Natural, Grain-Free, and Rawhide-Free for Your Peace of Mind</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="whats-in-the-box" class="py-12">
		<div class="container">
			<div class="row grid md:grid-cols-2 gap-x-24">
				<div class="col">
					<h2 class="text-2xl md:text-3xl lg:text-4xl font-commuters">What is in the box?</h2>
					<p class="mt-4">These all-natural dog treats not only taste great, but they also help to keep your furry friend's teeth clean and healthy. 🦷</p>
					<p class="mt-4">These treats have been specially selected to help to scrape away plaque and tartar buildup on your dog's teeth.</p>
					<p class="mt-4">Free from artificial colors, flavors, and preservatives, you can feel good about giving them to your furry friend as a healthy and wholesome snack.<p>
					<p class="mt-4">Try these natural dog treats today and see the difference they can make for your hound's dental health</p>
					<p class="mt-4">Suitable for small dogs 3kg+</p>
					<p class="font-semibold font-commuters mt-4">Contains:</p>
					<ul class="list-disc list-inside mb-4">
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
					<h2 class="text-2xl md:text-3xl lg:text-4xl font-commuters mb-4">Limited-Time Offer: Save <span class="font-bold">£7.94</span> on Your First Box!</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/treatbox.png" alt="Clean Gnashers Treat Box" class="w-full mb-2">
					<p class="mt-4">Sign up today and get your first Clean Gnashers box for just £11.19, normally £15.99, plus enjoy free shipping (usually £3.95). That's a total saving of £7.94. Don't miss out on this pawsome deal!</p>
					<p class="mt-2">Our Clean Gnashers box is packed with natural, grain-free treats that not only taste great but also help keep your dog's teeth clean and healthy.</p>
					<p class="mt-2 font-semibold">Why You Should Grab This Deal:</p>
					<ul class="list-disc list-inside mt-2">
						<li>30% off your first box</li>
						<li>Free shipping</li>
						<li>No long-term commitment—cancel anytime</li>
						<li>100% natural, grain-free treats</li>
					</ul>
					<div class="btn text-white font-bold bg-[#067A46] px-9 py-3 inline-block cursor-pointer hover:bg-black hover:text-white rounded text-base mt-5 w-full text-center openModalBtn">Unlock This Exclusive Offer</div>
				</div>

			</div>
		</div>
	</section>

	<section id="testimonials" class="bg-[#343434] text-white py-12">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="testimonial-slider" class="swiper-container relative">
						<div class="swiper-wrapper">
							<div class="swiper-slide mb-12">
								<div class="max-w-2xl mx-auto h-full flex flex-col justify-between">
									<h3 class="font-bold text-xl md:text-2xl lg:text-3xl text-center mt-6">Happy Healthy Doggie</h3>
									<img class="h-9 opacity-70 mx-auto mt-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-icon.svg" alt="quote icon">											
									<p class="testimonial-text mt-4 text-center text-base md:text-lg lg:text-xl">
										Bark Bites natural treats have been a god send for my Dachshund. After years of giving him treats with rawhide in, he started getting stomach problems but after switching to the more natural alternatives the sickness and digestive problems have stopped and he's definitely more satisfied! I love how much choice there is, so I know he won't get bored. Natalie's been amazing guiding me through the best ones to try for his stomach issues and his size/breed. Couldn't be more pleased!
									</p>
																		
								</div>
							</div>
							<div class="swiper-slide mb-12">
								<div class="max-w-2xl mx-auto h-full flex flex-col justify-between">
									<h3 class="font-bold text-xl md:text-2xl lg:text-3xl text-center mt-6">Make the change...</h3>
									<img class="h-9 opacity-70 mx-auto mt-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-icon.svg" alt="quote icon">											
									<p class="testimonial-text mt-4 text-center text-base md:text-lg lg:text-xl">
										We have recently taken on another rescue cockerpoo and were keen to transition to a raw diet and natural treats. We have been very impressed with the range and quality on offer and the advice and top notch service offered by Nat. Our dogs have never been so happy and healthy. Strongly recommend you give this a go - you will not be disappointed 😊
									</p>
																		
								</div>
							</div>
							<div class="swiper-slide mb-12">
								<div class="max-w-2xl mx-auto h-full flex flex-col justify-between">
									<h3 class="font-bold text-xl md:text-2xl lg:text-3xl text-center mt-6">Very helpful and knowledgeable</h3>
									<img class="h-9 opacity-70 mx-auto mt-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-icon.svg" alt="quote icon">											
									<p class="testimonial-text mt-4 text-center text-base md:text-lg lg:text-xl">
										I was a bit unsure what products would be best for my dog, but the website proved to be incredibly helpful by categorising the products by their benefits! I have also reached out to the company - they've been incredibly friendly and knowledgeable while further advising me on products to suit the unique needs of my dog. I really appreciate the care that's been put into selecting the best natural treats, and the vast selection of them! I would absolutely recommend this company to anyone who is looking to provide their dogs with a healthy treat!
									</p>									
								</div>
							</div>
						</div>
						<div class="swiper-pagination relative flex items-center justify-center"></div>
						<!-- Add navigation arrows -->
						<div class="hidden lg:block">
							<div class="swiper-button-next">
								<i class="fa fa-angle-right text-4xl text-white" aria-hidden="true"></i>
							</div>
							<div class="swiper-button-prev">
								<i class="fa fa-angle-left text-4xl text-white" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col text-center mt-12">
					<div class="btn text-[#343434] font-bold bg-[#D3E6A6] px-9 py-3 inline-block cursor-pointer hover:bg-white rounded text-base openModalBtn">Unlock Offer</div>
				</div>
			</div>
		</div>
	</section>

	<section id="education" class="py-12">
		<div class="container">
			<div class="row grid md:grid-cols-2 gap-x-24 gap-y-8">
				<div class="col">
					<h2 class="text-2xl md:text-3xl lg:text-4xl text-center font-commuters">The Science Behind Clean Gnashers</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dog-treat.jpeg" alt="Image of dog showing clean teeth" class="w-full mt-4">
					<h3 class="text-xl lg:text-2xl font-medium mt-6 font-commuters">Wondering How A Simple Treat Can Make Such A Big Difference In Your Dog's Dental Health?</h3>
					<p class="mt-4"> It all starts with understanding plaque and tartar. When your furry friend eats, food particles combine with saliva and bacteria in the mouth, forming plaque. If this plaque isn't adequately removed, it hardens into tartar, setting the stage for periodontal disease—the most common disease affecting dogs.</p>
					<p class="mt-4">But here's the good news: scientific research shows that firm, chewy treats can combat this dental dilemma. According to a study by Hiscox and Bellows in 2021, chewing on specific types of treats helps to mechanically "brush" your dog's teeth, aiding in the removal of plaque before it can mineralize into tartar. By offering a consistent chewing experience, Clean Gnashers treats target the root cause of most dental issues, keeping your pet's teeth clean and gums healthy.</p>
					<p class="mt-4">Our handpicked selection of treats is not just a random assortment; each treat is chosen for its unique texture and chewing resistance. For instance, our Hairy Rabbit Ear and Beef Muscle Pieces are more than just tasty—they work like natural toothbrushes, scraping away plaque and tartar as your dog chews. It's a delicious, all-natural approach to dental care that supports not just a healthy mouth, but overall well-being.</p>
					
				</div>
				<div class="col">
					<h3 class="text-xl lg:text-2xl font-medium font-commuters">Why Choose Natural Over Mass-Produced Dental Sticks?</h3>
					<p class="mt-4">You might wonder, "What sets Clean Gnashers natural treats apart from the dental sticks you commonly find in stores?" It's a valid question, and the answer lies in the quality of ingredients and the approach to dental care.</p>
					<h4 class="text-lg lg:text-xl font-medium mt-4 font-commuters">Purity of Ingredients</h4>
					<p class="mt-4">Mass-produced dental sticks often contain artificial additives, preservatives, and colorings that may not be beneficial for your dog's overall health. Clean Gnashers treats, on the other hand, are 100% natural, grain-free, and rawhide-free. We believe that fewer ingredients mean fewer complications—our treats are free from anything artificial, focusing solely on wholesome goodness.</p>
					<h4 class="text-lg lg:text-xl font-medium mt-4 font-commuters">Effectiveness</h4>
					<p class="mt-4">While dental sticks do offer some level of dental care, their uniform texture and limited range of ingredients may not provide the comprehensive cleaning that natural treats can. Our diverse selection offers varying textures and hardness levels that more effectively scrape away plaque and tartar. Different treats target different areas of the mouth, making for a more thorough clean.</p>
					<h4 class="text-lg lg:text-xl font-medium mt-4 font-commuters">Nutritional Value</h4>
					<p class="mt-4">Unlike many mass-produced options that prioritize longevity on the shelf over nutritional content, our natural treats also serve as a healthy supplement to your dog's diet. Rich in proteins and low in fat, they provide nutritional benefits in addition to dental care.</p>
					<h4 class="text-lg lg:text-xl font-medium mt-4 font-commuters">Sustainability and Ethics</h4>
					<p class="mt-4">Our commitment goes beyond your pet; it extends to the environment and local businesses. Sourced exclusively from British and EU-approved ingredients, Clean Gnashers treats not only ensure quality but also support local farmers and the UK meat industry.</p>
					<p class="mt-4 font-bold">By choosing Clean Gnashers, you're not just making a choice for superior dental care; you're making a choice for a more ethical, healthier lifestyle for your furry friend.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="final-cta">
		<div class="row grid md:grid-cols-2">
			<div class="col">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dog-teeth2.jpeg" alt="Image of dog showing clean teeth" class="w-full h-full object-cover">
			</div>
			<div class="col flex flex-col items-center justify-center bg-[#343434] text-white p-10">
			<h2 class="text-3xl text-center font-commuters">Ready to Transform Your Dog's Dental Health?</h2>
			<h3 class="text-xl font-medium text-center mt-4">Exclusive Offer: 30% Off Your First Box + Free Shipping!</h3>
			<p class="text-center mt-2">Sign up today and enjoy this limited-time offer. Cancel anytime—no strings attached.</p>
			<div class="btn text-[#343434] font-bold bg-[#D3E6A6] px-9 py-3 inline-block cursor-pointer hover:bg-white rounded text-base mt-6 openModalBtn">Unlock Your Exclusive Offer</div>
		</div>

		</div>
	</section>

	<section id="logo-header" class="bg-white mt-5 mb-4">
		<div class="container">
			<div class="row">
				<div class="col flex justify-center">
					<div class="flex flex-col items-center">
						<a href="https://barkbites.co.uk/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BB-logo.png" alt="Bark Bites Logo" class="h-11 w-auto mb-1"></a>
						<a href="https://uk.trustpilot.com/review/barkbites.co.uk" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/truspilot.png" alt="Truspilot Logo" class="mt-2 h-12 w-auto"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	</main><!-- #main -->


<script>
function updateCountdown() {
    const now = new Date();
    const nowUtc = new Date(Date.UTC(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(), now.getUTCHours(), now.getUTCMinutes(), now.getUTCSeconds()));

    const midnightUtc = new Date(Date.UTC(nowUtc.getUTCFullYear(), nowUtc.getUTCMonth(), nowUtc.getUTCDate() + 1, 0, 0, 0));
    const difference = midnightUtc - nowUtc;

    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)-1);
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    // Get all elements with the 'countdown' class
    const countdownElements = document.querySelectorAll('.countdown');

    countdownElements.forEach((element) => {
        const hoursElem = element.querySelector('.hours');
        const minutesElem = element.querySelector('.minutes');
        const secondsElem = element.querySelector('.seconds');

        if (hoursElem) hoursElem.textContent = String(hours).padStart(2, '0');
        if (minutesElem) minutesElem.textContent = String(minutes).padStart(2, '0');
        if (secondsElem) secondsElem.textContent = String(seconds).padStart(2, '0');
    });
}

setInterval(updateCountdown, 1000);
updateCountdown();  // Call the function immediately to avoid a 1-second delay


// Get the modal element
const modal = document.getElementById("myModal");

// Get all buttons with the common class name
const buttons = document.getElementsByClassName("openModalBtn");

// Get the element that closes the modal
const closeBtn = document.getElementById("closeModalBtn");

// Flag to check if exit intent has already triggered the modal
let exitIntentTriggered = false;

// Function to open modal
function openModal() {
  modal.classList.remove('hidden');
}

// Function to close modal
function closeModal() {
  modal.classList.add('hidden');
}

// Loop through all buttons to add event listeners
for (let btn of buttons) {
  btn.addEventListener('click', function() {
    openModal();
  });
}

// When the user clicks on <span> (x), close the modal
closeBtn.addEventListener('click', closeModal);

// When the user clicks anywhere outside of the modal, close it
window.addEventListener('click', function(event) {
  if (event.target === modal) {
    closeModal();
  }
});

// Detect exit intent
document.addEventListener('mousemove', function(e) {
  if (e.clientY <= 5 && !exitIntentTriggered) {
    openModal();
    // Set exitIntentTriggered flag to true so it only happens once
    exitIntentTriggered = true;
  }
});



</script>
<?php
get_footer();
