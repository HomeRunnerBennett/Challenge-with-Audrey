<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Version
 */

get_header();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php include 'header.php'; ?>

<div id="hero-slider">
    <div class="slider-content">
        <h1>Welcome to Madolo a Nitel</h1>
    </div>
</div>

<div id="services" class="section">
    <div class="container">
        <h2>Our Services</h2>

        <div class="card">
            <h3>System Administration</h3>
            <p>We offer expert system administration services...</p>
        </div>

        <div class="card">
            <h3>Cyber Security Consultancy</h3>
            <p>Secure your digital assets with our top-notch cybersecurity consulting...</p>
        </div>

        <div class="card">
            <h3>Software Development</h3>
            <p>Transform your ideas into reality with our cutting-edge software development...</p>
        </div>
    </div>
</div>

<div id="about" class="section">
    <div class="container">
        <h2>About Us</h2>
        <p>Madolo a Nitel is dedicated to providing top-notch IT solutions...</p>
    </div>
</div>

<?php get_footer(); ?>
