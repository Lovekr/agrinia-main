@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'Payment', 'url' => 'Payment'])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Error!</strong> {{ $message }}
    </div>
@endif
<!-- 
@if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Success!</strong> {{ $message }}
    </div>
@endif -->

<div class="card card-default">
    <div class="card-body text-center">
        <form action="{{ route('razorpay.payment.store') }}" method="POST" >
            @csrf
            
            <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{ env('RAZORPAY_KEY') }}"
                    data-order_id="{{$paymentDetails['order_id']}}"
                    data-amount="{{$paymentDetails['total']}}"
                    data-provider="razorpay"
                    data-buttontext="Pay {{$paymentDetails['total']}} INR"
                    data-name="agrinia"
                    data-description="Rozerpay"
                    data-image=""
                    data-prefill.name="name"
                    data-prefill.email=""
                    data-theme.color="#62a403">
            </script>
        </form>
    </div>
</div>

@endsection