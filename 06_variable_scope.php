<html>
<head>
  
    <title>Hello</title>
</head>
<body>
    <h1>Variables Scopes in PHP !!!</h1>

    <?php 

    /*
    PHP has three different variable scopes:
         Local
            - A variable declared within a function
         Global
            - A variable declared outside a function
         Static
            - When a function is executed, all of its variables are deleted.
            If you want a local variable NOT to be deleted, use the static keyword
    */

    $name = "Shiham Samsudeen"; // This is a global variable defined outsite a function

    function sayHello(){
        global $name; // if we do not call this it will throw an exception saying undefined variable $name
        echo "Hello " . $name;
    }
    
    sayHello();

    function sayHi(){
        $anotherName = "Micheal Lue"; // Local variable declared within a function

        echo "Hi, ". $anotherName;
    }
    
    sayHi();


    function incrementA(){
        static $a=0; // static functionality 

        echo $a;
        $a++;
    }
    
    for($i = 0; $i < 10; $i++){
        incrementA();

    }   
  

    ?>
    
</body>
</html>