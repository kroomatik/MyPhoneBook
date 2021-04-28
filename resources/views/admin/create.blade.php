@extends('layouts.app')

@section('content')
    <div class ="flex justify-center">
        <div class ="w-4/12 bg-white p-6 rounded-lg">
            <form action ={{route ('storeCompany')}} method ='post'>
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Company's name</label>
                    <input type="text" name="name" id="name" placeholder="Company's name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name'){{$message}} border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                  <label for="street" class="sr-only">Street</label>
                  <input type="text" name="street" id="street" placeholder="Street"
                  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('street'){{$message}} border-red-500 @enderror" value="{{ old('street') }}">

                  @error('street')
                      <div class ="text-red-500 mt-2 text-sm">
                          {{$message}}
                      </div>
                  @enderror
                  <div class="mb-4">
                    <label for="zipcode" class="sr-only">Zipcode</label>
                    <input type="zipcode" name="zipcode" id="zipcode" placeholder="Zipcode"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('zipcode') border-red-500 @enderror value="">
                   
                    @error('zipcode')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror

              </div>
              <div class="mb-4">
                <label for="town" class="sr-only">Town</label>
                <input type="string" name="town" id="town" placeholder="Town"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('town'){{$message}} border-red-500 @enderror" value="{{ old('town') }}">

                @error('town')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

                <div class="mb-4">
                    <label for="phone" class="sr-only">Phone number</label>
                    <input type="integer" name="phone" id="phone" placeholder="Phone number"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">

                    @error('phone')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    
                    @error('email')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
