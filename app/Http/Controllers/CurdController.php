<?php
Namespace App\Http\Controllers;

use App\Models\curd;
use Illuminate\Http\Request;

class CurdController extends Controller
{
    public function index(){
        $data = Curd::get();
        return view('index',compact('data'));
    }
    public function create(){
        return view('Curd.create');
    }   
    public function store(Request $request)
    {
        
        // dd($request->all());
        
        $data = new Curd();
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->hobby = implode(',', $request->hobby);
        $image=$request->file('image');
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('image'),$imagename);
        $data->image=$imagename;
        
        $data->save();
        return redirect()->route('index',compact('data'));
    }
    public function destroy($id){
        Curd::where('id',$id)->delete();
        return redirect()->route('index');
    }
    public function edit($id)
    {
        $data = Curd::where('id',$id)->first();
        return view('Curd.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $data = Curd::find($request->id);
        $data->name = $request->name;
        $data->status = $request->status;
        $data['hobby']=implode(",",$request->hobby);
        
        $data->save();
        return redirect()->route('index');

    }
}   