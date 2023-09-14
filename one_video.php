<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        this is my First PHP Website
    
     <?php
    echo "Hello World Again";
    ?>

     <?php
    echo "Hello World and this is Printed using PHP";
    ?>

     <?php
    // Comment
    /*
    This
    is
    a
    Multiline
    Comment
    */
    ?>

     <?php
    // Variables
    $variable1 = 5;
    $variable2 = 2;
    echo $variable1;
    echo $variable2;

    echo $variable1 + $variable2;
    echo "<br>";
    ?>

    <?php
    // Operators
    // 1. Arithmetic Operators
    echo "The Value of variable1 + Variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";

    echo "The Value of variable1 - Variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";

    echo "The Value of variable1 * Variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";

    echo "The Value of variable1 / Variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";

    // 2. Assignment Operators
    $newVar = $variable1;
    echo "The Value Of new variables is ";
    echo $newVar;
    echo "<br>";

    $newVar = $variable1;
    $newVar += 1;
    echo "The Value Of new variables is ";
    echo $newVar;
    echo "<br>";

    $newVar = $variable1;
    $newVar -= 1;
    echo "The Value Of new variables is ";
    echo $newVar;
    echo "<br>";

    $newVar = $variable1;
    $newVar *= 1;
    echo "The Value Of new variables is ";
    echo $newVar;
    echo "<br>";

    $newVar = $variable1;
    $newVar /= 1;
    echo "The Value Of new variables is ";
    echo $newVar;
    echo "<br>";
    // 3. Comparison Operators
    echo "The value of 1==4 is ";
    echo var_dump(1== 4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!= 4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<= 4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>= 4);
    echo "<br>";

    // 4. Increment/Decrement Operators
    // echo $variable1++;
    // echo "<br>";
    // echo $variable1;

    // echo $variable1--;
    // echo "<br>";
    // echo $variable1;

    // echo ++$variable1;
    // echo "<br>";
    // echo $variable1;

    echo --$variable1;
    echo "<br>";
    echo $variable1;

    // 5. Logical Operators
    // And Operator
    $myVar = (true and true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false and true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false and false);
    echo "<br>";
    echo var_dump($myVar);

    // Or Operator
    $myVar = (true Xor true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (true Xor false);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false Xor true);
    echo "<br>";
    echo var_dump($myVar);

    $myVar = (false Xor false);
    echo "<br>";
    echo var_dump($myVar);
    ?>

    <?php
    define('PI', 3.14);
    // Data Types in PHP
    // 1. String
    echo "<br> Data Types <br>";
    $var = "This is a String";
    echo var_dump($var);
    echo "<br>";

    // 2. Integer
    $var = 67;
    echo var_dump($var);
    echo "<br>";

    // 3. Float
    $var = 67.1;
    echo var_dump($var);
    echo "<br>";

    // 4. Boolean
    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo PI;
    // 5. Array
    //6. Object
    ?>
    </div>
</body>
</html>