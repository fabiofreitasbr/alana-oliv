<?php
// Caminhos e links
$template_uri = get_template_directory_uri();
$logo_white = $template_uri . '/img/logo.png';

?>

<footer class="bg-marrom-900 py-10 relative">
    <div class="container mx-auto px-4 text-white">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 lg:text-left pb-6 lg:gap-x-8 text-center lg:place-items-start">
            <!-- Logo -->
            <div class="w-full my-4">
                <img src="<?php echo esc_url($logo_white); ?>" alt="Logo Alana Oliveira" class="w-2/3 mx-auto" />
            </div>

            <!-- Menu -->
            <div class="my-3">
                <h3 class="text-white md:mb-2 text-lg md:text-xl font-medium">Menu</h3>
                <ul class="text-white flex flex-col items-center lg:items-start text-sm font-normal 2xl:text-lg">
                    <li class="py-2"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-bege-100 hover:text-verde-500">Início</a></li>
                    <li class="py-2"><a href="<?php echo esc_url(home_url('/sobre')); ?>" class="text-bege-100 hover:text-verde-500">Quem Sou Eu</a></li>
                    <li class="py-2"><a href="<?php echo esc_url(home_url('/servicos')); ?>" class="text-bege-100 hover:text-verde-500">Serviços</a></li>
                    <li class="py-2"><a href="<?php echo esc_url(home_url('/contato')); ?>" class="text-bege-100 hover:text-verde-500">Contato</a></li>
                </ul>
            </div>

            <!-- Contatos -->
            <div class="my-3 break-words text-wrap">
                <h3 class="text-white md:mb-2 text-lg md:text-xl font-medium">Contatos</h3>
                <ul class="text-white flex flex-col items-center md:items-start text-sm font-normal 2xl:text-lg">
                    <li class="py-2">
                        <a href="<?php echo esc_url(InfoVar::show('email')); ?>" target="_blank" class="text-bege-100 hover:text-verde-500 transition-all flex gap-x-2 items-center">
                            <i class="fas fa-envelope w-4 h-4"></i>
                            <span class="break-all"><?php echo esc_html(InfoVar::show('emailShow')); ?></span>
                        </a>
                    </li>
                    <!-- <li class="py-2">
                        <a href="<?php echo esc_url(InfoVar::show('whatsapp')); ?>" target="_blank" class="text-bege-100 hover:text-verde-500 transition-all flex gap-x-2 items-center">
                            <i class="fab fa-whatsapp w-4 h-4"></i>
                            <span class="break-all"><?php echo esc_html(InfoVar::show('whatsappShow')); ?></span>
                        </a>
                    </li> -->
                </ul>
            </div>

            <!-- Redes sociais e créditos -->
            <div class="my-3 md:col-span-3 lg:col-span-1">
                <h3 class="text-white md:mb-2 text-lg md:text-xl font-medium">Redes sociais</h3>
                <div class="flex justify-center lg:justify-start gap-4 my-2">
                    <a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank" rel="noopener">
                        <i class="fab fa-instagram text-white text-xl hover:text-verde-500"></i>
                    </a>
                    <a href="<?php echo InfoVar::show('tiktok'); ?>" target="_blank" rel="noopener">
                        <i class="fab fa-tiktok text-white text-xl hover:text-verde-500"></i>
                    </a>
                    <a href="<?php echo InfoVar::show('linkedin'); ?>" target="_blank" rel="noopener">
                        <i class="fab fa-linkedin text-white text-xl hover:text-verde-500"></i>
                    </a>
                    <!-- <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank" rel="noopener">
                        <i class="fab fa-whatsapp text-white text-xl hover:text-verde-500"></i>
                    </a> -->
                    <!-- <a href="<?php echo InfoVar::show('youtube'); ?>" target="_blank" rel="noopener">
                        <i class="fab fa-youtube text-white text-xl hover:text-verde-500"></i>
                    </a> -->
                </div>
                <?php
                $kls_logo = get_template_directory_uri() . '/img/credits/kls-white.png';
                ?>

                <a href="https://www.agenciakls.com.br/" target="_blank" rel="noopener">
                    <div class="flex justify-center lg:justify-start gap-3 mt-8">
                        <div class="text-sm">
                            Desenvolvido por
                        </div>
                        <img src="<?php echo esc_url($kls_logo); ?>" width="64" height="24" class="w-16" alt="Logo da Agência KLS" />
                    </div>
                </a>

            </div>
        </div>

        <!-- Créditos finais -->
        <div>
            <p class="text-sm text-verde-100 text-center">
                <span class="text-white">Alana Oliveira</span> – Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/script.js"></script>
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
