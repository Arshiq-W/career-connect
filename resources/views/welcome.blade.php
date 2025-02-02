<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career.Connect</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('assets')}}/style.css" />
    <style>
      body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
        overflow-x: hidden;
      }

      /* Navbar Styles */
      .navbar-brand {
        font-weight: bold;
        font-size: 1.8rem;
      }
      .navbar-nav .nav-link {
        font-size: 1.2rem;
      }
      nav {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
      }

      /* Hero Section Styles */
      .hero-section {
        background: linear-gradient(rgba(0, 64, 133, 0.7), rgba(0, 64, 133, 0.7)),
          url("{{asset('assets')}}/images/img1.png");
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
        padding: 80px 20px;
        animation: fadeIn 1.5s ease-in forwards;
      }
      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .hero-section h2 {
        font-size: 3rem;
        font-weight: 700;
        animation: bounceIn 1.5s ease-in-out;
      }
      @keyframes bounceIn {
        0% {
          transform: scale(0.8);
          opacity: 0;
        }
        50% {
          transform: scale(1.1);
          opacity: 0.8;
        }
        100% {
          transform: scale(1);
          opacity: 1;
        }
      }

      /* Content Section Styles */
      .section-title {
        font-weight: bold;
        font-size: 1.5rem;
        text-align: center;
        margin: 20px 0;
      }
      .mission-text {
        text-align: justify;
        color: #555;
      }

      /* Feature Box Styles */
      .feature-box {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        transform: translateY(30px);
        opacity: 0;
        transition: transform 0.5s ease-out, opacity 0.5s ease-out;
      }
      .feature-box img {
        max-width: 60px;
        margin-bottom: 15px;
      }
      .feature-box.show {
        transform: translateY(0);
        opacity: 1;
      }

      /* Team Member Styles */
      .team-member {
        text-align: center;
        padding: 20px;
        transition: transform 0.3s ease-in-out;
      }
      .team-member:hover {
        transform: scale(1.1);
      }
      .team-member img {
        width: 200px;
        height: 250px;
        object-fit: cover;
        border-radius: 50%;
      }

      /* Testimonial Styles */
      .testimonial {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        opacity: 0;
        transform: scale(0.8);
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        margin-bottom: 20px;
      }
      .testimonial.show {
        opacity: 1;
        transform: scale(1);
      }

      /* Scroll-to-Top Button */
      .scroll-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #0056b3;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 50%;
        font-size: 18px;
        cursor: pointer;
        display: none;
      }

      /* Footer Styles */
      .footer {
        background: #0056b3;
        color: #fff;
        padding: 40px 0;
        text-align: center;
      }

      /* Responsive Styles */
      @media (max-width: 768px) {
        .feature-box img {
          max-width: 60px;
        }
        .feature-box h4 {
          font-size: 1rem;
        }
        .feature-box p {
          font-size: 1rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"
          >Career<span style="color: black;">.</span>Connect</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{route('home')}}">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-primary" href="">About Us</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-primary" href="javascript:void(0)">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{route('register')}}">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{route('login')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
      <h2>About Us</h2>
      <p>Empowering individuals with career-focused solutions.</p>
    </div>

    <!-- Content Section -->
    <div class="container content-section">
      <h3 class="section-title">What is Career Connect?</h3>
      <p class="text-center">
        Career Connect is a process where individuals, especially students,
        receive guidance on choosing the right educational and career paths. It
        helps students understand their skills, interests, and abilities, and
        aligns these traits with potential career options.
      </p>

      <h3 class="section-title">Our Mission</h3>
      <p class="mission-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book.
      </p>

      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('assets')}}/images/img3.png" class="img-fluid" alt="Career Guidance" />
        </div>
        <div class="col-md-6">
          <p class="mission-text">
            Digital Creation is an online presentation and sales platform that
            allows authors and artists to sell ebooks, audiobooks, and other
            digital downloads.
          </p>
        </div>
      </div>
    </div>

    <!-- Features Section -->
    <div class="container content-section">
      <h3 class="section-title">Our Features</h3>
      <div class="row">
        <div class="col-md-4">
          <div class="feature-box">
            <img src="{{asset('assets')}}/images/img2.png" alt="Learning" />
            <h4>Personalized Learning</h4>
            <p>
              Students practice at their own pace and accelerate their learning.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <img src="{{asset('assets')}}/images/img5.png" alt="Trusted" />
            <h4>Trusted Content</h4>
            <p>High-quality lessons covering multiple disciplines.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <img src="{{asset('assets')}}/images/img4.png" alt="Teachers" />
            <h4>Empowering Teachers</h4>
            <p>
              Helping educators identify and bridge gaps in student
              understanding.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container content-section">
      <h3 class="section-title">Testimonials</h3>
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial">
            <p>
              "Career.Connect changed my life. The personalized learning helped
              me land my dream job!"
            </p>
            <h5>- Maheen Jilani</h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <p>
              "The trusted content and resources provided by Career.Connect are
              unparalleled."
            </p>
            <h5>- Arshiq Waqar</h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <p>
              "I highly recommend Career.Connect to anyone looking to advance
              their career."
            </p>
            <h5>- Laiba Tahir</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll-to-Top Button -->
    <button
      class="scroll-to-top"
      onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    >
      &#8679;
    </button>

    <!-- Footer -->
    <div class="footer">
      <p>&copy; 2025 Career.Connect. All Rights Reserved.</p>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const featureBoxes = document.querySelectorAll(
          ".feature-box, .testimonial"
        );
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("show");
              }
            });
          },
          { threshold: 0.4 }
        );

        featureBoxes.forEach((box) => observer.observe(box));

        const scrollToTopBtn = document.querySelector(".scroll-to-top");
        window.addEventListener("scroll", () => {
          scrollToTopBtn.style.display =
            window.scrollY > 300 ? "block" : "none";
        });
      });
    </script>
  </body>
</html>