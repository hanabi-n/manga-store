<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="manga.css">
    
</head> 
<body> 

   <?php 
        if(isset($_GET['notlogged'])){
            ?>
                <div class="alert">
                <?php 
					if (isset($_COOKIE['lang'])) {
						if($_COOKIE['lang']=='ru'){
							echo "Неправильная почта или пароль";
						}elseif($_COOKIE['lang']=='en'){
							echo "Incorrect email or password!";
						}
					}else{echo "Incorrect emal or password!";}
				?>   
                </div>

            <?php
        }

        // registrationcheck.php


    ?>

    <div class="sidenav">
         <div class="login-main-text">
            <h2> <span class="title_log">M</span>anga <span class="title_log">L</span>ib<br>
                 <span class="title_log">
                 <?php 
                    if (isset($_COOKIE['lang'])) {
                        if($_COOKIE['lang']=='ru'){
                             echo "Вход";
                        }elseif($_COOKIE['lang']=='en'){
                             echo "Sign In";
                        }
                    }else{echo "Sign In";}
                ?>
                 </span>
            </h2>
            <p>
            <?php 
				if (isset($_COOKIE['lang'])) {
					if($_COOKIE['lang']=='ru'){
						echo "Войдите здесь, чтобы получить доступ";
					}elseif($_COOKIE['lang']=='en'){
						echo "Login here to access";
					}
				}else{echo "Login here to access";}
			?>
            </p>
         </div>
    </div>
    
    <div class="main">
         <div class="col-md-9 col-sm-12">
            <div class="login-form">
                <form action="data/check.php" method="post">
                  <div class="form-group">
                     <label>
                     <?php 
                        if (isset($_COOKIE['lang'])) {
                            if($_COOKIE['lang']=='ru'){
                                echo "Ваша почта";
                            }elseif($_COOKIE['lang']=='en'){
                                echo "Login here to access";
                            }
                        }else{echo "Login here to access";}
                    ?>
                     </label>
                     <!-- <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Your Name" required > -->
                     <input type="text" id="email" name="email" class="form-control" placeholder="____@email.com" required >
                  </div>
                  <div class="form-group">
                     <label>
                     <?php 
                        if (isset($_COOKIE['lang'])) {
                            if($_COOKIE['lang']=='ru'){
                                echo "Пароль";
                            }elseif($_COOKIE['lang']=='en'){
                                echo "Password";
                            }
                        }else{echo "Password";}
                    ?>
                     </label>
                     <input type="password" id="password" class="form-control" name="password" pattern=".{6,}" 
                     title="                  
                     <?php 
                        if (isset($_COOKIE['lang'])) {
                            if($_COOKIE['lang']=='ru'){
                                echo "Ваш пароль должен быть больше 6-ти символов";
                            }elseif($_COOKIE['lang']=='en'){
                                echo "Your password must be more than 6 characters";
                            }
                        }else{echo "Your password must be more than 6 characters";}
                    ?>
                     " placeholder="******" required >
                  </div>
                  <button type="submit" class="btn btn-black">
                    <?php 
                        if (isset($_COOKIE['lang'])) {
                            if($_COOKIE['lang']=='ru'){
                                echo "Войти";
                            }elseif($_COOKIE['lang']=='en'){
                                echo "Login";
                            }
                        }else{echo "Login";}
                    ?>
                  </button>
                </form>

               <form action="signUp.php" method="post" >
                   <button type="submit" class="btn btn-secondary">
                        <?php 
                            if (isset($_COOKIE['lang'])) {
                                if($_COOKIE['lang']=='ru'){
                                    echo "Регистрация";
                                }elseif($_COOKIE['lang']=='en'){
                                    echo "Sign Up";
                                }
                            }else{echo "Sign Up";}
                        ?>
                   </button>
               </form>

            </div>
         </div>
      </div> 



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


</body>
</html>