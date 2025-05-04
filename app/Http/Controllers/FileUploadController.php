<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|max:2048', // max 2MB
        ]);

        // Get the original file name
        $originalFileName = $request->file->getClientOriginalName();

        // Store the file in the 'uploads' directory inside public/
        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);

        return back()->with('success', 'File uploaded successfully!')->with('uploaded_file', $fileName);
    }
}
