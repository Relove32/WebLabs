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
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="menu">
        <div><img src="images/home.svg" alt="Home"></div>
        <div><img src="images/profile.svg" alt="Profile"></div>
        <div><img src="images/plus.svg" alt="plus"></div>
    </div>
    <div class="main">
        <div class="block">
            <div class="block_head">
                <div class="profile">
                    <img src=<?php echo($users[0]["ava"]); ?> alt="Ava">
                    <p class="name"><?php echo($users[0]["name"]); ?></p>
                </div>
                <img src="images/Edit.svg" alt="Edit">
            </div>
            <div class="post_image">
                <img src=<?php echo($images = $posts[0]["images-path"][0]); ?> alt="Post">
            </div>
            <button class="likes">
                <img src="images/❤.png" alt="Likes">
                <p><?php echo($images = $posts[0]["likes"]); ?></p>
            </button>
            <p><?php echo($images = $posts[0]["description"]); ?></p>
            <button class="also">еще</button>
            <p class="time"><?php echo($images = $posts[0]["date"]); ?></p>
        </div>
        <div class="block">
            <div class="block_head">
                <div class="profile">
                    <img src=<?php echo($users[1]["ava"]); ?> alt="Ava">
                    <p class="name"><?php echo($users[1]["name"]); ?></p>
                </div>
            </div>
            <div class="post_image">
                <img src=<?php echo($images = $posts[1]["images-path"][0]); ?> alt="Post">
            </div>
            <button class="likes">
                <img src="images/❤.png" alt="Likes">
                <p><?php echo($images = $posts[1]["likes"]); ?></p>
            </button>
            <p><?php echo($images = $posts[1]["description"]); ?></p>
            <button class="also">еще</button>
            <p class="time"><?php echo($images = $posts[1]["date"]); ?></p>
        </div>
    </div>
</body>

</html>