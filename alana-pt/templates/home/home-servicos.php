<?php
// Lista de clientes com logos
$beneficiosList = [
    [ 'slug' => 'adidas', 'img' => get_template_directory_uri() . '/img/marcas/adidas.png' ],
    [ 'slug' => 'bradesco', 'img' => get_template_directory_uri() . '/img/marcas/bradesco.png' ],
    [ 'slug' => 'netflix', 'img' => get_template_directory_uri() . '/img/marcas/netflix.png' ],
    [ 'slug' => 'kondzilla', 'img' => get_template_directory_uri() . '/img/marcas/kondzilla.png' ],
    [ 'slug' => 'rode', 'img' => get_template_directory_uri() . '/img/marcas/rode.png' ],
    [ 'slug' => 'universal', 'img' => get_template_directory_uri() . '/img/marcas/universal.png' ],
];
?>

<div class="bg-bege-100 h-full py-6 lg:py-20 relative" id="seguro">
    <div class="container mx-auto px-4 relative">
        <div class="mb-12 text-center md:w-1/3 mx-auto">
            <h2 class="text-verde-500 font-[Playfair] font-bold text-xl sm:text-3xl lg:text-4x text-center">Clientes</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2 md:gap-4 lg:gap-6">
            <?php foreach ($beneficiosList as $logoSingle): ?>
                <div class="bg-bege-200 bg-cover h-40 rounded-xl sm:rounded-3xl text-center flex items-center justify-center font-brandon uppercase text-lg sm:text-2xl p-3">
                    <img src="<?php echo esc_url($logoSingle['img']); ?>" alt="Logo do Cliente" width="150" height="150" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
