@extends('layouts.app')
@section('content')

    {{-- <div class ="flex justify-center rounded-xl"> --}}
        {{-- <div class ="w-4/12 bg-white p-6 rounded-lg"> --}}
            @csrf
            <div class="p-6 max-w-auto mx-auto bg-white rounded-xl shadow-md flex justify-center space-x-4">
                <table class="table-auto w-full">
                    <tr class ="w-1/4">
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Id</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Civility</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">LastName</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">FirstName</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Street</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Zipcode</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Town</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Phone</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">Email</td>
                        {{--<td class="border-solid border-2 p-3 border-gray-500 text-center">entreprise</td>--}}
                    </tr>
                    @foreach($collaborateur as $collaborateur)
                    <tr class ="w-1/4">
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['id']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['civility']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['lastName']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['firstName']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['street']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['zipcode']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['town']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['phone']}}</td>
                        <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['email']}}</td>
                      {{--  <td class="border-solid border-2 p-3 border-gray-500 text-center">{{$collaborateur['entreprise']}}</td> --}}
                        <td>
                        <div>
                            <button type="button" class="bg-red-500 text-white px-4 py-3 rounded font-medium w-full"><a href={{"delete/".$collaborateur['id']}}>Delete</a></button>
                        </div>
                        </td>
                        <td> 
                            <div>
                                <button type="button" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"><a href="{{"edit/".$collaborateur['id']}}" class ="p-3">Edit</a></button>
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
@endsection