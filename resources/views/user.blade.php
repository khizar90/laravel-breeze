<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1 class="text-center mb-5 mt-3">Contact Users Details</h1>
                    <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Time</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                          <th scope="row">{{$user->id}}</th>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->created_at}}</td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
