{{-- @extends('layouts.base') --}}
@extends('layouts.signup')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

<div class="container custom-login" style="padding-top: 100px;">
    {{-- @include('errors.errors') --}}
    {{-- @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif --}}

    <form action="{{ url('/sign-up') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
                                @error('firstName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
                                @error('lastName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" autocomplete="off">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off" required>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password" autocomplete="off" required>
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">Country Code *</label>
                                <input type="text" name="Country_Code" class="form-control" id="Country Code" placeholder="Country Code " maxlength="3" required>
                                @error('firstName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Mobile Number * </label>
                                <input type="text" name="Mobile_Number" class="form-control" id="Mobile Number" placeholder="Mobile Number" minlength="9" required>
                                @error('lastName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="margin-left: 522px">Submit</button><br>
            <p class="mt-3" style="margin-left: 385px">Already signed up? <a href="{{ url('/loginpage') }}">Login</a></p>
        </div>
    </form>
</div>
