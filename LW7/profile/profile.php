<?php 
    $users = json_decode(file_get_contents("users.json"), true);
    $posts = json_decode(file_get_contents("posts.json"), true);
    $images = $posts[0]["images-path"];
    $ava = $users[0]["ava"];
    $name = $users[0]["name"];
    $description = $users[0]["description"];
?>

   <!DOCTYPE html>
   <html lang="ru">
   
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Profile</title>
       
       <link rel="stylesheet" href="styles/style.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
   
   </head>
   
   <body>
       <div>
           <div><img src="img/home24.svg" alt="home"></div>
           <div><img src="img/user24.svg" alt="profile"></div>
           <div><img src="img/plus24.svg" alt="plus"></div>
       </div>
       <div>
           <img src=<?php echo($ava); ?> alt="ava">
           <h2 class="name"><?php  echo($name); ?></h2>
           <p><?php  echo($description) ?></p>
           <div>
               <img src="img/photoItem.svg" alt="photo">
               <p><?php echo(count($posts))?> поста</p>
           </div>
       </div>
       <div>
        <?php 
            foreach($images as $path)
            {
                ?> 
                <div class="photo-container"><img src=<?php echo($path);  ?> alt="post" class="post-img"></div>
                <?php
            }
        ?>
         
       </div>
   </body>
   
   </html>