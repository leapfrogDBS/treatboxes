<?php
    $hero_image = get_field('hero_image');
    $hero_copy = get_field('hero_copy');
?>

<section id="hero" style="background-image: url(<?php echo esc_url($hero_image['url']); ?>)" class="bg-cover bg-center py-12 text-white relative z-10">
    <div class="container z-20 relative">
        <div class="row">
            <div id="hero_copy" class="col lg:w-1/2 bg-white text-[#242424] p-10">
                <?php echo wp_kses_post($hero_copy); ?>
                <a href="#whats-in-the-box" class="btn text-white font-bold bg-[#067A46] px-9 py-3 inline-block cursor-pointer hover:bg-black hover:text-white rounded text-base mt-5 w-full text-center">What's in the box?</a>
            </div>
        </div>
    </div>
</section>