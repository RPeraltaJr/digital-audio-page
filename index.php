<?php 

$page_name = basename(__FILE__, '.php');
include 'includes/settings.php';
include 'components/header/header.php';
include 'components/navbar/navbar.php';
include 'components/hero/hero.php';

$heading = (object) array(
    "id"    => "dynamic-player",
    "title" => "Dynamic"
);
include 'components/heading/heading.php';
include 'components/dynamic/dynamic.php';

$heading = (object) array(
    "id"    => "short-form",
    "title" => "Short Form"
);
include 'components/heading/heading.php';
include 'components/short-form/short-form.php';

$heading = (object) array(
    "id"    => "sequential",
    "title" => "Sequential"
);
include 'components/heading/heading.php';
include 'components/sequential/sequential.php';

include 'components/footer-nav/footer-nav.php';
include 'components/footer/footer.php';