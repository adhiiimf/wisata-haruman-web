<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\TravelSchedule;
class TravelController extends Controller
{
    public function show() {
        $admins_id = Auth::user()->first();
        $travel_data = Travel::join('travels__schedules','travels__schedules.id','=','travels.travels__schedules_id')->where('travels.admins_id',$admins_id['id'])->orderBy('travels.updated_at','desc')->select('travels.id','travels.*','travels__schedules.name')->get();
        // $travel_data = Travel::where('admins_id',$admins_id['id'])->orderBy('updated_at','desc')->get();
        // return $travel_data;
        $admins_id = explode(' ',$admins_id->name)[0];
        return view('pages.admin.Travel',[
            'admin_name' => $admins_id,
            'travel_data' => $travel_data
        ]);
    }

    public function showIndex(Request $request) {
        $admins_id = Auth::user()->first();
        $travel_data = Travel::join('travels__schedules','travels__schedules.id','=','travels.travels__schedules_id')->where('travels.id',$request->travel_id)->first();
        $admins_id = explode(' ',$admins_id->name)[0];
        // return $product_data;
        return view('pages.admin.ViewTravel',[
            'admin_name' => $admins_id,
            'travel_data' => $travel_data
        ]);
    }

    public function createForm() {
        $admins_id = Auth::user()->first();
        $schedule_data = TravelSchedule::orderBy('id','asc')->get();
        // return $schedule_data;
        return view('pages.admin.CreateTravel',[
            'schedule_data'=>$schedule_data
        ]);
    }

    public function postTravel(Request $request)
    {
        $admins_id = Auth::user()->first();
        $this->validate($request, [
             'travelTitle' => 'required',
             'travelImage' => ['required','mimes:png,jpg,jpeg'],
             'description' => 'required',
             'travels__schedules_id' => 'required',
             'phoneNumber' => 'required'
        ]);   
            // for thumbnail image
        if($request->file('travelImage')){
            $file= $request->file('travelImage');
            $filename= time().$file->getClientOriginalName();
            $file-> move(public_path('/travels'), $filename);
            $thumPath = '/travels/'. $filename;
        }

        $post = Travel::create([
                'travelTitle' => $request->travelTitle,
                'travelImage' => $thumPath,
                'description' => $request->description,
                'travels__schedules_id' => $request->travels__schedules_id,
                'phoneNumber' => $request->phoneNumber,
                'admins_id' => $admins_id['id']
        ]);
        
        echo $post;
        // log result
        dd($post->toArray());
    }
}
