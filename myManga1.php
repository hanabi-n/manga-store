<?php
	// require 'db.php';

	// session_start();
    // if(!isset($_SESSION['mail'])){
    //     header("Location:index.php");
    // }else{
    //     $uname = $_SESSION['mail'];
    // }

    session_start();

    if(!isset($_SESSION['userName'])){
        header("Location:index.php");
    }else{
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

    <title>Make Order</title>

    <style>

        a{
            color: #000;
            text-decoration: none;
        }

        a:hover{
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
                                <input hidden type="text" name="user_id" value="$uname">
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Корзина";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Shopping Cart";
                                    }
                                }else{echo "Shopping Cart";}
                            ?> 
                            </b></h4>
                        </div>

                    </div>
                </div>
                
                <?php    


                        require 'data/db.php';

                        $db = new DBcourses();

                        $course_array = $db->query("SELECT manga_title from mymanga where user_id = '$id'");           


                        foreach($course_array as $key => $value){
                            $arr[] = $course_array[$key]['manga_title'];
                            $courses = implode(",", $arr);
                        }


                        $course = getAllmanga();

                        $int = 0;
                        $sum = 0;

                        if(!empty($course)){
                            foreach($course as $key => $value){

                                if(stristr($courses, $course[$key]["manga_title"])){
                            
                                ?> 
                            <div class="row border-top border-bottom">
                                <div class="row main align-items-center">
                                    <img class="col-2">
                                    <img class="img-fluid" src="Frame 4/banners/<?php echo $course[$key]['manga_image']?>">
                                    <div class="col">
                                        <div class="row text-muted"><?php echo $course[$key]['manga_title'];?></div>
                                        <div class="row"><?php echo $course[$key]['manga_author'];?></div>
                                    </div>
                                    <!-- <div class="col"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div> -->
                                    <div class="col"><?php echo $course[$key]['old_price'] - ($course[$key]['old_price'] * $course[$key]['promotion']/100) ?> 
                                    
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "тенге";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "tenge";
                                                }
                                            }else{echo "tenge";}
                                        ?> 
                                    </div>         
                                    
                                </div>
                            </div>   
                                <?php  
                                    $int ++;
                                    
                                        $sum=$sum+($course[$key]['old_price'] - ($course[$key]['old_price'] * $course[$key]['promotion']/100));
                                        
                                        

                                }
                            }
                        }


                ?>
           <div class="back-to-shop"><a>&leftarrow;</a><a class="" href="myManga2.php">
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "Назад в Библиотеку";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "Back to library";
                                                }
                                            }else{echo "Back to library";}
                                        ?> 
           </a></div>
            </div> 
            <div class="col-md-4 summary">
                <div>
                    <h5><b>
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "Итог";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "Summary";
                                                }
                                            }else{echo "Summary";}
                                        ?> 
                    </b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">
                        <?php

                            echo $int;
                        ?>
                         
                                         <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "ВЕЩИ";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "ITEMS";
                                                }
                                            }else{echo "ITEMS";}
                                        ?> 
                    </div>
                    <div class="col text-right">
                        
                    <?php
                        echo $sum;
                                    
                    ?>

                    
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "тенге";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "tenge";
                                                }
                                            }else{echo "tenge";}
                                        ?> 
                    </div>
                </div>
                     <div class="alert alert-success" role="alert" id = "message_alert" style="display: none;"></div>	
							<form>
								<div class="form-group">
									<label for="">
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "СТРАНА:";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "COUNTRY:";
                                                }
                                            }else{echo "COUNTRY:";}
                                        ?>
                                    </label>
									<select class="text-muted" id="country"></select>
								</div>
								<div class="form-group">
									<p>
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "ДОСТАВКА";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "SHIPPING";
                                                }
                                            }else{echo "SHIPPING";}
                                        ?>
                                    </p> 
									<select class="text-muted" id="delivery">
										<option class="text-muted" value = '0'>
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "Выбрать Доставку";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "Select Shipping";
                                                }
                                            }else{echo "Select Shipping";}
                                        ?>
                                        </option>
									</select>
								</div>

								<div class="form-group">
									<p>
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "НАПИШИТЕ ПРОМО КОД";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "GIVE PROMO CODE";
                                                }
                                            }else{echo "GIVE PROMO CODE";}
                                        ?>
                                    </p> 
									<input type="text" class="text-muted" id="name" placeholder="
                                    
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "Введите ваш код";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "Enter your code";
                                                }
                                            }else{echo "Enter your code";}
                                        ?>
                                    ">
								</div>
								<br>
								<button type="button" id="addOrderButton" class="btn">
                                    <input hidden type="text" name="id_user" value=" <?php echo $id ?> "> 

                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "ПРОВЕРИТЬ";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "CHECKOUT";
                                                }
                                            }else{echo "CHECKOUT";}
                                        ?>
                                </button>
							</form>
</body>
</html>
