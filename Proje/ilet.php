<!DOCTYPE html>
<html<=>
    <head>
        <title>  İletişim  </title>

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
            <h1> İletişim </h1>
        </div>

        <nav >
            <div class="row">                
                <div id="div1" class="col-12" >
                    <a href="Anasayfa.html"> <button id="button" class="button btn-danger"> Anasayfa </button> </a>
                    <a href="Hakkimda.html"> <button id="button" class="button btn-warning"> Hakkımda </button> </a>  
                    <a href="Ozgecmis.html"> <button id="button" class="button btn-warning "> Özgeçmis </button> </a> 
                    <a href="Ulkem.html">    <button id="button"    class="button  btn-warning"> Ülkem </button> </a>                    
                    <a href="Mirasimiz.html"> <button id="button" class="button btn-warning "> Mirasımız </button> </a> 
                    <a href="Login.html">    <button id="button" class="button btn-warning"> Login </button> </a>   
                </div>
        </nav>
        <hr>


        
        <section>
            <div id="div2" class="row">
                <div class="col-12">

                    <table>
                        <tr>
                            <td>
                                <?php echo "adı :"?>
                            </td>
                            
                            <td>
                                <?php echo $_POST['ad']?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php echo "soyadı :"?>
                            </td>
                            
                            <td>
                                <?php echo $_POST['soyad']?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php echo "cinsiyeti :"?>
                             </td>
                                
                            <td>
                                <?php echo $_POST['cinsiyet']?>
                            </td>
                         </tr>


                        <tr>
                            <td>
                                <?php echo "yaşı :"?>
                            </td>
                                
                            <td>
                                <?php echo $_POST['yas']?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php echo "Email :"?>
                            </td>
                                
                            <td>
                                <?php echo $_POST['mail']?>
                            </td>
                        </tr>


                        
                    </table>
                    <?php echo "Bize Güvendiniz için teşekkür ederiz.  #Evdekalın";?>

                </div>
            </div>
        </section>

</body>
</html>
