<?php

class Links
{
    public static function getLink($request)
    {
        //Validar rutas
        $route = explode("/",$request);

        //Listar las URL's

        if ($request[0] == "home") 
        {
            //Respuesta
            $modul = "views/home/".$request[0].".php";
        } else {
            echo "Error";
        }
        return $modul;
    }
}