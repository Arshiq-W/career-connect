<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career Connect - Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background-color: #f8f9fa;
      }

      /* Navbar Styles */
      .navbar {
        background-color: #007bff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
        color: #fff !important;
      }
      .navbar-nav .nav-link {
        color: #fff !important;
        font-size: 1rem;
        margin-left: 15px;
      }
      .navbar-nav .nav-link:hover {
        color: #f8f9fa !important;
        opacity: 0.8;
      }

      /* User Dropdown */
      .dropdown-toggle {
        cursor: pointer;
      }
      .dropdown-menu {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .dropdown-item {
        color: #333;
      }
      .dropdown-item:hover {
        background-color: #007bff;
        color: #fff;
      }

      /* Main Container */
      .main-container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      /* Header Section */
      .header {
        background-color: #007bff;
        color: #fff;
        padding: 40px 20px;
        border-radius: 10px 10px 0 0;
        text-align: center;
      }
      .header h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 10px;
      }
      .header p {
        font-size: 1.1rem;
        margin-bottom: 0;
      }

      /* Progress Bar */
      .progress-bar {
        margin: 20px 0;
        display: flex;
        gap: 10px;
        justify-content: center;
      }
      .progress-bar div {
        flex: 1;
        height: 10px;
        background-color: #e9ecef;
        border-radius: 5px;
      }
      .progress-bar .completed {
        background-color: #28a745;
      }

      /* Content Cards */
      .content {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        gap: 20px;
      }
      .content .card {
        flex: 1;
        padding: 20px;
        border: 1px solid #e9ecef;
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .content .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      }
      .card h2 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 10px;
      }
      .card p {
        font-size: 1rem;
        color: #666;
      }
      .card button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      .card button:hover {
        background-color: #0056b3;
      }

      /* Footer Section */
      .footer {
        margin-top: 40px;
        text-align: center;
      }
      .footer h2 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 20px;
      }
      .footer img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
      }

      /* About Section */
      .about-section {
        padding: 30px;
        background: #fff;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .about-section h4 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 15px;
      }
      .about-section p {
        font-size: 1rem;
        color: #666;
      }
      .about-section img {
        max-width: 100%;
        border-radius: 10px;
        margin-top: 20px;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .content {
          flex-direction: column;
        }
        .header h1 {
          font-size: 2rem;
        }
        .footer h2 {
          font-size: 1.5rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Career.Connect</a>
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
              <a class="nav-link" href="{{route('profile_dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('jobs')}}">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('quizes')}}">Quizzes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('career_profile')}}">Career Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="userDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                {{auth()->user()->name??''}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="userDropdown">
                <li>
                  <a class="dropdown-item" href="settings.html">Settings</a>
                </li>
                <li><a class="dropdown-item" href="1stpage.html">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Container -->
    <div class="main-container">
      <!-- Header -->
      <div class="header">
        <h1>Welcome, {{auth()->user()->name??''}}!</h1>
        <p>
          Thanks for joining Career Connect. To be eligible for jobs, you must
          complete the vetting process.
        </p>
      </div>

      <!-- Progress Bar -->
      <div class="progress-bar">
        <div class="completed"></div>
        <div class="completed"></div>
        <div></div>
      </div>

      <!-- Content Cards -->
      <div class="content">
        <div class="card">
          <h2>We've found jobs for:</h2>
          <p><b class="font-size-30">200+</b> developers from around the world.</p>
        </div>
        <div class="card">
          <h2>Explore Jobs</h2>
          <button onclick="location.href='javascript:void(0)'">View Jobs</button>
        </div>
      </div>

      <!-- Footer -->
      <div class="footer">
        <h2>Learn more about Career Connect</h2>
        <img
          src="https://www.communityservicesproject.org/wp-content/uploads/2018/04/Job-Placement.png"
          alt="Illustration"
        />
      </div>
    </div>

    <!-- About Sections -->
    <div class="container my-5 bg-light p-4 rounded">
      <h4>
        Hundreds of companies trust Career Connect to hire remote software
        engineers:
      </h4>
      <p>LOGOS</p>
    </div>

    <div class="container about-section">
      <h4>Why join Career.connect?</h4>
      <p>
        <br />
        - Earn a better pay compared to local companies in your city. <br />
        - Complete your vetting process once and be eligible for life. <br />
        - Get paid monthly to your Deal account and transfer directly to your
        bank account.
      </p>
    </div>

    <div class="container about-section">
      <h4>About us</h4>
      <p>
        Based in Palo Alto, California, we connect exceptional software
        developers in other parts of the world to American companies hiring for
        remote positions. <br /><br />
        Career.Connect is backed by well-known investors like Facebook’s first CTO (Adam
        D'Angelo), executives from Google, Facebook, Twitter, and Founders Fund
        (investors in Facebook, Tesla, Asana, etc).
      </p>
      <img src="{{asset('assets')}}/images/img6.png" alt="About Us" />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>