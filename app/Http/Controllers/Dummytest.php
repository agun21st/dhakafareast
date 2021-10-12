<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class Dummytest extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /*$data= ["name" => "jishan", "type" => "bokachoda"];
        $pdf = PDF::loadView('test.test1', $data);*/
        /*$customPaper = array(0,0,72,30);*/
        /*$pdf->setPaper('a10', 'portrait');
        return $pdf->download('ji.pdf');*/
        /*$pdf= new Dompdf();
        $pdf->loadHtml('hello world');
        $pdf->setPaper('A4', 'landscape');
        return $pdf->render();*/
        return view('test.test_new_print');

    }
}
