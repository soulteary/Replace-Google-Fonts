<?php

/**
 * Plugin Name: Replace Google Fonts
 * Plugin URI:  http://www.soulteary.com/2014/06/08/replace-google-fonts.html
 * Description: Use Qihoo 360 Open Fonts Service to replace Google's.
 * Author:      soulteary
 * Author URI:  http://www.soulteary.com/
 * Version:     1.0
 * License:     GPL
 */

/**
 * Silence is golden
 */
if (!defined('ABSPATH')) exit;

class Replace_Google_Fonts
{

    /**
     * init Hook
     *
     */
    public function __construct()
    {
        add_filter('style_loader_tag', array($this, 'ohMyFont'), 1000, 1);
    }


    /**
     * Use Qihoo 360 Open Fonts Service to replace Google's.
     *
     * @param $text
     * @return mixed
     */
    public function ohMyFont($text)
    {
        return str_replace('//fonts.googleapis.com/', '//fonts.useso.com/', $text);
    }
}

/**
 * bootstrap
 */
new Replace_Google_Fonts;