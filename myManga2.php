<?php
    // require 'db.php';

    // session_start();
    // if(!isset($_SESSION['mail'])){
    //     header("Location:index.php");
    // }else{
    //     $uname = $_SESSION['mail'];
    // }

    session_start();

    if (!isset($_SESSION['userName'])) {
        header("Location:index.php");
    } else {
        $uname = $_SESSION['userName']['firstname'];
        $email = $_SESSION['userName']['email'];
        $id    = $_SESSION['userName']['id'];
        $uid   = $_SESSION['userName']['role_id'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="secondStyle.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts.js"></script>

    <title>My Manga</title>


    <style>
        .cart {
            padding: 4vh 1vh;
            margin: 0 auto;
        }



        .close {
            margin-top: -15px;
        }

        .row.price {
            margin-top: -5px;
        }

        form {
            padding: 0px;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        a:hover {
            color: #CC0000;
            text-decoration: none;
        }
    </style>
</head>

<body>


    <div class="card">

        <div class="row">

            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">

                             <h4><b>
                                    <?php
                                        if (isset($_COOKIE['lang_manga'])) {
                                            if ($_COOKIE['lang_manga'] == 'ru') {
                                                echo "Мой список Манги";
                                            } elseif ($_COOKIE['lang_manga'] == 'en') {
                                                echo "My manga List";
                                            }
                                        } else {
                                            echo "My manga List";
                                        }
                                    ?>
                                </b></h4>
                        </div>

                    </div>
                    <?php


                    require 'data/db.php';

                    $db = new DBcourses();


                    $course_array = $db->query("SELECT manga_title from mymanga where user_id = '$id'");

                    // var_dump($course_array );

                    foreach ($course_array as $key => $value) {
                        $arr[] = $course_array[$key]['manga_title']; 
                        $courses = implode(",", $arr);
                    }


                    $course = getAllmanga();

                    if (!empty($course)) {
                        foreach ($course as $key => $value) {

                            if (stristr($courses, $course[$key]["manga_title"])) {
                                
                    ?>
                                <div class="row border-top border-bottom">
                                    <div class="row main align-items-center">
                                        <img class="col-2">
                                        <img class="img-fluid" src="Frame 4/banners/<?php echo $course[$key]['manga_image'] ?>">
                                        <div class="col">
                                            <div class="row text-muted"><?php echo $course[$key]['manga_title']; ?></div>
                                            <div class="row"><?php echo $course[$key]['manga_author']; ?></div>
                                        </div>
                                        <div class="col"><?php echo $course[$key]['old_price'] - ($course[$key]['old_price'] * $course[$key]['promotion'] / 100) ?> 
                                        
                                        <?php
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if ($_COOKIE['lang_manga'] == 'ru') {
                                                    echo "тенге";
                                                } elseif ($_COOKIE['lang_manga'] == 'en') {
                                                    echo "tenge";
                                                }
                                            } else {
                                                echo "tenge";
                                            }
                                        ?>
                                            <form action="data/deleteCourse.php" method="get">
                                                <a class="close" href="data/deleteMyManga.php?id=<?php echo $course[$key]['publisherid']; ?>">&#10005;</a>

                                            </form> 
                                        </div>

                                    </div>
                                </div>
                    <?php

                            }
                        }
                    }
                    ?>
                </div>

                <div class="back-to-shop">

                    <a class="" href="manga.php">&leftarrow; 
                                        <?php
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if ($_COOKIE['lang_manga'] == 'ru') {
                                                    echo "Назад в Магазин";
                                                } elseif ($_COOKIE['lang_manga'] == 'en') {
                                                    echo "Back to shop";
                                                }
                                            } else {
                                                echo "Back to shop";
                                            }
                                        ?>
                    </a> 

                    <a class="second" href="myManga1.php"> 
                                        <?php
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if ($_COOKIE['lang_manga'] == 'ru') {
                                                    echo "Заказ";
                                                } elseif ($_COOKIE['lang_manga'] == 'en') {
                                                    echo "Make an order";
                                                }
                                            } else {
                                                echo "Make an order";
                                            }
                                        ?>    
                    &rightarrow;</a>
                </div>



</body>

</html>