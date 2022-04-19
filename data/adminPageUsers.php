<?php
    require 'db.php';

    //запускается когда нажимают на кнопку. Для юзеров
    if (isset($_POST['search_users'])) {
        //переменные
        $firstname = $_POST['firstname'];
        $role_id = $_POST['role_id'];
      
        //Разные функции: первый это сортировка по имени, второй сортировка по роли юзеров    
        if (!empty($_POST['firstname'])And empty($_POST['role_id'])){
            $query = "SELECT * FROM `users` WHERE firstname LIKE '%".$firstname."%'";
            $search_result = filterTable($query);
    
        } else if (empty($_POST['firstname'])And !empty($_POST['role_id'])){
            $query = "SELECT * FROM `users` WHERE role_id = '$role_id'";
            $search_result = filterTable($query); //
        } else {
            $query = "SELECT * FROM `users`";
            $search_result = filterTable($query);
        }    
    } else {
        $query = "SELECT * FROM `users`";
        $search_result = filterTable($query);
    }
    
    session_start();
    $users = getAll();
    $manga = getAllmanga();

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
        <title>Users List</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="../data/style.css">
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

        th{
            padding: 5px 3px;
            text-align: center;
        }

        .form-control{
            margin-top: 5px;
        }

        .button_search{
            border: 2px solid transparent;
            background: #000;
            color: #fff;
            margin-top: 10px;
            padding: 8px 30px;
            border-radius: 5px;
            cursor: pointer;
        }

        .button_search:hover{
            background: #B6A6F9;
            transition: 0.5s;
            border: 2px solid #000;
            color: #000;
        }


        .content_table{
            margin: 0 217px;
        }

        label{
            margin-top: 15px;
        }
        @media (max-width: 768px){

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


                    <ul class="navbar-nav mr-left">
                        <div class="dropdown">

                            <button class="btn btn-secondary" style="background: #fff;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                            </button>
                                
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item first" type="button"> 
                                    <a class="user_name" ><?php echo $uname; ?></a>
                                    
                                    <br>      
                                                
                                        <a class="dropdown_first_profile" href="adminPageManga.php">                                           
                                            <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "Удалить мангу";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Delete manga ";
                                                    }
                                                }else{echo "Delete manga ";}
                                            ?>   
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                                
                                        </a>   
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown_first_profile" href="#">                                           
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
                                        

                                </button>

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

                        
                        <div class="dropdown-second" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item first" type="button"> 
                                <a class="user_name" ><?php echo $uname; ?></a>
                                
                                <br>

                                    <?php
                                        if($uid == '1'){
                                    
                                    ?>
                                        <a class="dropdown_first_profile" href="#">                                           
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
                                        <a class="dropdown_first_profile" href="adminPageManga.php">                                           
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


                    </ul>   
                </div>
            </div>



        </nav>

    </div>

        <div class="container">
            <form action="adminPageUsers.php" method="post">
                <div class="content_table admin_table">

                    <label for="title">
                        <b>
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Искать через Имя";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Search by Firstname";
                                    }
                                }else{  echo "Search by Firstname";}
                            ?>  
                        </b>
                    <input class="form-control" type="text" name="firstname" 
                    placeholder="">  
                    <label for="title">
                        <b>
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Искать через Роль";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Search by Role";
                                    }
                                }else{  echo "Search by Role";}
                            ?>  
                        </b>

                    <input class="form-control" type="text" name="role_id">

                    <input class="button_search" type="submit" name="search_users" value="OK"><br><br>
                    <table class="tableStyle">
                        <tr>
                            <th>ID</th>
                            <th>
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Имя";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Firstname";
                                    }
                                }else{echo "Firstname";}
                            ?>
                            </th>
                            <th>
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Фамилия";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Lastname";
                                    }
                                }else{echo "Lastname";}
                            ?>
                            </th>
                            <th>
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Гендер";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Gender";
                                    }
                                }else{echo "Gender";}
                            ?>
                            </th>
                            <th>
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Роль ID";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Role ID";
                                    }
                                }else{echo "Role ID";}
                            ?>   
                            </th>
                        </tr>
                        <?php
                        //Flag value for checking if data is found
                        $found=0;
                        while($row = mysqli_fetch_array($search_result)):?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['role_id'];?></td>

                            <td> <a class="btn btn-primary second" href="delete.php?id=<?php echo $row['id']; ?>">
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "УДАЛИТЬ";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "DELETE";
                                    }
                                }else{echo "DELETE";}
                            ?>   
                            </a> </td>
                        </tr>
                        <?php
                        $found=1; 
                            endwhile;
                        ?>
                        <?php
                        //if data can not found.
                        if ($found==0) {
                            if (isset($_COOKIE['lang_manga'])) {
                                if($_COOKIE['lang_manga']=='ru'){
                                    echo "Никаких результатов. Попробуйте ввести другие значения";
                                }elseif($_COOKIE['lang_manga']=='en'){
                                    echo "No Results Found. Please Try Another Search Option";
                                }
                            }else{echo "No Results Found. Please Try Another Search Option";}
                        }
                        ?>
                    </table>
                </div>
                

            </form>

        </div> 
        <!-- поиск юзеров -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
