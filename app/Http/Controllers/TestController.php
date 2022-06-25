<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class TestController extends Controller
{
    
    public function tes() {


        $data = Data::all();

        return view('test', ['datas' => $data]);
    }

    public function store() {

        $datas = new Data();

        $datas->name = request('first');
        $datas->middle = request('middle');
        $datas->last = request('last');

        $datas->save();

        // error_log($first.$middle.$last);


        return redirect('/');
    }

    public function destroy($id) {

        $id = Data::findOrFail($id);

        $id->delete();

        return redirect('/');
    }

    public function edit($id) {

        $edit = Data::findOrFail($id);


        return redirect('/')->with('edit', $edit);
    }

    
    public function update($id) {

        $update = Data::findOrFail($id);

        $update->name = request('first');
        $update->middle = request('middle');
        $update->last = request('last');

        $update->save();

        return redirect('/');
    }
}
