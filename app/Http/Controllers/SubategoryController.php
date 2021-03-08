<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubategoryController extends Controller
{
    public function index()
    {
        $subcategories=Subcategory::all();
        $categories= Category::all();
        return view('backend.subcategory.list',compact('subcategories','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.subcategory.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $validator = $request->validate([
            'name' => ['required', 'min:3', 'max:100', 'unique:subcategoriess'] ]);
        $subcategories = new Subcategory();
        $subcategories->name = $request->name; $subcategories->save();
        return redirect()->route('subcategories.index')
            ->with('successMsg','New Subcategory is ADDED in your data.'); }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $subcategories = Subcategory::find($id);

        return view('backend.subcategory.edit',compact('subcategories'));
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
        $name = $request->name;

        $data = [
            'name'  =>  $name
        ];

        Subcategory::where('id',$id)->update($data);

        return redirect()->route('subcategories.index')->with('successMsg','Existing language is UPDATED in your data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $subcategories = Subcategory::find($id);
        $lsubcategories->delete();

        return redirect()->route('subcategories.index')->with('successMsg','Existing Language:'.$subcategories->name.' is DELETED in your data.');
    }
}
