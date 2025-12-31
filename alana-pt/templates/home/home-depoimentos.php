<?php
// Array de depoimentos
$testimonials = [
    [
        'text' => 'Alana, uma pessoa deliciosa para se conviver! Interessada, graciosa , engraçada e com enorme talento. Tive o prazer de tê -la em meu elenco por duas vezes. E espero que isso se repita mais vezes.',
        'name' => 'Keila C Bueno',
        'role' => 'Diretora e Coreógrafa',
    ],
    [
        'text' => 'Quando vi Alana dançando pela primeira vez, fiquei encantada. O corpo dela parecia não conhecer limites: era como uma massa de modelar nas mãos da arte, moldando-se com leveza e precisão a cada novo estilo de dança. Era pura expressão, entrega e sensibilidade.',
        'name' => 'Arielle Macedo',
        'role' => 'Bailarina e Coreógrafa da Anitta',
    ],
];
?>

<div class="bg-verdeOpaco-500 h-full py-6 lg:py-20 relative" id="seguro">
    <div class="container mx-auto px-4 relative">
        <h2 class="font-[Playfair] text-3xl text-white font-bold text-center mb-10">Depoimentos</h2>
        <div class="splide" aria-label="Depoimentos de clientes">
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
