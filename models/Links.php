<?php

class Links
{
    public static function links($request)
    {
        //Listar las URL's

        if ($request == "home") 
        {
            //Respuesta
            $modul = "views/home/".$request.".php";
        }
        return $modul;
    }
}