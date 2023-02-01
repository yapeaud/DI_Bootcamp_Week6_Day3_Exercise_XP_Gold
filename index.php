<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day3_Exercise_XP_Gold</title>
</head>

<body>
    <h1>Exercise 1</h1>
    <?php
    function sum_of_digits($nbr)
    {
        $digits_sum = 0;
        for ($i = 0; $i < strlen($nbr); $i++) {
            $digits_sum += $nbr[$i];
        }
        return $digits_sum;
    }
    echo sum_of_digits("123456789") . "<br>";
    echo sum_of_digits("999999") . "<br>";
    ?>
    <hr>
    <h1>Exercise 2</h1>
    <?php
    function multiply_two_lists($nbr1, $nbr2)
    {
        $x = explode(' ', trim($nbr1));
        $y = explode(' ', trim($nbr2));
        foreach ($x as $key => $value) {
            $output[$key] = $x[$key] * $y[$key];
        }
        return implode(' ', $output);
    }
    echo multiply_two_lists(("20 12 5"), ("1 3 3")) . "<br>";
    ?>
    <hr>
    <h1>Exercise 3</h1>
    <?php
    #celsius and converts it to: Fahrenheit.
    function tempConversionC(float $celsius): float
    {
        return $celsius * 9 / 5 + 32;
    }
    $celsius = 25;
    $celsiusF = tempConversionC($celsius);

    #celsius and converts it to: Kelvin.
    function tempConversionK(float $celsius): float
    {
        return $celsius + 273.15;
    }

    $celsius = 25;
    $celsiusK = tempConversionK($celsius);

    // echo $celsiusF . " " . $celsiusK;
    // echo "0°C is equal to 32°F and 273.15 K.";
    echo $celsius . "°C is equal to " . $celsiusF ."°F " . " and " . $celsiusK ." K";
    ?>
    <hr>
</body>

</html>