<?php

class LinkController
{
    public function links()
    {
        if (isset($_GET['links'])) 
        {
            $link = $_GET['links'];
        } else 
        {
            $link = "index";
        }

        $response = Links::links($link);

        include $response;
    }
}