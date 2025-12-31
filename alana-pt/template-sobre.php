<?php
/*
Template Name: Sobre 
*/

get_header(); ?>
<div class="">
    <section class="pt-8 md:pt-10 z-10 relative">
        <div class="z-20 relative container mx-auto px-4">
            <div class="flex flex-col sm:flex-row  items-center md:gap-4">
                <div class="w-full md:w-1/2 p-4 text-marrom-900 text-md md:text-lg lg:text-xl text-sm text-justify mb-6">
                    <h3 class="font-[Playfair] text-lg sm:text-2xl md:text-3xl lg:text-4xl lg:mb-6 text-marrom-900 font-medium mb-2">Alana Oliveira</h3>
                    <p class="mb-4">
                        Uma artista multifacetada com uma combinação única de curiosidade intelectual e expressão criativa. Sua mente inquisitiva a leva a buscar respostas e conhecimento em diversas áreas como a neurociência e psicologia, enquanto sua paixão pela arte e criatividade inspira a expressar suas ideias e emoções de maneira original e autêntica.
                    </p>
                    <p>
                        Com uma abordagem dinâmica e aberta, está sempre pronta para novas descobertas e experiências, tornando-se uma pessoa completa e fascinante.
                    </p>
                    <a href="<?php echo InfoVar::show('whatsapp'); ?>">
                        <button class="flex flex-row gap-2 items-center py-2 px-4 md:py-2 md:px-8 mt-8 bg-marrom-900 text-bege-100 text-xs md:text-lg uppercase font-bold">
                            Saiba Mais
                        </button>
                    </a>
                </div>
                <div class="w-full md:w-1/2 pt-4 flex items-center justify-center">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/sobre.png" width="400" height="400" alt="Conceito" class="w-2/3 sm:w-full mx-auto" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-900 py-4 md:py-16 z-10 relative bg-[url('../img/sobre-fundo.png')] bg-cover bg-center">
        <div class="z-20 relative container mx-auto px-4 p-4 flex flex-col">
            <h3 class="text-center text-white text-md md:text-3xl font-bold uppercase p-4 mb-4">
                Siga-nos nas Redes Sociais
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
                <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank" class="text-white hover:text-red-500 transition-all">
                    <i class="fab fa-whatsapp text-5xl md:text-6xl mx-2"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 py-10 md:py-16 z-10 relative flex flex-col gap-2">
        <div class="z-20 relative">
            <div class="flex flex-col sm:grid sm:grid-cols-2 md:gap-4">
                <div class="text-sm md:text-lg lg:text-xl p-4 text-justify text-verdeOpaco-700">
                    <h3 class="text-lg sm:text-2xl md:text-3xl lg:text-4xl lg:mb-6 text-marrom-900 font-medium mb-2">Missão</h3>
                    <p class="mb-4">
                        Alana Oliveira, uma talentosa dançarina, atriz, cantora e performer brasileira de 27 anos. Com uma formação diversificada em dança, teatro e música, acumulou experiências em diversas companhias e projetos artísticos.
                    </p>
                    <div class="mb-4">
                        Já trabalhou com artistas renomados, participou de musicais, espetáculos de dança e até mesmo de produções para Netflix e compôs o balé do Faustão em 2022. Sua carreira inclui passagens por companhias de dança como a Companhia de Dança Teatro Guaíra e Téssera UFPR, além de trabalhos como professora de dança e expressão corporal.
                    </div>
                    <p class="mb-4">
                        Atualmente, reside em São Paulo, onde continua a se aprimorar em sua arte, participando de workshops, aulas de dança e canto, além de se aventurar em outras áreas, como jiu-jitsu e ginástica olímpica. Sua trajetória artística é marcada pela versatilidade e pelo talento, demonstrando seu compromisso com a arte e a expressão corporal.
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