<?php
$page_id = get_queried_object_id();
?>
<header class="w-full py-3 md:py-6 z-50 <?php echo is_front_page() ? 'absolute' : 'relative bg-blue-900 bg-[url(../img/bg-menu.jpg)] bg-center'; ?>">
    <div class="container mx-auto px-4">
        <div class="flex flex-row justify-between items-center h-auto">
            <div class="logo z-20">
                <a href="<?php echo get_bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="168" height="112" class="block h-[2rem] xl:h-[4rem] w-auto" alt="Logo - Persevere Consórcios" />
                </a>
            </div>
            <nav class="flex items-center gap-x-4 lg:gap-x-10">
                <ul class="hidden md:flex gap-x-[2rem] lg:gap-x-[2.5rem] xl:gap-x-10 2xl:gap-x-[3rem] text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl font-medium items-center uppercase">
                    <li>
                        <a href="<?php echo get_page_link(8); ?>" class="text-white hover:text-marrom-900 <?php echo ($page_id == 8) ? 'py-4 !text-marrom-900' : ''; ?>">Início</a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(10); ?>" class="text-white hover:text-marrom-900 <?php echo ($page_id == 10) ? 'py-4 !text-marrom-900' : ''; ?>">Quem Sou Eu</a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(12); ?>" class="text-white hover:text-marrom-900 <?php echo ($page_id == 12) ? 'py-4 !text-marrom-900' : ''; ?>">Serviços</a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(14); ?>" class="text-white hover:text-marrom-900 <?php echo ($page_id == 14) ? 'py-4 !text-marrom-900' : ''; ?>">Contato</a>
                    </li>
                </ul>
                <!-- Dropdown de Idiomas -->
                <div class="relative inline-block text-left">
                    <button id="dropdownLanguageButton" data-dropdown-toggle="dropdownLanguage" class="inline-flex items-center gap-2 rounded-md bg-marrom-900 px-3 py-1.5 text-sm/6 font-semibold text-text-white uppercase text-white" type="button">
                        PT
                        <svg class="ml-1 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7l3-3 3 3m0 6l-3 3-3-3" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownLanguage" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLanguageButton">
                            <li>
                                <a href="http://alanaoliv.com/en" class="block px-4 py-2 hover:bg-gray-100">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex items-center gap-x-4 md:hidden" id="mobile-menu-hamburger">
                    <div class="z-20 block md:hidden">
                        <div class="hamburger hamburger--squeeze">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<nav class="block md:hidden z-40 w-full h-screen bg-marrom-900 fixed top-0 px-6 pt-28 transition-all duration-300 ease-in-out -right-full" id="header-bar-mobile">
    <div class="container mx-auto">
        <ul class="flex flex-col gap-5 xl:gap-10 text-xl font-medium">
            <li>
                <a href="<?php echo get_page_link(8); ?>" class="text-white <?php echo ($page_id == 8) ? 'border-b-2 py-1 border-marrom-900' : ''; ?>">Início</a>
            </li>
            <li>
                <a href="<?php echo get_page_link(10); ?>" class="text-white <?php echo ($page_id == 10) ? 'border-b-2 py-1 border-marrom-900' : ''; ?>">Quem Sou Eu</a>
            </li>
            <li>
                <a href="<?php echo get_page_link(12); ?>" class="text-white <?php echo ($page_id == 12) ? 'border-b-2 py-1 border-marrom-900' : ''; ?>">Serviços</a>
            </li>
            <li>
                <a href="<?php echo get_page_link(14); ?>" class="text-white <?php echo ($page_id == 14) ? 'border-b-2 py-1 border-marrom-900' : ''; ?>">Contato</a>
            </li>
        </ul>
    </div>
</nav>