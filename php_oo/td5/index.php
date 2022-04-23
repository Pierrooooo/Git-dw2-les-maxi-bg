<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Shapes forms</h2>
    <h3>Rectangle Post</h3>
    <form method="post" >
        <input type="number" name="width" placeholder="width">
        <input type="number" name="height" placeholder="height">
        <input type="submit" value="Send Dudes" name="rectangle">
    </form>
    <h3>Square Post</h3>
    <form method="post" >
        <input type="number" name="side_square" placeholder="side lenght">
        <input type="submit" value="Send Dudes" name="square">
    </form>
    <h3>Triangle Post</h3>
    <form method="post">
        <input type="number" name="base" placeholder="base">
        <input type="number" name="height" placeholder="height">
        <input type="submit" value="Send Dudes" name="triangle">
    </form>
    <h3>Circle Post</h3>
    <form method="post">
        <input type="number" name="radius" placeholder="radius">
        <input type="submit" value="Send Dudes" name="circle">
    </form>

<h2>Solids forms</h2>
    <h3>Cube Post</h3>
    <form method="post">
        <input type="text" name="width" placeholder="width">
        <input type="submit" value="Send Dudes" name="cube">
    </form>
    <h3>Sphere Post</h3>
    <form method="post">
        <input type="text" name="radius" placeholder="radius">
        <input type="submit" value="Send Dudes" name="sphere">
    </form>

<?php

require_once 'rectangle.php';
require_once 'square.php';
require_once 'triangle.php';
require_once 'circle.php';
require_once 'cube.php';
require_once 'sphere.php';

if (!empty($_POST)) {

    if ($_POST['name'] === 'rectangle') {
        $shape = new Rectangle($_POST['width'], $_POST['height']);
    }
    elseif ($_POST['name'] === 'square') {
        $shape = new Square($_POST['width']);
    }
    elseif ($_POST['name'] === 'triangle') {
        $shape = new Square($_POST['base'], $_POST['height']);
    }
    elseif ($_POST['name'] === 'circle') {
        $shape = new Square($_POST['radius']);
    }
    elseif ($_POST['name'] === 'cube') {
        $solid = new Square($_POST['width']);
    }
    elseif ($_POST['name'] === 'sphere') {
        $solid = new Square($_POST['radius']);
    }

    echo '<pre>';
    print_r($shape);
    print_r($solid);
    echo '</pre>';
}

?>

</body>
</html>