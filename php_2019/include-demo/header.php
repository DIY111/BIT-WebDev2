<?php

 require 'functions1.php';





?>
<html>
    <head>
        <title>Include Demo</title>
        <style>
        .content-area {
            background:purple;height:400px;color:white;padding:20px;
        }
        ul#menu-items {
            list-style-type: none;
            display: inline-block;
        }

        ul#menu-items li a {
            text-decoration: none;
            background: purple;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        ul#menu-items li {
            display: inline-block;
            margin-right: 20px;
        }
        </style>
    </head>
<body>
<div >
    <ul id="menu-items">
        <li>
        <a href="home.php">        
            Home
        </a>
    </li>
        <li>
            <a href="about-us.php">    
                About
            </a>
        </li>
        <li>
            <a href="contact.php">
                Contact
            </a>
        </li>
    </ul>
</div>

