@extends('layouts/app')

@section('content')
<h1>Contact Us</h1>

<form method="POST" action="/contact/submit">
{{ csrf_field() }}
    <div class="form-group">
      <label for="validationTooltip01">Name</label>
      <input type="text" name="name" class="form-control" id="validationTooltip01" placeholder="Username" required>
    </div>    
    <div class="form-group">
        <label for="FormControlInput1">Email address</label>
        <input type="email" name="email" class="form-control" id="FormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="FormControlTextarea1">Message</label>
        <textarea name="message" class="form-control" id="FormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    @if(session('success'))
       <div class="alert alert-success">{{ session('success') }}</div>
    @endif  
</form>

@endsection