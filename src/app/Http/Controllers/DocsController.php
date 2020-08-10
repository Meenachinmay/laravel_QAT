<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function create() {
        return view('upload');
    }

    public function upload(Request $request) {
        $validatedData = $request->validate([
            "name" => "required",
            "phone_no" => "required",
            "email" => "required",
            "address" => "required",
            "state" => "required",
            "city" => "required",
            "pan_card_no" => "required",
            "aadhar_card_no" => "required"
        ]);

        $saved = Document::create($validatedData);

        return view('show');
    }

    public function show_doc() {
        $documents = Document::all();
//        dd($document);
        return view('view_doc', compact('documents'));
    }

    public function show_one_doc($id) {
        $document = Document::where('id', $id)->get();

        return view('single_doc', compact('document'));
    }
}
