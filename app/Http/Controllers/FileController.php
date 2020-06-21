<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download($filename){
        $user = auth()->user();
        $filename = 'test.pdf';
        return response()
            ->header('Content-Disposition',"attachment; filename=\"$filename\"")
            ->header('X-Accel-Redirect',"/storage/app/public/$filename")
            ->header('X-Sendfile',base_path("/storage/app/public/$filename"));
    }
}
