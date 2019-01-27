<html>
<head>
  
    <title>Hello</title>
</head>
<body>
    <h1>Constants in PHP !!!</h1>

    <?php 

        define('COLLEGE_NAME', 'University of Colombo');


        //echo COLLEGE_NAME;

        echo "is defined? ", defined('COLLEGE_NAME');
        echo "<br>";
        echo "My college is ", COLLEGE_NAME;
    
    ?>
    
</body>
</html>