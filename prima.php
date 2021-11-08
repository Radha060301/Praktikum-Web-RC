<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMA</title>
</head>
<body>
    <?php 
        $bilcek = 0;
        for($i=0; $i<50; $i++){
            for($j=1; $j<=$i; $j++){
                if($i % $j == 0){
                    $bilcek++;
                }
            }
            if($bilcek == 2){
                echo "$i<br>";
            }
            $bilcek = 0;
        }
    ?>
</body>
</html>