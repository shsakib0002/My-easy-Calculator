<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <h1>Calculator</h1>
            <br>
            First Number: <input name="n1" value="">
            <br>
            Second Number: <input name="n2" value="">
            <br>
            <input type="submit" name="sub" value="+">
            <input type="submit" name="sub" value="-">
            <input type="submit" name="sub" value="x">
            <input type="submit" name="sub" value="/">
            <br>
            Result: <input type='text' value="<?php echo $res; ?>"><br>
        </form>
    </div>

    <?php
    if (isset($_POST['sub'])) {
        $txt1 = $_POST['n1'];
        $txt2 = $_POST['n2'];
        $oprnd = $_POST['sub'];
        $res = '';

        switch ($oprnd) {
            case '+':
                $res = $txt1 + $txt2;
                break;
            case '-':
                $res = $txt1 - $txt2;
                break;
            case 'x':
                $res = $txt1 * $txt2;
                break;
            case '/':
                $res = $txt1 / $txt2;
                break;
        }
    }
    ?>

    <div class="result-container">
        <?php if (isset($res)) : ?>
            <h2>Result: <?php echo $res; ?></h2>
        <?php endif; ?>
    </div>
</body>
</html>
