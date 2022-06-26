<?php
    include 'database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="image-logo">
            <img src="./img/spotify-logo.png" alt="">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php foreach($database as $album){ ?>
                        <img src="<?php echo $album['poster']?>" alt="album">
                        <h4><?php echo $album['title'];?></h4>
                        <h5><?php echo $album['author'];?></h5>
                        <h5><?php echo $album['genre'];?></h5> 
                        <h5><?php echo $album['year'];?></h5>   
                    <?php } ?> 
                </div>        
            </div>
        </div>
    </main> 
</body>
</html>