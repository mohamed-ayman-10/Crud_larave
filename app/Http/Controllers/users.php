<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    public function index()
    {
        $data = DB::table('users')->get();
        return view('pages.index', ['data' => $data]);
    }
    public function add()
    {
        return view('pages.add');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email'
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email
        ]);
        session()->flash("flash_message", "Create Success");
        return back();
    }
    public function edite($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('pages.edit', ['user' => $user]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email'
        ]);

        // dd($request);
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/');
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/');
    }
}
