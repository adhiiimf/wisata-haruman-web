<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function show() {
        $admins_id = Auth::user()->first();
        $travel_data = Travel::where('admins_id',$admins_id['id'])->get();
        return $travel_data;
        // return view('pages.admin.travel',[
        //     'travel_data' => $travel_data
        // ]);
    }

    public function postTravel(Request $request)
    {
        $admins_id = Auth::user()->first();
        $this->validate($request, [
             'travelTitle' => 'required',
             'travelImg-1' => ['required','mimes:png,jpg,jpeg','max:2048'],
             'description' => 'required',
             'travelStatus' => 'required',
             'phoneNumber' => 'required'
            //  'admins_id' => 'required'
        ]);   
            // for thumbnail image
        if($request->file('travelImg-1')){
            $file= $request->file('travelImg-1');
            $filename= time().$file->getClientOriginalName();
            $file-> move(public_path('/travels'), $filename);
            $thumPath = '/travels/'. $filename;
        }

        $post = Travel::create([
                'travelTitle' => $request->travelTitle,
                'travelImg-1' => $thumPath,
                'description' => $request->description,
                'travelStatus' => $request->travelStatus,
                'phoneNumber' => $request->phoneNumber,
                'admins_id' => $admins_id['id']
        ]);
        
        echo $post;
        // log result
        dd($post->toArray());
    }
}
