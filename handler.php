<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVITY 8.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

        // POST VARIABLE 

        $boxSize = $_POST["boxSize"];
        $numBoxes = $_POST["numBoxes"];
        $evenColor = $_POST["evenColor"];
        $oddColor = $_POST["oddColor"];

        // COLOR NAME IN HTML 

        $htmlcolors = array("aliceblue", "antiquewhite", "aqua", "aquamarine", "azure", "beige", "bisque", "black", "blanchedalmond",
        "blue", "blueviolet", "brown", "burlywood", "cadetblue", "chartreuse", "chocolate", "coral", "cornflowerblue",
        "cornsilk", "crimson", "cyan", "darkblue", "darkcyan", "darkgoldenrod", "darkgray", "darkgreen", "darkgrey", "darkkhaki",
        "darkmagenta", "darkolivegreen", "darkorange", "darkorchid", "darkred", "darksalmon", "darkseagreen", "darkslateblue", "darkslategray",
        "darkslategrey", "darkturquoise", "darkviolet", "deeppink", "deepskyblue", "dimgray", "dimgrey", "dodgerblue", "firebrick", "floralwhite",
        "forestgreen", "fuchsia", "gainsboro", "ghostwhite", "gold", "goldenrod", "gray", "green", "greenyellow", "grey", "honeydew", "hotpink",
        "indianred", "indigo", "ivory", "khaki", "lavender", "lavenderblush", "lawngreen", "lemonchiffon", "lightblue", "lightcoral", "lightcyan",
        "lightgoldenrodyellow", "lightgray", "lightgreen", "lightgrey", "lightpink", "lightsalmon", "lightseagreen", "lightskyblue", "lightslategray",
        "lightslategrey", "lightsteelblue", "lightyellow", "lime", "limegreen", "linen", "magenta", "maroon", "mediumaquamarine", "mediumblue", "mediumorchid",
        "mediumpurple", "mediumseagreen", "mediumslateblue", "mediumspringgreen", "mediumturquoise", "mediumvioletred", "midnightblue", "mintcream",
        "mistyrose", "moccasin", "navajowhite", "navy", "oldlace", "olive", "olivedrab", "orange", "orangered", "orchid", "palegoldenrod", "palegreen",
        "paleturquoise", "palevioletred", "papayawhip", "peachpuff", "peru", "pink", "plum", "powderblue", "purple", "red", "rosybrown", "royalblue",
        "saddlebrown", "salmon", "sandybrown", "seagreen", "seashell", "sienna", "silver", "skyblue", "slateblue", "slategray", "slategrey", "snow",
        "springgreen", "steelblue", "tan", "teal", "thistle", "tomato", "turquoise", "violet", "wheat", "white", "whitesmoke", "yellow", "yellowgreen");

        ?>

    <div class="wrapper">

            <?php

            // INPUT NUMBER

            if ($numBoxes == " " || $numBoxes <= 0) {
                $numBoxes = "Invalid Input";
                $displayOutputNum = "Number of Boxes: " .$numBoxes;
            }

            else {
                $displayOutputNum = "Number of Boxes: " .$numBoxes."px";    
            }

            // INPUT SIZE

            if ($boxSize == " " || $boxSize <= 0) {
                $boxSize = "Invalid Input";
                $displayOutputSize = "Size of Boxes: " .$boxSize;
            }

            else {
                $displayOutputSize = "Size of Boxes: " .$boxSize."px";
            }

            // INPUT ODD COLOR

            if ($oddColor == " " || !in_array(strtolower($oddColor), $htmlcolors)) {
                $displayValueOdd == "Invalid Input";
                $displayColorOdd = "Color of Odd Boxes: ".$displayValueOdd;
            }

            else {
                $displayColorOdd = "Color of Odd Boxes: ".$oddColor;
            }

            // INPUT EVEN COLOR

            if ($evenColor == " " || !in_array(strtolower($evenColor), $htmlcolors)) {
                $displayValueEven = "Invalid Input";
                $displayColorEven = "Color of Even Boxes: ".$displayValueEven;
            }

            else {
                $displayColorEven = "Color of Even Boxes: ".$evenColor;
            }

            ?>
    </div>

            <center>

            <div class="output">

                <!-- DISPLAYING THE INPUT VALUES  -->

                <?php

                echo $displayOutputNum;
                echo "<br><br>";
                echo $displayOutputSize;
                echo "<br><br>";
                echo $displayColorEven;
                echo "<br><br>";
                echo $displayColorOdd;

                ?>

            </div>

            </center>


        <center>

        <?php

        // CONDITIONS

        if (in_array(strtolower($evenColor), $htmlcolors) && in_array(strtolower($oddColor), $htmlcolors)) {
            for($count = 1; $count <= $numBoxes; $count++) {
                if ($numBoxes == "Invalid Input" || $boxSize == "Invalid Input") {
                    break;
                }

                $color = $count % 2 == 0 ? $evenColor:$oddColor;
                echo "<div class='boxes' 
                       style= 'background-color: {$color};
                       height: {$boxSize}px;
                       width:  {$boxSize}px;'>
                       </div>";
            }
        }

        else {
            $evenColor = "black";
            $oddColor = "white";
                for($count = 1; $count <= $numBoxes; $count++) {
                    if($numBoxes == "Invalid Input") {
                        break;
                    }

                    $color = $count % 2 == 0 ? $evenColor: $oddColor;
                    echo "<div class='boxes'
                           style='background-color: {$color};
                           height: {$boxSize}px;
                           width: {$boxSize}px;'>
                           </div>";
                }
        }

    ?>

    </center>

    <div class="linkBack">
        <a href="index.php"> Input another colors </a> 
        <br>
    </div>
        <br><br><br>
   
    

</body>
</html>