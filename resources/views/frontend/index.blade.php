@extends('frontend.master')
@section('scontent')
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color: #481d21!important;" class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color: #481d21!important;" class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color: #481d21!important;" class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i style="color: #481d21!important;" class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div id="about" class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">

                            @foreach($about_image as $data)
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded wow zoomIn" data-wow-delay="{{$data->image_animate_time}}" src="{{asset($data->image)}}">
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary text-start text-primary fw-normal">{{$aboutdesc->mini_title}}</h5>
                        <h1 class="mb-4">{!!$aboutdesc->title!!}</h1>
                        {!!$aboutdesc->description!!}
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div style="border-color: #ec4c8d!important;" class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 style="color: #ec4c8d!important;" class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{$aboutdesc->num1}}</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div style="border-color: #ec4c8d!important;" class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 style="color: #ec4c8d!important;" class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">{{$aboutdesc->num2}}</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn sends btn-primary py-3 px-5 mt-2" href="{{url('/')}}">{{$aboutdesc->button_name}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div id="menu" class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary text-center text-primary fw-normal">{{$menuTitle->mini_title}}</h5>
                    <h1 class="mb-5">{{$menuTitle->title}}</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i style="color: #ec4c8d!important;" class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">{{$menu_lunch->category_top_name}}</small>
                                    <h6 class="mt-n1 mb-0">{{$menu_lunch->category_name}}</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i style="color: #ec4c8d!important;" class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">{{$menu_dinner->category_top_name}}</small>
                                    <h6 class="mt-n1 mb-0">{{$menu_dinner->category_name}}</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">                   
                        <div id="tab-2" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @foreach($lunchs as $lunch)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img  class="flex-shrink-0 img-fluid rounded" src="{{asset($lunch->img)}}" alt="" style="width: 120px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$lunch->name}}</span>
                                                <span style="color: #ec4c8d!important;" class="text-primary">{{$lunch->price}}</span>
                                            </h5>
                                            <small class="fst-italic">{{$lunch->short_description}}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div id="tab-3" class="tab-pane fade show p-0">
                            @foreach($dinner as $data)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img  class="flex-shrink-0 img-fluid rounded" src="{{asset($data->img)}}" alt="" style="width: 120px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$data->name}}</span>
                                                <span style="color: #ec4c8d!important;" class="text-primary">{{$data->price}}</span>
                                            </h5>
                                            <small class="fst-italic">{{$data->short_description}}</small>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div id="book" class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div style=" background-image: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url({{$bookingSystem->image}});" class="video">
                        <a href="{{$bookingSystem->youtube_link}}" target="_blank"  type="button" class="btn-play">
                
                        <span></span>
                        
                        </a>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary text-start text-primary fw-normal">{{$bookingSystem->mini_title}}</h5>
                        <h1 class="text-white mb-4">{{$bookingSystem->title}}</h1>
                        <form method="post" action="{{route('order.set')}}">
                        	@csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input required type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name"> Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" required name="email" id="email" placeholder="Your Email">
                                         <label  for="name">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" data-target-input="nearest">
                                        <input type="date" required name="order_date" class="form-control datetimepicker-input" id="datetime" min="{{Carbon\Carbon::now()->format('Y-m-d')}}" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Enter Date</label>
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-floating date" data-target-input="nearest">
                                        <input type="time"  required name="time" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Enter Time</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select required name="people" class="form-select" id="select1">
                                        	<option disabled> Select People </option>
                                         <option value="1">People 1</option>
                                          <option value="2">People 2</option>
                                          <option value="3">People 3</option>
                                          <option value="4">People 4</option>
                                           <option value="5">People 5</option>
                                            <option value="6">People 6</option>
                                             <option value="7">People 7</option>
                                              <option value="8">People 8</option>
                                               <option value="more">More</option>
                                              
                                              
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea required id="note" name="note" class="form-control" placeholder="Special Request" id="note" style="height: 100px"></textarea>
                                        <label for="name"> Note</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button id="send" class="btn sends btn-primary w-100 py-3" type="submit">{{$bookingSystem->button_name}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="{{asset('frontend')}}/" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->




        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary text-center text-primary fw-normal">{{$chef_title->mini_title}}</h5>
                    <h1 class="mb-5">{{$chef_title->title}}</h1>
                </div>
                <div class="row g-4">

                    @foreach($chef as $data)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{asset($data->image)}}" alt="">
                            </div>
                            <h5 class="mb-0">{{$data->name}}</h5>
                            <small>{{$data->post}}</small>
                            <div  class="d-flex justify-content-center mt-3">
                                <a style="background: #ec4c8d!important; border: 1px solid #ec4c8d!important;" href="{{$data->facebook}}" class="btn btn-square btn-primary mx-1" target="_blank"><i  class="fab fa-facebook-f"></i></a>
                                <a style="background: #ec4c8d!important; border: 1px solid #ec4c8d!important;" href="{{$data->twitter}}" class="btn btn-square btn-primary mx-1" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a style="background: #ec4c8d!important; border: 1px solid #ec4c8d!important;" href="{{$data->instagram}}" target="_blank" class="btn btn-square btn-primary mx-1"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                   
                    
                </div>
            </div>
        </div>
        <!-- Team End -->

         <div id="contact" class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary text-center text-primary fw-normal">{{$contactSetting->mini_title}}</h5>
                    <h1 class="mb-5">{{$contactSetting->title}}</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary fw-normal text-start text-primary">{{$contactSetting->header_title_1}}</h5>
                                <p><i style="color: #ec4c8d!important;" class="fa fa-envelope-open text-primary me-2"></i>{{$contactSetting->header_info_1}}</p>
                            </div>
                            <div class="col-md-4">
                                <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary fw-normal text-start text-primary">{{$contactSetting->header_title_2}}</h5>
                                <p><i style="color: #ec4c8d!important;" class="fa fa-envelope-open text-primary me-2"></i>{{$contactSetting->header_info_2}}</p>
                            </div>
                            <div class="col-md-4">
                                <h5 style="color: #ec4c8d!important;" class="section-title ff-secondary fw-normal text-start text-primary">{{$contactSetting->header_title_3}}</h5>
                                <p><i style="color: #ec4c8d!important;" class="fa fa-envelope-open text-primary me-2"></i>{{$contactSetting->header_info_3}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                       {!!$contactSetting->google_map!!}
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="post" action="{{route('contact.add')}}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="name" required type="text" class="form-control" id="mname" placeholder="Your Name">
                                            <label for="name">Your Name </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="email" required type="email" class="form-control" id="memail" placeholder="Your Email">
                                            <label for="email">Your Email </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input name="subject" required type="text" class="form-control" id="msubject" placeholder="Subject">
                                            <label for="subject">Subject </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="message" required class="form-control" placeholder="Leave a message here" id="mmessage" style="height: 150px"></textarea>
                                            <label for="message">Message </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button id="submit" class="btn sends btn-primary w-100 py-3" type="submit">{{$contactSetting->button_name}} </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection