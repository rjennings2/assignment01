<?php

/*******w******** 
    
    Name: Rylee Jennings
    Date: May 20th, 2024
    Description: Assignment 1 - Intro to PHP

****************/

$config = [

    'gallery_name' => 'My First Gallery',
 
    'unsplash_categories' => ['Dog','Cat','Sunset','Flower', 'Statue', 'Space','Cookie','Lego'],
 
    'local_images' => [
        [
            'filename' => 'images/beach.jpg',
            'photographer' => 'Maarten van den Heuvel',
            'unsplash_url' => 'https://unsplash.com/@mvdheuvel'
        ],
        [
            'filename' => 'images/strawberry.jpg',
            'photographer' => 'Justus Menke',
            'unsplash_url' => 'https://unsplash.com/@justusmenke'
        ],
        [
            'filename' => 'images/newyork.jpg',
            'photographer' => 'Jon Flobrant',
            'unsplash_url' => 'https://unsplash.com/@jonflobrant'
        ],
        [
            'filename' => 'images/cloud.jpg',
            'photographer' => 'Taylor Van Riper',
            'unsplash_url' => 'https://unsplash.com/@taylorvanriper925'
        ]
    ] 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
    <title>Assignment 1</title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    
    <h1 id="gallery_header"><?php echo $config['gallery_name']; ?></h1>

    <div id="gallery">
        <?php
            for ($i = 0; $i < count($config['unsplash_categories']); $i++) {
                $category = $config['unsplash_categories'][$i];
                echo "<div class='category'>";
                echo "<h2>$category</h2>";
                echo "<img src='https://source.unsplash.com/300x200/?$category' alt='$category image'>";
                echo "</div>";
            }
        ?>
    </div>

    <h1 id="large_title"><?php echo count($config['local_images']); ?> Large Images</h1>

    <div id="large-images">
        <?php
            foreach ($config['local_images'] as $image) {
                echo "<div class='local-image'>";
                echo "<img src='{$image['filename']}' alt='Local Image'>";
                echo "<div class='photographer'><a href='{$image['unsplash_url']}'>{$image['photographer']}</a></div>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
   