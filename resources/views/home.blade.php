@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Insurance Recommendation System') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Successfully login!') }}






                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <a href="{{ url('/quote') }}"><button type="button" name="Quote" >
                                {{ __('GET YOUR QUOTATION') }}  
        
                                </button>
                                </a>

                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
