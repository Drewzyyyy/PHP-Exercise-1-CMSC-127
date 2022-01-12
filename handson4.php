<html>
    <head>
        <title>Handson4</title>
    </head>
    <body>
        <?php
            $array_of_scores = array(0,1,2,3,4,5,6,7,8,9);
            $sum = $odd = $even = 0;
            print "<h2>Values of \$array_of_scores:</h2>";
            foreach ($array_of_scores as $i)
                print $i." ";
            print "<br><h2>Sum of all values of \$array_of_scores:</h2>";
            foreach ($array_of_scores as $i){
                $sum += $i;
                if ($i%2==0)
                    $even+=1;
                else
                    $odd+=1;
            }
            print "Sum: ".$sum."<br>";
            print "<h2>Number of even and odd values in \$array_of_scores:</h2>";
            print "Odd: ".$odd."<br>Even: ".$even."";
        ?>
    </body>
</html>
