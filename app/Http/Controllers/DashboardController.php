<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use app\Models\Collaborateur;
use app\Models\Entreprise;

class DashboardController extends Controller
{
    public  function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){

        return view('dashboard');
    }
}
