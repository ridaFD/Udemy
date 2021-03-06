@extends('layouts.app')

@section('title')
    {{ $todo->name }}
@endsection


@section('content')

<div class="text-center my-5">
        {{ $todo->name }} 
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-def">
                <div class="card-header">
                    Details
                </div>
            </div>
    
            <div class="card-body">
                {{ $todo->description }}
            </div>
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info my-2">Edit</a>
            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger my-2">Delete</a>

        </div>
    </div>


@endsection
    