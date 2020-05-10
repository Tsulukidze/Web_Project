<!DOCTYPE html>
<html<=>
    <head>
        <title>  Login  </title>

        <meta charset="utf-8">
        <meta name="description" content="Web Teknolojileri projesi 2019-2020">
        <meta name="keywords" content="Sakarya Uni , sau">
        <meta http-equiv="refresh" content="150">
        <meta name="viewport" content="width-device-width, initial-scale=1 , maximum-scale=1">

        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    </head>


    <body id="b01" class="col-12">

        <div id="baslik">
            <h1> Login </h1>
        </div>

        <nav >
            <div class="row">                
                <div id="div1" class="col-12" >
                    <a href="Anasayfa.html"> <button id="button" class="button btn-danger"> Anasayfa </button> </a>
                    <a href="Hakkimda.html"> <button id="button" class="button btn-warning"> Hakkımda </button> </a>  
                    <a href="Ozgecmis.html"> <button id="button" class="button btn-warning "> Ozgeçmis </button> </a> 
                    <a href="Ulkem.html">    <button id="button"    class="button  btn-warning"> Ülkem </button> </a>                    
                    <a href="Mirasimiz.html"> <button id="button" class="button btn-warning "> Mirasımız </button> </a> 
                    <a href="Iletisim.html">    <button id="button" class="button btn-warning"> İletişim </button> </a>   
                </div>
        </nav>
        <hr>

        <section>
            <div id="div2" class="row">
                <div class="col-6">

                    <?php

                        function Islem($url,$sure = 0)
                            {
                                if($sure != 0)
                                {
                                    header("Refresh: $sure; url=$url");
                                }
                                else header("Location: $url");
                            }
                            $email=$_POST['Loginmail'];
                            $password=$_POST['Loginpassword'];
                            
                            if($email=="b181210563@gmail.com" and $password=="Tsulukidze")
                            {
                                echo "hoşgeldiniz ".$_POST['Loginmail'];
                                Islem("http://localhost/Web-Proje/Anasayfa.html",4);
                            }
                            else
                            {
                                echo "hatalı giriş!"."<br>"."Login sayfasına yönlendiriliyorsunuz";
                                Islem("http://localhost/Web-Proje/Login.html",4);
                            }
                    ?>

                </div>
            </div>
        </section>


        
        
    </body>
</html>