<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));

    }

    /**••••••••••••••••••
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // valida le request e le inserisce nell'array post
       $user = request()->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|unique:users',
         'phone' => 'required',
         'role' => 'required',
         'user_image' => 'image|nullable|max:1999',
         'password' => 'required'
       ]);
       //Gestione file upload
       if($request->hasFile('user_image')){
           //get filename qith extension
           $filenameWithExt = $request->file('user_image')->getClientOriginalName();
           //Get just filename
           $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           //Get just Extension
           $extension = $request->file('user_image')->getClientOriginalExtension();
           //Filename to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //Upload image
           $path = $request->file('user_image')->storeAs('public/user_image',$fileNameToStore);

       } else{
           $fileNameToStore ='noimage.jpg';
         }


        //Salva nel DB
       $user = User::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'phone' => $request['phone'],
           'role' => $request['role'],
           'user_image' => $fileNameToStore,
           'password' => bcrypt($request['password'])
       ]);



       $users = User::all();
       return redirect()->action(
       'UserController@index')->with('status', 'Utente Creato con successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::where('id', $id)->first();
      return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view ('backend.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       $user = User::find($id);
       $user->name = $request ->input('name');
       $user->email = $request ->input('email');
       $user->phone = $request->input('phone');
       $user->role = $request->input('role');
       $user->password = bcrypt($request['password']);//$request->input('password');

      if($request->hasFile('user_image')){
          $filenameWithExt = $request->file('user_image')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('user_image')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          $path = $request->file('user_image')->storeAs('public/user_image', $fileNameToStore);
          $user->user_image = $fileNameToStore;
       }

       $user->save();
      // $user = User::find($id)->update($request->all());

      return redirect()->action(
      'UserController@index')->with('status', 'Utente modificato con successo.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::find($id)->delete();
      //elimina utente e immagine associata ad esso
      Storage::delete('public/user_image/'.$user->user_image);
      return redirect()->action('UserController@index')->with('status','Utente eliminato con successo!');
    }
}
