<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerUsingFacade extends Controller
{
    // CREATE: Insert a new record
    public function store(Request $request)
    {
        DB::insert('insert into posts (title, body) values (?, ?)', [
            $request->title,
            $request->body
        ]);
        return response()->json(['message' => 'Post created successfully!']);
    }

    // READ: Get all records
    public function index()
    {
        $posts = DB::select('select * from posts');
        return response()->json($posts);
    }

    // UPDATE: Update a record by ID
    public function update(Request $request, $id)
    {
        DB::update('update posts set title = ?, body = ? where id = ?', [
            $request->title,
            $request->body,
            $id
        ]);
        return response()->json(['message' => 'Post updated successfully!']);
    }

    // DELETE: Delete a record by ID
    public function destroy($id)
    {
        DB::delete('delete from posts where id = ?', [$id]);
        return response()->json(['message' => 'Post deleted successfully!']);
    }
}
