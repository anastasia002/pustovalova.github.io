<link rel="stylesheet" href="css/style.css">
    <title>Галерея</title>
<body>
<style>
			ul {
             list-style: none;
             margin: 0;
             padding-left: 0;
             margin-top:10x;
             z-index: 3;
             position: absolute;
             top: 10px;
			 display: inline-block;
			 width:100%;
			 background: rgba(220, 220, 220, 0.5);
			 top: 0px;
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;

            }
           a {
            text-decoration: none;
            color:#fff;
            padding:10px;
            font-family: arial;
            border-radius:2px;
           -moz-transition: all 0.3s 0.01s ease;
           -o-transition: all 0.3s 0.01s ease;
           -webkit-transition: all 0.3s 0.01s ease;
		    -webkit-text-stroke: #FDF5E6;
  text-shadow: .09em 0 black;
}
            }
          a:hover {
           background: rgba(102, 102, 102, 0.5);

            }
        li {
          float:right;
          margin-right:20px;
          z-index: 3;
         font-size: 25pt;
         
		 
		 
           }
                #zatemnenie {
                    background: rgba(102, 102, 102, 0.5);
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    display: none;
                }
                #zatemnenie2 {
                    background: rgba(102, 102, 102, 0.5);
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    display: none;
                }
                #okno {
                    width: 320px;
                    height: 230px;
                    text-align: center;
                    padding: 10px;
                    border: 1px solid #000000;
                    border-radius: 5px;
                    color: #000000;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    margin: auto;
                    background: rgba(128, 128, 128, 1.3);
                    z-index: 4;
                }
                #okno2 {
                    width: 300px;
                    height: 300px;
                    text-align: center;
                    padding: 10px;
                    border: 1px solid #000000;
                    border-radius: 5px;
                    color: #000000;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    margin: auto;
                    background: rgba(128, 128, 128, 1.3);
                    z-index: 4;
                }
                #zatemnenie2:target {display: block;}
                #zatemnenie:target {display: block;}
                .close {
                    display: inline-block;
                    border: 1px solid #000000;
                    color: #000000;
                    padding: 0 12px;
                    margin: 10px;
                    text-decoration: none;
                    background: rgba(128, 128, 128, 0.7);
                    font-size: 14pt;
                    cursor:pointer;
                }
                .close:hover {background: #e6e6ff;}
				


            </style>
            <div id="zatemnenie">
                <div id="okno">
                    <form>
                        <h2 class="text-center">Вход</h2>
                       <form action="auth.php" method="post">
<input type="text" name="login" class="form-control" id="login" placeholder="Логин">

<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль">


</form>
<input type="checkbox" class="forfm-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><big>Запомнить меня</big></label> <br>
                      
                    </form>
                    <a href="index.html" class="close">Войти</a>
                    <a href="#zatemnenie2" class="close">Регистрация</a>
                    <a href="#" class="close">Назад</a>
                </div>
            </div>
                            
                        
            <div id="zatemnenie2">
                <div id="okno2">
                    <form>
                        <h2 class="text-center">Регистрация</h2>
                        <form action="check.php" method="post">
<input type="text" name="login" class="form-control" id="login" placeholder="Логин">

<input type="text" name="name" class="form-control" id="name" placeholder="Имя">

<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль">

</form> </form>
						
                    <a href="#zatemnenie" class="close">Зарегистрироваться</a>
                    <a href="#zatemnenie" class="close">Назад</a>
                </div>
            </div>
			
<ul>	
<li><a href="index.html">Главная</a></li>

           <li><a href="otz.php">Отзывы</a></li>
		   <li><a href="kont.php">Контакты</a></li>
           
           <li><a href="login.php">Авторизация</a></li>
        </ul>
        
    <style>
        /* first reset some of the elements for browser compatibility */
        body,h1,h2,h3,p,td,quote,small,form,input,ul,ol{

background: rgba(0, 0, 0, 0.5);;
}

div.nomargin{	/* nomargin класс */
  margin-right:0px;
  }
.pic{	
  float:left;
  margin:0 15px 15px 0;
  border:5px solid white;
  width:320px;
  height:400px;
  }
.pic a{	
  width:200px;
  height:250px;
  text-indent:-99999px;
  display:block;	
  }
h1{	
  font-size:28px;
  font-weight:bold;
  font-family:"Trebuchet MS",Arial, Helvetica, sans-serif;
  }
h2{	
  font-weight:normal;
  font-size:14px;
  color:white;
  }
        </style>
        <br>
        <br>
        <br>
        <?php
$directory = 'foto';	
$allowed_types=array('jpg','jpeg','gif','png');	
$file_parts=array();
  $ext='';
  $title='';
  $i=0;

  $dir_handle = @opendir($directory) or die("There is an error with your image directory!");
while ($file = readdir($dir_handle))	
  {
  if($file=='.' || $file == '..') continue;	
 $file_parts = explode('.',$file);	
  $ext = strtolower(array_pop($file_parts));	
 $title = implode('.',$file_parts);	
  $title = htmlspecialchars($title);	
 $nomargin='';
  if(in_array($ext,$allowed_types))	
  {

  if(($i+1)%4==0) $nomargin='nomargin';	
  echo '
  <div class="pic '.$nomargin.'" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
  <a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
  </div>';
 $i++;	
  }
  }
closedir($dir_handle); ?>

