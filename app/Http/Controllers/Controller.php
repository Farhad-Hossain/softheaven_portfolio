<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function makeFileName($dir, $file)
    {
        $name = $dir.'/'.time().'.'.$file->getClientOriginalExtension();
        $name = str_replace('//', '/', $name);
        return $name;
    }

    public function storeFile($name, $file)
    {
        try {
            Storage::disk('public')->put($name, file_get_contents($file));
            return true;
        } catch (\Extension $e) {
            dd($e);
        }
        
    }
}
