<div class="container-fluid bg-light my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Testimonial</h4>
                <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                
                
            @foreach ( $reviewlist as $data )
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/review.png" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>{{$data->name}}</h5>
                            <i>{{$data->designation}}</i>
                        </div>
                    </div>
                    <p class="m-0">{{$data->message}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>