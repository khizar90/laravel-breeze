<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-3">
                                <h1 class="text-center mb-3">Contact us</h1>
                               

                                @if (session('alert-success'))
        
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>Sucess!</strong>{{Session::get('alert-success')}}
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                               
                               
                                <form method="post" action="{{route('contact')}}">
                                    @csrf
                                    <div class="form-group mb-3">
                                      <label for="" class="mb-1">Your Name</label>
                                      <input type="name" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                                    </div>
                                    <span class="text-danger">
                                        @error('name')
                                        {{$message}}
                                        @enderror
                                        </span>

                                    <div class="form-group mb-3">
                                      <label for="" class="mb-1">Your Email</label>
                                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <span class="text-danger">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                        </span>
                                        <br>
                                                            
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
