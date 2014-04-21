<?php
    $feed = simplexml_load_file('xml/work.xml');
    function getData($item) {        
        global $title, $imgThumb, $url, $icon, $type, $description, 
        $video, $imgLarge, $technologies, $link;

        $imgThumb = $item[0]->img->imgThumb;
        $title    = $item[0]->title;
        $url      = $item[0]->attributes()->url;
        $icon     = $item[0]->icon;

        $description    = $item[0]->description;
        $video          = $item[0]->video;
        $imgLarge       = $item[0]->img->imgLarge;
        $technologies   = $item[0]->technologies;
        $link           = $item[0]->link;

        switch ($icon) {
            case "1":
                $type = "Web Design & Development";
                break;
            case "2":
                $type = "Graphic Design";
                break;
            case "3":
                $type = "Digital Art";
                break;
            case "4":
                $type = "3D Design";
                break;
            case "5":
                $type = "Mobile App Design";
                break;
            case "6":
                $type = "Photography";
                break;
            case "7":
                $type = "Website Production";
                break;
        }
    }

    function getDetails($detailsUrl) {

        $feed   = simplexml_load_file('xml/work.xml');

        $item   = $feed->xpath("//item[@url='$detailsUrl']");
        getData($item);

    }