<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Trait\Common;
use App\Models\Student;
use Illuminate\Support\Facades\DB;



class ExampleController extends Controller 

{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('products'));


    }

    public function about()
    {
        return view('about');


    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('add_product');
            return "Data Added Successfuly";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
    'title' => 'required|string', 
    'description' => 'required|string|max:1000',
    'price' => 'required|numeric', 
    'image' => 'required|mimes:png,jpg,jpeg|max:2048',

     ]);

     $data['published'] = isset ($request->published);
     $data['image']=$this->uploadFile($request->image, 'assets/images');
     product::create($data);
       return "Data Added Successfuly";
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function uploadform(){
        return view ('upload');
    }
    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }

    public function test()
    {
        // dd(Student::find(1)->phone->phone_number);public function test():
        dd(DB::table('students')
        ->join('phones', 'phones.id', '=', 'students.phone_id')
        ->where('students.id', '=', 1)
        ->first());

        
    }

    }



