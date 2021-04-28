@extends('layouts.app')

@section('content')
    <div class ="flex justify-center">
        <div class ="w-8/12 bg-white p-6 rounded-lg">
        @hasanyrole('gestionnaire|admin')
        <p>Welcome chief</p>  
        @else
        <p>Welcome</p>
        @endhasanyrole 
        @hasanyrole('gestionnaire|admin')
           <div class="py- m-6">
               <div class="w-full m-2">
                    <a href="" class ="p-3">Create Post</a>
         @endhasanyrole
        </div>
    </div>
@endsection