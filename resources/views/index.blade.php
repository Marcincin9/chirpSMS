@extends('layouts.app')
@section('title', 'ChirpSMS - Text message app')
@section('content')

 <!-- Tabs with app on Card -->

 <div class="main main-raised">
        <div class="text-center">
          <h2> ChirpSMS</h2><br />
          <p>--- Feel free to send an text below. --- </p>
        </div>

    <form>
        <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>   

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message:</label>
            <textarea class="form-control" rows="3"></textarea>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
  <!-- End Tabs with app on Card -->

@endsection