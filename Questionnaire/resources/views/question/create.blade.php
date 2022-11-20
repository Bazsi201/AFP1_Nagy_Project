@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new question') }}</div>

                <div class="card-body">
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                    
                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" 
                            value="{{ old('question.question') }}" id="question" aria-describedby="question" placeholder="Enter question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions for best results.</small>

                            @error('question.question')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>

                                <div>
                                    <div class="form-group">
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" type="text" class="form-control" 
                                        value="{{ old('answers.0.answer') }}" id="answer1" aria-describedby="choicesHelp" placeholder="Enter choice 1">

                                        @error('answers.0.answer')
                                        <br>
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Choice 2</label>
                                        <input name="answers[][answer]" type="text" class="form-control" 
                                        value="{{ old('answers.1.answer') }}" id="answer2" aria-describedby="choicesHelp" placeholder="Enter choice 2">
            
                                        @error('answers.1.answer')
                                        <br>
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice 3</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer3" 
                                        value="{{ old('answers.2.answer') }}" aria-describedby="choicesHelp" placeholder="Enter choice 3">
            
                                        @error('answers.2.answer')
                                        <br>
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice 4</label>
                                        <input name="answers[][answer]" type="text" class="form-control" id="answer4" 
                                        value="{{ old('answers.3.answer') }}" aria-describedby="choicesHelp" placeholder="Enter choice 4">
            
                                        @error('answers.3.answer')
                                        <br>
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <button type="submit" class="btn btn-primary">Add question</button>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
