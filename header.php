<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <style>
        /* Add any additional styles specific to the header */
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #008080; /* Teal color */
            color: #fff; /* White text color */
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #000; /* Black color */
            padding: 10px 0;
        }

        nav a {
            color: #fff; /* White text color */
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #008080; /* Teal color on hover */
        }
    </style>
</head>
<body <?php body_class(); ?>>

<header>
    <h1>Madolo a Nitel</h1>
</header>

<nav>
    <a href="#hero-slider">Home</a>
    <a href="#services">Services</a>
    <a href="#about">About Us</a>
    <!-- Add more navigation links as needed -->
</nav>
