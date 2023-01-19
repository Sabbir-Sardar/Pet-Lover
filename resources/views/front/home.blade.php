<!DOCTYPE html>
<html lang="en">

@include('front.head')


<body>
    

    <!-- Navbar Start -->
    @include('front.nav')
    
    <!-- Navbar End -->


    <!-- Carousel Start -->
    @include('front.header')
    
    <!-- Carousel End -->


    <!-- Booking Start -->
    @yield('content')
    <!-- Booking Start -->


    <!-- About Start -->
    @include('front.about')
    
    <!-- About End -->


    <!-- Services Start -->
    @include('front.service')
    
    <!-- Services End -->


    <!-- Features Start -->
    @include('front.feature')
    
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    @include('front.price')
    
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    @include('front.team')
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('front.testimonial')
    
    <!-- Testimonial End -->




    <!-- Footer Start -->
    @include('front.footer')
    
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('front.js')
    
</body>

</html>