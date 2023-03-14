<?php
    include('../modelo/modelo.php');
    if($_POST["btn-log"])
    {

        if(isset($_POST["usu"]) and isset($_POST["contra"]))
        {
            //var_dump($_POST["usu"]);
            //var_dump($_POST["contra"]);
            //exit();
            
            $da1=$_POST["usu"];
            $da2=$_POST["contra"];

            $acc = new LOGIN($da1,$da2);
            $conformado= $acc ->COM2();
            //var_dump($conformado);
            //exit();
            


            if($conformado== 1)
            {
                include("../../paginas/administrador.php");

            }
            else if($conformado== 0)
            {
                include('../../paginas/error.php');
            }


        }
    }
?>