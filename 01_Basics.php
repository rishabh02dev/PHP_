<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI' , 3.14);
            echo "Hello World and this is printed using php";
            //Single line comment
            /*
            this
            is
            a
            multi
            line
            comment
            */
        $variable1 = 34;
        $variable2 = 45;
        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;
            //Secret Algorithm

            //operators in PHP
            // Arithemetic operators
            echo "The value of variable1 + variable2 is ";
            echo "<br>";
            echo $variable1 + $variable2;

            echo "The value of variable1 - variable2 is";
            echo $variable1 - $variable2;
            echo "<br>";
            echo "The value of variable1 * variable2 is";
            echo "<br>";
            echo $variable1*$variable2;
            echo "<br>";
            echo "The value of variable1 / variable2 is";
            echo "<br>";
            echo $variable1/$variable2;
            // Assignment operators
            $newVar = $variable1;
            $newVar +=10;
            $newVar *= 2;
            echo "The value of new variable is ";
            echo "<br>";
            echo $newVar;
            echo "<br>";
            // comparison operators
            // echo "<h1> Comparison Operators </h1> ";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is";
            echo var_dump(1>=4);
            echo "<br>";
            // Increment operators/decerement operators
            echo $variable1;
            echo "<br>";
            echo $variable1++;
            echo  "<br>";

            echo $variable1--;
            echo "<br>";
            echo ++$variable1;
            echo "<br>";
            echo --$variable2;
            echo "<br>";
            // logical operators
            // and (&&)
            // or  (||)
            // xor  
            // ! 

            // $myVar = (true) and (true);
            $myVar = (false) || (True);
            echo var_dump($myVar);
            $myrishu = (true xor false);
            echo $myrishu;
        ?>
        <?php
            //Data types in php
            // 1.String
            // 2.Integer
            // 3.float
            // 4.Boolean
            // 5.Array 
            // 6.Object 
            echo "<br> Data types <br> ";
            $var = "This is a string";
            echo var_dump($var);
            echo "<br>";
            $var = 67;
            echo var_dump($var);
            echo "<br>";
            $var = 67.11;
            echo var_dump($var);
            $var = true;
            echo var_dump($var);
            echo "<br>";
            echo PI;
        ?>

        
    </div>
</body>
</html>
