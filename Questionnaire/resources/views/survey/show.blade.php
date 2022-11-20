@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{ $questionnaire->title }}</h1>

            <form action="#" method="post">
                @csrf
                
                @foreach ($questionnaire->questions as $key => $question)
                    <div class="card mt-4">
                        <div class="card-header"><strong>{{ $key + 1 }}</strong> {{ $question->question }}</div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($question->answers as $answer)
                                            <li class="list-group-item">
                                                {{ $answer->answer }}
                                            </li>
                                        </label>
                                    @endforeach
                                </ul>
                            </div>
                    </div>
                @endforeach

            </form>
        </div>
    </div>
</div>
@endsection
