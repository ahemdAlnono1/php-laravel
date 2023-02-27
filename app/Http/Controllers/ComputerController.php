<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use App\Models\Computer;
// sudo systemctl stop apache2
// sudo /opt/lampp/lampp start
// to crete this file type php artisan make:controller {file name} -r in termenal
class ComputerController extends Controller
{

    private static function getData(){
        // return [
        //     ['id' => 1, 'name' => 'lg' , 'origin' => 'Koria'       , 'price'=>50],
        //     ['id' => 2 , 'name' => 'HP' , 'origin' =>'USA'         , 'price'=>50],
        //     ['id' => 3 , 'name' => 'Siemens' , 'origin' =>'Germany', 'price'=>50],
        //     ['id' => 4 , 'name' => 'lenovo' , 'origin' =>'france'  , 'price'=>50],
        // ];
    }

    public function index()
    {
        return view('computers.index',[
            'computers' => Computer::all(),
        ]);
    }


    public function create()
    {
        return view("computers.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'computer_name' => 'required',
            'computer_origin' => 'required',
            'computer_price' => ['required' , 'integer'],
        ]);
        $computer = new Computer();
        $computer->name =  strip_tags($request->input('computer_name'));
        $computer->origin =strip_tags($request->input('computer_origin'));
        $computer->price = strip_tags($request->input('computer_price'));
        $computer->save();
        return redirect()->route('computers.index');
    }

    public function show($computer)
    {
        // $index = Computer::findOrFail('') this for stop if not finde
        // $index = Computer::find($computer); 

        // if($index === false){
        //     abort(404);
        // }
        return view("computers.show" , [
            'computer' => Computer::findOrFail($computer),
        ]);
    }

    public function edit($id)
    {
        return view('computers.edit',[ 
        'id' => Computer::findOrFail($id),// this id the the edite page have

        ]
    );

    }

    public function update(Request $request, $id)
    {
        $Update = Computer::findOrFail($id);
        $Update->name =  strip_tags($request->input('computer_name'));
        $Update->origin =strip_tags($request->input('computer_origin'));
        $Update->price = strip_tags($request->input('computer_price'));
        $Update->save();
        return redirect()->route('computers.show' , ['computer' => $id]);
    }

    public function destroy($id)
    {
        $Delete = Computer::findOrFail($id);
        $Delete->delete();
        return redirect()->route('computers.index');
    }
}
// 2:15:52