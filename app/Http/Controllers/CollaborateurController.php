<?php

namespace App\Http\Controllers;
use App\Models\Collaborateur;
use App\Models\User;
use App\Models\Entreprise;

use Illuminate\Http\Request;

class CollaborateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index()
    {
        return view ('collaborateur.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->username !== 'user'){

            return view('gestionnaire.create');
        
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
        $this->validate($request, [
            'civility' => 'required',
            'lastName' => 'required|max: 255',
            'firstName' => 'required|max:255',
            'street' => 'required| max: 255',
            'zipcode' => 'required|max:20',
            'town' => 'required|max:100',
            'phone' =>  'required|max:20',
            'email' => 'required|email|max:100',
             'entreprise' => 'required',
        ]);
        collaborateur::create([
            'civility' => $request->civility,
            'lastName' => $request->lastName,
            'firstName' => $request -> firstName,
            'street' => $request->street,
            'zipcode' =>$request->zipcode,
            'town' => $request->town,
            'phone' => $request->phone,
            'email' => $request->email,
            'entreprise' => $request->entreprise,
            
        ]);

    return redirect('/collaborateur/show')->with('success', 'Collaborateur crée');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = collaborateur::all();
        return view('gestionnaire.show',['collaborateur' => $data]);
    }

   
    public function edit($id)
    {
        $collaborateur = collaborateur::find($id);
        return view('gestionnaire.edit', ['collaborateur' => $collaborateur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $collaborateur = collaborateur::find($request->id);
        $this->validate($request, [
    
            'id' => 'required',
            'civility' => 'required',
            'lastName' => 'required|max: 255',
            'firstName' => 'required|max:250',
            'street' => 'required| max: 255',
            'zipcode' => 'required|max:20',
            'town' => 'required|max:100',
            'phone' =>  'required|max:20',
            'email' => 'required|email|max:100',
             'entreprise' => 'required',
            
        ]);

        collaborateur::where('id', $collaborateur->id)
        ->update([
            'civility' => $request->civility,
            'lastName' => $request->lastName,
            'firstName' => $request -> firstName,
            'street' => $request->street,
            'zipcode' =>$request->zipcode,
            'town' => $request->town,
            'phone' => $request->phone,
            'email' => $request->email,
            'entreprise' => $request->entreprise,
            
        ]);
        return redirect('/collaborateur/show');
    }
    public function delete($id)
    {
        $data= collaborateur::find($id);
        $data->delete();
        return redirect('/collaborateur/show');
    }
    public function searchCollaborateur()
    {
        $search_text = $_GET['query'];
        $collaborateur = collaborateur::where('lastName','LIKE', '%' .$search_text. '%')->get();

        return view('gestionnaire.search', compact('collaborateur'));
    }
    
}