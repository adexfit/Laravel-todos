@extends('layouts.app')

    @section('content')
            
            <h1 class="text-center my-5">
                  {{    $todo->name   }}
            </h1>   

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card-default">
                            <div class="card-header">
                                Details
                            </div>

                            <div class="card-body">
                                {{    $todo->description   }}
                            </div>

                            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-md btn-info my-7">Edit</a>
                            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-md btn-danger my-7">Delete</a>

                         </div>
                    
                    </div>                
                
                </div>
                  

         
    @endsection

 