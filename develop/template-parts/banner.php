<?php 
    $banner_background_image = get_field('banner_background_image');
    $banner_copy = get_field('banner_copy');
?>

<section id="banner" style="background-image: url(<?php echo esc_url($banner_background_image['url']); ?>)" class="bg-center bg-cover py-12 lg:py-24 relative">
	<div class="inset-0 absolute bg-black bg-opacity-20 z-10"></div>
    <div class="container z-20 relative">
        <div class="row">
            <div class="col text-white text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-commuters font-semibold"><?php echo esc_html($banner_copy); ?></h2>
            </div>
        </div>
    </div>
</section>