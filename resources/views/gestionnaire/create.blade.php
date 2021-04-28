@extends('layouts.app')

@section('content')

    <div class ="flex justify-center">
        <div class ="w-4/12 bg-white p-6 rounded-lg">
            <form action ="{{route ('store') }}" method ='post'>
                @csrf
                <div class="mb-4">

                    <label for="civility" class="sr-only">What is your civility?</label>
                    <select name="civility" id="civility" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('civility'){{$message}} border-red-500 @enderror" value="{{ old('civility') }}">
                    <option value="men">Man</option>
                    <option value="woman">Woman</option>
                    <option value="non-binary">Non-binary</option>
                    </select>
                    @error('civility')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                  <label for="lastName" class="sr-only">Last Name</label>
                  <input type="string" name="lastName" id="lastName" placeholder="lastName"
                  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('lastName'){{$message}} border-red-500 @enderror" value="{{ old('lastName') }}">
                  @error('lastName')
                      <div class ="text-red-500 mt-2 text-sm">
                          {{$message}}
                      </div>
                  @enderror

                  <div class="mb-4">
                    <label for="firstName" class="sr-only">First Name</label>
                    <input type="string" name="firstName" id="firstName" placeholder="firstName"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('firstName'){{$message}} border-red-500 @enderror" value="{{ old('firstName') }}">
                    @error('firstName')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
    
                    <div class="mb-4">
                        <label for="street" class="sr-only">Street</label>
                        <input type="text" name="street" id="street" placeholder="street"
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
                <div class="mb-4">
                    <label for="entreprise" class="sr-only">Entreprise</label>
                    <input type="text"name="entreprise" id="entreprise" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('entreprise') border-red-500 @enderror" value="{{ old('entreprise') }}">
                    {{--<option value ="" checked >Veuillez choisir l'entreprise </option>
                    @foreach($entreprise as $entreprise)
                    <option value="{{ $entreprise->id}}">"{{ $entreprise->name}}</option>
                     @endforeach
                    </select>--}}
                    @error('entreprise')
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
