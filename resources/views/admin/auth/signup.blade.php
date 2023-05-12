@extends('layouts.admin-unauthenticated')

<div class="login-form-container">
    <form action="{{route('admin.signup')}}" method="POST" class="login-admin-form">
        @csrf
        <div class="login-form-top">
            <h2>TEMPORARY PAGE</h2>
            <p>This page is for development purposes only</p>
        </div>

        <div class="login-form-main">
            <input type="text" placeholder="name" name="name">
            <input type="email" placeholder="Email address" name="email">
            <input type="text" placeholder="password" name="password">
            <input type="text" placeholder="password confirmation" name="password_confirmation">
            <button type="submit">Signup</button>
        </div>
    </form>
</div>
