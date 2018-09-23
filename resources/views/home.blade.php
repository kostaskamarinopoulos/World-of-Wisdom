@extends('layouts.base')
@section('content')
        @if(Session::has('message'))
        <div class="alert alert-info" style="text-align: center;">
            {{Session::get('message')}}
        </div>
    @endif
    @if(Session::has('error_message'))
        <div class="alert alert-danger" style="text-align: center;">
            {{Session::get('error_message')}}
        </div>
    @endif
    
  <div class="container">
    <div class="tm-top-bar"></div>

    <!-- Welcome section -->
    <section class="tm-welcome">

      <div class="tm-welcome-left">
        <!-- Logo -->
        <div class="tm-logo">
          <h1 class="tm-site-name">Beauty</h1>
        </div>
        <div class="tm-welcome-content">
          <!-- fa icons -->
          <div class="tm-welcome-icons-container">
            <i class="fas fa-crown fa-5x tm-welcome-icon"></i>
            <i class="fas fa-heart fa-5x tm-welcome-icon"></i>
          </div>

          <h2 class="tm-mb-25">Simple HTML Page</h2>
          <p class="tm-font-big">The Beauty <a href="https://themewagon.com/" target="_parent">Free HTML5 Template</a> is a clean and simple web page layout. You can edit and use this template for your website. Please spread a word about <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> and it is going to be helpful. Thank you.</p>
          <a href="#" class="tm-welcome-link tm-font-big">Continue...</a>
        </div>
      </div>
      <div class="tm-welcome-right"></div>

    </section>
    <div class="tm-bar-2"></div>

    <section class="row tm-section-mb tm-section-2">
      <div class="col-md-12 tm-section-2-inner">
        <div class="tm-section-2-left">
              <div class="tm-img-container tm-img-container-1"></div>
              <div class="tm-img-container tm-img-container-2"></div>
        </div>
        <div class="tm-section-2-right tm-bg-primary">
          <div class="tm-section-2-text">
            <h2 class="tm-section-2-header tm-mb-45">Let's get social!</h2>
            <p>Aliquam facilisis in orci et mattis. Duis et sem sit amet nibh euismod cursus. In sit amet metus purus. Sed tristique efficitur imperdiet. Proin ornare a nibh a tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p class="tm-p-ml">Nulla rutrum purus vitae vulputate tincidunt. Suspendisse eget mi justo. Ut in erat nec odio volutpat lacinia ac a quam. 
                    <br><br>Integer pretium dapibus tellus vitae pretium. Nulla molestie lectus in viverra dignissim.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="row tm-section-3">
      <div class="col-md-12 tm-section-3-inner">
        <div class="tm-section-3-left tm-bg-primary">
          <div class="tm-section-3-text">
            <i class="fas fa-users fa-5x tm-welcome-icon d-block text-center ml-0"></i>
            <h2 class="tm-section-3-header tm-mb-35">Opportunities</h2>
            <p>Praesent ac bibendum tortor, mollis interdum nisl. Integer egestas nec lectus fringilla consectetur. Nullam tempus ante ligula.</p>
            <a href="#" class="d-block tm-welcome-link">Continue...</a>
          </div>
        </div>
        <div class="tm-section-3-right">
          <div class="tm-img-container tm-img-container-3"></div>
        </div>
      </div>
  </section>

  <section class="row tm-section-pt tm-section-pb">
    <div class="col-md-6 mx-auto text-center">
      <h2 class="tm-text-dark tm-mb-50">THE COMMUNITY</h2>
      <p class="tm-text-light-dark tm-font-big">Quisque venenatis lectus vitae massa rhoncus, ut ultricies tortor rhoncus. Donec lacinia elit dio, eget elementum sapien tempor at. Suspendisse potenti. Phasellus feugiat massa eget nunc auctor semper.</p>
    </div>
  </section>


    @include('partials.image_gallery')

    @include('partials.contact_form')
</div>
@endsection