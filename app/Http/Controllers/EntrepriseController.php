<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use App\Models\User;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
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


    public function index(Request $request)
    {
      /*  $entreprise = entreprise::paginate(3);

        return view ('admin.index', [
            'entreprise' => $entreprise

        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         if (auth()->user()->username !== 'user'){
        
            
        return view('admin.create');
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
            'name' => 'required|max:255',
            'street' => 'required|max: 255',
            'zipcode' => 'required|max:5',
            'town' => 'required| max: 255',
            'phone' => 'required|max:20',
            'email' => 'required|email|max:100',

            
            
        ]);
        
        $entreprise = entreprise::create([
            'name' => $request->name,
            'street' => $request->street,
            'zipcode' => $request -> zipcode,
            'town' => $request->town,
            'phone' =>$request->phone,
            'email' => $request->email,
            
        ]);


        return redirect('/entreprise/show')->with('success', 'Entreprise crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = entreprise::all();
        return view('admin.show',['entreprise' => $data]);
    }

   
    public function edit($id)
    {
        $entreprise = entreprise::find($id);
        return view('admin.edit', ['entreprise' => $entreprise]);
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
        $entreprise = entreprise::find($request->id);
        $this->validate($request, [
    
            'id' => 'required',
            'name' => 'required|max:255',
            'street' => 'required|max: 255',
            'zipcode' => 'required|max:5',
            'town' => 'required| max: 255',
            'phone' => 'required|max:20',
            'email' => 'required|email|max:100'
            
        ]);

       
        entreprise::where('id', $entreprise->id)
        ->update([
            'name' => $request->name,
            'street' => $request->street,
            'zipcode' => $request->zipcode,
            'town' => $request->town,
            'phone' =>$request->phone,
            'email' => $request->email,
            
        ]);
        return redirect('/entreprise/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data= entreprise::find($id);
        $data->delete();
        return redirect('/entreprise/show');
    }
    public function searchCompany()
    {
        $search_text = $_GET['query'];
        $entreprise = entreprise::where('name','LIKE', '%' .$search_text. '%')->get();

        return view('admin.search', compact('entreprise'));
    }
    
}