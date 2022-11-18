@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new questionnaire') }}</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">
                    
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter title">
                            <small id="titleHelp" class="form-text text-muted">Give your questionnaire a title that attracts attention.</small>
                        </div>

                        @error('title')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purpose" placeholder="Enter purpose">
                            <small id="purposeHelp" class="form-text text-muted">Giving a purpose will increase responses.</small>
                        </div>

                        @error('purpose')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                        <button type="submit" class="btn btn-primary">Create questionnaire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
