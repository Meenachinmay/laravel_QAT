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

        Document::create($validatedData);

        return view('docs_saved');
    }

    public function show_doc($id) {
        $document = Document::where('id', $id)->first();

        return view('view_doc', compact('document'));
    }

    public function update_doc($id) {

    }
}
