<?php
    $feed = simplexml_load_file('xml/work.xml');
    function getData($item) {
        global $title, $imgSmall, $url, $icon, $type;

        $imgSmall = $item[0]->imgSmall;
        $title    = $item[0]->title;
        $url      = $item[0]->attributes()->url;
        $icon     = $item[0]->icon;

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

    function getDetails($url) {

        //xpath
    }