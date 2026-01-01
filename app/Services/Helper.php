<?php

namespace App\Services;

class Helper
{
    public static function get_file_info($file)
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