@extends('layouts.app')

@section('content')
    <div class ="flex justify-center">
        <div class ="w-4/12 bg-white p-6 rounded-lg">
            <form action ="{{route ('updateCompany') }}" method ='post'>
                @csrf
                <input type="hidden" name="id" value="{{$entreprise->id}}">
                <div class="mb-4">
                    <label for="name" class="sr-only">Company's name</label>
                    <input type="text" name="name" id="name" value="{{$entreprise->name}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name'){{$message}} border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                  <label for="street" class="sr-only">Street</label>
                  <input type="text" name="street" id="street" value="{{$entreprise->street}}"
                  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('street'){{$message}} border-red-500 @enderror" value="{{ old('street') }}">

                  @error('street')
                      <div class ="text-red-500 mt-2 text-sm">
                          {{$message}}
                      </div>
                  @enderror
                  <div class="mb-4">
                    <label for="zipcode" class="sr-only">Zipcode</label>
                    <input type="zipcode" name="zipcode" id="zipcode"value="{{$entreprise->zipcode}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('zipcode') border-red-500 @enderror value="">
                   
                    @error('zipcode')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror

              </div>
              <div class="mb-4">
                <label for="town" class="sr-only">Town</label>
                <input type="string" name="town" id="town" value="{{$entreprise->town}}"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('town'){{$message}} border-red-500 @enderror" value="{{ old('town') }}">

                @error('town')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

                <div class="mb-4">
                    <label for="phone" class="sr-only">Phone number</label>
                    <input type="integer" name="phone" id="phone" value="{{$entreprise->phone}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">

                    @error('phone')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" value="{{$entreprise->email}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    
                    @error('email')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Update</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection