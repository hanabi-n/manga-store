<?php

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
<html>
<head>
	<title>My Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<!-- <link rel="stylesheet" type="text/css" href="manga.css"> -->
	<link rel="stylesheet" type="text/css" href="main.css">

    <style>
        /* body{
            background: #343A40;

        }
        .navbar{
            border: #fff;
            border-style: none none solid none;
        } */

        .form-group{
            margin-left: 70px;
        }


    </style>

</head>
<body>

    <div class="container_nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">M<span>L</span></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<span class="sr-only">(current)</span></a>
					</li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary" style="background: #fff;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="min-width: 14rem;">
                        <button class="dropdown-item first" type="button"> 
                            <a class="user_name" ><?php echo $uname; ?></a>
                            
                            <br>

                                <?php
                                    if($uid == '1'){
                                
                                ?>
                                    <a class="dropdown_first_profile" href="data/adminPageUsers.php">                                           
                                            <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Удалить пользователей";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Delete users";
                                                    }
                                                }else{echo "Delete users";}
                                            ?>   
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <br>
                                    <a class="dropdown_first_profile" href="data/adminPageManga.php">                                           
                                            <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Удалить мангу";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Delete manga";
                                                    }
                                                }else{echo "Delete manga";}
                                            ?>   
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                <?php
                                    }elseif($uid == '2'){
                                    
                                ?> 
                                        
                                <a class="dropdown_first_profile" href="addManga.php">        
                                         
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Добавить мангу";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Add manga ";
                                                    }
                                                }else{echo "Add manga";}
                                        ?>               
                                </a>   
                                <div class="dropdown-divider"></div>
                                <a class="dropdown_first_profile" href="data/moderatorPage.php">        
                                           
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Редактировать мангу";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Edit manga ";
                                                    }
                                                }else{echo "Edit manga";}
                                        ?>  
                                </a>  
                                 
                                <?php
                                    }else{
                                ?>
                                
                                <a class="dropdown_first_profile" href="myProfile.php">
                                                                         
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Мой профиль";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "My Profile";
                                                    }
                                                }else{echo "My Profile";}
                                        ?>  
                                    <i class="fas fa-chevron-right"></i>
                                </a>

                                <button class="dropdown-item" type="button"> <a href="myManga2.php">
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Моя Библиотека";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "My Library";
                                                    }
                                                }else{echo "My Library";}
                                        ?> 
                                </a></button>

                                <?php
                                    }
                                
                                ?>
                        </button>
                        <!-- roles -->

                        <form action="data/cookies.php" method="get">
						
                            <select class="selector_class " name="lang_manga" style="margin-top: 10px;">

                                <option value="en">
                                    <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        # code...
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Английский";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "English";
                                        }
                                        }else{echo "English";}
                                    ?>
                                </option>
                                <option value="ru">
                                    <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Русский";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Russian";
                                        }
                                        }else{echo "Russian";}
                                    ?>
                                </option>
                            </select>

                            <button class="button_selector" type="submit">&rightarrow;</button>
                        </form>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" type="button" href="data/logout.php">
                        <?php 
                            if (isset($_COOKIE['lang_manga'])) {
                                if($_COOKIE['lang_manga']=='ru'){
                                    echo "Выйти";
                                }elseif($_COOKIE['lang_manga']=='en'){
                                    echo "Logout";
                                }
                            }else{echo "Logout";}
                        ?>  
                        </a>
                        
                    </div>
                </div>


                <div class="dropdown-second" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item first" type="button"> 
                            <a class="user_name" ><?php echo $uname; ?></a>
                            
                            <br>

                                <?php
                                    if($uid == '1'){
                                
                                ?>
                                    <a class="dropdown_first_profile" href="data/adminPageUsers.php">                                           
                                            <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Удалить пользователей";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Delete users";
                                                    }
                                                }else{echo "Delete users";}
                                            ?>   
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <br>
                                    <a class="dropdown_first_profile" href="data/adminPageManga.php">                                           
                                            <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Удалить мангу";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Delete manga";
                                                    }
                                                }else{echo "Delete manga";}
                                            ?>   
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                <?php
                                    }elseif($uid == '2'){
                                    
                                ?> 
                                        
                                <a class="dropdown_first_profile" href="addManga.php">        
                                         
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Добавить мангу";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Add manga ";
                                                    }
                                                }else{echo "Add manga";}
                                        ?>               
                                </a>   
                                <div class="dropdown-divider"></div>
                                <a class="dropdown_first_profile" href="data/moderatorPage.php">        
                                           
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Редактировать мангу";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Edit manga ";
                                                    }
                                                }else{echo "Edit manga";}
                                        ?>  
                                </a>  
                                 
                                <?php
                                    }else{
                                ?>
                                
                                <a class="dropdown_first_profile" href="myProfile.php">
                                                                         
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Мой профиль";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "My Profile";
                                                    }
                                                }else{echo "My Profile";}
                                        ?>  
                                    <i class="fas fa-chevron-right"></i>
                                </a>

                                <button class="dropdown-item" type="button"> <a href="myManga2.php">
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Моя Библиотека";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "My Library";
                                                    }
                                                }else{echo "My Library";}
                                        ?> 
                                </a></button>

                                <?php
                                    }
                                
                                ?>
                        </button>
                        <!-- roles -->

                        <form action="data/cookies.php" method="get">
						
                            <select class="selector_class " name="lang_manga" style="margin-top: 10px;">

                                <option value="en">
                                    <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        # code...
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Английский";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "English";
                                        }
                                        }else{echo "English";}
                                    ?>
                                </option>
                                <option value="ru">
                                    <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Русский";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Russian";
                                        }
                                        }else{echo "Russian";}
                                    ?>
                                </option>
                            </select>

                            <button class="button_selector" type="submit">&rightarrow;</button>
                        </form>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" type="button" href="data/logout.php">
                        <?php 
                            if (isset($_COOKIE['lang_manga'])) {
                                if($_COOKIE['lang_manga']=='ru'){
                                    echo "Выйти";
                                }elseif($_COOKIE['lang_manga']=='en'){
                                    echo "Logout";
                                }
                            }else{echo "Logout";}
                        ?>  
                        </a>
                        
                </div>
            </div>



        </nav>

    </div>



<div class="container">

    <div class="background_wrapper first"></div>
    	<div class="editPage" id="formContent">
    <!-- <div class="wrapper fadeInDown"> -->
        <?php    


            require 'data/db.php';

            $db = new DBcourses();

            $mail = $_SESSION['mail'];

            $user_array = $db->query("SELECT id from users where email = '$mail'");           

            foreach($user_array as $key => $value){
                $arr[] = $user_array[$key]['id'];
                $users = implode(",", $arr);
            }


            $user = getAll();

            if(!empty($user)){
                foreach($user as $key => $value){

                        if(stristr($users, $user[$key]["id"])){
                            
                            
                    ?>       
                            <form action="data/editUser.php" method="POST"> 
                                <!-- <div class="text profile"> -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        
                                            <input type="hidden" name="id" value="<?php echo $user[$key]['id']; ?>">
                                        
                                            <div class="form-group">
                                                <h6>
                                                <?php 
                                                    if (isset($_COOKIE['lang_manga'])) {
                                                        if($_COOKIE['lang_manga']=='ru'){
                                                            echo "Имя:";
                                                        }elseif($_COOKIE['lang_manga']=='en'){
                                                            echo "Firstname:";
                                                        }
                                                    }else{echo "Firstname:";}
                                                ?> 
                                                </h6>
                                                <input class="form-control" type="text" name="firstname" value="<?php echo $user[$key]['firstname'];?>"><br>
                                            </div>
                                            <div class="form-group">
                                                <h6>
                                                <?php 
                                                    if (isset($_COOKIE['lang_manga'])) {
                                                        if($_COOKIE['lang_manga']=='ru'){
                                                            echo "Фамилия:";
                                                        }elseif($_COOKIE['lang_manga']=='en'){
                                                            echo "Lastname:";
                                                        }
                                                    }else{echo "Lastname:";}
                                                ?>
                                                </h6>
                                                <input class="form-control" type="text" name="lastname" value="<?php echo $user[$key]['lastname'];?>"><br>
                                            </div>

                                            <div class="form-group">
                                                <h6>
                                                <?php 
                                                    if (isset($_COOKIE['lang_manga'])) {
                                                        if($_COOKIE['lang_manga']=='ru'){
                                                            echo "Пароль:";
                                                        }elseif($_COOKIE['lang_manga']=='en'){
                                                            echo "Password:";
                                                        }
                                                    }else{echo "Password:";}
                                                ?>
                                                </h6>
                                                <input class="form-control" type="password" name="password" value="<?php echo $user[$key]["password"];?>"><br>
                                            </div>
                                        
                                        
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="formFooter">
                                                <button class="btn btn-third myProfile" id="" type="submit">
                                                <?php 
                                                    if (isset($_COOKIE['lang_manga'])) {
                                                        if($_COOKIE['lang_manga']=='ru'){
                                                            echo "ОБНОВИТЬ";
                                                        }elseif($_COOKIE['lang_manga']=='en'){
                                                            echo "UPDATE";
                                                        }
                                                    }else{echo "UPDATE";}
                                                ?>
                                                </button>
                                                <div class="test"></div>
                                            </div>

                                        </div>

                                    </div>  

                                <!-- </div> -->
                            </form>
                            

                    <?php  
                        
                    }
                }
            }
            ?>
    <!-- </div> -->
        </div>

</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>	

</html>