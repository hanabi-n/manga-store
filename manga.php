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

    require 'data/db.php';
	$manga = getAllmanga();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="main.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
    <title>Manga</title>
 
    <style>
        header{
            background-color: #343A40;
        }

        .nav-tabs {
            padding: 15px 0px;
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
                                                        echo "?????????????? ??????????????????????????";
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
                                                        echo "?????????????? ??????????";
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
                                                        echo "???????????????? ??????????";
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
                                                        echo "?????????????????????????? ??????????";
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
                                                        echo "?????? ??????????????";
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
                                                        echo "?????? ????????????????????";
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
                                            echo "????????????????????";
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
                                            echo "??????????????";
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
                                    echo "??????????";
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
                                                        echo "?????????????? ??????????????????????????";
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
                                                        echo "?????????????? ??????????";
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
                                                        echo "???????????????? ??????????";
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
                                                        echo "?????????????????????????? ??????????";
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
                                                        echo "?????? ??????????????";
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
                                                        echo "?????? ????????????????????";
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
                                            echo "????????????????????";
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
                                            echo "??????????????";
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
                                    echo "??????????";
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

    <section>
        <div class="container" data-aos="zoom-in">
            <section class="cardF welcome" >
                <div class="welcome__description">
                <h3 style="color:#fff;"> 
                <?php 
					if (isset($_COOKIE['lang_manga'])) {
						if($_COOKIE['lang_manga']=='ru'){
							echo "???? ???????? ?????? ????????????????????????????!";
						}elseif($_COOKIE['lang_manga']=='en'){
							echo "We're glad to welcome you!";
						}
					}else{echo "We're glad to welcome you!";}
				?>
                </h3>
                <p style="color:#fff; font-size:18px;">
                    
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "?? ?????????? ???????????????? ???? ???????????? ?????????? ?????????? ?????????? ???????????? ????????????.";
                                ?>
                                    <br>
                                <?php
                                echo "???? ????????????????, ?????? ?????? ???????????????????? ???????? ???? ??????.";

                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "In our store you can find any manga of different genres. ";
                                ?>
                                    <br>
                                <?php
                                echo "We hope you can love one of them.";
                            }
                        }else{
                            echo "In our store you can find any manga of different genres. ";
                            ?>
                                <br>
                            <?php
                            echo "We hope you can love one of them.";
                        }
				    ?>   
                </p>
                <a href="welcome"></a>
                </div>
            </section>
        </div>
    </section>

    <section>
        <div class="fourth_frame">
            <div class="container">
                <div class="fourth_content">
                    <div class="fourth_content_banners" >
                        <?php
                        if($manga != null){
                            foreach($manga as $s){
                            $addToUser = false;
                        ?> 
                        <div class="fourth_content_banner">
                            <div class="outline_content">
                                
                                <!-- <img id="fourth_banner_img" src=" <?php echo $s['manga_image']?>"> -->
                                <img id="fourth_banner_img" src=" Frame 4/banners/<?php echo $s['manga_image']?>">

                                <div class="promotion">
                                    <p class="promotion_line_1"><?php echo $s['old_price'] - ($s['old_price'] * $s['promotion']/100) ?>????<p class="promotion_line_2"><?php echo $s['old_price']?>????</p></p>
                                    
                                    <p class="promotion_block_2"><?php echo $s['promotion']?>%<p class="promotion_block_1"> off</p></p>
                                
                                </div>
                                
                                <div class="fourth_content_name">
                                    <a class="name_manga"  id="name_manga" name="name_manga" href="manga_page.php"><?php echo $s['manga_title'] ?></a>
                                       
                                    <p>
                                        <?php 
                                    
                                    echo $s['manga_author'];

                                    // $_SESSION['idUser'] =  $_SESSION['userName']['id'];
                                    // $_SESSION['manga_title'] = $s['manga_title'];
                                    // $_SESSION['publisherid'] = $s['publisherid'];

                                    ?> </p>
                                
                                </div>

                                <form action="data/addMangaToMyList.php" method="post">
                                    <input hidden type="text" name="id_user" value=" <?php echo $id ?> "> 
                                    <input hidden type="text" name="name_manga" value=" <?php echo $s['manga_title']?> "> 
                                    <input hidden type="text" name="id_manga" value=" <?php echo $s['publisherid']?> "> 
                                    <input hidden type="text" name="email_user" value=" <?php echo $email?> "> 
                                    
                                     <button class="favorite" id="addManga" type="submit">
                                        <?php 
                                                if (isset($_COOKIE['lang_manga'])) {
                                                    if($_COOKIE['lang_manga']=='ru'){
                                                        echo "?? ??????????????";
                                                    }elseif($_COOKIE['lang_manga']=='en'){
                                                        echo "Add to basket";
                                                    }
                                                }else{echo "Add to basket";}
                                        ?>  
                                     </button>

                                     <button class="heart"><i class="fas fa-heart"></i></button>
                                </form>
 
                            </div>

                        </div>
                        <?php 

                        // $_SESSION['idUser'] =  $_SESSION['userName']['id'];
                        // $_SESSION['manga_title'] = $s['manga_title'];
                        // $_SESSION['publisherid'] = $s['publisherid'];

                        // if($_GET('addToUser')){
                        //     buyManga($id, $s['manga_title'], $s['publisherid']); 
                        // }else{
                            
                        // }

                        ?>
                        <?php 
                        
                        }} ?>

                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section>
        <div class="container">
            <section class="card" data-aos="fade-left" style="margin-bottom: 80px;">
                <div class="savings-splat"> 
                <?php 
                    if (isset($_COOKIE['lang_manga'])) {
                        if($_COOKIE['lang_manga']=='ru'){
                            echo "??????????";
                            ?>
                            <br>
                            <?php echo " ??????";?>
                            <?php
                        }elseif($_COOKIE['lang_manga']=='en'){
                            echo "Manga of";
                            ?>
                            <br>
                            <?php echo "the day";?>
                            <?php
                        }
                    }else{
                            echo "Manga of";
                            ?>
                            <br>
                            <?php echo "the day";?>
                            <?php
                    }
                ?>
                </div>
                <div class="content_scroll">
                    <img class="slider_manga" src="Frame 6/slider_manga.jpg" alt="">
                </div>
                <div class="megabanner__description">
                <h3 > 
                <?php 
                    if (isset($_COOKIE['lang_manga'])) {
                        if($_COOKIE['lang_manga']=='ru'){
                            echo "???????????? / ???????????? ????????????????????";
                        }elseif($_COOKIE['lang_manga']=='en'){
                            echo "???????????? / Land of the Lustrous";
                        }
                        }else{echo "???????????? / Land of the Lustrous";}
                ?> 
                </h3>
                <p>
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "
                                ?? ???????????????????? ?????????????? ?????????????????????????????? ??????????????????, ???????????????????? ???????????????????????? ??????????????, 
                                ???????????????? ??????, ?????????????????????? ???????????? ??????????????????. ?????????????? ?????????????????? ?????????????????????? ????????, 
                                ?????????? ?????????????????? ?? ????????????????????????, ??????????, ?????????????? ???????????????? ???? ??????, ?????????? ?????????????? ???? ???????? 
                                ?? ???????????????????????? ???? ?? ???????????????? ??????????????????.
                                
                                ";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "
                                In the mysterious future, crystalline organisms called Gems inhabit 
                                a world that has been destroyed by six meteors. Each Gem is assigned 
                                a role in order to fight against the Lunarians, a species who attacks 
                                them in order to shatter their bodies and use them as decorations.                            
                                ";
                            }
                        }else{echo "
                            In the mysterious future, crystalline organisms called Gems inhabit 
                            a world that has been destroyed by six meteors. Each Gem is assigned 
                            a role in order to fight against the Lunarians, a species who attacks 
                            them in order to shatter their bodies and use them as decorations.
                            ";}
                    ?>  
                </p>
                <a href="#" class="btn slider_button">
                <?php 
                    if (isset($_COOKIE['lang_manga'])) {
                        if($_COOKIE['lang_manga']=='ru'){
                            echo "???????????? ????????????";
                        }elseif($_COOKIE['lang_manga']=='en'){
                            echo "Buy Now";
                        }
                    }else{echo "Buy Now";}
                ?> 
                </a>
                </div>
            </section>
            
        </div>
    </section>

	<footer class="footer-area footer--light">
		<div class="footer-big">
		<!-- start .container -->
		<div class="container">
			<div class="row">
				
				<div class="media_hide">
					<div class="col-md-3 col-sm-12">
						<div class="footer-widget">
						<div class="widget-about">
							
							<p></p>
							<ul class="contact-details">
							<li>
								<span class="icon-earphones"></span> 
								<?php 
									if (isset($_COOKIE['lang_manga'])) {
										if($_COOKIE['lang_manga']=='ru'){
											echo "?????????????????? ??????:";
										}elseif($_COOKIE['lang_manga']=='en'){
											echo "Call Us:";
										}
										}else{echo "Call Us:";}
								?>
								<a href="tel:344-755-111">344-755-111</a>
							</li>
							<li>
								<span class="icon-envelope-open"></span>
								<a href="mailto:support@aazztech.com">admin@gmail.com</a>
							</li>
							</ul>
						</div>
						</div>
						<!-- Ends: .footer-widget -->
					</div>
				</div>
			<!-- end /.col-md-4 -->
			<div class="col-md-3 col-sm-4">
				<div class="footer-widget">
				<div class="footer-menu footer-menu--1">
					<h4 class="footer-widget-title">		
					<?php 
						if (isset($_COOKIE['lang_manga'])) {
							if($_COOKIE['lang_manga']=='ru'){
								echo "???????????????????? ??????????????????";
							}elseif($_COOKIE['lang_manga']=='en'){
								echo "Popular Category";
							}
						}else{echo "Popular Category";}
					?>
					
					</h4>
					<ul>
					<li>
						<a href="#">					
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "Wordpress";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Wordpress";
								}
							}else{echo "Wordpress";}
						?>				
						</a>
					</li>
					<li>
						<a href="#">
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "??????????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Plugins";
								}
							}else{echo "Plugins";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "???????????? Joomla";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Joomla Template";
								}
							}else{echo "Joomla Template";}
						?>
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "???????????? Admin";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Admin Template";
								}
							}else{echo "Admin Template";}
						?>		
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "???????????? HTML";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "HTML Template";
								}
							}else{echo "HTML Template";}
						?>
						
						</a>
					</li>
					</ul>
				</div>
				<!-- end /.footer-menu -->
				</div>
				<!-- Ends: .footer-widget -->
			</div>
			<!-- end /.col-md-3 -->
	
			<div class="col-md-3 col-sm-4">
				<div class="footer-widget">
				<div class="footer-menu">
					<h4 class="footer-widget-title">			
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "???????? ????????????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Our Company";
								}
							}else{echo "Our Company";}
						?>
					</h4>
					<ul>
					<li>
						<a href="#">
						
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "?????? ??????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "About Us";
								}
							}else{echo "About Us";}
						?>				
						</a>
					</li>
					<li>
						<a href="#">					
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "?????? ?????? ????????????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "How It Works";
								}
							}else{echo "How It Works";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">					
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "??????????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Affiliates";
								}
							}else{echo "Affiliates";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "????????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Testimonials";
								}
							}else{echo "Testimonials";}
						?>
						</a>
					</li>
					<li>
						<a href="#">		
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "?????????????????? ?? ????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Contact Us";
								}
							}else{echo "Contact Us";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "????????????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Plan ";
								}
							}else{echo "Plan ";}
						?>

						&amp; 					
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Pricing ";
								}
							}else{echo "Pricing ";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">
						
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Blog ";
								}
							}else{echo "Blog ";}
						?>
						
						</a>
					</li>
					</ul>
				</div>
				<!-- end /.footer-menu -->
				</div>
				<!-- Ends: .footer-widget -->
			</div>
			<!-- end /.col-lg-3 -->
			
			
				<div class="col-md-3 col-sm-4">
					<div class="footer-widget">
					<div class="footer-menu no-padding">
						<h4 class="footer-widget-title">
						
						<?php 
							if (isset($_COOKIE['lang_manga'])) {
								if($_COOKIE['lang_manga']=='ru'){
									echo "???????????? ??????????????????";
								}elseif($_COOKIE['lang_manga']=='en'){
									echo "Help Support ";
								}
							}else{echo "Help Support ";}
						?>
						
						</h4>
						<ul>
						<li>
							<a href="#">
							<?php 
								if (isset($_COOKIE['lang_manga'])) {
									if($_COOKIE['lang_manga']=='ru'){
										echo "?????????? ??????????????????";
									}elseif($_COOKIE['lang_manga']=='en'){
										echo "Support Forum";
									}
								}else{echo "Support Forum";}
							?>
							
							</a>
						</li>
						<li>
							<a href="#">						 
							<?php 
								if (isset($_COOKIE['lang_manga'])) {
									if($_COOKIE['lang_manga']=='ru'){
										echo "??????????????";
									}elseif($_COOKIE['lang_manga']=='en'){
										echo "Terms";
									}
								}else{echo "Terms";}
							?>		
							&amp; 
							<?php 
								if (isset($_COOKIE['lang_manga'])) {
									if($_COOKIE['lang_manga']=='ru'){
										echo "??????????????????????????";
									}elseif($_COOKIE['lang_manga']=='en'){
										echo "Conditions";
									}
								}else{echo "Conditions";}
							?>
							</a>
						</li>
						<li>
							<a href="#">
							<?php 
								if (isset($_COOKIE['lang_manga'])) {
									if($_COOKIE['lang_manga']=='ru'){
										echo "???????????????? ??????????????????";
									}elseif($_COOKIE['lang_manga']=='en'){
										echo "Support Policy";
									}
								}else{echo "Support Policy";}
							?>
							
							</a>
						</li>
						<li>
							<a href="#">						
							<?php 
								if (isset($_COOKIE['lang_manga'])) {
									if($_COOKIE['lang_manga']=='ru'){
										echo "???????????????? ????????????????";
									}elseif($_COOKIE['lang_manga']=='en'){
										echo "Refund Policy";
									}
								}else{echo "Refund Policy";}
							?>	
							</a>
						</li>
						<li>
							<a href="#">						
							<?php 
								if (isset($_COOKIE['lang_manga'])) {
									if($_COOKIE['lang_manga']=='ru'){
										echo "?????????? ???????????????????? ??????????????";
									}elseif($_COOKIE['lang_manga']=='en'){
										echo "FAQs";
									}
								}else{echo "FAQs";}
							?>				
							</a>
						</li>
						<li>
							<a href="#">						
							<?php 
								if (isset($_COOKIE['lang_manga'])) {
									if($_COOKIE['lang_manga']=='ru'){
										echo "?????????????? ??????????????????????";
									}elseif($_COOKIE['lang_manga']=='en'){
										echo "Buyers Faq";
									}
								}else{echo "Buyers Faq";}
							?>						
							</a>
						</li>
						</ul>
					</div>
					<!-- end /.footer-menu -->
					</div>
					<!-- Ends: .footer-widget -->
				</div>
			<!-- Ends: .col-lg-3 -->
			
			</div>
			<!-- end /.row -->
		</div>
		<!-- end /.container -->
		</div>
		<!-- end /.footer-big -->
	
		<div class="mini-footer">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<div class="copyright-text">
				<p>?? 2021
					<a href="#">MangaLib.com</a>. 
					<?php 
						if (isset($_COOKIE['lang_manga'])) {
							if($_COOKIE['lang_manga']=='ru'){
								echo "?????? ?????????? ????????????????. ?????????????? ";
							}elseif($_COOKIE['lang_manga']=='en'){
								echo "All rights reserved. Created by";
							}
						}else{echo "All rights reserved. Created by";}
					?>
					<a href="#">
					<?php 
						if (isset($_COOKIE['lang_manga'])) {
							if($_COOKIE['lang_manga']=='ru'){
								echo "???????????? ?? ??????????";
							}elseif($_COOKIE['lang_manga']=='en'){
								echo "Nargiz and Arlan";
							}
						}else{echo "Nargiz and Arlan";}
					?>
					
					</a>
				</p>
				</div>
	
				<div class="go_top">
					<a onclick="topFunction()" id="myBtn" title="Go to top"><span><i class="fas fa-arrow-up"></i></span></a>
					
				</div>
			</div>
			</div>
		</div>
		</div>
	</footer>


    <!-- <section>
        <div class="fourth_frame">
            <div class="container">
                <div class="fourth_content">
                    <a style="font-size: 20px;" href="#">?????? 100 ????????????</a>
                    <div class="fourth_content_banners">
                        <div class="fourth_content_banner">
                            <div class="outline_content">
                                <img id="fourth_banner_img" src="Frame 4/banners/??????????????.png">
                                <div class="promotion">
                                    <p class="promotion_line_1">1690????<p class="promotion_line_2">2000????</p></p>
                                    <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                </div>
                                <div class="fourth_content_name">
                                    <a class="name_manga" href="#">??????????????</a>
                                    <p>Miura, Kentarou</p>
                                </div>
                            </div>
                            <button class="favorite" href="#">?? ??????????????</button>
                            <button class="heart"><i class="fas fa-heart"></i></button>
                        </div>
                        <div class="fourth_content_banner">
                            <div class="outline_content">
                                <img id="fourth_banner_img" src="Frame 4/banners/??????????????????????.png">
                                <div class="promotion">
                                    <p class="promotion_line_1">2380????<p class="promotion_line_2">2800????</p></p>
                                    <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                </div>
                                <div class="fourth_content_name">
                                    <a class="name_manga" href="#">JoJo Adventures</a>
                                    <p>Araki, Hirohiko</p>
                                </div>
                            </div>
                            <button class="favorite" href="#">?? ??????????????</button>
                            <button class="heart"><i class="fas fa-heart"></i></button>
                        </div>
                        <div class="fourth_content_banner">
                            <div class="outline_content">
                                <img id="fourth_banner_img" src="Frame 4/banners/One Piece.png">
                                <div class="promotion">
                                    <p class="promotion_line_1">1955????<p class="promotion_line_2">2300????</p></p>
                                    <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                </div>
                                <div class="fourth_content_name">
                                    <a class="name_manga" href="#">One Piece</a>
                                    <p>Oda, Eiichiro</p>
                                </div>
                            </div>
                            <button class="favorite" href="#">?? ??????????????</button>
                            <button class="heart"><i class="fas fa-heart"></i></button>
                        </div>

                        <div class="fourth_content_hide">

                            <div class="fourth_content_banner">
                                <div class="outline_content">
                                    <img id="fourth_banner_img" src="Frame 4/banners/??????????????.png">
                                    <div class="promotion">
                                        <p class="promotion_line_1">1690????<p class="promotion_line_2">2000????</p></p>
                                        <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                    </div>
                                    <div class="fourth_content_name">
                                        <a class="name_manga" href="#">??????????????</a>
                                        <p>Inoue, Takehiko</p>
                                    </div>
                                </div>
                                <button class="favorite" href="#">?? ??????????????</button>
                                <button class="heart"><i class="fas fa-heart"></i></button>
                            </div>
                            <div class="fourth_content_banner">
                                <div class="outline_content">
                                    <img id="fourth_banner_img" src="Frame 4/banners/????????????.png">
                                    <div class="promotion">
                                        <p class="promotion_line_1">1955????<p class="promotion_line_2">2300????</p></p>
                                        <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                    </div>
                                    <div class="fourth_content_name">
                                        <a class="name_manga" href="#">????????????</a>
                                        <p>Urasawa, Naoki</p>
                                    </div>
                                </div>
                                <button class="favorite" href="#">?? ??????????????</button>
                                <button class="heart"><i class="fas fa-heart"></i></button>
                            </div>
                            <div class="fourth_content_banner">
                                <div class="outline_content">
                                    <img id="fourth_banner_img" src="Frame 4/banners/???????????????? ??????????????.png">
                                    <div class="promotion">
                                        <p class="promotion_line_1">2380????<p class="promotion_line_2">2800????</p></p>
                                        <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                    </div>
                                    <div class="fourth_content_name">
                                        <a class="name_manga" href="#">???????????????? ??????????????</a>
                                        <p>Arakawa, Hiromu</p>
                                    </div>
                                </div>
                                <button class="favorite" href="#">?? ??????????????</button>
                                <button class="heart"><i class="fas fa-heart"></i></button>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="fourth_content">
                    <a style="font-size: 20px;" href="#">?????????? ??????????????</a>
                    <div class="fourth_content_banners">
                        <div class="fourth_content_banner">
                            <div class="outline_content">
                                <img id="fourth_banner_img" src="Frame 4/banners/One Piece.png">
                                <div class="promotion">
                                    <p class="promotion_line_1">1955????<p class="promotion_line_2">2300????</p></p>
                                    <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                </div>
                                <div class="fourth_content_name">
                                    <a class="name_manga" href="#">One Piece</a>
                                    <p>Oda, Eiichiro</p>
                                </div>
                            </div>
                            <button class="favorite" href="#">?? ??????????????</button>
                            <button class="heart"><i class="fas fa-heart"></i></button>
                        </div>
                        <div class="fourth_content_banner">
                            <div class="outline_content">
                                <img id="fourth_banner_img" src="Frame 4/banners/?????????? ??????????????.png">
                                <div class="promotion">
                                    <p class="promotion_line_1">2380????<p class="promotion_line_2">2800????</p></p>
                                    <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                </div>
                                <div class="fourth_content_name">
                                    <a class="name_manga" href="#">?????????? ??????????????</a>
                                    <p>Isayama, Hajime</p>
                                </div>
                            </div>
                            <button class="favorite" href="#">?? ??????????????</button>
                            <button class="heart"><i class="fas fa-heart"></i></button>
                        </div>
                        <div class="fourth_content_banner">
                            <div class="outline_content">
                                <img id="fourth_banner_img" src="Frame 4/banners/????????????.png">
                                <div class="promotion">
                                    <p class="promotion_line_1">1955????<p class="promotion_line_2">2300????</p></p>
                                    <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                </div>
                                <div class="fourth_content_name">
                                    <a class="name_manga" href="#">????????????</a>
                                    <p>Kishimoto, Masashi</p>
                                </div>
                            </div>
                            <button class="favorite" href="#">?? ??????????????</button>
                            <button class="heart"><i class="fas fa-heart"></i></button>
                        </div>
                        
                        <div class="fourth_content_hide">
                        
                            <div class="fourth_content_banner">
                                <div class="outline_content">
                                    <img id="fourth_banner_img" src="Frame 4/banners/?????????????? ????????????.png">
                                    <div class="promotion">
                                        <p class="promotion_line_1">1690????<p class="promotion_line_2">2000????</p></p>
                                        <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                    </div>
                                    <div class="fourth_content_name">
                                        <a class="name_manga" href="#">?????????????? ????????????</a>
                                        <p>Obata, Takeshi</p>
                                    </div>
                                </div>
                                <button class="favorite" href="#">?? ??????????????</button>
                                <button class="heart"><i class="fas fa-heart"></i></button>
                            </div>
                            <div class="fourth_content_banner">
                                <div class="outline_content">
                                    <img id="fourth_banner_img" src="Frame 4/banners/?????????????????? ????????.png">
                                    <div class="promotion">
                                        <p class="promotion_line_1">1955????<p class="promotion_line_2">2300????</p></p>
                                        <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                    </div>
                                    <div class="fourth_content_name">
                                        <a class="name_manga" href="#">?????????????????? ????????</a>
                                        <p>Ishida, Sui</p>
                                    </div>
                                </div>
                                <button class="favorite" href="#">?? ??????????????</button>
                                <button class="heart"><i class="fas fa-heart"></i></button>
                            </div>
                            <div class="fourth_content_banner">
                                <div class="outline_content">
                                    <img id="fourth_banner_img" src="Frame 4/banners/????????.png">
                                    <div class="promotion">
                                        <p class="promotion_line_1">2380????<p class="promotion_line_2">2800????</p></p>
                                        <p class="promotion_block_1">????????????: <p class="promotion_block_2">15%</p></p>
                                    </div>
                                    <div class="fourth_content_name">
                                        <a class="name_manga" href="#">Bleach</a>
                                        <p>Kubo, Tite Kubo, Tite</p>
                                    </div>
                                </div>
                                <button class="favorite" href="#">?? ??????????????</button>
                                <button class="heart"><i class="fas fa-heart"></i></button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ???????????? -->
    



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> 
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <script>
        AOS.init();
    </script>

    <!-- ???? ?????????????? -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>