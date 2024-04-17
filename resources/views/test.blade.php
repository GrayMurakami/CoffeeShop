<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    .middle {
      text-align: center;
    }

    .mark {
      margin-top: 200px;
      padding-top: 200px;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>PHP Web Site</title>
</head>

<body>
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
          <title>Bootstrap</title>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
        </svg>
        <span class="fs-4">itPHPLesson</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Main</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Blog</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Support</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="#">Contsct</a>
      </nav>
    </div>
  </header>

  <!--<h1>Hello, hell!</h1>-->

  <div class="middle">

    <?php



    echo ("</br>");

    $myC = array(
      array("Volvo", 22, 18),
      array("BMW", 15, 13),
      array("Saab", 5, 2),
      array("Land Rover", 17, 15)
    );

    echo ($myC[0][0] . " : In stock: " . $myC[0][1] . " , sold: " . $myC[0][2] . "</br>");
    echo ($myC[1][0] . " : In stock: " . $myC[1][1] . " , sold: " . $myC[1][2] . "</br>");
    echo ($myC[2][0] . " : In stock: " . $myC[2][1] . " , sold: " . $myC[2][2] . "</br>");
    echo ($myC[3][0] . " : In stock: " . $myC[3][1] . " , sold: " . $myC[3][2] . "</br>");

    echo ("</br>");

    $numeric = array(1, 5, 7, 8, 9, 2);
    sort($numeric);
    var_dump($numeric);

    echo ("</br>");
    rsort($numeric);
    var_dump($numeric);

    echo ("</br>");

    $cocktail = array("Kuba-Libre", "Cosmo", "Martini", "Old Fashen");
    #array_splice($cocktail, 1, 2);
    sort($cocktail);
    var_dump($cocktail);

    echo ("</br>");

    $avto = array("brand" => "Ford", "model" => "Mustang");
    $avto["year"] = 3000;
    var_dump($avto);


    echo ("</br>");

    $drink = [
      $drink[0] = "Coffee",
      $drink[1] = "Tea",
      $drink[2] = "Wiskey"
    ];

    foreach ($drink as $i => $x) {
      $i++;
      echo ("drink $i : $x </br>");
    }

    echo ("</br>");

    function myLove()
    {
      echo "Simple text from function";
    }

    $takeIt = array("Gray", 18, 'myLove');
    $takeIt[2]();

    echo ("</br>");

    $fruit = [
      "yellow" => "banana",
      "green" => "watermelon",
      "red" => "strawberry"
    ];

    var_dump($fruit);

    echo ("</br>");

    $myCar = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo ("The year of car was: " . $myCar["year"] . "</br>");
    $myCar["year"] = 2000;
    echo ("Now the year of car is: " . $myCar["year"] . "</br>");

    foreach ($myCar as $x => $y) {
      echo ("We have $x: $y </br>");
    }

    echo ("</br>");

    $car = array("BMW", "JTR", "Doodje");
    array_push($car, "Ford");
    var_dump($car);

    echo ("</br>");

    $isCount = array("Dima", 8, ["banana", "apple"], "Some text");
    echo ("How many arguments in array: " . count($isCount) . "</br>");
    var_dump($isCount);
    echo ($isCount[3]);

    echo ("</br>");

    $cars = array("toyota", "Lamba", "Chevrolet");
    var_dump($cars) . "</br>";
    $cars[0] = "Honda";

    echo ("</br>");
    var_dump($cars) . "</br>";

    echo ("</br>");

    foreach ($cars as $x) {
      echo ($x . "</br>");
    }


    #Use a pass-by-reference argument to update a variable:
    function addFive(&$value)
    {
      $value += 5;
    }

    $num = 2;
    addFive($num);
    echo ($num);

    echo ("</br>");

    #A function that do not know how many arguments it will get:
    function myArg(...$x)
    {
      $sum = 0;
      $len = count($x);
      for ($i = 0; $i < $len; $i++) {
        $sum += $x[$i];
      }
      return $sum;
    }

    $newSum = myArg(1, 4, 5, 3, 7, 10);
    echo ("Count summary of my arguments is $newSum");

    echo ("</br>");

    #The variadic argument must be the last argument:
    function myFamily($lastN, ...$firstN)
    {
      $call = "";
      $len = count($firstN);
      for ($i = 0; $i < $len; $i++) {
        $call = "$call Hi $lastN $firstN[$i] </br>";
      }
      return $call;
    }

    $newCall = myFamily("Murakami", "Oleg", "Gray", "Vasilii");
    echo ($newCall);

    echo ("</br>");


    // Outputs a welcome message
    echo "<h1>Hello, world!</h1>";

    # testCheck, Who i LoVe
    $who = "Yana";
    echo "<h3>I love $who</h3>";

    $versi = phpversion();
    echo "現在のPHPバージョンは $versi <br>";

    var_dump($who);
    //echo phpversion()

    $x = 8;

    function my_panch()
    {
      #$x = 88;
      global $x;
      echo "<p>My panch can kill " . $x . " people</p>";
    }
    my_panch();

    echo "<p>My panch can kill $x people</p>";

    function myEx()
    {
      static $ex = 0;
      echo $ex;
      $ex++;
    }

    myEx();
    echo "<br>";
    myEx();
    echo "<br>";
    myEx();
    echo "<br>";


    $myName = "Gray";
    $herName = "Yana";
    $myLove = "∞";

    echo ($myName . " love " . $herName . " so much, it's equal " . $myLove);

    echo ("<br>");

    class Car
    {
      public $color;
      public $model;
      public function __construct($color, $model)
      {
        $this->color = $color;
        $this->model = $model;
      }
      public function message()
      {
        return "My car is " . $this->color . " and actially it's " . $this->model;
      }
    }

    $myCar = new Car("red", "Porshe");
    var_dump($myCar);

    echo ("<br>");

    $fsociety = 8;
    var_dump($fsociety);
    $fsociety = (string) $fsociety;
    var_dump($fsociety);

    echo ("<br>");

    echo str_word_count("Hren wam s maslom");

    echo ("<br>");

    echo strpos("Hello world", "world");

    echo ("</br>");

    $f = "hello my background";
    echo strtolower($f);

    echo ("</br>");

    $one = " My Home, my Roles!";
    echo ($one);
    echo str_replace("Roles", "Coffee", $one);

    echo ("</br>");

    echo strrev($one);

    echo ("</br>");

    $remSpace = " No space before or after text! ";
    echo trim($remSpace);

    echo ("</br>");

    $a = "Hello IT World";
    $b = explode(" ", $a);

    print_r($b);

    echo ("</br>");

    $two = 2;
    $summ = 4;
    echo ("$two + $two = $summ");

    echo ("</br>");

    $three = "Some thing !";

    echo substr($three, 5);

    echo ("</br>");

    $four = "this is my home";
    echo substr($four, -3, 3);

    echo ("</br>");

    $five = "Hi, how are you?";
    echo substr($five, 5, -3);

    echo ("</br>");

    $six = "We are the so-called \"Viking\" from the North!";
    echo ($six);

    echo ("</br>");

    $x = 5678;
    var_dump(is_int($x));

    $x = 56.78;
    var_dump(is_int($x));

    echo ("</br>");

    $x = 56 + "345";
    var_dump(is_numeric($x));

    echo ("</br>");

    $x = 9876;
    $toIntNum = (int)$x;
    echo ($toIntNum);

    echo ("</br>");

    $x = "9876";
    $toIntNum = (int)$x;
    echo ($toIntNum);

    echo ("</br>");

    echo (pi());

    echo ("</br>");

    echo ("The minimum of number = " . min(1, 4, 64, 7, 454, 343, 4555, 343, 999, -999) . "</br>");
    echo ("The maximum of number = " . max(24, 23, 23, 53, 56, 473, 23545, 6878, 99999) . "</br>");

    echo (abs(-6.7));

    echo ("</br>");

    echo (sqrt(64) . "</br>");

    echo ("Round 0.60 equal " . round(0.60) . "</br>");
    echo ("Round 0.49 equal " . round(0.49) . "</br>");

    echo ("This function rand() make a random number, for example: " . rand(1, 100) . "</br>");

    define("myDay", "8 June 1991 / 32 years old");
    echo (myDay . "</br>");

    const myCar = "Porsche";
    echo ("My car is " . myCar . "</br>");

    #massive create
    define("cars", [
      "Alfa Romeo",
      "BMW",
      "Toyota"
    ]);
    echo cars[0];

    echo ("</br>");


    define("myName", "Gray");

    function myValueTest()
    {
      echo (myName);
    }

    myValueTest();


    echo ("</br>");


    if (3 >= 3) {
      echo ("Today is good");
    }

    echo ("</br>");

    $a = 222;
    $b = 33;
    $c = 411;

    if (($a > $b) && ($a < $c)) {
      echo ("Both conditions are true!");
    }

    echo ("</br>");


    $timeNow = date("H");

    if ($timeNow > "20") {
      echo ("U should go to the bed! Good night.");
    } elseif ($timeNow < "20") {
      echo ("Time for work, keep going!");
    } else {
      echo ("U can take a rest bro!");
    }

    echo ("</br>");

    $a = 8;
    if ($a > 5) $b = "Hi";
    echo ($b);

    echo ("</br>");

    $a = 15;
    $b = ($a > 14) ? "Afternoon" : "Morning";
    echo ("Right now is $b");

    echo ("</br>");


    $myColor = "Gray";

    switch ($myColor) {
      case "Red":
        echo ("Your favorite color is Red");
        break;
      case "Black":
        echo ("Your favorite color is Black");
        break;
      case "Gray":
        echo ("Your favorite color is Gray");
        break;
      case "White":
        echo ("Your favorite color is White");
        break;
      default:
        echo ("Your favorite color is neither Red, Black, White");
    }


    echo ("</br>");


    $weekDay = 2;

    switch ($weekDay) {
      case 1:
        echo ("Today is Monday! Week just start =(");
        break;
      case 2:
        echo ("Today is Thuesday. No so bad");
        break;
      case 3:
        echo ("Today is wednesday, hals, yeah");
        break;
      case 4:
        echo ("Today is thursday, just one day more!");
        break;
      case 5:
        echo ("Finally, is Friday !!!");
        break;
      case 6:
      case 7:
        echo ("weekend ! chill !");
        break;
      default:
        echo ("something wrong!");
    }

    echo ("</br>");

    # стрелочная функция 
    $test = fn () => "Hello, world";
    echo ($test());

    echo ("</br>");

    /*
    $i = 1;

    while ($i < 6) {
      echo ("$i </br>");
      $i++;
    }
    */

    /*
    $i = 1;

    while ($i < 6) {
      if ($i == 3) break;
      echo ($i . "</br>");
      $i++;
    }
    */

    $i = 1;

    while ($i < 6) {
      $i++;
      if ($i == 3) continue;
      echo ($i . "</br>");
    }


    $i = 0;

    while ($i < 100) {
      $i += 10;
      echo ($i . " ");
    }

    echo ("</br>");

    $i = 0;

    do {
      echo ("loop count: " . $i . "</br>");
      $i++;
    } while ($i < 6);

    echo ("</br>");

    /*
    for ($i = 0; $i < 10; $i++) {
      if ($i == 3) continue;
      echo ("The number is " . $i . "</br>");
    }
    

    for ($x = 0; $x < 100; $x += 10) {
      echo ("Big number go: " . $x . "</br>");
    }
    */

    echo ("</br>");

    $color = array("red", "blue", "yellow", "gray");

    foreach ($color as $i) {
      echo ("color $i </br>");
    }

    echo ("</br>");

    $memba = array("Vasia" => "33", "Lera" => "26", "Tetia Tania" => "77");

    foreach ($memba as $a => $b) {
      echo ("$a : $b </br>");
    }

    echo ("</br>");

    class myCar
    {
      public $color;
      public $model;
      public function __construct($color, $model)
      {
        $this->color = $color;
        $this->model = $model;
      }
    }

    $myAvto = new myCar("yellow", "Lambo");

    foreach ($myAvto as $x => $y) {
      echo ("Car $x is : $y </br>");
    }


    echo ("</br>");
    # print odd , выводим нечётные числа
    for ($i = 1; $i < 10; $i++) {
      if (($i % 2) == 0) continue;
      echo ("Print $i </br>");
    }

    echo ("</br>");

    function myFunction()
    {
      echo ("Function で ❣ Hello-World ❣");
    }

    myFunction();

    echo ("</br>");

    function myNum($name)
    {
      echo ("$name Refsnes.</br>");
    }

    myNum("Greg");
    myNum("Tonny");
    myNum("Lebovski");
    myNum("Jeki");

    echo ("</br>");

    function myInfo($name, $year)
    {
      echo ("$name Polyanski. Born in $year. </br>");
    }

    myInfo("Grisha", 1990);
    myInfo("Vova", 1970);
    myInfo("Tetia Sveta", 1950);

    echo ("</br>");


    function setHeight($minheight = 77)
    {
      echo ("The height is : $minheight .</br>");
    }

    setHeight(350);
    setHeight(); #default value
    setHeight(666);
    setHeight(8);

    echo ("</br>");

    function sum($x, $y)
    {
      $summ = $x + $y;
      return $summ;
    }

    echo ("8 + 20 = ") . sum(8, 20) . "</br>";
    echo ("2 + 2 = ") . sum(2, 2) . "</br>";
    echo ("66 + 33 = ") . sum(66, 33) . "</br>";

    echo ("</br>");

    ?>

    <h1 class="mark">
      <p>Some text here</p>
    </h1>

    </class>


</body>

</html>