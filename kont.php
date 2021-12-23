
    <title>Контакты</title>
<body>
    <div class="home__content">
        
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
			 background: rgba(0, 0, 0, 0.5);
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
<li><a href="foto.php">Галерея</a></li>
           <li><a href="otz.php">Отзывы</a></li>
		   
           
           <li><a href="login.php">Авторизация</a></li>
	
        </ul>
		
<br>
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2386.701517922237!2d34.39385031583512!3d53.2590491799608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x412d5883cf06e433%3A0xda517d639cf42da1!2z0YPQuy4g0JrQvtC80LDRgNC-0LLQsCwgNTMsINCR0YDRj9C90YHQuiwg0JHRgNGP0L3RgdC60LDRjyDQvtCx0LsuLCAyNDEwMjI!5e0!3m2!1sru!2sru!4v1634821366965!5m2!1sru!2sru" 
width="1350" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<style>
    #footer {
        position: fixed;
        left: 0;
        bottom: 0;
        padding: 5px;
        background: #F5F5F5;
        color: black;
        width: 100%;
        font-size: 20pt;
    }
</style>
<img src="img\qr1.jpg" style=float:right; width="200" height="135" style="border:0;" allowfullscreen="" loading="lazy">
<img src="img\qr2.jpg"  style=float:left; width="180" height="135" style="border:0;" allowfullscreen="" loading="lazy">
<img src="img\kont.png" style=float:left; width="480" height="135" style="border:0;" allowfullscreen="" loading="lazy">
<img src="img\kont2.png" style=float:right; >

