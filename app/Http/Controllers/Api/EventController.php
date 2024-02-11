<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        $results = [
            "events" => Event::with('tags', 'user')->get(),
            "tags" => Tag::all()
        ];
        $data = [
            "success" => true,
            "payload" => $results
        ];
        return response()->json($data);
    }
}
