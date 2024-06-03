<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Media_news;

use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class MediaNewsController extends Controller
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

            $data = Media_news::query();

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
        return  view('web/backend/pages/list-news');
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
            $video = Media_news::create(['id'=>$request->id],[
                'title'     => $request->title, 
                'description'   => $request->content
            ]);

            //return response
            return response()->json([
                'success' => true,
                'message' => 'Success saving media news data!',
                'data'    => $video  
            ]);

        }
     }
}
