<div class="bg-white relative">
    <section id="contact" class="py-8 md:py-16">
        <div class="container mx-auto px-4">
            <h2 class="font-[Playfair] text-3xl text-verde-500 font-bold text-center mb-4">Contact</h2>
            <div class="md:flex items-center gap-x-8 text-black">
                <!-- Text and Buttons -->
                <div class="w-full md:w-1/2">
                    <div class="my-2">
                        <h3 class="text-marrom-900 text-lg md:text-xl font-bold mb-4 text-center lg:text-left">Send a Message</h3>
                        <p class="text-base md:text-lg text-zinc-700 font-normal text-center lg:text-left">
                            For questions or proposals, fill out the form. Every detail matters, and your message is the first step.
                        </p>
                    </div>

                    <div class="my-4 flex items-center">
                        <hr class="w-full border-zinc-300 border" />
                        <div class="text-zinc-700 font-normal text-xl p-4">OR</div>
                        <hr class="w-full border-zinc-300 border" />
                    </div>

                    <div class="block lg:flex gap-x-3 my-4">
                        <a href="<?php echo InfoVar::show('whatsapp'); ?>" class="w-full block" target="_blank" rel="noopener">
                            <button class="w-full bg-verde-100 hover:bg-verde-300 my-4 lg:my-0 py-3 px-2 2xl:px-6 rounded-full text-white md:text-sm 2xl:text-base flex gap-x-2 justify-center items-center uppercase mx-auto transition-all font-normal">
                                <i class="fab fa-whatsapp w-3 lg:w-5 lg:h-5"></i>
                                Send us a message
                            </button>
                        </a>
                        <a href="<?php echo InfoVar::show('whatsapp'); ?>" class="w-full block" target="_blank" rel="noopener">
                            <button class="w-full bg-marrom-300 hover:bg-marrom-500 my-4 lg:my-0 py-3 px-2 2xl:px-6 rounded-full text-white md:text-sm 2xl:text-base flex gap-x-2 justify-center items-center uppercase mx-auto transition-all font-normal">
                                <i class="fas fa-phone w-3 lg:w-5 lg:h-5"></i>
                                <div>CALL NOW <span class="hidden xl:inline">RIGHT AWAY!</span></div>
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Form -->
                <div class="w-full md:w-1/2">
                    <div class="bg-white md:p-8">
                        <h3 class="text-marrom-900 text-lg md:text-xl font-bold">Get in Touch</h3>
                        <?php echo do_shortcode('[contact-form-7 id="ca0d152" title="Contact"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
