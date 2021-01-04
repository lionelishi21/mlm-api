<?php

namespace App\Http\Controllers;

use App\DownloadToken;
use Illuminate\Http\Request;
use Response;

class DownloadController extends Controller
{

    /**
     * @param $token
     * @return mixed
     */
    public function downloadEbook() {

        // $download = DownloadToken::where('token', '=', $token)->first();
        // if ($download) {
            //PDF file is stored under project/public/download/info.pdf
            $file = public_path(). "/download/mcc_ebook.pdf";

            $headers = array (
                'Content-Type: application/pdf',
            );

//            $delete = $download->delete();

            return Response::download($file, 'ebook.pdf', $headers);
        // }

        // return 'download limit';
    }

    public function download(Request $request) {

        $userId = $request->user()->id;

        $download = DownloadToken::where('user_id', '=', $userId)->first();

//        if ($download) {
            //PDF file is stored under project/public/download/info.pdf
            $file = public_path(). "/download/mcc_ebook.pdf";

            $headers = array (
                'Content-Type: application/pdf',
            );

//            $update = $download->is_download = 0;
//            $update->update();

            return Response::download($file, 'ebook.pdf', $headers);
//        }

        return [
            'status' => false,
            'msg' => 'download limit'
        ];
    }

}

