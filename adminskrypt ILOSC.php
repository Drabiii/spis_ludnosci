<?php
include_once 'polacz.php';
include_once 'select.php';
include_once 'add.php';
include_once 'adduser.php';
include_once 'edit.php';
include_once 'edituser.php';
include_once 'usun.php';
include_once 'usunuser.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="admin.css" rel="stylesheet" type="text/css" />
    <!-- Skrypt JavaScript -->
    <script>
    function show1(){   
    document.getElementById("div1").style.display ="block";
    document.getElementById("div2").style.display ="none";
    document.getElementById("div3").style.display ="none";
    }
    function show2(){
    document.getElementById("div1").style.display ="none";
    document.getElementById("div2").style.display ="block";
    document.getElementById("div3").style.display ="none";
    }
    function show3(){
    document.getElementById("div1").style.display ="none";
    document.getElementById("div2").style.display ="none";
    document.getElementById("div3").style.display ="block";
    }
    </script>
</head>
<body>
<div>
    <div class="gora">
        <h1>Panel Administracyjny.</h1>
    </div>


    <div class="wybor">
        <form action="admin.php" method="POST"> 
        <input class="radio" type="radio" name="wybor" id="dodane" value="dodane" />
        <label for="dodane">Dodane</label>
        <input class="radio" type="radio" name="wybor" id="weryfikacja" value="weryfikacja" />
        <label for="weryfikacja">Weryfikacja! </label>
        <input type="submit" name="button" value="Wybierz!" />
    </form>
            <?php
            if(isset($_POST['wybor'])) {
                    select();
                }
        ?>
    </div>


    <div class="editbutton">
            <div id="div1" style="display:none">
               <?php if ($_POST['wybor']=='weryfikacja'){ ?>
                    <p>Wpisz ID aby zatwierdziÄ‡ wpis. </p>
                    <form method="POST" action="admin.php">
                        <input type="text" name="idadd" placeholder="WprowadÅº ID" />
                        <input type="submit" onclick="add()" name="add" value="ZATWIERDÅ¹!" />
                    </form>
                   <?php }elseif($_POST['wybor']=='dodane'){ ?>
                    <p>Wpisz WSZYTKIE dane aby dodaÄ‡!</p>
                    <form action="admin.php" method="POST">
                        <input type="text" id="Imie i Nazwisko" maxlength="30" name="imien" placeholder="Imie i Nazwisko" required />
                        <input type="text" maxlength="30" id="Adres e-mail" name="email" placeholder="Adres e-mail" required />
                        <input type="text" maxlength="6" id="Kod Pocztowy" name="kp" placeholder="Kod Pocztowy" required />
                        <input type="text" maxlength="9" id="Telefon" name="numer" placeholder="Numer Telefonu" required />
                        <input type="submit" onclick="adduser()" name="adduser" value="DODAJ!" />
                    </form>
                   <?php } ?>
            </div>

            <div id="div2" style="display:none">
            <?php if ($_POST['wybor']=='weryfikacja'){ ?>
                <p>Wpisz WSZYTKIE dane aby edytowaÄ‡!</p>
                <form action="admin.php" method="POST">
                    <input type="text" id="id" name="id" placeholder="ID" required />
                    <input type="text" id="Imie i Nazwisko" maxlength="30" name="imien" placeholder="Imie i Nazwisko" required />
                    <input type="text" maxlength="30" id="Adres e-mail" name="email" placeholder="Adres e-mail" required />
                    <input type="text" maxlength="6" id="Kod Pocztowy" name="kp" placeholder="Kod Pocztowy" required />
                    <input type="text" maxlength="9" id="Telefon" name="numer" placeholder="Numer Telefonu" required />
                    <input type="submit" onclick="edit()" name="edit" value="Edytuj!" />
                </form>
           <?php }elseif($_POST['wybor']=='dodane'){ ?>
                <p>Wpisz WSZYTKIE dane aby edytowaÄ‡!</p>
                <form action="admin.php" method="POST">
                    <input type="text" id="id" name="id" placeholder="ID" required />
                    <input type="text" id="Imie i Nazwisko" maxlength="30" name="imien" placeholder="Imie i Nazwisko" required />
                    <input type="text" maxlength="30" id="Adres e-mail" name="email" placeholder="Adres e-mail" required />
                    <input type="text" maxlength="6" id="Kod Pocztowy" name="kp" placeholder="Kod Pocztowy" required />
                    <input type="text" maxlength="9" id="Telefon" name="numer" placeholder="Numer Telefonu" required />
                    <input type="submit" onclick="edituser()" name="edituser" value="Edytuj!" />
                </form>
            <?php } ?>
            </div>

            <div id="div3" style="display:none">
            <?php if ($_POST['wybor']=='weryfikacja'){ ?>
                <p>Wpisz ID aby usunÄ…Ä‡. </p>
                <form method="POST" action="admin.php">
                    <input type="text" name="iddelete" placeholder="WprowadÅº ID" required />
                    <input type="submit" onclick="usun()" name="usun" value="USUÅƒ!" />
                </form>
            <?php }elseif ($_POST['wybor']=='dodane'){ ?>
                <p>Wpisz ID aby usunÄ…Ä‡. </p>
                <form method="POST" action="admin.php">
                    <input type="text" name="iddelete" placeholder="WprowadÅº ID" required />
                    <input type="submit" onclick="usunuser()" name="usunuser" value="USUÅƒ!" />
                </form>
            <?php } ?>
            </div>

    </div>    
        <div class="wynik_zatwierdzania">
        <?php if (isset($_POST['add'])) add(); ?>
        <?php if (isset($_POST['adduser'])) adduser(); ?>
        <?php if (isset($_POST['edit'])) edit(); ?>
        <?php if (isset($_POST['edituser'])) edituser(); ?>
        <?php if (isset($_POST['usun'])) usun(); ?>
        <?php if (isset($_POST['usunuser'])) usunuser(); ?>
        </div>
 
    <footer>
        <a href="index1.php" target="_blank">Strona GÅ‚Ã³wna</a>
        <p>Autor: Mateusz Drabowicz</p>
        <p>Copyright Â© Mateusz Drabowicz 2021.</p>
    </footer>
    

    
</div>
</body>
</html>