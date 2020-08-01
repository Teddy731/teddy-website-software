@extends ('layouts.layout')

@section('content')
    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Contact Us</h1>
              <p>You can give feedback through the channels stated below.Your feedback is our priority.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="/contact" method="post">
            @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name="FirstName">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="LastName">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address" name="Email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="Comment" class="form-control" placeholder="Write your message."  cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
      
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>Kimumu, Eldoret, Kenya</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+254 708755508</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>teddynganga98@gmail.com</span>.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
