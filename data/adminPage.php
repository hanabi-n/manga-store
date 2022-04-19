<?php
	require 'db.php';
	$users = getAll();
    $manga = getAllmanga();
    

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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Page</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    
    <style>

        .container{
            background-color: #B6A6F9;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .tableStyle{
            background: rgba(255, 255, 255, 0.75);
            color: #000;
        }

        .btn.btn-primary {
            padding: 3px 25px;

        }
        .btn.btn-primary.second {
            background: #000;
            border-color: #000;
            color: #fff;
        }

        .btn.btn-primary.second:hover {
            background: #B6A6F9;
            border-color: #B6A6F9;
            color: #fff;
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
                                    <a class="dropdown_first_profile" href="data/adminPage.php">                                           
                                            <?php 
                                                if (isset($_COOKIE['lang_admin'])) {
                                                    if($_COOKIE['lang_admin']=='ru'){
                                                        echo "Удалить пользователей или мангу";
                                                    }elseif($_COOKIE['lang_admin']=='en'){
                                                        echo "Delete users and manga ";
                                                    }
                                                }else{echo "Delete users and manga ";}
                                            ?>   
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                <?php
                                    }elseif($uid == '2'){
                                    
                                ?> 
                                        
                                <a class="dropdown_first_profile" href="addManga.php">        
                                         
                                        <?php 
                                                if (isset($_COOKIE['lang_admin'])) {
                                                    if($_COOKIE['lang_admin']=='ru'){
                                                        echo "Добавить мангу";
                                                    }elseif($_COOKIE['lang_admin']=='en'){
                                                        echo "Add manga ";
                                                    }
                                                }else{echo "Add manga";}
                                        ?>               
                                </a>   
                                <div class="dropdown-divider"></div>
                                <a class="dropdown_first_profile" href="data/moderatorPage.php">        
                                           
                                        <?php 
                                                if (isset($_COOKIE['lang_admin'])) {
                                                    if($_COOKIE['lang_admin']=='ru'){
                                                        echo "Редактировать мангу";
                                                    }elseif($_COOKIE['lang_admin']=='en'){
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
                                                if (isset($_COOKIE['lang_admin'])) {
                                                    if($_COOKIE['lang_admin']=='ru'){
                                                        echo "Мой профиль";
                                                    }elseif($_COOKIE['lang_admin']=='en'){
                                                        echo "My Profile";
                                                    }
                                                }else{echo "My Profile";}
                                        ?>  
                                    <i class="fas fa-chevron-right"></i>
                                </a>

                                <button class="dropdown-item" type="button"> <a href="myManga2.php">
                                        <?php 
                                                if (isset($_COOKIE['lang_admin'])) {
                                                    if($_COOKIE['lang_admin']=='ru'){
                                                        echo "Моя Библиотека";
                                                    }elseif($_COOKIE['lang_admin']=='en'){
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

                        <form action="cookies.php" method="get">
						
                            <select class="selector_class " name="lang_admin" style="margin-top: 10px;">

                                <option value="en">
                                    <?php 
                                    if (isset($_COOKIE['lang_admin'])) {
                                        # code...
                                        if($_COOKIE['lang_admin']=='ru'){
                                            echo "Английский";
                                        }elseif($_COOKIE['lang_admin']=='en'){
                                            echo "English";
                                        }
                                        }else{echo "English";}
                                    ?>
                                </option>
                                <option value="ru">
                                    <?php 
                                    if (isset($_COOKIE['lang_admin'])) {
                                        if($_COOKIE['lang_admin']=='ru'){
                                            echo "Русский";
                                        }elseif($_COOKIE['lang_admin']=='en'){
                                            echo "Russian";
                                        }
                                        }else{echo "Russian";}
                                    ?>
                                </option>
                            </select>

                            <button class="button_selector" type="submit">&rightarrow;</button>
                        </form>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" type="button" href="logout.php">
                        <?php 
                            if (isset($_COOKIE['lang_admin'])) {
                                if($_COOKIE['lang_admin']=='ru'){
                                    echo "Выйти";
                                }elseif($_COOKIE['lang_admin']=='en'){
                                    echo "Logout";
                                }
                            }else{echo "Logout";}
                        ?>  
                        </a>
                        
                    </div>
                </div>
            </div>



        </nav>

    </div>

     
 
		<div class="container">
			<table class="tableStyle">
				<?php
				if($users != null){
					foreach($users as $s){
				?> 
					<tr>
						<td> <?php echo $s['id'] ?>     </td>
						<td> <?php echo $s['firstname'] ?>   </td>
						<td> <?php echo $s['lastname'] ?>    </td>
						<td> <?php echo $s['email'] ?>    </td>
						<td> <?php echo $s['gender'] ?>   </td>

						<td> <a class="btn btn-primary second" href="delete.php?id=<?php echo $s['id']; ?>">
                        <?php 
                            if (isset($_COOKIE['lang_admin'])) {
                                if($_COOKIE['lang_admin']=='ru'){
                                    echo "УДАЛИТЬ";
                                }elseif($_COOKIE['lang_admin']=='en'){
                                    echo "DELETE";
                                }
                            }else{echo "DELETE";}
                        ?>   
                        </a> </td>
 
					</tr>
 
				<?php }} ?>
			</table>
		</div>		
		<!-- таблица вывода пользователей -->


        <div class="container">
            
            <!-- <form action="delete.php?action=course" method="post"> -->
                                    
	    		<table class="tableStyle">
    
                    <?php

                    if($manga != null){
                        foreach($manga as $s){
                    ?> 
                        <tr>
                            <td> <?php echo $s['publisherid'] ?>     </td>
                            <td> <?php echo $s['manga_title'] ?>   </td>
                            <td> <?php echo $s['manga_author'] ?>    </td>
                            <td> <?php echo $s['old_price'] ?>    </td>


                            <!-- <td> <a class="btn btn-primary first" href="editform.php?id=<?php echo $s['id']; ?>">EDIT</a> </td>-->
                            
                            <td> <a class="btn btn-primary second" type="submit" href="deleteManga.php?course=<?php echo $s['publisherid']; ?> ">
                            <?php 
                                if (isset($_COOKIE['lang_admin'])) {
                                    if($_COOKIE['lang_admin']=='ru'){
                                        echo "УДАЛИТЬ";
                                    }elseif($_COOKIE['lang_admin']=='en'){
                                        echo "DELETE";
                                    }
                                }else{echo "DELETE";}
                            ?> 
                            </a> </td>
    
                        </tr>
    
                    <?php }} ?>
			    </table>

            
		</div>		
		<!-- таблица вывода курсов -->





	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>