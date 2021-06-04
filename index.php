<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>test Strupa</title>
</head>

<body>

    <?php
   //нет проверки на совподение цвета слова и слова(какой цвет оно обозначает)
    function random_html_word()
    {
        $array_color = [
            "red" => "#E22134",
            "blue" => "#0095E6",
            "green" => "#065535",
            "yellow" => "#FFD358",
            "lime" => "#D3FFCE",
            "magenta" => "#D3869B",
            "black" => "#1D2021",
            "gold" => "#fdff00",
            "gray" => "#6F787F",
            "tomato" => "#d24747",
        ];
        $rand_word = array_rand($array_color, 1); 
        return $rand_word;
    }
        function random_html_color()
        {
            $array_color = [
                "#E22134" => "red",
                "#0095E6" => "blue",
                "#065535" => "green",
                "#FFD358" => "yellow",
                "#D3FFCE" => "lime",
                "#D3869B" => "magenta",
                "#1D2021" => "black",
                "#fdff00" => "gold",
                "#6F787F" => "gray",
                "#d24747" => "tomato",
            ];
            $rand_color = array_rand($array_color, 1); 

            return $rand_color;
    }

    for ($i = 0; $i < 6; $i++) {
        echo '<span style="color:' . random_html_color() . ';"> ' . random_html_word() . ' </span>';
        echo '<span style="color:' . random_html_color() . ';"> ' . random_html_word() . ' </span>';
        echo '<span style="color:' . random_html_color() . ';"> ' . random_html_word() . ' </span>';
        echo '<span style="color:' . random_html_color() . ';"> ' . random_html_word() . ' </span>';
        echo '<span style="color:' . random_html_color() . ';"> ' . random_html_word() . ' </span>';
        echo '<br>';
    }
    echo '<br>';

    $arr = [
        "red" => "#E22134",
        "blue" => "#0095E6",
        "green" => "#065535",
        "yellow" => "#FFD358",
        "lime" => "#D3FFCE",
        "magenta" => "#D3869B",
        "black" => "#1D2021",
        "gold" => "#fdff00",
        "gray" => "#6F787F",
        "tomato" => "#d24747",
    ];
  
    
    ?>
</body>

</html>