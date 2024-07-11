<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

    <title>Blood bank</title>
</head>

<body>

    <!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <i class="fas fa-phone-volume" style="border-right: 1px solid gray;"> +91 9312633729
                                &nbsp; &nbsp; </i>
                        </li>
                        <li class="nav-item">
                            <i class="far fa-envelope" style="padding-left: 15px;"> InfoBloodBank@gmail.com</i>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0 navbar-brand mx-auto">
                    <a href=""><i
                            class="fab fa-instagram github">&nbsp;&nbsp;</i></a>
                    <a href=""><i
                            class="fab fa-facebook-f facebook">&nbsp;&nbsp;</i></a>
                    <a href=""><i class="fab fa-twitter twitter">&nbsp;&nbsp;</i></a>
                    <a href=""><i
                            class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" style="padding-left: 35px;">
                            <a class="nav-link selected" >EN &nbsp;</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="{{asset('imgs/logo.png')}}" width="18%"></img>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('./account/index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('./requests/received')}}">Received Requests ({{$your_received_request}})</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('./account/yourDonations')}}">Your Donations ({{$your_donation_count}})</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('./requests/yourSentRequests')}}">Sent Requests ({{$your_sent_request}})</a>
                    </li>
                </ul>
                <button class="btn login" onclick="window.location='{{ url('/') }}'">Logout</button>
            </div>
        </nav>
    </section>
    <!-- Navbar 2 End -->

    <!-- Navigator Start -->
    <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Received Requests</div>
            </div>

        </div>
    </section>

    <section id="requests">
        {{-- <div class="title" >
            <h2 onclick="window.location='{{ url('/account/donate') }}'" style="text-decoration-line: underline">Add new Donation </h2>
        </div> --}}
        @if($requests->isEmpty())
            <h2 style="text-align:center; color:brown" >No requests received. </h2>
        @else
            @foreach ($requests as $request)
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="type" style="padding-top: 35px;">
                                    <h2>{{ $request->request_status }}</h2>
                                </div>
                            </div>
                            <div class="data col-lg-6">
                                <h4>From: {{ $request->sender->name }}</h4>
                                <h4>Email: {{ $request->sender->email }}</h4>
                                <h4>Age: {{ $request->sender->age }}</h4>
                                <h4>Message: {{ $request->message }}</h4>
                                <h4>Received At: {{ $request->created_at->format('d-m-Y H:i:s') }}</h4>

                            </div>
                            
                             <div class="col-lg-3">
                                <div class="type">
                                    
                                        <form method="POST" action="{{ route('requests.accept', $request->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-xs btn-success btn-flat" style="width: 200px; padding: 10px; margin-right: 10px;" title="Accept">Accept</button>
                                        </form>
                                        <form method="POST" action="{{ route('requests.reject', $request->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-xs btn-danger btn-flat" style="width: 200px; padding: 10px; margin-right: 10px;" title="Reject">Reject</button>
                                        </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </section>

    
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="foot-info">
                    <img src="{{asset('imgs/logo.png')}}" alt="">
                    <p>Donate blood today—save lives, spread hope, and be a 
                        hero in someone's story. Your single act of kindness can 
                        make an extraordinary difference. Give the gift of life.</p>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="menu">
                    <a href="{{url('./account/index')}}">
                        <li>Home</li>
                    </a>
                    <a href="">
                        <li>About Us</li>
                    </a>
                    <a href="{{url('./requests/received')}}">
                        <li>Recived Requests</li>
                    </a>
                    <a href="{{url('./account/yourDonations')}}">
                        <li>Your Donations</li>
                    </a>
                    <a href="{{url('./requests/yourSentRequests')}}">
                        <li>Sent Requests</li>
                    </a>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="options">
                    <li>
                        <h5>Available On</h5>
                    </li>
                    <li><img src="{{asset('imgs/ios1.png')}}" alt=""></li>
                        <li><img src="{{asset('imgs/google1.png')}}" alt=""></li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>


</body>

</html>