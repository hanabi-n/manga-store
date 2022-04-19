<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga added by User</title>

    <link rel="stylesheet" type="text/css" href="delete.css">


</head> 
<body>


<?php
require_once('config.php');
require_once('db.php');

 
if($_POST['name_manga']){ 
    $id_user        = $_POST['id_user'];
    $name_manga     = $_POST['name_manga'];
    $id_manga       = $_POST['id_manga'];
    $email_user     = $_POST['email_user'];

    // echo $_POST['email_user'];

    if(buyManga($id_user, $email_user, $name_manga, $id_manga)){
        ?>
        
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="nav nav-tabs" id="myTab" role="tablist">
                    
                    <h2>
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Спасибо, что добавили мангу";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Thanks for adding the manga";
                            }
                        }else{echo "Thanks for adding the manga";}
                    ?>  
                    </h2>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="fadeIn first">
                            
                        </div>
                        
                        <div id="formFooter">
                            <a class="underlineHover" href="../manga.php">
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Вернуться назад";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Come back";
                                    }
                                }else{echo "Come back";}
                            ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        
        <?php
    }else{
        ?>
        
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="nav nav-tabs" id="myTab" role="tablist">
                    
                    <h2>
                    <?php 
                        if (isset($_COOKIE['lang_manga'])) {
                            if($_COOKIE['lang_manga']=='ru'){
                                echo "Ошибка";
                            }elseif($_COOKIE['lang_manga']=='en'){
                                echo "Error";
                            }
                        }else{echo "Error";}
                    ?>  
                    </h2>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="fadeIn first">
                            
                        </div>
                        
                        <div id="formFooter">
                            <a class="underlineHover" href="../manga.php">
                            <?php 
                                if (isset($_COOKIE['lang_manga'])) {
                                    if($_COOKIE['lang_manga']=='ru'){
                                        echo "Вернуться назад";
                                    }elseif($_COOKIE['lang_manga']=='en'){
                                        echo "Come back";
                                    }
                                }else{echo "Come back";}
                            ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        
        <?php 
    }

}

?>


</body>
</html>