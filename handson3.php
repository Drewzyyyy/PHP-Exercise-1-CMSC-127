<html>
    <head>
        <title>Handson3</title>
    </head>
    <body>
        <?php
            $age = 10; //Changeable
            print "\$age = ".$age."<br>";
            if ($age<18)
                print  "no vote<br><br>";
            else
                print  "vote<br>";
            for($i=0,$j=1;$i<$age;$i++,$j++)
                print $j.": happy birthday<br>";
        ?>
    </body>
</html>
