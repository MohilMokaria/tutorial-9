<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 9 | 1</title>
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
        <h1>Factorial</h1>
        <form method="post">
            <label for="num">Number :</label>
            <input class="box" type="number" name="num" id="num" required>
            <br>
            <input class="but" type="submit" value="Calculate">
        </form>
        <?php
            if($_POST){
                $n = $_POST["num"];
                $fact = 1;

                for($i=$n; $i>0; $i--){
                    $fact *= $i;
                }
                echo "Factorial = $fact";
            }
        ?>
    </center>
</body>
</html>