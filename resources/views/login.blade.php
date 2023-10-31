@extends('layouts.main')
@section('login')
@if(session('success'))
    {{-- Display a success message if it exists in the session --}}
    <span class="alert alert-success">
        {{ session('success') }}
    </span>
@elseif (session('error'))
    {{-- Display an error message if it exists in the session --}}
    <span class="danger-alert">
        {{ session('error') }}
    </span>
@endif
<div class="footer">
    <div class="login-here">
        <div class="login">
            <p>Login Here</p>
            <div  class="user-info">
                {{-- Login form --}}
                <form method="post" action="{{ route('login.data') }}">
                    {{ csrf_field() }}
                    <table class="login-1">
                        <tr class="inpt">
                            <td><span>Username</span></td>
                            <td><input type="text" name="fullname" value="{{ old('fullname') }}">
                                @error('fullname')
                                    {{-- Display validation error message for 'fullname' input --}}
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr><br>
                        <tr class="inpt">
                            <td><span>Password</span></td>
                            <td><input type="password" name="password">
                                @error('password')
                                    {{-- Display validation error message for 'password' input --}}
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr class="logn-btn">
                            <td></td>
                            <td><input class="log" type="submit" name="save" value="Login" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<div class "sign-up">
    <div class="sign">
        <p>New to Enest? <a href=""> Sign up</a></p>
        <div  class="user-info">
            {{-- Registration form --}}
            <form method="post" action="{{ route('signup.data') }}">
                {{ csrf_field() }}
                <table class="login-1">
                    <tr class="inpt-1">
                        <td><span>Full Name</span></td>
                        <td><input type="text" name="name">
                            @error('name')
                                {{-- Display validation error message for 'name' input --}}
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr><br>
                    <tr class="inpt-1">
                        <td><span>Email</span></td>
                        <td><input type="text" name="email">
                            @error('email')
                                {{-- Display validation error message for 'email' input --}}
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr>
                    <tr class="inpt-1">
                        <td><span>Password</span></td>
                        <td><input type="password" name="password">
                            @error('password')
                                {{-- Display validation error message for 'password' input --}}
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr>
                    <tr class="logn-btn">
                        <td></td>
                        <td><input class="log" type="submit" name="save" value="Sign up"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
