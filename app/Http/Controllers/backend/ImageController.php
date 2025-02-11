<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stored = Image::where('user_id', Auth::user()->id)->first();

        if(!$stored) {
            return view('backend.images.create');
        } else {
            return redirect()->route('cv', Auth::user()->id);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $manager = new ImageManager(new Driver());
        // $image_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
        // $image = $manager->read($request->image)->resize(480, 480);
        // $image->toJpeg(80)->save('public/upload/'.$image_name);



        $input = $request->except('image');

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('upload', $image_name);
            $input['image'] = "upload/$image_name";
        }

        Image::create($input);

        $notification = [
            'message' => 'Image added successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('cv')->with($notification);

    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $image = Image::where('user_id', $id)->first();

        return view('backend.images.edit', compact('image'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $input = [];

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move('upload', $image_name);
            $input['image'] = "upload/$image_name";
        }

        if(file_exists($request->old_image)){
            unlink($request->old_image);
        }

        Image::findOrFail($id)->update($input);

        $notification = [
            'message' => 'Image updated successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('cv')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
