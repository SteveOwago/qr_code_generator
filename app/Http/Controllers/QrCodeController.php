<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\ImageManagerStatic as Image;


class QrCodeController extends Controller
{
    public function show()
    {
        return QrCode::size(600)
        ->margin(1)
        ->generate(
            'https://monster.ims.co.ke',
        );
    }
}
