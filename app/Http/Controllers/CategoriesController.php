<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */


     public function __construct()
     {
        
        $this->middleware('checkpermissions:them-danh-muc,xoa-danh-muc,sua-danh-muc');
         
     }
     
    public function index()
    {
        $categories =  Categories::all()->whereNull('category_id');
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories =  Categories::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function loadCategories(){   

        /**
        * Set default value skipPost = 0
        * If isset varrible count get from request set new varrible value to skipPost 
        */
        $skipPost = 0;
        if(isset($_GET['count'])){
            $skipPost = $_GET['count'];
        }

        // Get data categories limit 2
        $rawDatas = Categories::limit(2)->skip($skipPost)->get();

        /** 
         * If the rawDatas has data get limit data and send response
         * Client get data and show 
        */

        if(!$rawDatas->isEmpty()){

        $data='';

        foreach ($rawDatas as $rawData) {
            $data.="<li id='$rawData->id' class='list-group-item'><a href='http://localhost/news/public/categories/$rawData->id/edit'>".$rawData->name."</a>
            <small class='text-muted'>".$rawData->slug."</small>
            </li>";
        }
    }

        // If not has data is show notification and hide butotn loadmore.
        else {
            $data =  "<li class='list-group-item'><center>No data to load</center></li>";
            $data .= "<script> $('#loadCategory').remove()</script>";
        }
    
        return response()->json([ 'data' => $data]);
    }

    public function getSlug(Request $request){

        // get request 
        $name = $request->name;
        // name to slug
        $slug = Str::slug($name, '-');
        // send result resolved to client
        return response()->json([ 'slug' => $slug]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation data from request
        $validateData = $request->validate([
            'name' => 'required|unique:categories|max:100',
            'description' => 'required|max:250',
            'slug' => 'required|unique:categories|max:100',
            'category_id',
        ]);
        
        // Get request parent id and add to array validateData
         $validateData['category_id'] = $request->category_id;

       if($validateData) {
           Categories::create($validateData);
           return redirect()->route('categories.create')->with('success', 'Thêm danh mục thành công');
        } else {
        return redirect()->route('categories.create')->with('fail', 'Thêm thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Categories::where('slug', $slug)->first();
        
        if($category->category_id == NULL){
           
            $posts = Posts::whereHas('categories', function($query) use ($slug) {
                $query->whereSlug($slug);
            })->orderBy('id', 'DESC')->get();

            $getChildCate = $category->childs;
              return view('frontend.pages.categories.categoriesDisplay', compact('category', 'posts', 'getChildCate'));

        }
        else{
            $posts = Posts::whereHas('categories', function($query) use ($slug) {
                $query->whereSlug($slug);
              })->orderBy('id', 'DESC')->get();
            return view('frontend.pages.categories.categoriesDisplay', compact('category', 'posts'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $category = Categories::find($id);
        return view('admin.categories.edit', compact('category', 'categories'));
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

       // Validation data from request
       $validateData = $request->validate([
        'name' => 'required|max:100',
        'description' => 'required|max:250',
        'slug' => 'required|max:100',
        'category_id',
    ]);

    // Get all request and set validation
    $validateData['name'] = $request->name; 
    $validateData['slug'] = $request->slug; 
    $validateData['description'] = $request->description; 
    $validateData['category_id'] = $request->category_id; 

    // Get all values of categories
    $categories = Categories::find($id);

    $categories->name = $validateData['name'];
    $categories->slug = $validateData['slug'];
    $categories->description = $validateData['description'];
    $categories->category_id = $validateData['category_id'];

    // Update
    $categories->update();
    
    return redirect()->route('categories.index')->with('success', 'Update danh mục thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = Categories::where('id', $id)->delete();
        
        if($deleteCategory) {
            return redirect()->route('categories.index')
            ->with('success','Categories deleted successfully');
        }

    }
}
