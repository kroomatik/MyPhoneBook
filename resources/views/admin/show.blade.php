<!DOCTYPE html>
@extends('layouts.app')
@section('content')

    {{-- <div class ="flex justify-center rounded-xl"> --}}
        {{-- <div class ="w-4/12 bg-white p-6 rounded-lg"> --}}
            <a href="{{route ('createCompany') }}"class ="p-3">Creation d'entreprise</a>
            <form class="Form-inline my-2 my-lg-0" type="get" action="{{ url('/searchcompany') }}">
                <input class="form-ontrol mr-sm-2" name="query" type="search" placeholder="Search here">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            

            @csrf
            <div class="p-6 max-w-auto mx-auto bg-white rounded-xl shadow-md flex justify-center space-x-4">
                <table class="table-auto w-full">
                    <tr class ="w-1/4">
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Id</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Name</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Street</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Zipcode</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Town</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Phone number</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Email</td>
                    </tr>
                    @foreach($entreprise as $entreprise)
                    <tr class ="w-1/4">
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$entreprise['id']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$entreprise['name']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$entreprise['street']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$entreprise['zipcode']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$entreprise['town']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$entreprise['phone']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$entreprise['email']}}</td>
                        <td>
                        <div>
                            <button type="button" class="bg-red-500 text-white px-4 py-3 rounded font-medium w-full"><a href={{"delete/".$entreprise['id']}}>Delete</a></button>
                        </div>
                        </td>
                        <td> 
                            <div>
                                <button type="button" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"><a href="{{"edit/".$entreprise['id']}}" class ="p-3">Edit</a></button>
                            </div>
                        </td>
                    </tr>
                    @if (auth()->user())
                    @endif
                </div>
                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection