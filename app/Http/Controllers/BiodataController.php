<?php

namespace App\Http\Controllers;

use App\Exports\BiodataExport;
use Illuminate\Http\Request;

use App\Models\Biodata;
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;

class BiodataController extends Controller
{
    public function getData()
    {       
        $biodata = Biodata::all();

        return view('biodata', ['biodata' => $biodata]);
    }

    public function postData()
    {
        return view('add_data');
    }

    public function storeData(Request $request)
    {
        $biodata = new Biodata;

        $biodata->nama = $request->nama;
        $biodata->pekerjaan = $request->pekerjaan;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->no_telp = $request->no_telp;
        $biodata->alamat = $request->alamat;

        $biodata->save();
        return redirect()->route('biodata');
    }

    public function viewUpdate($id)
    {  
       $biodata = Biodata::findOrFail($id);
       return view('update_data', ['biodata' => $biodata]);
    }

    public function putData($id, Request $request)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->nama = $request->nama;
        $biodata->pekerjaan = $request->pekerjaan;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->no_telp = $request->no_telp;
        $biodata->alamat = $request->alamat;

        $biodata->save();
        return redirect()->route('biodata');
    }

    public function destroyData($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect()->route('biodata');
    }

    public function exportCsv()
    {
        return Excel::download(new BiodataExport, 'biodata.csv');
    }

    public function exportTxt()
    {
        $biodata = Biodata::all();
        $content = "Biodata \n";

        foreach ($biodata as $data) {
            $content .= $data->id;
            $content .= ",";
            $content .= $data->nama;
            $content .= ",";
            $content .= $data->pekerjaan;
            $content .= ",";
            $content .= $data->tanggal_lahir;
            $content .= ",";
            $content .= $data->no_telp;
            $content .= ",";
            $content .= $data->alamat;
            $content .= "\n";
        }

        $fileName = "biodata.txt";

        $headers = [
        'Content-type' => 'text/plain', 
        'Content-Disposition' => sprintf('attachment; filename="%s"', $fileName),
        'Content-Length' => strlen($content)
        ];

        return response($content, 200, $headers);

    }
}
