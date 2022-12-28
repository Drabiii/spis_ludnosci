<?php
include_once 'skryptyPHP\polacz.php';
    function select(){
        $conn = polacz();
        if(!$conn){
            echo "Błąd połączenia!";
        }
        $id=$_POST['wybor'];
            $query="SELECT * FROM `{$id}`;";
            if ($wyn=mysqli_query($conn, $query)){
            echo "<h2> Tabela : ".$id."</h2>";
            echo "<table>";
                echo "<thead>";
                echo "<tr> <th> ID <th> IMIE I NAZWSIKO <th> E-mail <th> Kod Pocztowy <th> Numer Telefonu";
                while ($row=mysqli_fetch_array($wyn)){
                    echo "<tbody>";
                    echo "<tr> <th>".$row['id']."<td>".$row['imien']."<td>".$row['email']."<td>".$row['kp']."<td>".$row['numer']; 
                }
            echo "</table>";

            echo "<div id=\"przycisk\">";
            
            if ($_POST['wybor']=='dodane'){
                echo "<input type=\"radio\" name=\"tab\" id=\"dodaj\" value=\"igotnone\" onclick=\"show1();\"/>";
                echo "<label for=\"dodaj\">Dodaj! </label>";
            }elseif($_POST['wybor']=='weryfikacja'){
                echo "<input type=\"radio\" name=\"tab\" id=\"dodaj1\" value=\"igotnone\" onclick=\"show1();\"/>";
                echo "<label for=\"dodaj1\">Zatwierdź! </label>";
            }
            echo "<input type=\"radio\" name=\"tab\" id=\"edytuj\" value=\"igottwo\" onclick=\"show2();\"/>";
            echo "<label for=\"edytuj\">Edytuj! </label>";
            echo "<input type=\"radio\" name=\"tab\" id=\"usun\" value=\"igottwo\" onclick=\"show3();\">";
            echo "<label for=\"usun\">Usuń! </label>";
            echo "</div>";
                mysqli_free_result($wyn);
            }
            mysqli_close($conn);
    }
?>