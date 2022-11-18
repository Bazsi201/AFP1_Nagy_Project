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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
