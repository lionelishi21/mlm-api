<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    
    public function downloadEbook() {

    //PDF file is stored under project/public/download/info.pdf
    $file = public_path(). "/download/mcc_ebook.pdf";

    $headers = array(
        'Content-Type: application/pdf',
    );
    return Response::download($file, 'ebook.pdf', $headers);
    }
}
