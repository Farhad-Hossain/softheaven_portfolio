<?php

if ( !function_exists('dt') ) {
    function dt($dateString)
    {
        return \Carbon\Carbon::parse($dateString);
    }
}

if ( !function_exists('shortenText') ) {
    function shortenText($text, $length, $ending='...')
    {
        if ( strlen($text) > $length ) {
            return substr($text, 0, $length-strlen($ending) ).$ending;
        }
    }
}