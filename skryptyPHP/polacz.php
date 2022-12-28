<?php
    function polacz(){
        $conn = mysqli_connect("localhost", "root", "", "osoby");
        if(mysqli_error($conn)){
            echo "Błąd: ".mysqli_error($conn);
            return false;
        }
        return $conn;   
    }

?>