<?php

namespace App\Http\Controllers\backend;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        return view('backend.cv');
    }

    public function downloadPdf()
    {

        $data = [
            'title' => 'Sample PDF',
            'content' => 'This is a test PDF document displayed in the browser.'
        ];

        $pdf = Pdf::loadView('backend.cv', $data)->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->download('cv.pdf');
    }
}
