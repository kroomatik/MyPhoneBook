@extends('layouts.app')

@section('content')
    <div class ="flex justify-center">
        <div class ="w-4/12 bg-white p-6 rounded-lg">
            <form action ="{{route ('updateCollaborateur') }}" method ='post'>
                @csrf
                <input type="hidden" name="id" value="{{$collaborateur->id}}">
                <div class="mb-4">
                    <label for="civility" class="sr-only">What is your civility?</label>
                    <select name="civility" id="civility" value="{{$collaborateur->civility}}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('civility'){{$message}} border-red-500 @enderror" value="{{ old('civility') }}">
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
                  <input type="string" name="lastName" id="lastName" value="{{$collaborateur->lastName}}"
                  class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('lastName'){{$message}} border-red-500 @enderror" value="{{ old('lastName') }}">
                  @error('lastName')
                      <div class ="text-red-500 mt-2 text-sm">
                          {{$message}}
                      </div>
                  @enderror

                  <div class="mb-4">
                    <label for="firstName" class="sr-only">First Name</label>
                    <input type="string" name="firstName" id="firstName" value="{{$collaborateur->firstName}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('firstName'){{$message}} border-red-500 @enderror" value="{{ old('firstName') }}">
                    @error('firstName')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
    
                    <div class="mb-4">
                        <label for="street" class="sr-only">Street</label>
                        <input type="text" name="street" id="street" value="{{$collaborateur->street}}"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('street'){{$message}} border-red-500 @enderror" value="{{ old('street') }}">
      
                        @error('street')
                            <div class ="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror

                  <div class="mb-4">
                    <label for="zipcode" class="sr-only">Zipcode</label>
                    <input type="zipcode" name="zipcode" id="zipcode"value="{{$collaborateur->zipcode}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('zipcode') border-red-500 @enderror value="">
                   
                    @error('zipcode')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror

              </div>
              <div class="mb-4">
                <label for="town" class="sr-only">Town</label>
                <input type="string" name="town" id="town" value="{{$collaborateur->town}}"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('town'){{$message}} border-red-500 @enderror" value="{{ old('town') }}">

                @error('town')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

                <div class="mb-4">
                    <label for="phone" class="sr-only">Phone number</label>
                    <input type="integer" name="phone" id="phone" value="{{$collaborateur->phone}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">

                    @error('phone')
                        <div class ="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" value="{{$collaborateur->email}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    
                    @error('email')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
{{--
                <div class="mb-4">
                    <label for="entreprise_id" class="sr-only">Entreprise</label>
                    <select name="entreprise_id" id="entreprise_id" value="{{$collaborateur->entreprise_id}} class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('entreprise_id') border-red-500 @enderror" value="{{ old('entreprise_id') }}">
                    <option value ="" checked >Veuillez choisir l'entreprise </option>
                    @if($entreprise->count())
                    @foreach($entreprise as $entreprise)
                    <option value="{{ $entreprise->id}}">"{{ $company->name}}</option>
                    @endforeach
                    @endif
                    </select>
                    @error('entreprise_id')
                    <div class ="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror 
  --}}          
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
