<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\RecordHistory;
use Illuminate\Http\Request;

class PrintController extends Controller
{

    public function print($id)
    {
        $data = Record::findOrFail($id);
        $pdf = \PDF::loadView('pdf', ['data'=>$data]);
        $filename = $data->name.'.'.'pdf';
        return $pdf->download($filename);
    }
}
