<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        $query = Image::where('user_id', Auth::id());

        if($request->search){
            $query->where('name','like','%'.$request->search.'%');
        }
        $images=$query->get();
        return view('images.index', compact('images'));
    }
    public function create()
    {
        return view('images.upload');
    }
    public function store(Request $request)
    {
        $data = $request->validate([

            'image' => 'required|image|max:2048'
        ]);
        $file = $request->file('image');
        $content = file_get_contents($file);
        $encrypted = Crypt::encrypt($content);
        Image::create([
            'user_id' => Auth::id(),
            'name'=>$file->getClientOriginalName(),
            'data' => $encrypted
        ]);
        return redirect()->route('images.index')->with('success', 'Image uploaded successfully');
    }
    public function destroy($id)
    {
        $image = Image::where('id', $id)->
            where('user_id', Auth::id())
            ->firstOrFail();
        $image->delete();
        return back();
    }
    public function download($id){
        $image=Image::where('id',$id)->
        where('user_id',Auth::id())->
        firstOrFail();
        $decrypted=Crypt::decrypt($image->data);
        return response($decrypted)
        ->header('Content-Type','image/png')
        ->header('Content-Disposition','attachment;filename="image.png"');

    }

}
