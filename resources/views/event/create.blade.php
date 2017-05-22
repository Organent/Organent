@extends('layouts.app')

@section('content')

<div class="container-fluid  text-center">


<h3>Create Event<h3>
  <div class="container">

    <form method="post">

    <center><input type="text" class="form-control field-divided"  name="name" placeholder="name" style="background-color:transparent"></center>
    <center><input type="text" class="form-control field-divided"  name="date" placeholder="date" style="background-color:transparent"></center>
    <center><input type="text" class="form-control field-divided"  name="time" placeholder="time" style="background-color:transparent"></center>
    <center><input type="text" class="form-control field-divided"  name="where" placeholder="where" style="background-color:transparent"></center><br />
    
  <button type="submit" class="btn btn-default" onClick="this.form.action='register.php'; submit()" >create</button>
  <button type="submit" class="btn btn-default" onClick="this.form.action='index.html'; submit()">cancel</button><br /><br />
</form>
</div>
</div>

@endsection
