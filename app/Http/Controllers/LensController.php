<?php

namespace App\Http\Controllers;

use App\Models\Lens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class LensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lens =  Lens::sortable()->paginate(10);
        return view('index',compact('lens'));
    }


    public function filter(Request $request)
    {
        $color = $request->color;
        $lens = Lens::where('color',$color)->get();
        return view('welcome',compact('lens','color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $path = $request->file('image')->store('public');

        $lens = Lens::create($request->all());

        $lens->image = $path;
        $lens->update();

        return redirect()->route('lens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show called";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lens = Lens::find($id);

        return view('edit',compact('lens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lens = Lens::find($id);

        File::delete(str_replace('public','storage',$lens->image));

        $lens->delete();

        $path = $request->file('image')->store('public');

        $lens = Lens::create($request->all());

        $lens->image = $path;
        $lens->update();

        return redirect()->route('lens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lens = Lens::find($id);

        File::delete(str_replace('public','storage',$lens->image));

        $lens->delete();
        
        return redirect()->route('lens.index');
    }
}
