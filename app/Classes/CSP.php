<?php

namespace App\Classes;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

final class CSP
{
    public static function Markdown($text, $smarty = false)
    {
        if ($smarty) {
            return MarkdownExtra::defaultTransform(SmartyPants::defaultTransform($text));
        } else {
            return MarkdownExtra::defaultTransform($text);
        }
    }

    public static function toons()
    {
        return '/images/toons/';
    }

    public static function images($sub_dir)
    {
        return '/images/'.$sub_dir.'/';
    }

    public static function logos()
    {
        return Storage::disk('spaces')->url('logos/');
    }
}
