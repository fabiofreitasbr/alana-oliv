<?php

require_once 'inc/load.php';

/* Links */
$argVar = array(
    'titleSite' => 'Alana Oliveira',

    'email' => 'mailto:contato@alanaoliv.com',
    'emailShow' => 'contato@alanaoliv.com',

    'phone' => 'tel:+5511976004721',
    'phoneShow' => '+55 11 97600‑4721',

    'whatsapp' => 'https://wa.me/5511976004721',
    'whatsappShow' => '+55 11 97600‑4721',

    'facebook' => '',
    'facebookShow' => '/alanaaoliv',
    
    'linkedin' => 'https://www.linkedin.com/in/alana-oliveira-01514028b/?trk=PROFILE_DROP_DOWN',
    'linkedinShow' => '',

    'tiktok' => 'https://www.tiktok.com/@alanaaoliv',
    'tiktokShow' => '@alanaaoliv',

    'instagram' => 'http://instagram.com/alanaaoliv',
    'instagramShow' => '@alanaaoliv',

    'youtube' => 'https://www.youtube.com/',
    'youtubeShow' => '',

    'site' => '',
    'siteShow' => '',

    'maps' => 'https://maps.app.goo.gl/USjscT28KXBU4uaJA',
    'address1' => 'Rua Mirinzal, 321, Campo Grande',
    'address2' => 'Rio de Janeiro/RJ - CEP: 23.095-606',

    'funcionamento1' => 'Segunda à Sexta de 09:00 à 18:00h',
    'funcionamento2' => 'sábado de 09:00 às 13h exceto feriados.',
);

InfoVar::save($argVar);
?>