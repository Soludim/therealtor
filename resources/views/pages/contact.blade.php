@extends('main')


@section('content')
@if(session('message'))
    <div id="alert-container" class="alert {{ session('message') == 'Email sent successfully!' ? 'alert-success' : 'alert-danger' }}">
        {{ session('message') }}
    </div>

    <script>
        // Wait for 5 seconds and then hide the alert
        setTimeout(function() {
            var alertContainer = document.getElementById('alert-container');
            alertContainer.style.display = 'none';
        }, 5000);
    </script>
@endif
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_4.png')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Contact Me</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">Address</h3>
          <p>{{config('app.com_address')}}</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">Contact Number</h3>
          <p><a style="color: #999999;" href="tel://{{config('app.com_phone_1')}}">{{config('app.com_phone_1')}}</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">WhatsApp</h3>
          <p><a style="color: #999999;" href="tel://{{config('app.com_phone_2')}}">{{config('app.com_phone_2')}}</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">Email Address</h3>
          <p><a style="color: #999999;" href="mailto://{{config('app.com_email')}}">{{config('app.com_email')}}</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
  <div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
      <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
        <form action="{{route('send-mail')}}" method="post">
          @csrf() 
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required >
          </div>
          <div class="form-group">
            <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.1535238052693!2d-0.10280032556831006!3d5.6909443322791295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf824c53958d79%3A0x906122849a4e6e47!2sEast%20Legon%20Hills!5e0!3m2!1sen!2sgh!4v1683371417733!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>
@endsection