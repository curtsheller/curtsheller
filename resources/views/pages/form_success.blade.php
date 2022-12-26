@extends('layouts.app')

@section('content')
    
    <div class="card card-block">
    
        <p>Thanks for the email, <b>{{ $name }}</b>. I'll get back to you as soon as possible. For a more immediate response contact either Kelly or Bernadette at the number below.</p>

        <hr>

        <h4>Contact:</h4>

        <p><i class="fa fa-user"></i> <b>Kelly Thompson</b> at 484 &bull; 415 &bull; 9677 or kelly@funkyfrets.com</p>

        <p>- or –</p>

        <p><i class="fa fa-user"></i> <b>Bernadette Sheller</b> at 484 &bull; 415 &bull; 9677 or bern@funkyfrets.com</p>

        <p>- or –</p>

        <p><i class="fa fa-user"></i> <b>Curt Sheller</b> at 484 &bull; 942 &bull; 8040 or curt@curtsheller.com</p>
    </div>

@endsection