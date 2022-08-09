<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return Content::select('data')->paginate();
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
            ]);

            return response()->json($content, 201);
        } catch (\Throwable $th) {
            abort(500);
        }
    }
}
