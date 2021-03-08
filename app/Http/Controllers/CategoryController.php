<?php


namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
//        dd($categorues );
        return view('backend.category.list',compact('categories'));
    }

    public function create()
    {
        return view('backend.category.new');
    }

    public function store(Request $request)
    {

        $categories=new Category();
        $categories->name=$request->name;
        $categories->save();
        // $categories->subcategories()->attach($subcategoriesid);

        return redirect()->route('categories.index')->with('successMsg','New Category is ADDED in your data.');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);

        return view('backend.category.edit',compact('categories'));
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

        Category::where('id',$id)->update($data);

        return redirect()->route('categories.index')->with('successMsg','Existing Category is UPDATED in your data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('categories.index')->with('successMsg','Existing Category:'.$categories->name.' is DELETED in your data.');
    }
}
