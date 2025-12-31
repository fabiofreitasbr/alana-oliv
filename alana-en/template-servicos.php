<?php
/*
Template Name: Services
*/

get_header();

$serviceList = [
    [
        'title' => 'Shows, Events & Choreographies',
        'slug'  => 'shows',
        'img'   => get_template_directory_uri() . '/img/servicos/shows.png',
        'text'  => 'Striking performances with stage presence, rhythm, expression, and professionalism.',
    ],
    [
        'title' => 'Private or Group Classes',
        'slug'  => 'classes',
        'img'   => get_template_directory_uri() . '/img/servicos/aulas.png',
        'text'  => 'The exclusive attention you need to grow with technique, sensitivity, focus, and safety.',
    ],
    [
        'title' => 'Dance',
        'slug'  => 'dance',
        'img'   => get_template_directory_uri() . '/img/servicos/danca.png',
        'text'  => 'Movement, art, expression, and identity. The right choice for those seeking body technique with excellence.',
    ],
    [
        'title' => 'Musicals',
        'slug'  => 'musicals',
        'img'   => get_template_directory_uri() . '/img/servicos/musicais.png',
        'text'  => 'Acting, singing, dancing, and emotion on stage. A complete experience for major theatrical productions.',
    ],
    [
        'title' => 'Collab',
        'slug'  => 'collab',
        'img'   => get_template_directory_uri() . '/img/servicos/collab.png',
        'text'  => 'Creative partnerships with purpose, intensity, exchange, and authenticity, designed to spark artistic connection.',
    ],
];
?>
<div class="container mx-auto px-4 relative h-full py-8 md:py-16">
    <div class="mb-12 text-center mx-auto md:w-2/3">
        <h2 class="text-verde-500 font-[Playfair] text-xl sm:text-3xl lg:text-4x text-center">Fusion Between Mind and Movement</h2>
        <p class="text-sm md:text-base font-normal text-zinc-500 my-4">
            I bring personalized experiences to each project: shows, events, classes, collabs, and much more. All with stage presence, refined technique, and artistic sensitivity.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3 md:gap-4 px-6 md:px-0 mb-8">
        <?php foreach ($serviceList as $serviceSingle): ?>
            <a href="<?php echo esc_url(InfoVar::show('whatsapp')); ?>" target="_blank">
                <div class="w-full flex flex-col justify-between bg-white border-gray-100 border-1 text-black break-words text-sm sm:text-xl md:text-2xl lg:text-4xl rounded-xl md:rounded-2xl overflow-hidden shadow-md">
                    <img src="<?php echo esc_url($serviceSingle['img']); ?>" alt="" class="w-full" />
                    <div class="px-2 py-2 md:px-4 md:py-4">
                        <h4 class="text-[0.65rem] md:text-[0.70rem] uppercase font-semibold text-verde-300 text-center pb-3">
                            <?php echo esc_html($serviceSingle['title']); ?>
                        </h4>
                        <p class="text-[0.65rem] md:text-[0.7rem] font-normal text-zinc-500 mb-3 text-center">
                            <?php echo esc_html($serviceSingle['text']); ?>
                        </p>
                        <hr class="border border-zinc-100" />
                    </div>
                    <button class="w-full flex gap-2 items-center justify-center mb-6 text-marrom-300 text-xs md:text-sm">
                        Learn More
                        <i class="fas fa-arrow-right w-2 h-2 md:w-3 md:h-3"></i>
                    </button>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>
