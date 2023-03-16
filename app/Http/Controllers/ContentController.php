<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Content;


class ContentController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return Content::select('data')->paginate();
        } catch (\Throwable $th) {
        Log::debug($th);
            abort(500);
        }
    }
    /**
     *
     */
    public function show($id)
    {
try {
    $content = Content::where('key', $id)->first();
     return $content["data"];
} catch (\Throwable $th) {
    Log::debug($th);
    abort(500);
}


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            ///create word and save
            $content = Content::updateOrCreate(['key' => $request->get('key'),], [
                'data' => $request->get('data'),
                'total' => $request->get('total'),
                'audio' => $request->get('audio'),

            ]);

           $request->size = 9000;

            return response()->json($request, 201);
        } catch (\Throwable $th) {
            Log::debug($th);
            abort(500);
        }
    }
}
