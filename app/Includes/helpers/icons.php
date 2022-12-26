<?php

if (! function_exists('icon')) {
    /**
     * Create the code for the icon using the current icon external package we are using
     *
     * @param string $icon_name   Icon name
     * @param array $classes    Array of classes and option id
     *
     * @return string
     */
    function icon($icon_name, array $classes = [], array $options = [])
    {
        $icon_classes   = $icon_name;
        $icon_options   = '';

        if (array_key_exists('size', $classes)) {
            $icon_classes .= ' fa-' . $classes['size'];
            // remove 'size' key
            unset($classes['size']);
        }
        
        //  add all other classes
        foreach ($classes as $key => $value) {
            $icon_classes .= ' ' . $value;
        }

        foreach ($options as $key => $value) {
            $icon_options .= ' ' . $key . '="' .$value . '"';
        }
        return '<i class="fa fa-' . $icon_classes . '"' . $icon_options .'></i>';
    }
}

if (! function_exists('listIcon')) {
    function listIcon($icon_name, array $classes = [], array $options = [])
    {
        $icon_classes   = $icon_name;
        $icon_options   = '';

        if (array_key_exists('size', $classes)) {
            $icon_classes .= ' fa-' . $classes['size'];
            // remove 'size' key
            unset($classes['size']);
        };
        //  add all other classes
        foreach ($classes as $key => $value) {
            $icon_classes .= ' ' . $value;
        }

        foreach ($options as $key => $value) {
            $icon_options .= ' ' . $key . '="' .$value . '"';
        }

        return '<i class="fa-li fa fa-' . $icon_classes . '"' . $icon_options .'></i>';
    }
}
