<?php
include_once 'skryptyPHP\polacz.php';
function usun(){
    #połączenie ::
        $conn = polacz();
        if(!$conn){
            echo "Błąd połączenia!";
        }
    #Sprawdzenie czy $_POST Jest pusty ::
        if (empty($_POST['iddelete'])){
            echo " ";
        }else{
    #Sprawdzanie czy ID jest poprawne ::
        $id4=$_POST['iddelete'];
        $sql4="SELECT COUNT(`id`) FROM `weryfikacja` WHERE `id`='{$id4}';";
        $wyn4=mysqli_query($conn, $sql4);
        $row4=mysqli_fetch_assoc($wyn4);

                #$row["COUNT(`id`)"];

        if ($row4["COUNT(`id`)"]==0){
            echo "<h3>Wprowadzono nie prawidłowe ID!!!</h3>";
        }elseif ($row4["COUNT(`id`)"]==1){
            $zap4="DELETE FROM `weryfikacja` WHERE `id`='{$id4}';";
            $res1=mysqli_query($conn, $zap4);
            echo "Poprawnie usunięto!";
        }
        }
    //===
        mysqli_close($conn);
    }
?>