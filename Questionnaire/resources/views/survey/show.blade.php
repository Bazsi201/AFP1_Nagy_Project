@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{ $questionnaire->title }}</h1>

            <form action="#" method="post">
                @csrf
                
            </form>
        </div>
    </div>
</div>
@endsection
