<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="main.css">

	<title>Manga Store</title>
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

						<a class="nav-link" href="#">
						<span class="sr-only">(current)</span></a>
					</li>
                </ul>
					
                <div class="dropdown">
                    <button class="btn btn-secondary" style="background: #fff;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu second" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"> 
							
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Зарегистрироваться / Войти с другим аккаунтом ";
									}elseif($_COOKIE['lang']=='en'){
										echo "Sign up / Login with different account";
									}
									}else{echo "Sign up / Login with different account";}
							?>

							<br>
							<div class="icons_div">
								<i class="far fa-envelope icon_div first"></i>
								<i class="far fa-star icon_div second"></i>
								<i class="fas fa-shopping-cart icon_div third"></i>
							</div>
                        </button>


						<form action="data/cookies.php" method="get">
						
							<select class="selector_class " name="lang">

								<option value="en">
									<?php 
									if (isset($_COOKIE['lang'])) {
										# code...
										if($_COOKIE['lang']=='ru'){
											echo "Английский";
										}elseif($_COOKIE['lang']=='en'){
											echo "English";
										}
										}else{echo "English";}
									?>
								</option>
								<option value="ru">
									<?php 
									if (isset($_COOKIE['lang'])) {
										if($_COOKIE['lang']=='ru'){
											echo "Русский";
										}elseif($_COOKIE['lang']=='en'){
											echo "Russian";
										}
										}else{echo "Russian";}
									?>
								</option>
							</select>

							<button class="button_selector" type="submit">&rightarrow;</button>
						</form>

                        <a class="dropdown-item" type="button" href="signIn.php">
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Войти";
									}elseif($_COOKIE['lang']=='en'){
										echo "Login with email";
									}
									}else{echo "Login with email";}
							?>
						</a>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" type="button" href="signUp.php">
						
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Зарегистрироваться";
									}elseif($_COOKIE['lang']=='en'){
										echo "Sign Up";
									}
									}else{echo "Sign Up";}
							?>
						</a>
                        
                    </div> 
                </div>

                    <div class="dropdown-second" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"> 
							
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Зарегистрироваться / Войти с другим аккаунтом ";
									}elseif($_COOKIE['lang']=='en'){
										echo "Sign up / Login with different account";
									}
									}else{echo "Sign up / Login with different account";}
							?>

							<br>
							<div class="icons_div">
								<i class="far fa-envelope icon_div first"></i>
								<i class="far fa-star icon_div second"></i>
								<i class="fas fa-shopping-cart icon_div third"></i>
							</div>
                        </button>


						<form action="data/cookies.php" method="get">
						
							<select class="selector_class " name="lang">

								<option value="en">
									<?php 
									if (isset($_COOKIE['lang'])) {
										# code...
										if($_COOKIE['lang']=='ru'){
											echo "Английский";
										}elseif($_COOKIE['lang']=='en'){
											echo "English";
										}
										}else{echo "English";}
									?>
								</option>
								<option value="ru">
									<?php 
									if (isset($_COOKIE['lang'])) {
										if($_COOKIE['lang']=='ru'){
											echo "Русский";
										}elseif($_COOKIE['lang']=='en'){
											echo "Russian";
										}
										}else{echo "Russian";}
									?>
								</option>
							</select>

							<button class="button_selector" type="submit">&rightarrow;</button>
						</form>

                        <a class="dropdown-item" type="button" href="SignIn.php">
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Войти";
									}elseif($_COOKIE['lang']=='en'){
										echo "Login with email";
									}
									}else{echo "Login with email";}
							?>
						</a>
						
                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" type="button" href="SignUp.php">
						
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Зарегистрироваться";
									}elseif($_COOKIE['lang']=='en'){
										echo "Sign Up";
									}
									}else{echo "Sign Up";}
							?>
						</a>
                        
                    </div>
                

            </div>



        </nav>

    </div>

	<section> 
		<div  class="first_frame">
			<div class="container">
				<div class="first_content">
					<div class="first_logo"><span>M</span>anga<span>L</span>ib</div>
					<p>
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Мы самый большой интернет магазин манги в Казахстане!";
							}elseif($_COOKIE['lang']=='en'){
								echo "We are the largest online manga store in Kazakhstan!";
							}
							}else{echo "We are the largest online manga store in Kazakhstan!";}
					?>
					
					</p>

					<div class="buttons">
					  <div class="button">
					      <a href="#" class="btnn effect04" data-sm-link-text="Manga Lib" target="_blank">
						  	<span>
  							    <?php 
									if (isset($_COOKIE['lang'])) {
										if($_COOKIE['lang']=='ru'){
											echo "Найди свою мангу в ";
										}elseif($_COOKIE['lang']=='en'){
											echo "Find your manga in";
										}
										}else{echo "Find your manga in";}
								?>
							</span>
						  </a>
					 </div>
					</div>

					
				</div>
			</div>
		</div>
	</section> 

	<section class="second_frame">
		<div class="container">
			<ul class="list-group list-group-flush" data-aos="fade-right">
				<h4>
				<?php 
					if (isset($_COOKIE['lang'])) {
						if($_COOKIE['lang']=='ru'){
							echo "Акции";
						}elseif($_COOKIE['lang']=='en'){
							echo "Discounts";
						}
						}else{echo "Discounts";}
				?>
				</h4>
				<li class="list-group-item">
					<a href="#" class="second_text">

					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Новым покупателям скидка:";
							}elseif($_COOKIE['lang']=='en'){
								echo "Discount for new customers:";
							}
							}else{echo "Discount for new customers:";}
					?>			   
					
					<a href="#" class="circle">15%</a> </a>  	
				</li>
				<li class="list-group-item">
					<a href="#">
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Всех с 8 Марта:";
							}elseif($_COOKIE['lang']=='en'){
								echo "With March 8!";
							}
							}else{echo "With March 8!";}
					?>
					<a href="#" class="circle" style="margin-left: 96px;">15%</a></a>
				</li>
				<li class="list-group-item">
					<a href="#">
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Подарки для наших покупательниц: купи 2 BL манги и получи 1 романтику в подарок";
							}elseif($_COOKIE['lang']=='en'){
								echo "Gift to our customers: buy 2 BL manga and get 1 romance as a gift";
							}
							}else{echo "Gift to our customers: buy 2 BL manga and get 1 romance as a gift";}
					?>
					</a>
				</li>
				<li class="list-group-item">
					<a href="#">
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Акция на старые манги продолжаются";
							}elseif($_COOKIE['lang']=='en'){
								echo "The promotion for the assortment of old mangas continues";
							}
							}else{echo "The promotion for the assortment of old mangas continues";}
					?>
					</a>
				</li>
				<li class="list-group-item">
					<a href="#" style="text-decoration: underline;">
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "читать дальше ...";
							}elseif($_COOKIE['lang']=='en'){
								echo "read more ...";
							}
							}else{echo "read more ...";}
					?>
					</a>
				</li>
			</ul>
	
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="Frame 2/slider/slide_1.jpg" alt="Первый слайд">
					<div class="carousel-caption d-none d-md-block">
						<a href="#">			
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "СТО МАНГА РАБОТ ПО КОТОРЫМ МОЖНО УЧИТЬСЯ";
								}elseif($_COOKIE['lang']=='en'){
									echo "HUNDRED MANGA WORKS ON WHICH YOU CAN LEARN";
								}
								}else{echo "HUNDRED MANGA WORKS ON WHICH YOU CAN LEARN";}
						?>		
						</a> 
						<p>	
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "С целью повышения у подростков заинтересованности в образовании и познании нового, Японская Ассоциация создала проект «Образовательная манга. Проект по познанию мира.»";
								}elseif($_COOKIE['lang']=='en'){
									echo "In order to increase adolescents' interest in education and learning new things, the Japanese Association has created the project «Educational manga. The project for the knowledge of the world.»";
								}
								}else{echo "In order to increase adolescents' interest in education and learning new things, the Japanese Association has created the project «Educational manga. The project for the knowledge of the world.»";}
						?>
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="Frame 2/slider/slide_2.jpg" alt="Второй слайд">
					<div class="carousel-caption d-none d-md-block">
						<a href="#">
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "АВТОР «АКИРЫ» СПУСТЯ 38 ЛЕТ ВЫПУСКАЕТ ВАНШОТ К СВОЕЙ МАНГЕ KIBUN WA MŌ SENSŌ";
								}elseif($_COOKIE['lang']=='en'){
									echo "THE AUTHOR OF «AKIRA» LATER 38 YEARS IS RELEASING A WANSCHOT TO HIS MANGA KIBUN WA MŌ SENSŌ";
								}
								}else{echo "THE AUTHOR OF «AKIRA» LATER 38 YEARS IS RELEASING A WANSCHOT TO HIS MANGA KIBUN WA MŌ SENSŌ";}
						?>	
						</a>
						<p>
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "В восьмом номере журнала Manga Action издательства Futabasha объявили, что Отомо Кацухиро («Акира») и Яхаги Тосихико выпустят ваншот к своей манге Kibun wa mō Sensō.";
								}elseif($_COOKIE['lang']=='en'){
									echo "In the eighth issue of Manga Action magazine, Futabasha publishers announced that Otomo Katsuhiro («Akira») and Yahagi Toshihiko will be releasing a one-shot for their manga Kibun wa mō Sensō.";
								}
								}else{echo "In the eighth issue of Manga Action magazine, Futabasha publishers announced that Otomo Katsuhiro («Akira») and Yahagi Toshihiko will be releasing a one-shot for their manga Kibun wa mō Sensō.";}
						?>
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="Frame 2/slider/slide_3.jpg" alt="Третий слайд">
					<div class="carousel-caption d-none d-md-block">
						<a href="#">
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "ПОБЕДИТЕЛИ 64-Й ПРЕМИИ МАНГИ SHOGAKUKAN";
								}elseif($_COOKIE['lang']=='en'){
									echo "WINNERS OF THE 64TH SHOGAKUKAN MANGA AWARD";
								}
								}else{echo "WINNERS OF THE 64TH SHOGAKUKAN MANGA AWARD";}
						?>
						</a>
						<p>
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Премия манги Shogakukan (Shogakukan Manga Award) — ежегодная премия для манги, издаваемой в журналах, за год, предшествующий церемонии вручения.";
								}elseif($_COOKIE['lang']=='en'){
									echo "The Shogakukan Manga Award is the annual award for magazine-published manga in the year leading up to the ceremony.";
								}
								}else{echo "The Shogakukan Manga Award is the annual award for magazine-published manga in the year leading up to the ceremony.";}
						?>
						
						</p>
					</div>
				</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">		  
				<?php 
					if (isset($_COOKIE['lang'])) {
						if($_COOKIE['lang']=='ru'){
							echo "Предыдущий";
						}elseif($_COOKIE['lang']=='en'){
							echo "Previous";
						}
					}else{echo "Previous";}
				?>	  
				</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">
				<?php 
					if (isset($_COOKIE['lang'])) {
						if($_COOKIE['lang']=='ru'){
							echo "Следующий";
						}elseif($_COOKIE['lang']=='en'){
							echo "Next";
						}
					}else{echo "Next";}
				?>
				</span>
				</a>
			</div>
			
			<div class="banner" data-aos="flip-right"> 
				<div class="banner_content">
					<div class="banner_content_image">
					</div>
					<a class="banner_link" href="#">
						<span class="banner_link_title">
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Ждем с нетерпением";
								}elseif($_COOKIE['lang']=='en'){
									echo "Look forward to";
								}
							}else{echo "Look forward to";}
						?>
						</span>
						<span class="banner_link_text">
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Самые ожидаемые манги за 2021";
								}elseif($_COOKIE['lang']=='en'){
									echo "Most Anticipated Manga of 2021";
								}
							}else{echo "Most Anticipated Manga of 2021";}
						?>
						</span>
					</a>
				</div>
			</div>  

			<div class="shelf">
				<div class="banner_content">
					<a class="banner_link" href="#">
						<span class="banner_link_title">
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Избранные представители разных жанров";
								}elseif($_COOKIE['lang']=='en'){
									echo "Selected representatives of different genres";
								}
							}else{echo "Selected representatives of different genres";}
						?>
						</span>
						<div class="shelf_images">
							<img class="shelf_image" data-aos="fade-up" data-aos-duration="4200" src="Frame 3/Images/Черный клевер.jpg">
							<img class="shelf_image" data-aos="fade-up" data-aos-duration="4000" src="Frame 3/Images/Ванпанчмен.jpg">
							<img class="shelf_image" data-aos="fade-up" data-aos-duration="4000" src="Frame 3/Images/Моя Геройская Академия.jpg">
							<img class="shelf_image" data-aos="fade-up" data-aos-duration="4000" src="Frame 3/Images/Ночные этюды.jpg">
							<img class="shelf_image" data-aos="fade-up" data-aos-duration="4500" src="Frame 3/Images/Хочу плакать с тобой в четверг.jpg">			
						</div>
					</a>
				</div>
			</div>
		</div>  
	</section>

	<section>
		<div class="third_frame">
			<div class="container">
				<div class="third_content">
					<h4>
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Популярные";
							}elseif($_COOKIE['lang']=='en'){
								echo "Popular";
							}
						}else{echo "Popular";}
					?>
					</h4>
					<div class="row">
						<div class="col-xs-12 ">
			
							<nav class="nav_titles">
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-home" aria-selected="true">
										<?php 
											if (isset($_COOKIE['lang'])) {
												if($_COOKIE['lang']=='ru'){
													echo "Все";
												}elseif($_COOKIE['lang']=='en'){
													echo "All";
												}
											}else{echo "All";}
										?>
									</a>
									<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-romantice" role="tab" aria-controls="nav-profile" aria-selected="false">
									<?php 
										if (isset($_COOKIE['lang'])) {
											if($_COOKIE['lang']=='ru'){
												echo "Романтика";
											}elseif($_COOKIE['lang']=='en'){
												echo "Romance";
											}
										}else{echo "Romance";}
									?>
									</a>
									<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-GL" role="tab" aria-controls="nav-contact" aria-selected="false">Gl</a>
									<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-BL" role="tab" aria-controls="nav-about" aria-selected="false">BL</a>
									<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-shoinen" role="tab" aria-controls="nav-about" aria-selected="false">							
									<?php 
										if (isset($_COOKIE['lang'])) {
											if($_COOKIE['lang']=='ru'){
												echo "Сейнен";
											}elseif($_COOKIE['lang']=='en'){
												echo "Shenen";
											}
										}else{echo "Shenen";}
									?>
									
									</a>
									<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-drama" role="tab" aria-controls="nav-about" aria-selected="false">								
									<?php 
										if (isset($_COOKIE['lang'])) {
											if($_COOKIE['lang']=='ru'){
												echo "Драма";
											}elseif($_COOKIE['lang']=='en'){
												echo "Drama";
											}
										}else{echo "Drama";}
									?>	
									</a>
								</div>
							</nav>
							<!-- не трогать -->

							<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="third_content_banners">
										<div class="third_content_banner">
											<h5>			
											<?php 
												if (isset($_COOKIE['lang'])) {
													if($_COOKIE['lang']=='ru'){
														echo "Драма";
													}elseif($_COOKIE['lang']=='en'){
														echo "Today";
													}
												}else{echo "Today";}
											?>
											</h5>
												<a href="#">
												<?php 
													if (isset($_COOKIE['lang'])) {
														if($_COOKIE['lang']=='ru'){
															echo "Подробнее";
														}elseif($_COOKIE['lang']=='en'){
															echo "More details";
														}
													}else{echo "More details";}
												?>				
												</a>
												<div class="banner_top">
													<img class="banner_img" src="Frame 3/banners/A Guy Like You.webp">
													<div class="banner_top_content">
														<h6>1</h6>
														<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Такой же как ты";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "The same as you";
																	}
																}else{echo "The same as you";}
															?>
															<p>JS, WAJE, WAJE/BL</p>
														</a>
													</div>
												</div>
												
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Peach Love.webp">
														<div class="banner_top_content">
															<h6>2</h6>
															<a href="#">
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "ПичЛав";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "PeachLove";
																		}
																	}else{echo "PeachLove";}
																?>
																<p>Fujoking / BL</p>
															</a>								
														</div>
												</div>
												
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Head Over Heels.webp">
														<div class="banner_top_content">
															<h6>3</h6>
															<a href="#">														
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Яндере Ха Ян";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Yandere Ha Yang";
																	}
																}else{echo "Yandere Ha Yang";}
															?>
															<p>														
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Южная Звезда / Романтика";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "South Star / Romance";
																	}
																}else{echo "South Star / Romance";}
															?>
															</p>
															</a>						
														</div>
							
												</div>
										</div>	
										<div class="third_content_banner">
											<h5>	
											<?php 
												if (isset($_COOKIE['lang'])) {
													if($_COOKIE['lang']=='ru'){
														echo "Новые релизы";
													}elseif($_COOKIE['lang']=='en'){
														echo "New releases";
													}
												}else{echo "New releases";}
											?>
											</h5>
											<a href="#">									
											<?php 
												if (isset($_COOKIE['lang'])) {
													if($_COOKIE['lang']=='ru'){
														echo "Подробнее";
													}elseif($_COOKIE['lang']=='en'){
														echo "More details";
													}
												}else{echo "More details";}
											?>
											
											</a>
												
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Атака Титанов.png">
														<div class="banner_top_content">
															<h6>1</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Атака титанов";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Attack of the Titans";
																	}
																}else{echo "Attack of the Titans";}
															?>
																<p>									
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Боевик, Драма, Сёнэн";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Drama, Shonen";
																		}
																	}else{echo "Action, Drama, Shonen";}
																?>
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Моя Геройская Академия.png">
														<div class="banner_top_content">
															<h6>2</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Моя геройская Академия";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "My Hero Academy";
																	}
																}else{echo "My Hero Academy";}
															?>
																<p>															
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Экшен, Сёнэн";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Shonen";
																		}
																	}else{echo "Action, Shonen";}
																?>														
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Ванпанчмен.png">
														<div class="banner_top_content">
															<h6>3</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Ванпанчмен";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "One Punch Man";
																	}
																}else{echo "One Punch Man";}
															?>
																<p>															
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Комедия, Боевик, Сёнэн";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Comedy, Action, Shonen";
																		}
																	}else{echo "Comedy, Action, Shonen";}
																?>
																</p>
															</a>								
														</div>
													</div>
										</div>
										
										<div class="media_hide">
											<div class="third_content_banner">
												<h5>										
												<?php 
													if (isset($_COOKIE['lang'])) {
														if($_COOKIE['lang']=='ru'){
															echo "Предстоящие";
														}elseif($_COOKIE['lang']=='en'){
															echo "Upcoming";
														}
													}else{echo "Upcoming";}
												?>					
												</h5>
												<a href="#">											
												<?php 
													if (isset($_COOKIE['lang'])) {
														if($_COOKIE['lang']=='ru'){
															echo "Подробнее";
														}elseif($_COOKIE['lang']=='en'){
															echo "More details";
														}
													}else{echo "More details";}
												?>			
												</a>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Игрок, который не может повысить уровень.png">
														<div class="banner_top_content">
															<h6>1</h6>
															<a href="#" >
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Игрок, который не может ";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "The player who can't to level up";
																	}
																}else{echo "The player who can't to level up";}
															?>
																									
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																			
																	?>
																	<a href="#" style="margin-left: 18px;">	
																		<?php  echo "повысить уровень";?>
																	</a>
																	<?php

																	}elseif($_COOKIE['lang']=='en'){
																		echo "";
																	}
																}else{echo "";}
															?>
																<p style="margin-left: 20px;">															
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Боевик, Фэнтези, Мистика";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Fantasy, Mystic";
																		}
																	}else{echo "Action, Fantasy, Mystic";}
																?>															
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Клинок, рассекающий демонов.png">
														<div class="banner_top_content">
															<h6>2</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Клинок, рассекающий демонов";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Demon slayer";
																	}
																}else{echo "Demon slayer";}
															?>
																<p>															
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Боевик, Драма, Сёнэн, Демоны";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Drama, Shonen, Daemons";
																		}
																	}else{echo "Action, Drama, Shonen, Daemons";}
																?>
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Черный клевер.png">
														<div class="banner_top_content">
															<h6>3</h6>
															<a href="#">
															
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Черный клевер";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Black clover";
																	}
																}else{echo "Black clover";}
															?>
																<p>
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Боевик, Фэнтези, Сёнэн";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Fantasy, Shonen";
																		}
																	}else{echo "Action, Fantasy, Shonen";}
																?>
																</p>
															</a>								
														</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
								<!-- нет трогать -->

								<div class="tab-pane fade" id="nav-romantice" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="third_content_banners">
										<div class="third_content_banner">
											<h5>Сегодня</h5>
												<a href="#">											
												<?php 
													if (isset($_COOKIE['lang'])) {
														if($_COOKIE['lang']=='ru'){
															echo "Подробнее";
														}elseif($_COOKIE['lang']=='en'){
															echo "More details";
														}
													}else{echo "More details";}
												?>
												
												</a>
												<div class="banner_top">
													<img class="banner_img" src="Frame 3/banners/Поблески весны.png">
													<div class="banner_top_content">
														<h6>1</h6>
														<a href="#">
														<?php 
															if (isset($_COOKIE['lang'])) {
																if($_COOKIE['lang']=='ru'){
																	echo "Поблески весны";
																}elseif($_COOKIE['lang']=='en'){
																	echo "Glitter of spring";
																}
															}else{echo "Glitter of spring";}
														?>
															<p>
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Романтика";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Romance";
																	}
																}else{echo "Romance";}
															?>
															
															</p>
														</a>
													</div>
												</div>
												
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Свадьба во имя мести.png">
														<div class="banner_top_content">
															<h6>2</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Свадьба во имя мести";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Wedding in the name of revenge";
																	}
																}else{echo "Wedding in the name of revenge";}
															?>
																<p>
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Романтика";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Romance";
																		}
																	}else{echo "Romance";}
																?>
																</p>
															</a>								
														</div>
												</div>
												
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Нетающие слова.png">
														<div class="banner_top_content">
															<h6>3</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Нетающие слова";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Non-fading words";
																	}
																}else{echo "Non-fading words";}
															?>
																<p>
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Южная Звезда / Романтика";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "South Star / Romance";
																		}
																	}else{echo "South Star / Romance";}
																?>
																
																</p>
															</a>						
														</div>
							
												</div>
										</div>	
										<div class="third_content_banner">
											<h5>
											<?php 
												if (isset($_COOKIE['lang'])) {
													if($_COOKIE['lang']=='ru'){
														echo "Новые релизы";
													}elseif($_COOKIE['lang']=='en'){
														echo "New releases";
													}
												}else{echo "New releases";}
											?>	
											</h5>
											<a href="#">
											<?php 
												if (isset($_COOKIE['lang'])) {
													if($_COOKIE['lang']=='ru'){
														echo "Подробнее";
													}elseif($_COOKIE['lang']=='en'){
														echo "More details";
													}
												}else{echo "More details";}
											?>
											
											</a>
												
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/A Guy Like You.webp">
														<div class="banner_top_content">
															<h6>1</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Такой же как ты";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "The same as you";
																	}
																}else{echo "The same as you";}
															?>
																<p>
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Романтика, BL";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Romance, BL";
																		}
																	}else{echo "Romance, BL";}
																?>
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Head Over Heels.webp">
														<div class="banner_top_content">
															<h6>2</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Яндере Ха Ян";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "Yandere Ha Yang";
																	}
																}else{echo "Yandere Ha Yang";}
															?>
																<p>			
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Южная Звезда / Романтика";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "South Star / Romance";
																		}
																	}else{echo "South Star / Romance";}
																?>
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Peach Love.webp">
														<div class="banner_top_content">
															<h6>3</h6>
															<a href="#">
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "ПичЛав";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "PeachLove";
																	}
																}else{echo "PeachLove";}
															?>
																<p>
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Романтика";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Romance";
																		}
																	}else{echo "Romance";}
																?>
																</p>
															</a>								
														</div>
												</div>
										</div>

										<div class="media_hide">
											<div class="third_content_banner">
												<h5>
												<?php 
													if (isset($_COOKIE['lang'])) {
														if($_COOKIE['lang']=='ru'){
															echo "Предстоящие";
														}elseif($_COOKIE['lang']=='en'){
															echo "Upcoming";
														}
													}else{echo "Upcoming";}
												?>							
												</h5>
												<a href="#">
												<?php 
													if (isset($_COOKIE['lang'])) {
														if($_COOKIE['lang']=='ru'){
															echo "Подробнее";
														}elseif($_COOKIE['lang']=='en'){
															echo "More details";
														}
													}else{echo "More details";}
												?>	
												</a>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Игрок, который не может повысить уровень.png">
														<div class="banner_top_content">
															<h6>1</h6>
															<a href="#" >
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																		echo "Игрок, который не может ";
																	}elseif($_COOKIE['lang']=='en'){
																		echo "The player who can't to level up";
																	}
																}else{echo "The player who can't to level up";}
															?>
																									
															<?php 
																if (isset($_COOKIE['lang'])) {
																	if($_COOKIE['lang']=='ru'){
																			
																	?>
																	<a href="#" style="margin-left: 18px;">	
																		<?php  echo "повысить уровень";?>
																	</a>
																	<?php

																	}elseif($_COOKIE['lang']=='en'){
																		echo "";
																	}
																	}else{echo "";}
															?>
																<p style="margin-left: 20px;">															
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Боевик, Фэнтези, Мистика";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Fantasy, Mystic";
																		}
																	}else{echo "Action, Fantasy, Mystic";}
																?>
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Клинок, рассекающий демонов.png">
														<div class="banner_top_content">
															<h6>2</h6>
															<a href="#">
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Клинок, рассекающий демонов";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Demon slayer";
																		}
																	}else{echo "Demon slayer";}
																?>
																<p>
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Боевик, Драма, Сёнэн, Демоны";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Drama, Shonen, Daemons";
																		}
																	}else{echo "Action, Drama, Shonen, Daemons";}
																?>
																</p>
															</a>								
														</div>
												</div>
												<div class="banner_top">
														<img class="banner_img" src="Frame 3/banners/Черный клевер.png">
														<div class="banner_top_content">
															<h6>3</h6>
															<a href="#">
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Черный клевер";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Black clover";
																		}
																	}else{echo "Black clover";}
																?>
																<p>
																<?php 
																	if (isset($_COOKIE['lang'])) {
																		if($_COOKIE['lang']=='ru'){
																			echo "Боевик, Фэнтези, Сёнэн";
																		}elseif($_COOKIE['lang']=='en'){
																			echo "Action, Fantasy, Shonen";
																		}
																	}else{echo "Action, Fantasy, Shonen";}
																?>
																</p>
															</a>								
														</div>
												</div>
											</div>	
										</div>		
									</div>
								</div>
								<!-- не трогать -->

								<div class="tab-pane fade" id="nav-GL" role="tabpanel" aria-labelledby="nav-contact-tab">
									Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
									
								</div>
								<div class="tab-pane fade" id="nav-BL" role="tabpanel" aria-labelledby="nav-about-tab">
									Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
									
								</div>
								<div class="tab-pane fade" id="nav-shoinen" role="tabpanel" aria-labelledby="nav-about-tab">
									Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
									
								</div>
								<div class="tab-pane fade" id="nav-drama" role="tabpanel" aria-labelledby="nav-about-tab">
									Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>
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
									if (isset($_COOKIE['lang'])) {
										if($_COOKIE['lang']=='ru'){
											echo "Позвоните нам:";
										}elseif($_COOKIE['lang']=='en'){
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
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Популярная категория";
							}elseif($_COOKIE['lang']=='en'){
								echo "Popular Category";
							}
						}else{echo "Popular Category";}
					?>
					
					</h4>
					<ul>
					<li>
						<a href="#">					
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Wordpress";
								}elseif($_COOKIE['lang']=='en'){
									echo "Wordpress";
								}
							}else{echo "Wordpress";}
						?>				
						</a>
					</li>
					<li>
						<a href="#">
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Плагины";
								}elseif($_COOKIE['lang']=='en'){
									echo "Plugins";
								}
							}else{echo "Plugins";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Шаблон Joomla";
								}elseif($_COOKIE['lang']=='en'){
									echo "Joomla Template";
								}
							}else{echo "Joomla Template";}
						?>
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Шаблон Admin";
								}elseif($_COOKIE['lang']=='en'){
									echo "Admin Template";
								}
							}else{echo "Admin Template";}
						?>		
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Шаблон HTML";
								}elseif($_COOKIE['lang']=='en'){
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
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Наша компания";
								}elseif($_COOKIE['lang']=='en'){
									echo "Our Company";
								}
							}else{echo "Our Company";}
						?>
					</h4>
					<ul>
					<li>
						<a href="#">
						
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Про нас";
								}elseif($_COOKIE['lang']=='en'){
									echo "About Us";
								}
							}else{echo "About Us";}
						?>				
						</a>
					</li>
					<li>
						<a href="#">					
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Как это работает";
								}elseif($_COOKIE['lang']=='en'){
									echo "How It Works";
								}
							}else{echo "How It Works";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">					
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Филиалы";
								}elseif($_COOKIE['lang']=='en'){
									echo "Affiliates";
								}
							}else{echo "Affiliates";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Отзывы";
								}elseif($_COOKIE['lang']=='en'){
									echo "Testimonials";
								}
							}else{echo "Testimonials";}
						?>
						</a>
					</li>
					<li>
						<a href="#">		
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Свяжитесь с нами";
								}elseif($_COOKIE['lang']=='en'){
									echo "Contact Us";
								}
							}else{echo "Contact Us";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">				
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Политика";
								}elseif($_COOKIE['lang']=='en'){
									echo "Plan ";
								}
							}else{echo "Plan ";}
						?>

						&amp; 					
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Цены";
								}elseif($_COOKIE['lang']=='en'){
									echo "Pricing ";
								}
							}else{echo "Pricing ";}
						?>
						
						</a>
					</li>
					<li>
						<a href="#">
						
						<?php 
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Блог";
								}elseif($_COOKIE['lang']=='en'){
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
							if (isset($_COOKIE['lang'])) {
								if($_COOKIE['lang']=='ru'){
									echo "Помощь Поддержка";
								}elseif($_COOKIE['lang']=='en'){
									echo "Help Support ";
								}
							}else{echo "Help Support ";}
						?>
						
						</h4>
						<ul>
						<li>
							<a href="#">
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Форум поддержки";
									}elseif($_COOKIE['lang']=='en'){
										echo "Support Forum";
									}
								}else{echo "Support Forum";}
							?>
							
							</a>
						</li>
						<li>
							<a href="#">						 
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Условия";
									}elseif($_COOKIE['lang']=='en'){
										echo "Terms";
									}
								}else{echo "Terms";}
							?>		
							&amp; 
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Использования";
									}elseif($_COOKIE['lang']=='en'){
										echo "Conditions";
									}
								}else{echo "Conditions";}
							?>
							</a>
						</li>
						<li>
							<a href="#">
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Политика поддержки";
									}elseif($_COOKIE['lang']=='en'){
										echo "Support Policy";
									}
								}else{echo "Support Policy";}
							?>
							
							</a>
						</li>
						<li>
							<a href="#">						
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Политика возврата";
									}elseif($_COOKIE['lang']=='en'){
										echo "Refund Policy";
									}
								}else{echo "Refund Policy";}
							?>	
							</a>
						</li>
						<li>
							<a href="#">						
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Часто задаваемые вопросы";
									}elseif($_COOKIE['lang']=='en'){
										echo "FAQs";
									}
								}else{echo "FAQs";}
							?>				
							</a>
						</li>
						<li>
							<a href="#">						
							<?php 
								if (isset($_COOKIE['lang'])) {
									if($_COOKIE['lang']=='ru'){
										echo "Вопросы покупателей";
									}elseif($_COOKIE['lang']=='en'){
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
				<p>© 2021
					<a href="#">MangaLib.com</a>. 
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Все права защищены. Создали ";
							}elseif($_COOKIE['lang']=='en'){
								echo "All rights reserved. Created by";
							}
						}else{echo "All rights reserved. Created by";}
					?>
					<a href="#">
					<?php 
						if (isset($_COOKIE['lang'])) {
							if($_COOKIE['lang']=='ru'){
								echo "Наргиз и Арлан";
							}elseif($_COOKIE['lang']=='en'){
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



	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>










</body>
</html>




