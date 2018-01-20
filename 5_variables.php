<html>
<head>
  
    <title>Hello</title>
</head>
<body>
    <h1>Variables in PHP !!!</h1>

    <?php 

    /*
    Rules for PHP variables:
         A variable starts with the $ sign, followed by the name of
        the variable
         A variable name must start with a letter or the
        underscore character
         A variable name cannot start with a number
         A variable name can only contain alpha-numeric
        characters and underscores (A-z, 0-9, and _ )
         Variable names are case sensitive ($y and $Y are
        two different variables)
    */

        $name = "Shiham Samsudeen";
        $amount = 250000.0;


        echo gettype($name); 
        settype($name, 'integer');
        echo "<br>";
        echo $name;
        echo "<br>";        
        echo gettype($name);
        echo "<br>";        
        
        echo "isset -",isset($name);
        unset($name);
        echo "<br>";       
        
        echo "isset -", isset($name);  
        
        

    
    ?>
    
</body>
</html>