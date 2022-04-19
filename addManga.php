<?php 

    if(!isset($_SESSION)) { 
    session_start(); 
    
    if(!isset($_SESSION['userName'])){
        header("Location:index.php");
    }else{
        $uname = $_SESSION['userName']['firstname'];
        $email = $_SESSION['userName']['email'];
        $id    = $_SESSION['userName']['id'];
        $uid   = $_SESSION['userName']['role_id'];
    }    
    
} 
?>

<!DOCTYPE html>
<html>
<head>
<title>Add New Manga</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="main.css">



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>


<style>

    .editPage {
        margin-top: 160px;
    }

    .btn-third {
        padding: 0px 51px;
    }

    .wrapper.fadeInDown{
        width: 900px;
    }

    .nav-tabs {
        padding: 20px 0;
    }

    @media (max-width: 375px){
        .nav-tabs {
            width: 100%;
            margin-left: 30px;
            padding: 15px 5px;
            margin-right: 0px;
        }
    }

</style>

<!--/js-->
</head>
<body>

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
                                                
                                        <a class="dropdown_first_profile" href="#">        
                                                
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
                                        <a class="dropdown_first_profile" href="data/moderatorPage.php">        
                                                
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


                    </ul>   
                </div>
            </div>
    </nav> 

    <div class="container second add">
        
        <!-- <div class="sign_up">
            <div class=" col-sm-12">
                <div class="login-sign"> -->

        <div class="wrapper fadeInDown">
            <div class="editPage" id="formContent">
                <div class="text profile add_manga">
                    
                    <!-- <form action="moderatorPage.php" method="post" > -->
                    
                    <form method="post" enctype="multipart/form-data">
                        
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <div class="form-group add_group">
                                <label class="add_manga_label" for="name"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Манга ISBN";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Manga ISBN";
                                        }
                                    }else{echo "Manga ISBN";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="text" name="manga_isbn" required>
                            </div>
                            
                            <div class="form-group add_group">
                                <br>
                                <label class="add_manga_label" for="title"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Название Манги";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Manga Title";
                                        }
                                    }else{echo "Manga Title";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="text" name="manga_title" required>
                            </div>

                            <div class="form-group add_group">                    
                                <label class="add_manga_label" for="author"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Автор Манги";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Manga Author";
                                        }
                                    }else{echo "Manga Author";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="text" name="manga_author" required>
                            </div>


                            <div class="form-group add_group">                    
                                <label class="add_manga_label" for="genre"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Жанр Манги";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Manga Genre";
                                        }
                                    }else{echo "Manga Genre";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="text" name="genre" required>
                            </div>

                            <div class="form-group add_group">                    
                                <label class="add_manga_label" for="author"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Картина Манги";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Manga Image";
                                        }
                                    }else{echo "Manga Image";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="file" name="manga_image" required>
                            </div>

                            <div class="form-group add_group">                    
                                <label class="add_manga_label" for="author"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Описание Манги";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Manga Description";
                                        }
                                    }else{echo "Manga Description";}
                                ?>
                                </b></label>
                                <textarea class="form-control add_manga" name="manga_descr" cols="40" rows="5" required></textarea>
                            </div>

                            <div class="form-group add_group">                    
                                <label class="add_manga_label" for="author"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Старая цена Манги";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Old Price";
                                        }
                                    }else{echo "Old Price";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="number" size="4" min="1" max="10000" name="old_price" required>
                            </div>

                            <div class="form-group add_group">                    
                                <label class="add_manga_label" for="author"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Скидка";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Promotion";
                                        }
                                    }else{echo "Promotion";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="number" size="3"min="1" max="100" name="promotion" required>
                            </div>

                            <div class="form-group add_group">                    
                                <label class="add_manga_label" for="author"><b>
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "ID Издателя";
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Publisher ID";
                                        }
                                    }else{echo "Publisher ID";}
                                ?>
                                </b></label>
                                <input class="form-control add_manga" type="number" size="4"min="1" max="1000" name="publisherid" required>
                            </div>
                    
                            <div class="formFooter">
                                <button type="submit" id="add_manga" name="add_manga" class="btn btn-third add_mod_manga">
                                <?php 
                                    if (isset($_COOKIE['lang_manga'])) {
                                        if($_COOKIE['lang_manga']=='ru'){
                                            echo "Добавить";
                                            ?>
                                            <style>
                                            .btn-third {
                                                padding: 0px 60px;
                                            }
                                            </style>
                                            
                                            <?php
                                        }elseif($_COOKIE['lang_manga']=='en'){
                                            echo "Add manga";
                                        }
                                    }else{echo "Add manga";}
                                ?>
                                </button>
                            </div>
                        </ul>
                    </form>
 

                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="formFooter">
                                    <a class="btn btn-third add_mod_manga" href="manga.php" type="submit">
                                    <?php 
                                        if (isset($_COOKIE['lang_manga'])) {
                                            if($_COOKIE['lang_manga']=='ru'){
                                                echo "Назад";
                                            }elseif($_COOKIE['lang_manga']=='en'){
                                                echo "Go back";
                                            }
                                        }else{echo "Go back";}
                                    ?>
                                    </a>
                                </div>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
        

    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php

require('data/db.php');

if(isset($_POST["add_manga"])){
	$cn=makeconnection();  
	
	$target_dir = "Frame 4/banners";
	$target_file = $target_dir.basename($_FILES["manga_image"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);

	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["manga_image"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	// if(file_exists($target_file)){
	// 	echo "sorry,file already exists.";
	// 	$uploadok=0;
	// }
	
	//check file size
	if($_FILES["manga_image"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		
        if(move_uploaded_file($_FILES["manga_image"]["tmp_name"], $target_file)){
			
	
            $s="INSERT INTO manga (manga_isbn, manga_title, manga_author, manga_image, manga_descr, old_price, promotion, publisherid, genre) 
            
            values('" . $_POST["manga_isbn"] ."','" . $_POST["manga_title"] . "',
            '" . $_POST["manga_author"] . "', '" . basename($_FILES["manga_image"]["name"]) . "',
            '" . $_POST["manga_descr"] ."','" . $_POST["old_price"] ."','" . $_POST["promotion"] ."',
            '" . $_POST["publisherid"] ."','" . $_POST["genre"] ."')";
                                        //
            mysqli_query($cn,$s);
            
            echo "<script>alert('Record Save');</script>";
            
            
        } else{
    
            echo "sorry there was an error uploading your file.";
        }

    }
}
?>

</body>
</html>

