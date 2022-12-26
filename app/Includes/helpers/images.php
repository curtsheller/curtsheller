<?php

if (! function_exists('logo')) {
    function logo($listing_name)
    {
        // return Storage::disk('spaces')->url('logos/' . $listing_name . '.png');
        if (file_exists( public_path() . '/images/logos/' . $listing_name . '.png')) {
            return '/images/logos/' . $listing_name .'.png';
        } else {
            return '/images/logos/globe.svg';
        }
    }
}

/**
 * Is the mime type an image
 */
if (! function_exists('is_image')) {
    function is_image($mimeType)
    {
        return starts_with($mimeType, 'image/');
    }
}

if (! function_exists('stateFlag')) {
    function stateFlag($state, $show_state = true)
    {
        $return_link = '<img class="" src="/images/flags/USA.png" alt="" width="24" height="16" />';

        if ($show_state) {
            $return_link = $return_link . '<img class="" src="/images/flags/USA/' .$state . '.png" alt="" width="24" height="16" />';
        }

        return $return_link;
    }
}

if (! function_exists('USAFlag')) {
    function USAFlag($state, $show_state = true)
    {
        return stateFlag($state);
    }
}

if (! function_exists('countryFlag')) {
    function countryFlag($country = 'USA')
    {
        return '<img class="border" src="/images/flags/'. $country . '.png" alt="" width="26" height="16" />';
    }
}

if (! function_exists('canadaFlag')) {
    function canadaFlag($province)
    {
        if ($province == "") {
            $return_link = '<img class="" src="/images/flags/CAN.png" alt="" width="24" height="16" />';
        } else {
            $return_link = '<img class="" src="/images/flags/CAN.png" alt="" width="24" height="16" /><img class="" src="/images/flags/Canada/' .$province . '.png" alt="" width="24" height="16" />';
        }

        return $return_link;
    }
}
