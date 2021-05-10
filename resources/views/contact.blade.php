@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div class="is-centered">
                <h1 class="heading has-text-weight-bold is-size-4">Contact Tweety Team</h1>
                <img src="images/team.jpeg" alt="" class="border-blue width-40">
            </div>
            <form method="POST" action="/contact">
                @csrf <!-- Cross-site request forgery -->

                {{-- name --}}
                <div class="field">
                    <label class="label" for="title">Name</label>

                    <div class="control">
                        <input 
                            class="input {{ $errors->has('title') ? 'is-danger' : '' }}" 
                            type="text" 
                            name="title" 
                            id="title"
                            value="{{ old('title')}}">

                        @if ($errors->has('title')) 
                        {{-- @error('title') @enderror --}}
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @endif
                    </div>  
                </div>

                {{-- subject --}}
                <div class="field">
                    <label class="label" for="title">Subject</label>

                    <div class="control">
                        <input 
                            class="input {{ $errors->has('subject') ? 'is-danger' : '' }}" 
                            type="text" 
                            name="subject" 
                            id="subject"
                            value="{{ old('subject')}}">

                        @if ($errors->has('subject')) 
                        {{-- @error('subject') @enderror --}}
                            <p class="help is-danger">{{ $errors->first('subject') }}</p>
                        @endif
                    </div>  
                </div>

                
                {{-- email --}}
                <div class="field">
                    <label class="label " for="email">Email Address</label>
                    <div>
                        <input class="input" type="text" id="emai" name="email">
                    </div>

                    @error('email')
                        <div class="help id-danger text-red-500 text-xs">{{ $message }}</div>                        
                    @enderror
                </div>

                {{-- body Text --}}
                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea 
                            class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" 
                            name="body" 
                            id="body"
                            >{{ old('body') }}</textarea>

                        @if ($errors->has('body')) 
                        {{-- @error('body') @enderror --}}
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @endif
                    </div>
                </div>

                

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

                @if (session('message'))
                    <div class="has-text-green">
                        {{ session('message') }}
                    </div>
                @endif

            </form>
        </div>
    </div>
@endsection