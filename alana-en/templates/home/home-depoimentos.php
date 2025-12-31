<?php
// Testimonials array
$testimonials = [
    [
        'text' => 'Alana is an absolute delight to be around! Engaged, graceful, funny, and incredibly talented. I had the pleasure of having her in my cast twice, and I hope it happens many more times.',
        'name' => 'Keila C Bueno',
        'role' => 'Director and Choreographer',
    ],
    [
        'text' => 'When I saw Alana dancing for the first time, I was mesmerized. Her body seemed to know no limits—it was like modeling clay in the hands of art, shaping itself with lightness and precision to each new dance style. She was pure expression, devotion, and sensitivity.',
        'name' => 'Arielle Macedo',
        'role' => 'Dancer and Choreographer for Anitta',
    ],
];
?>

<div class="bg-verdeOpaco-500 h-full py-6 lg:py-20 relative" id="safe">
    <div class="container mx-auto px-4 relative">
        <h2 class="font-[Playfair] text-3xl text-white font-bold text-center mb-10">Testimonials</h2>
        <div class="splide" aria-label="Client Testimonials">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($testimonials as $item): ?>
                        <li class="splide__slide">
                            <div class="bg-bege-200 shadow-2xl rounded-2xl md:rounded-4xl py-16 px-12 h-full flex flex-col justify-between text-center">
                                <div class="relative">
                                    <span class="absolute -top-4 -left-4 text-6xl text-verde-500 font-serif select-none">“</span>
                                    <p class="text-gray-700 text-sm md:text-base xl:text-lg mb-4 pl-6 pr-6">
                                        <?php echo esc_html($item['text']); ?>
                                    </p>
                                    <span class="absolute -bottom-4 -right-4 text-6xl text-verde-500 font-serif select-none">”</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-marrom-900 mb-2"><?php echo esc_html($item['name']); ?></h3>
                                    <p class="text-sm md:text-base text-verde-700 font-medium"><?php echo esc_html($item['role']); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
        type: 'loop',
        perPage: 2,
        gap: '2rem',
        autoplay: true,
        pauseOnHover: true,
        breakpoints: {
            1024: {
                perPage: 1,
            },
        },
    }).mount();
});
</script>
