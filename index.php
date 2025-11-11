<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>

<body>
    <h1>PHP Practice </h1>
    <?php

    //     echo "Using", "two paramaters";

    //     echo "<br/>";

    //     print("Using one pramater");

    //     echo "<br/>";
    //     (4 > 2) ? print('Good') : print("Bad");
    //     echo "<br/>";

    //     echo "Using Echo in ternary";
    //     echo "<br/>";

    //     echo (4 > 2) ? "Good" : "Bad";

    //     echo "<br/>";



    //     echo "<h3>Coding with quotes</h3>";

    //     // echo "<br/>";

    //     $a = 10;
    //     $b = 5;
    //     $c = $a + $b;

    //     echo "The total of $a and $b = $c";


    //     echo "<h4>Using HERO DOC</h4> ";

    //     echo <<<HERE
    // "What the hell is tha"

    // <h1>A is good $a</h1>
    // HERE;


    // $my_name = "Ismail";
    // $words_count = "The Word From";
    // echo strlen($my_name);
    // echo "<br/>";
    // echo str_word_count($words_count);

    // echo "<br/>";


    // define("MY_NAME", "Ismail");

    // echo "My name is " . MY_NAME;


    // $marks = 95;
    // echo "<br/>";

    // if ($marks > 90)
    //     echo "Congratulation you have done it well";
    // else if ($marks >= 80)
    //     echo "Very good";
    // elseif ($marks >= 70)
    //     echo "Well done";
    // elseif ($marks >= 60)
    //     echo "You have done it";
    // else
    //     echo "You have failed";


    // $marks = 85;
    // echo "<br/>";

    // switch ($marks) {
    //     case $marks >= 90:
    //         echo "The good news is you are good";
    //         break;
    //     case $marks >= 80:
    //         echo "Above 80";
    //         break;
    //     default:
    //         echo "You are not";
    // }


    // $index = 0;
    // while($index <= 10){
    //     echo "The current number is ". $index;
    //     echo "<br/>";
    //     $index++;
    // }

    // for($i = 1; $i<= 10; $i++){
    //     echo "The index is " . $i;
    //     echo "<br/>";
    // }

    // $isChecked = 0;

    // do{
    //     echo "Is checked is ". $isChecked;
    //     $isChecked++; 
    // }while($isChecked < 0);


    // echo "<br/>";

    // for ($i = 20; $i >= 5; $i--) {

    //     if ($i % 2 == 0)
    //         continue;
    //     else
    //         echo "$i ";
    // }

    // echo "Array in PHP";

    // echo "<br/>";
    // echo "<br/>";
    // echo "<br/>";

    // $names = array(
    //     "Ismail",
    //     "Mohamed",
    //     "Sadak"
    // );

    // var_dump($names);

    // echo "<br/>";

    // for ($i = 0; $i < count($names); $i++) {
    //     echo "The name is $names[$i] <br/>";
    // }


    // $numbers = [25, 64, 29, 13];
    // $total = 0;

    // foreach ($numbers as $number) {
    //     $total += $number;
    // }
    // echo "<br/>";

    // echo "the total is $total";

    // // $numbers.delete();

    // var_dump($numbers)



    // echo "Assassiative array";

    // echo "<br/>";


    // $data = array(
    //     "name" => "Ismail Abdifadil Isack",
    //     "id" => "C1220027",
    //     "className" => "CA226",
    //     "department" => "Computer Application"
    // );

    // foreach ($data as $key => $value) {
    //     echo "$key is $value";
    //     echo "<br/>";
    // }

    // echo "Two dimenstional associative array";

    // echo " <br/>";

    // $data = array(
    //     "names" => array("Ismial", "Mohamed", "Sadak"),
    //     "classes" => array("ca221", "ca222", "ca226")
    // );

    // var_dump($data);

    // $products = array(

    //     'paper' => array(

    //         'copier' => "Copier & Multipurpose",

    //         'inkjet' => "Inkjet Printer",

    //         'laser' => "Laser Printer",

    //     ),

    //     'pens' => array(

    //         'ball' => "Ball Point",

    //         'hilite' => "Highlighters",

    //         'marker' => "Markers",

    //     ),
    //     'misc' => array(

    //         'tape' => "Sticky Tape",

    //         'glue' => "Adhesives",

    //         'clips' => "Paperclips",

    //     ),

    // );


    // foreach ($products as $items) {
    //     foreach ($items as $item) {
    //         var_dump($item);
    //     }

    //     // var_dump($items);
    //     echo "<br/>";
    // }


    $numbers = [1, 5, 2, 4, 3, 6];

    // if (in_array(3, $numbers))
    //     echo "Yes it is in";
    // else
    //     echo "No it is not"

    // sort($numbers);
    rsort($numbers);

    $aarray = array(
        '2' => 'Ismail',
        "1" => "Abdifdadil"
    );



    arsort($aarray);

    // var_dump($aarray);


    // foreach ($numbers as $number) {
    //     echo "The number is " . $number;
    //     echo "<br/>";
    // }

    //     $name = explode(' ', "Ismail Abdifadil");

    //     // var_dump($name);


    //     $strings = "The quick brown fox jumps over the
    // lazy dog";

    //     $to_array = explode(' ', $strings);


    //     shuffle($to_array);

    //     var_dump($to_array);


    // $a = array(1, 2, 4, 5);
    // $b = array(7, 8, 9, 10,858);


    // $c = array_merge($a, $b);

    // // var_dump($c);

    // // var_dump(array_reverse($a));

    // var_dump(end($c));

    // function factorial($n)
    // {
    //     $fact = 1;
    //     for ($i = 2; $i <= $n; $i++) {
    //         $fact *= $i;
    //     }

    //     echo "The result is $fact";
    // }

    // factorial(7);


    // $number = 5;
    // echo "Before calling $number";
    // echo "<br/>";

    function displayNumber()
    {
        // global $number;
        // $number = $GLOBALS['number']++;
        // $number++;
        // echo " The number inside the function $number";
        // echo "<br/>";

        static $number  = 4;
        $number++;
        echo "The number is $number <br/>";
    }

    displayNumber();
    displayNumber();
    // echo "After the call $number";
    // echo "<br/>";


    ?>
</body>

</html>