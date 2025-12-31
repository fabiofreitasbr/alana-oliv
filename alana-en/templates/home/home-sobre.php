<?php
// Image paths
$template_uri = get_template_directory_uri();
$sobre_img = $template_uri . '/img/img-home.png';
$detalhe_direita = $template_uri . '/img/sobre-home-direita.jpg';
$detalhe_esquerda = $template_uri . '/img/sobre-home-esquerda.jpg';
?>

<section class="pt-8 md:pt-10 z-10 relative">
    <img src="<?php echo esc_url($detalhe_direita); ?>" alt="Decorative detail" width="150" height="150" class="absolute top-0 right-0 z-0 pointer-events-none" />
    <img src="<?php echo esc_url($detalhe_esquerda); ?>" alt="Decorative detail" width="150" height="150" class="absolute bottom-0 left-0 z-0 pointer-events-none" />
    
    <div class="z-20 relative container mx-auto px-4">
        <div class="flex flex-col sm:flex-row md:flex-row-reverse items-center md:gap-4">
            <div class="w-full md:w-1/2 p-4 text-verdeOpaco-700 text-md md:text-lg lg:text-xl text-sm text-justify mb-6">
                <h3 class="font-[Playfair] text-lg sm:text-2xl md:text-3xl lg:text-4xl lg:mb-6 text-verde-300 font-medium mb-2">
                    Who is <strong>Alana Oliveira?</strong>
                </h3>
                <p class="mb-4 leading-7 md:leading-9">
                    A <strong>multifaceted artist</strong> with a unique blend of <strong>intellectual curiosity and creative expression</strong>. Her <strong>inquisitive mind</strong> drives her to seek answers and knowledge in various fields such as <strong>neuroscience and psychology</strong>, while <strong>her passion for art and creativity</strong> inspires her to express ideas and emotions in an <strong>original and authentic</strong> way. With a <strong>dynamic and open approach</strong>, she is always ready for <strong>new discoveries and experiences</strong>, making her a complete and fascinating person.
                </p>
                <a href="<?php echo get_page_link(InfoVar::show('about')); ?>">
                    <button class="flex flex-row gap-2 items-center py-2 px-4 md:py-2 md:px-8 mt-8 bg-marrom-900 text-bege-100 text-xs md:text-lg uppercase font-bold">
                        Learn More
                    </button>
                </a>
            </div>
            <div class="w-full md:w-1/2 pt-4 px-4 flex items-center justify-center">
                <img src="<?php echo esc_url($sobre_img); ?>" width="400" height="400" alt="Concept" class="w-2/3 sm:w-full mx-auto" />
            </div>
        </div>
    </div>
</section>
