<div class="md:flex gap-x-8 text-black">
    <div class="w-full md:w-1/2">
        <div class="bg-white md:p-8 text-center md:text-left">
            <h3 class="font-bold pb-4 text-trueGray-700 text-base lg:text-lg xl:text-2xl md:uppercase">Have any questions?</h3>
            <p class="text-base text-trueGray-700">Fill out our form or contact us to ask questions or speak directly with our team!</p>
            <?php echo get_template_part('templates/estrutura/formulario', 'contato'); ?>
        </div>
    </div>
    <div class="w-full md:w-1/2 text-black rounded-xl">
        <div class="text-md md:text-lg md:p-8">
            <div class="text-base lg:text-lg xl:text-2xl pb-4 text-center md:text-left">
                <h3 class="font-bold pb-4 text-trueGray-700 md:uppercase">
                    We’ll be happy to assist you!</h3>
                <p class="text-base text-trueGray-700">
                    Fill out our form or get in touch to clarify your questions and request a quote. It will be a pleasure to assist you!</p>
            </div>
            <a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank">
                <div class="flex justify-start items-center px-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all text-black text-base md:text-lg xl:text-xl">
                    <div class="px-4 md:px-6">
                        <!-- WhatsApp Icon -->
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp"
                            class="svg-inline--fa fa-whatsapp text-blue-800 h-10 w-10" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="..."></path>
                        </svg>
                    </div>
                    <div>
                        <div class="py-1 font-bold uppercase">WhatsApp:</div>
                        <div><?php echo InfoVar::show('whatsappShow'); ?></div>
                    </div>
                </div>
            </a>
            <a href="<?php echo InfoVar::show('email'); ?>" target="_blank">
                <div class="flex justify-start items-center px-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all text-black text-base md:text-lg xl:text-xl">
                    <div class="px-4 md:px-6">
                        <!-- Email Icon -->
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                            class="svg-inline--fa fa-envelope text-blue-800 h-10 w-10" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="..."></path>
                        </svg>
                    </div>
                    <div>
                        <div class="py-1 font-bold uppercase">Email:</div>
                        <div><?php echo InfoVar::show('emailShow'); ?></div>
                    </div>
                </div>
            </a>
            <a href="<?php echo InfoVar::show('maps'); ?>" target="_blank">
                <div class="flex justify-start items-center px-2 pt-4 pb-6 rounded-lg hover:bg-gray-100 break-all text-black text-base md:text-lg xl:text-xl">
                    <div class="px-4 md:px-6">
                        <!-- Address Icon -->
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot"
                            class="svg-inline--fa fa-location-dot text-blue-800 h-10 w-10"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="currentColor" d="..."></path>
                        </svg>
                    </div>
                    <div>
                        <div class="py-1 font-bold uppercase">Address:</div>
                        <div><?php echo InfoVar::show('address1'); ?></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
