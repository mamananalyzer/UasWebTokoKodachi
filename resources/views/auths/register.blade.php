@extends('layout/base')

@section('title', 'Register')

@section('container')

<div class="container">
    <form action=" {{ url('/regis') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
        else {
            alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
            return false;
        }">
        {{ csrf_field() }}
        <div class="form-group mt-5">
            <label for="exampleInputName">Name *</label>
            <input type="text" class="form-control col-4" placeholder="Username" name="name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email *</label>
            <input type="email" name="email" class="form-control col-4" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password *</label>
            <input type="password" name="password" class="form-control col-4" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone *</label>
            <input type="tel" name="phone" class="form-control col-4" id="PhoneNumber" placeholder="+62 000" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Company *</label>
            <input type="company" name="company" class="form-control col-4" id="Company" placeholder="" required>
        </div>
        <input type="checkbox" name="checkbox" value="check" id="agree" />
        <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
        <br>
        <div class="">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-success col-4" type="submit" name="submit" value="Register" />
        </div>
        <br>
    </form>
</div>
@endsection
