<?php


/**
 * This function will return a link which can be used to get items from the assets folder
 * @param $link string This is the link where the system will reffer to when loading assets (images etc)
 * @return string
 */
function asset($link) {
    $link = "/" . DIRECTORY . "/" . ASSETS_DIR . "/" . $link;
    return $link;
}