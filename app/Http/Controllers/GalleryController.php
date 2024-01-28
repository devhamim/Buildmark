<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\multigallery;
use Illuminate\Http\Request;
use Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = gallery::all();
        return view('backend.gallery.index', [
            'gallerys'=>$gallerys,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
            $rules = [
                'title' => 'required',
                'image' => '',
                'address' => '',
                'description' => '',
            ];

            $validatedData = $request->validate($rules);

            // image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
                $image->move(public_path('uploads/gallery'), $file_name);
                $validatedData['image'] = $file_name;
            }

            // Create gallery entry
            $portfolio = gallery::create($validatedData);

            // Get the portfolio ID
            $portfolio_id = $portfolio->id;

            $galleryFiles = [];
            // gallery
            if ($request->hasFile('gallery')) {
                foreach ($request->file('gallery') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
                    $file->move(public_path('uploads/gallery'), $file_name);
                    $galleryFiles[] = [
                        'protfolio_id' => $portfolio_id,
                        'gallery' => $file_name,
                    ];
                }

                // Insert into multigalleries table
                multigallery::insert($galleryFiles);
            }

            toast('Add Success', 'success');
            return back();
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
        $gallerys = gallery::find($id);
        return view('backend.gallery.edit', [
            'gallerys'=>$gallerys,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title'         =>'required',
            'image'         =>'',
            'address'        =>'',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/gallery'), $file_name);
            $validatesData['image'] = $file_name;
        }

        gallery::where('id', $id)->update($validatesData);
        toast('Update Success','success');
        return redirect()->route('gallery.index');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        gallery::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
