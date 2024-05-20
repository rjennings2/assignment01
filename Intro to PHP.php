<?php

/*******w******** 
    
    Name: Rylee Jennings
    Date: May 20th, 2024
    Description: Assignment 1 - Intro to PHP

****************/

$config = [

    'gallery_name' => 'Rylees Gallery',
 
    'unsplash_categories' => ['dog','cat','sunset','flower', 'statue', 'space'],
 
    'local_images' => ['beach.jpg','strawberry.jpg','newyork.jpg','cloud.jpg']
 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    
    <h1 id = gallery_header>
    <?php
        echo $config['gallery_name'];
    ?>
    </h1>

    <div 
        <div id = small>
        <?php
            for($i = 0; $i < 6; $i++){
                echo "<img src=" . "https://source.unsplash.com/300x200/?".$config['unsplash_categories'][$i] . "alt =". $config['unsplash_categories'][$i]."image>"."  ";
            }
        ?>
        </div>

        <div id = large>
            <?php
                for($i = 0; $i < 4; $i++){
                    echo "img src=" . ;
                }
</body>
</html>