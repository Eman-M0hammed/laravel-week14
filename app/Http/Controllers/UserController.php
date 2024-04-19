<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\Rule;


use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $users = User::paginate(7);

        // return view("users.index", ["users" => $users]);
        // return view("users.index")->with("users", $users);
        // return view("users.index")->with(["users" => $users, "message"=>"welcome"]);

        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => "required",
            "email" => "required|unique:users|regex:/^.+@.+$/i",
            "email" => ["required", "unique:users", "regex:/^.+@.+$/i"],
            "password" => "required|min:3|max:10",
            "gender"=>["required", Rule::in(['male','female'])]
            // "gender"=>"required|in:(['male','female'])"
        ]);

        $request["password"] = Hash::make($request->password);
        // $request->input("password");
        User::create($request->all());

        return redirect("/users")->with("success", "User created successfully");


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
