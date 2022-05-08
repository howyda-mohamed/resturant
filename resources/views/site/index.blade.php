<!DOCTYPE html>
<html lang="en">
<head>
	@include('site.includes.style')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- First Navigation -->
    @include('site.includes.navbar')
    <!-- End Of Second Navigation -->
    <!-- Page Header -->
    @include('site.includes.header')
    <!-- End Of Page Header -->
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6 class="section-subtitle">Opening Times</h6>
                    <h3 class="section-title">Working Times</h3>
                    @foreach ($abouts as $about)
                    <p class="mb-1 font-weight-bold">{{$about -> day}}: <span class="font-weight-normal pl-2 text-muted">{{$about ->from_time}} Am - {{$about->to_time}} Pm</span></p>
                    @endforeach
                    <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Book a table</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-1.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-2.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-devider my-6 transparent"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6 class="section-subtitle">The Great Story</h6>
                    <h3 class="section-title">Our Culinary Journey</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic illo a, aut, eum nesciunt obcaecati deserunt ipsam nostrum voluptate recusandae?</p>
                </div>
                <div class="col-md-6 order-1 order-sm-first">
                    <div class="row">
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-3.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-4.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End OF About Section -->

    <!-- Service Section -->
    <section id="service" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h6 class="section-subtitle text-center">Featured Food</h6>
            <h3 class="section-title mb-6 pb-3 text-center">Special Dishes</h3>
            <div class="row">
                @foreach ($specials as $special)
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="{{asset('assets/uploads/menu/'.$special->image)}}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">{{$special ->title}}</h5>
                                <p class="float-right text-primary">${{$special -> price}}</p>
                            </div>
                            <div class="body">
                                <p>{{$special -> description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End of Featured Food Section -->

    <!-- Menu Section -->
    <section class="has-img-bg">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Food</h6>
            <h3 class="section-title mb-6 text-center">Main Menu</h3>
            <div class="card bg-light">
                <div class="card-body px-4 pb-4 text-center">
                    <div class="row text-left">
                        @foreach ($mains as $main )
                            <div class="col-md-6 my-4">
                                <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                        {{$main -> title}}
                                            <p class="mt-1 mb-0">{{$main ->description}}</p>
                                        </div>
                                        <h6 class="float-right text-primary">${{$main -> price}}</h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a href="#book-table" class="btn btn-primary mt-4">Book A Table</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Menu Section -->

    <!-- Team Section -->
    <section id="team">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Team</h6>
            <h3 class="section-title mb-5 text-center">Talented Chefs</h3>
            <div class="row">
                @foreach ($stuffs as $stuff )
                    <div class="col-md-4 my-3">
                        <div class="team-wrapper text-center">
                            <img src="{{asset('assets/uploads/stuff/'.$stuff->image)}}" class="circle-120 rounded-circle mb-3 shadow" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                            <h5 class="my-3">{{$stuff ->name}}</h5>
                            <p>{{$stuff->description}}</p>
                            <h6 class="socials mt-3">
                                <a href="javascript:void(0)" class="px-2"><i class="ti-facebook"></i></a>
                                <a href="javascript:void(0)" class="px-2"><i class="ti-twitter"></i></a>
                                <a href="javascript:void(0)" class="px-2"><i class="ti-instagram"></i></a>
                                <a href="javascript:void(0)" class="px-2"><i class="ti-google"></i></a>
                            </h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Team Section -->

    <!-- Book Table Section -->
    <section id="testmonial" class="pattern-style-3">
    <section id="book-table" class="bg-white">
        <div class="container">
            @if (Session::has('msg'))
            <div class="alert alert-success">{{ Session::get('msg') }}</div>
            @endif
            @if (Session::has('status'))
            <div class="alert alert-danger">{{ Session::get('status') }}</div>
            @endif
            <div class="row align-items-center">
                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imgs/contact.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="w-100 rounded shadow">
                </div>
                <div class="col-md-6">
                    <form action="{{route('reservation')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
                        </div>
                        @error('name') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Your Phone">
                        </div>
                        @error('phone') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                        <div class="form-group">
                            <input type="datetime-local" class="form-control" name="date">
                        </div>
                        @error('date') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                        <div class="form-group">
                            <input type="number" class="form-control" name="seats" placeholder="Seats">
                        </div>
                        @error('seats') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
                        <button type="submit" class="btn btn-primary btn-block">Book A Table</button>
                        <small class="form-text text-muted mt-3">We don't span customers. Check our <a href="#">Privacy Policy</a></small>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- End OF Book Table Section -->

    <!-- Prefooter Section  -->
    <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center">
                <div class="col-md-3 text-md-left mb-3 mb-md-0">
                    <img src="assets/imgs/navbar-brand.svg" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0">
                </div>
                <div class="col-md-9 text-md-right">
                    <a href="#" class="px-3"><small class="font-weight-bold">Our Company</small></a>
                    <a href="#" class="px-3"><small class="font-weight-bold">Our Location</small></a>
                    <a href="#" class="px-3"><small class="font-weight-bold">Help Center</small></a>
                    <a href="components.html" class="pl-3"><small class="font-weight-bold">Components</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of PreFooter Section -->
    @include('site.includes.footer')
    <!-- Page Footer -->

    <!-- End of Page Footer -->
    <!-- core  -->
    @include('site.includes.scripts')
</body>
</html>
