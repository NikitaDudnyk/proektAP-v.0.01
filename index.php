
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIKITA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <form method=POST>
             <input class=KlickStyle type="submit" name="klick" value=PLAY >
        </form>
<?php
   if(isset ($_POST['klick']))
    $a = rand(0,6);
    $b = rand(0,6);
    echo $a;
echo "<hr>";
    echo $b;
        if ($a > $b)
        echo "<div class='awin'>WIN</div>";
        if ($b > $a)
        echo "<div class='bwin'>WIN</div>";
        if ($a > $b)
        echo "<div class='blose'>LOSE</div>";
        if ($b > $a)
        echo "<div class='alose'>LOSE</div>";
            if ($b == $a)
            echo "<div class='drawA'>DRAW</div>";
            if ($b == $a)
            echo "<div class='drawB'>DRAW</div>";
?>
</body>
</html>

