<?php

use Michelf\SmartyPants;
use Michelf\MarkdownExtra;

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
}
