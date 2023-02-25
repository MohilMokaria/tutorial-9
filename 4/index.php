<?php
    function swapping(&$a, &$b){
        $t = $a;
        $a = $b;
        $b = $t;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 9 | 4</title>
    <style>
        label{
            font-size: 2rem;
            margin: 40px;
        }
        .box{
            padding: 10px;
            margin: 40px;
        }
        .but{
            font-size: 1rem;
            padding: 5px 20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Call By Reference</h1>
        <form method="post">
            <label for="num">First Number :</label>
            <input class="box" type="number" name="num1" id="num1" required>
            <br>
            <label for="num">Second Number :</label>
            <input class="box" type="number" name="num2" id="num2" required>
            <br>
            <input class="but" type="submit" value="Swap">
        </form>
        <?php
            if($_POST){
                $a = $_POST["num1"];
                $b = $_POST["num2"];

                swapping($a, $b);
                echo "After Swapping : First Number : $a and Second Number : $b";

            }
        ?>
    </center>
</body>
</html>