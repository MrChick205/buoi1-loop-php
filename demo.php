<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i=0;
        $sumc=0;
        $suml=0;
        $sum=0;
        while($i<=5){
            $sum+=$i;
            if($i%2==0){
                $sumc+=$i;
            }
            else{
                $suml+=$i;
            }
            $i++;
        }
        echo "chẵn: $sumc <br>";
        echo "lẻ: $suml <br>";
        echo "tổng: $sum";
    ?>
</body>
</html>