<?php

// In PHP data stored in cookies can be accessed by
// using the global array $_COOKIE

//setting cookie
setcookie('name', 'Shiham', time() + 60);

// removing the cookie by setting the expiry time to a past value
// setcookie('name', '', time() - 3600);


?>

<html>
<head>
    <title>Cookie Test</title>
    <style>
    li{
        font-size:1.5em;
    }
    
    </style>
</head>
<body>
    <h1>Experiment with Cookies</h1> 
    </p>
    <ol>
        <li>
            Setting a Cookie value
        
        </li>
    </ol>

    <div>
       <?php  
        foreach($_COOKIE as $key => $value){
            echo "<strong>$key</strong> : $value <br>";
        } 
       
       ?>
    </div>
</body>
</html>