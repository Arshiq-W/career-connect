<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career.Connect - FAQs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
        }
        .navbar-nav .nav-link {
            font-size: 1.2rem;
        }
        .hero-section {
            background-color: #f8f9fa;
            text-align: center;
            padding: 40px 0;
        }
        .section-title {
            font-weight: bold;
            font-size: 1.8rem;
            text-align: center;
            margin: 20px 0;
        }
        .faq-section {
            padding: 40px 20px;
        }
        .faq-question {
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        .feature-box {
            background-color: #3d75a8;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: white;
        }
        .feature-box img {
            max-width: 60px;
            margin-bottom: 10px;
        }
        .footer-section {
            background-color: #3d75a8;
            padding: 30px;
            color: #fff;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Career<span style="color: black;">.</span> Connect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{url('/')}}">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-primary" href="">About Us</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{url('faqs')}}">FAQs</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{route('home')}}">Dashboard</a>
            </li>
            <li class="nav-item">
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <a class="nav-link text-primary" href="{{route('logout')}}">Logout</a>
              </form>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{route('register')}}">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{route('login')}}">Login</a>
            </li>
            @endif
          </ul>
        </div>
    </div>
</nav>

<div class="hero-section py-5 text-center">
    <div class="container">
        <h2 class="fw-bold">FAQs</h2>
        <p class="text-muted">Home > FAQs</p>
        <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/images/faq_banner.jpg') }}" class="img-fluid rounded shadow-lg" alt="FAQ Banner" style="max-width: 80%; height: auto;">
        </div>
    </div>
</div>


<div class="container faq-section">
    <h3 class="section-title">General Questions About Digi Store</h3>

    <div class="faq-item">
        <p class="faq-question">What Are Your Thoughts About the Website?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit pellentesque class felis in, elementum faucibus.</p>
    </div>

    <div class="faq-item">
        <p class="faq-question">Who are You</p>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit pellentesque class felis in, elementum faucibus.</p>
    </div>

    <div class="faq-item">
        <p class="faq-question">asdasd</p>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit pellentesque class felis in, elementum faucibus.</p>
    </div>
</div>

<div class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <img src="{{asset('assets/images/learnng.jpg')}}" alt="Learning">
                    <h4>Personalized learning</h4>
                    <p>Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <img src="{{asset('assets/images/trust.png')}}" alt="Trusted">
                    <h4>Trusted content</h4>
                    <p>Created by experts, Khan Academy's library of trusted practice and lessons covers math, science, and more.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <img src="{{asset('assets')}}/images/img4.png" alt="Teachers">
                    <h4>Tools to empower teachers</h4>
                    <p>With Khan Academy, teachers can identify gaps in their students' understanding and tailor instruction.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>