<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Media_videos;

use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class MediaVideosController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        //get all videos from Models
        if ($request->ajax()) {

            $data = Media_videos::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        //return view with data
        return  view('web/backend/pages/list-video');
    }

    /**
     * store media video
     *
     * @param  mixed $request 
     * @return void
     */

     public function store(Request $request){
        // check if ajax request
        if($request->ajax()){

            //define validation rules
             $validator = Validator::make($request->all(), [
                'title'     => 'required',
                'description'   => 'required',
            ]);

            //check if validation fails
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            //inser media videos data
            $video = Media_videos::create(['id'=>$request->id],[
                'title'     => $request->title, 
                'description'   => $request->description
            ]);

            //return response
            return response()->json([
                'success' => true,
                'message' => 'Success saving media video data!',
                'data'    => $video  
            ]);

        }
     }
}
