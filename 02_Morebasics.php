<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey ;
        margin: auto;
        padding : 23px;

    }
</style>
<body>
    <div class="container">
        
    <h1>Let's learn about PHP</h1>
    <P>Your party status is here:</P>
    <?php
    $age = 7;
    if($age>18){
        echo "You can go to party";
    }
    else if ($age==7){
        echo "You are 7 years old";
    }
    else if ($age==6){
        echo "You are 6 years old and hence you can't go to the party";
    }
    else{
        echo "You can not go to party";
    }
     
    $languages = array("python" , "C++", "Php" , "NodeJs");
    echo "<BR>";
    echo count ($languages);
    echo "<br>";
    echo $languages[1];
    //loops in php
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    //Iterating arrays in php using while loop
    $a = 0;
    while ($a< count ($languages)){
        echo "<br> The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // do while loop
    $a = 0;
    do {
        echo "<br> The value of language using do while loop in php is: ";
        echo $a;
        $a++;
    }while ($a< 10);

    //For loop
     // do while loop
    for ($a=0; $a < 10; $a++) { 
        echo "<br> THe value of a using for loop is: ";
        echo $a;
    }

    foreach($languages as $value){
        echo "<br> The value from foreach is ";
        echo $value;
    }
    ?>
    </div>
    
</body>
</html>
