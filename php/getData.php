<?php
    $feed = simplexml_load_file('xml/work.xml');
    function getData($item) {        
        global $title, $imgThumb, $url, $icon, $type, $description, 
        $video, $imgLarge1, $imgLarge2;

        $imgThumb = $item[0]->img->imgThumb;
        $title    = $item[0]->title;
        $url      = $item[0]->attributes()->url;
        $icon     = $item[0]->icon;

        $description = $item[0]->description;
        $video       = $item[0]->video;
        $imgLarge1   = $item[0]->img->imgLarge1; 
        $imgLarge2   = $item[0]->img->imgLarge2;

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
        $newer  = $feed->xpath("//item[@url='$detailsUrl']/preceding-sibling::*[1]");
        $older  = $feed->xpath("//item[@url='$detailsUrl']/following-sibling::*[1]");
        getData($item);

    }