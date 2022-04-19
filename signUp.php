<?php
require_once('data/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title> 
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="manga.css">

	<style>
	
	.login-sign {
    	margin-top: 10%;
	}


	</style>
</head>
<body>


	<div class="container">
     
        <div class="sign_up">
            <div class=" col-sm-12">
                <div class="login-sign">
                    
                    <form action="signUp.php" method="post" >

                        <div class="form-group sign_up first">
                            <label class="label_sign_up" for="firstname"><b>
                            <?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Имя";
									}elseif($_COOKIE['lang']=='en'){
										echo "First name";
									}
									}else{echo "First name";}
							?>
                            </b></label>
                            <input class="form-control" id="firstname" type="text" name="firstname" required>
                        </div>
                        <div class="form-group sign_up">
                            <label class="label_sign_up" for="lastname"><b>
                            <?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Фамилия";
									}elseif($_COOKIE['lang']=='en'){
										echo "Second name";
									}
									}else{echo "Second name";}
							?>
                            </b></label>
                            <input class="form-control" id="lastname"  type="text" name="lastname" required>
                        </div>

                        <div class="form-group sign_up">                    
                            <label class="label_sign_up" for="email"><b>
                            <?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Email адрес";
									}elseif($_COOKIE['lang']=='en'){
										echo "Email address";
									}
									}else{echo "Email address";}
							?>
                            </b></label>
                            <input class="form-control" id="email"  type="email" name="email" required>
                        </div>

                        <div class="form-group sign_up gender">
                            <input  type="radio" id="gender" name="gender" value="Female">
                            <label class="label_sign_up" class="gender" for="gender">
                            <?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Женщина";
									}elseif($_COOKIE['lang']=='en'){
										echo "Female";
									}
									}else{echo "Female";}
							?>
                            </label>


                            <input  type="radio" id="gender" name="gender" value="Male">
                            <label class="label_sign_up" class="gender" for="gender" >
                            <?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Мужчина";
									}elseif($_COOKIE['lang']=='en'){
										echo "Male";
									}
									}else{echo "Male";}
							?>
                            </label>

                            <input  type="radio" id="gender" name="gender" value="Other" >
                            <label class="label_sign_up" class="gender" for="gender">
                            <?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Другой гендер";
									}elseif($_COOKIE['lang']=='en'){
										echo "Other gender";
									}
									}else{echo "Other gender";}
							?>
                            </label>
                        </div>

                        <div class="form-group sign_up">
                            <label class="label_sign_up" for="password"><b>
                            <?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Пароль";
									}elseif($_COOKIE['lang']=='en'){
										echo "Password";
									}
									}else{echo "Password";}
							?>
                            </b></label>
                            <input class="form-control" id="password"  type="password" name="password" pattern=".{6,}" 
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
                                " 
                            placeholder="******" 
                            required>                   
                        </div>
                
                        <button type="submit" id="register" name="create" class="btn btn-third sign_up">
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

                    <form action="signIn.php" method="post" >
                        <button type="submit" class="btn btn-five" >
                        <?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Войти";
								}elseif($_COOKIE['lang']=='en'){
									echo "Sign In";
								}
							}else{echo "Sign In";}
						?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        



    </div>

    <div class="sidenav_second">
         <div class="login-main-text sidenav_sign_up">
            <h2><span class="title_log_second">M</span>anga <span class="title_log_second">L</span>ib<br> <span class="title_reg">
            <?php 
				if (isset($_COOKIE['lang'])) {
					if($_COOKIE['lang']=='ru'){
						echo "Регистрация";
					}elseif($_COOKIE['lang']=='en'){
						echo "Sign Up";
					}
				}else{echo "Sign Up";}
			?>
            </span></h2>
            <p class="p_sign_up">
            <?php 
				if (isset($_COOKIE['lang'])) {
					if($_COOKIE['lang']=='ru'){
						echo "Мы рады приветствовать Вас здесь! Станьте членом нашей большой семьи ^^";
					}elseif($_COOKIE['lang']=='en'){
						echo "We are glad to welcome you here! Become a member of our big family ^^";
					}
				}else{echo "We are glad to welcome you here! Become a member of our big family ^^";}
			?>
            
            </p>
         </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">


	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var gender 		= $('#gender').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({ 
					type: 'POST',
					url: 'data/process.php',
					data: {firstname: firstname,lastname: lastname,email: email,gender: gender,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful', 
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	}); 
	
</script>





</body>
</html>