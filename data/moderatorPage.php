<?php
	require 'db.php';

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
	<title>Moderator Page</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    
    <style>

        .container.second{
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

        .dropdown-menu {
            width: 210px;
        }

    </style>
</head>
<body>

    <div class="container_nav">
        <nav class=" navbar-expand-lg navbar navbar-light">
                <div class="container">
                <a class="navbar-brand" href="#">M<span>L</span></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <!-- <a class="nav-link" href="manga.php">Manga Shop</a> -->
                            </li>

                        </ul>
                        

                        <ul class="navbar-nav mr-left">
                                <div class="dropdown">

                                <button class="btn btn-secondary" style="background: #fff;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars"></i>
                                </button>
                                    
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item first" type="button"> 
                                <a class="user_name" ><?php echo $uname; ?></a>
                                
                                <br>
                                            
                                    <a class="dropdown_first_profile" href="../addManga.php">        
                                            
                                    <?php 
                                        if (isset($_COOKIE['lang_manga'])) {
                                            if($_COOKIE['lang_manga']=='ru'){
                                                echo "Добавить мангу";
                                            }elseif($_COOKIE['lang_manga']=='en'){
                                                echo "Add manga";
                                            }
                                        }else{echo "Add manga";}
                                    ?>
                                            
                                    </a>   
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown_first_profile" href="#">        
                                            
                                        <?php 
                                            if (isset($_COOKIE['lang_manga'])) {
                                                if($_COOKIE['lang_manga']=='ru'){
                                                    echo "Изменить мангу";
                                                }elseif($_COOKIE['lang_manga']=='en'){
                                                    echo "Change manga";
                                                }
                                            }else{echo "Change manga";}
                                        ?>   
                                    </a>  
                                    

                            </button>

                            <form action="cookies.php" method="get">
						
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
                            
                            <a class="dropdown-item" type="button" href="logout.php">
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


                        </ul>   
                    </div>
                </div>
        </nav> 
    </div>

     
 
		<div class="container second">
			<table class="table">

                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ISBN</th>
                    <th scope="col">
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Название Манги";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Manga Title";
                            }
                        }else{echo "Manga Title";}
                    ?>
                    </th>
                    <th scope="col">
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Автор Манги";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Manga Author";
                            }
                        }else{echo "Manga Author";}
                    ?>
                    </th>
                    <th scope="col">
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Описание Манги";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Description";
                            }
                        }else{echo "Description";}
                    ?>
                    </th>
                    <th scope="col">
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Старая цена Манги";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Old Price";
                            }
                        }else{echo "Old Price";}
                    ?>
                    </th>
                    <th scope="col">
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Скидка";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Promotion";
                            }
                        }else{echo "Promotion";}
                    ?>
                    </th>
                    <th scope="col">ID</th> 
                    <th scope="col">
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Изменить";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Edit";
                            }
                        }else{echo "Edit";}
                    ?>
                    </th>
                    
                    </tr>
                </thead>
                <tbody style="background: rgba(255, 255, 255, 0.75)">
				<?php
				if($manga != null){
					foreach($manga as $s){
				?> 
					<tr>
						<th scope="row"> <?php echo $s['manga_isbn'] ?>     </th>
						<td> <?php echo $s['manga_title'] ?>    </td>
						<td> <?php echo $s['manga_author'] ?>   </td>
						<!-- <td> <?php echo $s['manga_image'] ?>    </td> -->
						<td> <?php echo $s['manga_descr'] ?>    </td>
                        <td> <?php echo $s['old_price'] ?>      </td>
                        <td> <?php echo $s['promotion'] ?>      </td>
                        <td> <?php echo $s['publisherid'] ?>    </td>

						<td> <a class="btn btn-primary second" href="../updateMangaTest.php">
                        <?php 
                            if (isset($_COOKIE['lang_manga'])) {
                                if($_COOKIE['lang_manga']=='ru'){
                                    echo "ИЗМЕНИТЬ";
                                }elseif($_COOKIE['lang_manga']=='en'){
                                    echo "EDIT";
                                }
                            }else{echo "EDIT";}
                        ?>
                        </a> </td>
 
					</tr>
                        
				<?php }} ?>
                <tbody>
			</table>
		</div>		
		<!-- таблица вывода манги -->





	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>