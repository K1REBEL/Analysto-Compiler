<?php

namespace App\Exports;

use App\Result;
//use Illuminate\View\View;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

//class ResultExport implements FromCollection
class ResultExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Result::all();
//    }

    public function view(): View
    {
        return view('exports.results', [
            'results' => Result::all()
        ]);
    }
}
