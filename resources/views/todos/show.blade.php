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
        </div>
    </div>


@endsection
    