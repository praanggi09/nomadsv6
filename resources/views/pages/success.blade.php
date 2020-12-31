@extends('layouts.success')

@section('title')
    Checkout Success
@endsection

@section('content')
<main>
  <div class="section-success d-flex align-items-center">
    <div class="col text-center">
      <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
      <h1>Yay! Success</h1>
      <p>
        We've sent you email for trip Instructions
        <br />
        please read it as well
      </p>
      <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
        Home Page
      </a>
    </div>
  </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.datepicker').datepicker({
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" alt="" />'
          }
        });
      });
    </script>
@endpush
