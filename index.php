<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="<?php if(isset($_COOKIE['bg_color']))
    echo 'background-color: ' . $_COOKIE['bg_color'] . ';' ;
?>" >
    
    <h1>
        select background color
    </h1>

    <form action="" method="POST">

        <select name="bg_color" id="">
            <option value="">select color</option>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="yellow">yellow</option>
            <option value="orange">orange</option>
            <option value="gray">gray</option>
            <option value="blue">blue</option>
        </select>

        <button>submit</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bg_color'])) {
            $color = $_POST['bg_color'];
            setcookie('bg_color', $color, time() + (86400*30),"/");
            header("location: " . $_SERVER['PHP_SELF']);
        }
    ?>
</body>
</html>