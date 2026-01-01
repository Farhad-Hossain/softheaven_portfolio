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

if ( !function_exists('get_file_info') ) {
    function get_file_info($file)
    {
        $file_info = [
            'name' => '',
            'size' => '',
            'extension' => '',
        ];

        if ( !is_object($file) || !$file instanceof \Illuminate\Http\File ) {
            return $file_info;
        }

        $file_info['name'] = $file->getClientOriginalName();
        $file_info['size'] = $file->getSize();
        $file_info['extension'] = $file->getClientOriginalExtension();
        return $file_info;
    }
}