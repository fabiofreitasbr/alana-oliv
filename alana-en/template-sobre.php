<?php
/*
Template Name: About
*/

get_header(); ?>
<div class="">
    <section class="pt-8 md:pt-10 z-10 relative">
        <div class="z-20 relative container mx-auto px-4">
            <div class="flex flex-col sm:flex-row items-center md:gap-4">
                <div class="w-full md:w-1/2 p-4 text-marrom-900 text-md md:text-lg lg:text-xl text-sm text-justify mb-6">
                    <h3 class="font-[Playfair] text-lg sm:text-2xl md:text-3xl lg:text-4xl lg:mb-6 text-marrom-900 font-medium mb-2">Alana Oliveira</h3>
                    <p class="mb-4">
                        A multifaceted artist with a unique blend of intellectual curiosity and creative expression. Her inquisitive mind drives her to seek answers and knowledge in various fields such as neuroscience and psychology, while her passion for art and creativity inspires her to express ideas and emotions in an original and authentic way.
                    </p>
                    <p>
                        With a dynamic and open approach, she is always ready for new discoveries and experiences, making her a complete and fascinating individual.
                    </p>
                    <a href="<?php echo get_page_link(InfoVar::show('contact')); ?>">
                        <button class="flex flex-row gap-2 items-center py-2 px-4 md:py-2 md:px-8 mt-8 bg-marrom-900 text-bege-100 text-xs md:text-lg uppercase font-bold">
                            Contact Us 
                        </button>
                    </a>
                </div>
                <div class="w-full md:w-1/2 pt-4 flex items-center justify-center">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/sobre.png" width="400" height="400" alt="Concept" class="w-2/3 sm:w-full mx-auto" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-900 py-4 md:py-16 z-10 relative bg-[url('../img/sobre-fundo.png')] bg-cover bg-center">
        <div class="z-20 relative container mx-auto px-4 p-4 flex flex-col">
            <h3 class="text-center text-white text-md md:text-3xl font-bold uppercase p-4 mb-4">
                Follow Us on Social Media
            </h3>
            <div class="flex justify-center items-center gap-6 md:gap-8">
                <a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank" class="text-white hover:text-red-500 transition-all">
                    <i class="fab fa-instagram text-5xl md:text-6xl mx-2"></i>
                </a>
                <a href="<?php echo InfoVar::show('tiktok'); ?>" target="_blank" class="text-white hover:text-red-500 transition-all">
                    <i class="fab fa-tiktok text-5xl md:text-6xl mx-2"></i>
                </a>
                <a href="<?php echo InfoVar::show('linkedin'); ?>" target="_blank" class="text-white hover:text-red-500 transition-all">
                    <i class="fab fa-linkedin text-5xl md:text-6xl mx-2"></i>
                </a>
                <!-- <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank" class="text-white hover:text-red-500 transition-all">
                    <i class="fab fa-whatsapp text-5xl md:text-6xl mx-2"></i>
                </a> -->
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 py-10 md:py-16 z-10 relative flex flex-col gap-2">
        <div class="z-20 relative">
            <div class="flex flex-col sm:grid sm:grid-cols-2 md:gap-4">
                <div class="text-sm md:text-lg lg:text-xl p-4 text-justify text-verdeOpaco-700">
                    <h3 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl lg:mb-6 text-marrom-900 font-medium mb-2">Mission</h3>
                    <p class="mb-4">
                        Alana Oliveira is a talented Brazilian dancer, actress, singer, and performer, aged 27. With a diverse background in dance, theater, and music, she has gained experience in various companies and artistic projects.
                    </p>
                    <div class="mb-4">
                        She has worked with renowned artists, participated in musicals, dance shows, and even productions for Netflix, and was part of Faustão’s ballet in 2022. Her career includes time with dance companies such as Teatro Guaíra Dance Company and Téssera UFPR, as well as work as a dance and body expression teacher.
                    </div>
                    <p class="mb-4">
                        Currently living in São Paulo, she continues to refine her craft by attending workshops, dance and singing classes, and exploring other areas such as jiu-jitsu and gymnastics. Her artistic journey is marked by versatility and talent, showcasing her commitment to art and body expression.
                    </p>
                </div>
                <div class="p-4 flex items-center justify-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sobre-2.jpg" width="600" height="350" alt="Alana Oliveira" class="aspect-square object-cover rounded-xl" />
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
