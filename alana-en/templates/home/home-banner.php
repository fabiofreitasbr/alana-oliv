<?php
$template_uri = get_template_directory_uri();
?>
<div class="bg-[url('../img/banner-bg-mobile.jpg')] sm:bg-[url('../img/banner-bg-tablet.jpg')] xl:bg-[url('../img/banner-bg.jpg')] scroll-smooth bg-cover bg-center bg-no-repeat w-full relative h-[32rem] md:h-[52rem] xl:h-[120vh]">
    <div class="absolute bottom-0 md:bottom-auto md:top-0 md:h-full w-full flex justify-center md:justify-start md:items-center">
        <div class="text-white flex flex-row md:flex-col md:absolute md:left-6 gap-6 mb-6 md:mb-0 justify-end items-center lg:justify-start">
            <div class="flex justify-center">
                <a target="_blank" href="<?php echo esc_url(InfoVar::show('instagram')); ?>">
                    <i class="fab fa-instagram w-6 h-6 sm:w-7 sm:h-7 2xl:w-10 2xl:h-10 text-2xl transition-all hover:text-bege-100"></i>
                </a>
            </div>
            <div class="flex justify-center">
                <a target="_blank" href="<?php echo esc_url(InfoVar::show('tiktok')); ?>">
                    <i class="fab fa-tiktok w-6 h-6 sm:w-7 sm:h-7 2xl:w-10 2xl:h-10 text-2xl transition-all hover:text-bege-100"></i>
                </a>
            </div>
            <div class="flex justify-center">
                <a target="_blank" href="<?php echo esc_url(InfoVar::show('linkedin')); ?>">
                    <i class="fab fa-linkedin w-6 h-6 sm:w-7 sm:h-7 2xl:w-10 2xl:h-10 text-2xl transition-all hover:text-bege-100"></i>
                </a>
            </div>
            <!-- <div class="flex justify-center">
                <a target="_blank" href="<?php echo esc_url(InfoVar::show('whatsapp')); ?>">
                    <i class="fab fa-whatsapp w-6 h-6 sm:w-7 sm:h-7 2xl:w-10 2xl:h-10 text-2xl transition-all hover:text-bege-100"></i>
                </a>
            </div> -->
        </div>
    </div>

    <!-- Texto do banner -->
    <div class="absolute hidden md:block w-full bottom-0 left-0">
        <div class="container mx-auto px-4 pt-6 relative">
            <div class="flex flex-col gap-10 md:gap-10 items-center md:my-10 md:mt-24 w-auto">
                <div>
                    <div class="text-white font-light text-center text-lg sm:text-xl lg:text-2xl 2xl:text-3xl mx-auto px-4 sm:px-10 md:px-0">
                        Artistic Production
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
