<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
use Illuminate\Support\Facades\DB;

class CauHoiController extends Controller
{
    public function index()
    {
        $cauHois = CauHoi::all();
        return view('cau-hoi.danh-sach', compact('cauHois'));
    }

    public function create()
    {
        $cauHois = LinhVuc::all();
        // hiển thị form thêm câu hỏi 
        return view('cau-hoi.them-moi', compact('cauHois'));
    }

    public function store(Request $request)
    {
        // thêm 1 câu hỏi vào database
        $cauHoi = new CauHoi();
        $cauHoi->noi_dung    = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an      = $request->dap_an;
        $cauHoi->save();
        return redirect()->route('cau-hoi.danh-sach');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $cauHoi = CauHoi::find($id);
        return view('cau-hoi.them-moi', compact('cauHoi'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
