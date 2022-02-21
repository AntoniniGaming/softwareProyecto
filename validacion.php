<?php
    if (isset($_POST['submit'])){
        if(empty($nombre)){
            echo "<p class='error'>*Agrega el nombre del participante</p>";
        }
        if(is_numeric($practica) ==12 && is_numeric($dan) ==4 && is_numeric($dananios) == 12 && is_numeric($edad) == 12){
            echo "<p class='error'>*Solicitud aceptada para 5ª dan</p>";
        }else if(is_numeric($practica) ==20 && is_numeric($dan) == 5 && is_numeric($dananios) == 6 && is_numeric($edad) == 36){
            echo "<p class='error'>*Solicitud aceptada para el 6 dan</p>";
        }else if(is_numeric($practica) ==27 && is_numeric($dan) == 6 && is_numeric($dananios) == 7 && is_numeric($edad) == 43){
            echo "<p class='error'>*Solicitud aceptada para el 7 dan</p>";
        }else if(is_numeric($practica) ==35 && is_numeric($dan) == 7 && is_numeric($dananios) == 8 && is_numeric($edad) == 51){
            echo "<p class='error'>*Solicitud aceptada para el 8 dan</p>";
        }else if(is_numeric($practica) ==44 && is_numeric($dan) == 8 && is_numeric($dananios) == 9 && is_numeric($edad) == 60){
            echo "<p class='error'>*Solicitud aceptada para el 9 dan</p>";
        }else if(is_numeric($practica) ==54 && is_numeric($dan) == 9 && is_numeric($dananios) == 10 && is_numeric($edad) == 70){
            echo "<p class='error'>*Solicitud aceptada para el 7 dan</p>"; 
        }else{
            echo "<p class='error'>*Ninguno de los parametros permite la solicitud</p>";
        }

        if(!is_numeric($numjuez)){
            echo "<p class='error'>*Numero de juez incorrecto</p>";
        }

        if(!strlen($federacion)=="Madrileña de Karate"){
            echo "<p class='error'>*Federacion no admitida</p>";
        }

        if(empty($actitud)){
            echo "<p class='error'>*No registra la actitud debida</p>";
        }

        if(strlen($preparacion)=="fisica-tecnica"){
            echo "<p class='error'>*No dispone de la preparacion correcta</p>";
        }

        if(strlen($estado)=="nervioso"){
            echo "<p class='error'>*Estado no admitido</p>";
        }
    }



?>