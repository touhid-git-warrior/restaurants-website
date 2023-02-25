 <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 style="color: #ec4c8d!important;" class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{$footer->title_1}}</h4>

                        @foreach($navbar as $key => $data)
                        
                       <a class="btn btn-link" href="{{$data->navbar_href}}">{{$data->navbar_name}}</a>
                       

                        @endforeach
                        
                      
                    
                     
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 style="color: #ec4c8d!important;" class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{$footer->title_2}}</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$footer->location}}</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$footer->phone}}</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$footer->email}}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="{{$footer->facebook}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{$footer->twitter}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{$footer->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{$footer->linkin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 style="color: #ec4c8d!important;" class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{$footer->title_3}}</h4>
                        <h5 class="text-light fw-normal">{{$footer->opening_day}}</h5>
                        <p>{{$footer->opening_time}}</p>
                        <h5 class="text-light fw-normal">{{$footer->special_opening_day}}</h5>
                        <p>{{$footer->special_opening_time}}</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 style="color: #ec4c8d!important;" class="section-title ff-secondary text-start text-primary fw-normal mb-4">{{$footer->title_4}}</h4>
                        <p>">{{$footer->newslatter_desc}}</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn sends btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">{{$footer->newslatter_btn}}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="{{url('/')}}">Ristorantesanmarcoceggia</a>, {{$footer->copyright}} 
							
							
							<br><br>
                            
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{url('/')}}">{{$footer->other_link_1}}</a>
                                <a href="{{url($footer->href_2)}}">{{$footer->other_link_2}}</a>
                                <a href="{{url($footer->href_3)}}">{{$footer->other_link_3}}</a>
                                <a href="{{url($footer->href_4)}}">{{$footer->other_link_4}}</a>
                                <a href="{url($footer->href_5)}}">{{$footer->other_link_5}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->