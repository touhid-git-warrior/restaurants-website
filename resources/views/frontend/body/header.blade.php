  <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">

                @php

                $image = App\Models\Logo::first();

                @endphp


                <a href="{{url('/')}}" class="navbar-brand p-0">


                    <h1 style="color: #c32424!important;" class="text-primary m-0">

                        @if($image->image == null)

                        {{$image->logo_name}}

                        @else

                         <img src="{{asset($image->image)}}">

                        @endif
                            
                       

                    </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    
                    <div class="navbar-nav ms-auto py-0 pe-4">

                        @foreach($navbar as $key => $data)
                        
                        <a href="{{$data->navbar_href}}" class="nav-item nav-link {{($key == 0)? 'active': '' }} ">{{$data->navbar_name}}</a>
                       

                        @endforeach
                   
                    </div>
                   
                    <a href="#book" class="btn sends btn-primary py-2 px-4">Book A Table</a>
                
                </div>
            </nav>

            <!-- slider -->

        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        @php

        $counter = App\Models\Slider::count();

        @endphp

     


   <div class="carousel-indicators">

            
    <?php 

    for ($i=0; $i  <= $counter ; $i++) { 
        ?>

        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i;?>" class="<?php echo ($i == 0)?'active':'' ?>" aria-current="true" aria-label="Slide <?php echo $i + 1;?>"></button>


        <?php
    }

    ?>

  
  </div>



  <div class="carousel-inner">
        
    @foreach($slider as $key => $data)

    <div class="carousel-item {{($key == 0)?'active':'' }}">
      <div style=" background-image: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url({{$data->bg_image}});" class="container-xxl py-5 bg-dark hero-header mb-5">

                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">{!!$data->title!!}</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">{{$data->details}}</p>
                            <a href="{{$data->button_link}}" class="btn sends btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">{{$data->button_name}}</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="{{asset($data->side_image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </div>

    @endforeach


    

  


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



            <!-- slider -->

    
        


        </div>
        <!-- Navbar & Hero End -->