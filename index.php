<?php

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Main.css" rel="stylesheet">
    <title>MegaNetWork</title>
</head>
<body>

<p>List of users <a href="list.php">Click</a>.</p>
<p>Add new user <a href="create.php"> Click</a></p>
    <header>
        <div class="logo">
            <img src="Pictures/logo.png" width="65" height="65" alt="Logo">
        </div>
        <div class="settings">
            Settings
        </div>
    </header>


    <aside class="left_side">
        <ul class="navigate">
            <li class="nav_items"><a href="#">Profile</a></li>
            <li class="nav_items"><a href="#">Friends</a></li>
            <li class="nav_items"><a href="#">Photos</a></li>
            <li class="nav_items"><a href="#">Clips</a></li>
            <li class="nav_items"><a href="#">Musics</a></li>
            <li class="nav_items"><a href="#">Messages</a></li>
            <li class="nav_items"><a href="#">Groups</a></li>
            <li class="nav_items"><a href="#">News</a> </li>
        </ul>
    </aside>

    <aside class="right_side">

        <div class="inform">
            <div class="name">
                id <?php echo $id?>
            </div>
            <div class="status">
                Net Status
            </div>

        </div>
        <div class="main_menu">

            <div class="left_main">
                <div class="photo">
                    <p>Photo</p>
                </div>
                <div class="function">
                    <div class="send_mes">
                        <p>Send a message</p>
                    </div>
                    <div class="add_friend">
                        <p>Add a friend</p>
                    </div>
                </div>
                <div class="extra_things">
                    <div class="subscribes"> Subscribers</div>
                    <div class="news">News</div>
                </div>

                <div class="friends_list">
                    <div class="title">Friends</div>
                    <ul class="friends">
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                    </ul>
                </div>

                <div class="friends_list_online">
                    <div class="title">Friends online</div>
                    <ul class="friends">
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                        <li class="member"></li>
                    </ul>
                </div>

            </div>


            <div class="right_main">
                <div class="profile_status">
                    Status
                </div>

                <div class="bio">
                    <p class="city">City:</p>
                    <p class="day">Birth Day:</p>
                    <p class="family">Family Status:</p>
                    <p class="more">More</p>
                </div>

                <div class="photo_list">
                    <div class="photo_title">Photo</div>
                    <ul class="photos">
                        <li class="pic"></li>
                        <li class="pic"></li>
                        <li class="pic"></li>

                    </ul>
                </div>

                <div class="posts_list">
                    <div class="posts_title">Post</div>
                    <ul class="posts">
                        <li class="avatar">
                            <div class="ava">Photo</div>
                            <div class="extra_name">Name</div>
                            <div class="text">Post Post Post</div>
                        </li>
                        <li class="avatar">
                            <div class="ava">Photo</div>
                            <div class="extra_name">Name</div>
                            <div class="text">Post Post Post</div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </aside>
</body>
</html>
