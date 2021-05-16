@extends('fontend.header')
@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-appointment">
    	<div class="container py-4">

                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible" role="alert" >
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                    @endif
                    <h2 class="mb-0">Blood Inquiry</h2>

	    				<form action="{{url('saveblood')}}" method="POST" class="appointment bg-white p-4 p-md-5">
                            @csrf
                            <div class="row">

                        	<div class="col-md-6">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">

                              <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" required>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
		                    </div>
				              </div>
				    				</div>
                                    </div>

                                    <div class="col-md-6">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">

                              <input type="text" name="name" placeholder="Hospital Name" class="form-control @error('name') is-invalid @enderror" required>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
		                    </div>
				              </div>
				    				</div>
									</div>

                                    <div class="col-md-6">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">

                              <input type="text" name="name" placeholder="Age" class="form-control @error('name') is-invalid @enderror" required>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
		                    </div>
				              </div>
				    				</div>
                                    </div>

                                    <div class="col-md-6">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">

                              <input type="text" name="name" placeholder="How Many Bag Needed" class="form-control @error('name') is-invalid @enderror" required>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
		                    </div>
				              </div>
				    				</div>
									</div>

                                    <div class="col-md-6">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">

                              <input type="text" name="name" placeholder="Patient Problem" class="form-control @error('name') is-invalid @enderror" required>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
		                    </div>
				              </div>
				    				</div>
                                    </div>

                                    <div class="col-md-6">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">

                              <input type="text" name="name" placeholder="Paitent Relationship" class="form-control @error('name') is-invalid @enderror" required>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
		                    </div>
				              </div>
				    				</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
                              <input type="text" name="bloodgroup" class="form-control @error('bloodgroup') is-invalid @enderror" placeholder="Blood Group" required>
                              @error('bloodgroup')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
				            </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
				              <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" required placeholder="Phone Number">
                              @error('phone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
									</div>
									{{-- <div class="col-md-6">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"><span class="fa fa-calendar"></span></div>
				            		<input type="text" name="date" class="form-control appointment_date" placeholder="Date">
			            		</div>
				    				</div>
									</div> --}}
									{{-- <div class="col-md-6">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"><span class="fa fa-clock-o"></span></div>
				            		<input type="text" name="time" class="form-control appointment_time" placeholder="Time">
			            		</div>
				    				</div>
									</div> --}}
									<div class="col-md-6">
										<div class="form-group">
                              <input type="email" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" required>
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
				                      </div>
                                    </div>
                                    <div class="col-md-6">
										<div class="form-group">
				              <textarea name="address" cols="30" rows="7" required class="form-control @error('address') is-invalid @enderror" placeholder="Address"></textarea>
                              @error('address')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
				              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
				            </div>
									</div>
	    					</div>
		          </form>
		        </div>
    			</div>
        </div>
        </div>

        {{-- <div class="row"> --}}
            {{-- <div class="col-lg-7"> --}}
            <div class="row justify-content-start py-5 pr-md-4">
              <div class="col-md-12 heading-section ftco-animate py-md-4">
                <div class="tabulation-2 mt-4">
                    <div class="col-lg-12">
                                <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                  <li class="nav-item mb-md-0 mb-2">
                                    <a class="nav-link active py-3" data-toggle="tab" href="#home1">Our Mission</a>
                                  </li>
                                  <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                    <a class="nav-link py-3" data-toggle="tab" href="#home2">Our Vision</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link py-3 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
                                  </li>
                                </ul>
                                <div class="tab-content rounded mt-2">
                                  <div class="tab-pane container p-0 active" id="home1">
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                  </div>
                                  <div class="tab-pane container p-0 fade" id="home2">
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                  </div>
                                  <div class="tab-pane container p-0 fade" id="home3">
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                  </div>
                                </div>
                            </div>
              </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-calendar"></span></div>
                <strong class="number" data-number="45">0</strong>
              	<span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-briefcase"></span></div>
                <strong class="number" data-number="8500">0</strong>
              	<span>Project completed</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-users"></span></div>
                <strong class="number" data-number="2342">0</strong>
              	<span>Happy Clients</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-bar-chart"></span></div>
                <strong class="number" data-number="30">0</strong>
              	<span>Business Partners</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">

            <h2>Gallery</h2>
          </div>
        </div>
			</div>
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-1.jpg);">
            	<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-2.jpg);">
            	<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-3.jpg);">
            	<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-4.jpg);">
            	<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-5.jpg);">
            	<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-6.jpg);">
            	<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-7.jpg);">
            	<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 ftco-animate">
            <div class="work img d-flex align-items-end" style="background-image: url(images/work-8.jpg);">
            	<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
	              	<span>House</span>
	              </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>


    @endsection
