<?php
/*
Template Name: Serviços
*/

get_header();

$serviceList = [
    [
        'title' => 'Shows, eventos e coreografias',
        'slug'  => 'shows',
        'img'   => get_template_directory_uri() . '/img/servicos/shows.png',
        'text'  => 'Performance marcante com presença cênica, ritmo, expressão e profissionalismo. ',
    ],
    [
        'title' => 'Aulas privadas OU EM GRUPO',
        'slug'  => 'aulas',
        'img'   => get_template_directory_uri() . '/img/servicos/aulas.png',
        'text'  => 'A atenção exclusiva que você precisa para evoluir com técnica, sensibilidade, foco e segurança.',
    ],
    [
        'title' => 'Dança',
        'slug'  => 'danca',
        'img'   => get_template_directory_uri() . '/img/servicos/danca.png',
        'text'  => 'Movimento, arte, expressão e identidade. A escolha certa para quem busca técnica corporal com excelência.',
    ],
    [
        'title' => 'Musicais',
        'slug'  => 'musicais',
        'img'   => get_template_directory_uri() . '/img/servicos/musicais.png',
        'text'  => 'Interpretação, canto, dança e emoção em cena. Uma experiência completa para grandes produções teatrais.',
    ],
    [
        'title' => 'Collab',
        'slug'  => 'collab',
        'img'   => get_template_directory_uri() . '/img/servicos/collab.png',
        'text'  => 'Parcerias criativas com propósito, intensidade, troca e autenticidade, feitas para gerar conexão artística.',
    ],
];
?>
<div class="container mx-auto px-4 relative h-full py-8 md:py-16">
    <div class="mb-12 text-center mx-auto md:w-2/3">
        <h2 class="text-verde-500 font-[Playfair] text-xl sm:text-3xl lg:text-4x text-center">Fusão entre mente e movimento</h2>
        <p class="text-sm md:text-base font-normal text-zinc-500 my-4">
            Levo experiências personalizadas para cada projeto: shows, eventos, aulas, collabs e muito mais. Tudo com presença cênica, técnica refinada e sensibilidade artística.
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
                        Saiba Mais
                        <i class="fas fa-arrow-right w-2 h-2 md:w-3 md:h-3"></i>
                    </button>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>