<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
    public function cetakrumah()
    {
        $viewrumah = DB::table('viewrumah')->select('*')->get();
        $data = [
            'viewrumah' => $viewrumah,
            'tanggal' => date('d/m/Y'),
            'judul' => "Laporan Data Bantuan Bedah Rumah"
        ];
        $laporan = PDF::loadView('rumah.laporan', $data)->setPaper('f4', 'landscape');
        // 01/10/2024
        $namaTGL = substr(date('d/m/Y'), 0, 2) . substr(date('d/m/Y'), 3, 2) . substr(date('d/m/Y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 4);
        return $laporan->stream('Lap' . $namaTGL . $namaJAM . '.pdf');
    }

    public function cetaktunai()
    {
        $viewtunai = DB::table('viewtunai')->select('*')->get();
        $data = [
            'viewtunai' => $viewtunai,
            'tanggal' => date('d/m/y'),
            'judul' => "Laporan Data Bantuan Tunai"
        ];

        $laporan = PDF::loadView('tunai.laporan', $data)->setPaper('f4', 'landscape');
        $namaTGL = substr(date('d/m/y'), 0, 2) . substr(date('d//m/y'), 3, 2) . substr(date('d/m/y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        return $laporan->stream('Lap' . $namaTGL . $namaJAM . '.pdf');
    }

    public function cetaksembako()
    {
        $viewsembako = DB::table('viewsembako')->select('*')->get();
        $data = [
            'viewsembako' => $viewsembako,
            'tanggal' => date('d/m/y'),
            'judul' => "Laporan Data Bantuan Semabako"
        ];

        $laporan = PDF::loadView('sembako.laporan', $data)->setPaper('f4', 'landscape');
        $namaTGL = substr(date('d/m/y'), 0, 2) . substr(date('d//m/y'), 3, 2) . substr(date('d/m/y'), 6, 4);
        $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        return $laporan->stream('Lap' . $namaTGL . $namaJAM . '.pdf');
    }

    public function cetakpenduduk()
    {
        // $viewpenduduk = DB::table('viewpenduduk')->select('*')->get();
        // $data = [
        //     'viewpenduduk' => $viewpenduduk,
        //     'tanggal' => date('d/m/y'),
        //     'judul' => "Laporan Data Penduduk"
        // ];

        // $laporan = PDF::loadView('penduduk.laporan', $data)->setPaper('f4', 'landscape');
        // $namaTGL = substr(date('d/m/y'), 0, 2) . substr(date('d//m/y'), 3, 2) . substr(date('d/m/y'), 6, 4);
        // $namaJAM = substr(date('h:i:s'), 0, 2) . substr(date('h:i:s'), 3, 2) . substr(date('h:i:s'), 6, 2);
        // return $laporan->stream('Lap' . $namaTGL . $namaJAM . '.pdf');
    }

}

