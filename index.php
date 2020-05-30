<?php 

$page_name = basename(__FILE__, '.php');

$page = (object) array(
    "type"      => "page-main",
    "name"      => str_replace('.php', '', basename($_SERVER['PHP_SELF'])),
    "meta"      => [
        "title" => "Digital Audio",
        "desc"  => "The future of radio is here. At Oink Ink, we’re leading the way with technology to personalize ads in real time. So your radio is not only hyper personalized, it’s hyper creative.",
    ],
    "plugins"   => [
        "https://unpkg.com/vue@2.5.2/dist/vue.min.js",
        "https://cdn.plyr.io/3.4.7/plyr.polyfilled.js", 
        "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js",
    ],
);

include 'includes/settings.php';
include 'components/global/header/header.php';
include 'components/global/navbar/navbar.php';
include 'components/main/hero/hero.php';


$heading = (object) [
    "id"    => "dynamic",
    "title" => "Dynamic"
];
include 'components/main/heading/heading.php';
include 'components/main/dynamic/dynamic.php';


$heading = (object) [
    "id"    => "interactive",
    "title" => "Interactive"
];
include 'components/main/heading/heading.php';
include 'components/main/interactive/interactive.php';


$heading = (object) [
    "id"    => "short-form",
    "title" => "Short Form"
];
include 'components/main/heading/heading.php';
include 'components/main/short-form/short-form.php';


$heading = (object) [
    "id"    => "sequential",
    "title" => "Sequential"
];
include 'components/main/heading/heading.php';
include 'components/main/sequential/sequential.php';


// $heading = (object) [
//     "id"    => "banner-dev",
//     "title" => "Banner Development"
// ];
// include 'components/main/heading/heading.php';
// include 'components/main/banner-dev/banner-dev.php';


include 'components/global/footer-nav/footer-nav.php';
include 'components/global/footer/footer.php';