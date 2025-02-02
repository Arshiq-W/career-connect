<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career.Connect - Jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .nav-item .active {
            color: #007bff !important;
            font-weight: bold;
        }
        .job-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-apply {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-apply:hover {
            background-color: #0056b3;
        }
        .skills-badge {
            background-color: #f1f1f1;
            padding: 5px 10px;
            border-radius: 20px;
            margin-right: 5px;
            font-size: 14px;
        }
        .not-interested {
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }
        .not-interested:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Career.Connect</a>
    <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-primary" href="{{route('profile_dashboard')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link text-primary" href="{{route('jobs')}}">Jobs</a></li>
            <li class="nav-item"><a class="nav-link text-primary" href="{{route('quizes')}}">Quizzes</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="#">Challenges</a></li> -->
            <li class="nav-item"><a class="nav-link text-primary" href="{{route('career_profile')}}">Career Profile</a></li>
        </ul>
</nav>
    <div class="container-fluid bg-primary text-white p-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="ms-3">
                <span class="me-3">Available for Jobs</span>
    
                <!-- Dropdown Button -->
                <div class="dropdown d-inline">
                    <span class="dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                        maheen <i class="bi bi-chevron-down"></i>
                    </span>
    
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                        <li><a class="dropdown-item" href="1stpage.html">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    
<div class="container mt-5">
    <div class="job-card">
        <h4>Recommended Jobs</h4>
        <p>Find a selection of jobs relevant to your skills. These are roles expected to be filled soon. Candidates who complete the technical assessment and meet the role's hiring criteria can expect receiving an interview invitation from Career.Connect.</p>
        
        <div class="mt-4 p-3 border rounded bg-light">
            <h5>Frontend Developer</h5>
            <p><strong>Required Skills:</strong> 
                <span class="skills-badge">Critical Thinking</span>
                <span class="skills-badge">HTML/CSS</span>
                <span class="skills-badge">JavaScript</span>
            </p>
            <p class="text-muted">Job Id: PBJ_8P7T-jfc</p>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button class="btn btn-outline-secondary" id="viewJobBtn">View job description</button>
                    <!-- <button class="btn btn-apply ms-2">Apply Now</button> -->
                </div>
                <a href="#" class="not-interested">I'm not interested in this job</a>
            </div>
        </div>
    </div>
</div>

<!-- Job Description Modal -->
<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobModalLabel">JOB DESCRIPTION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5><strong>Job Title:</strong> Frontend Developer (ServiceNow)</h5>
                <p><strong>Company Overview:</strong> NASDAQ-listed company at the forefront of the software industry...</p>
                
                <h6><strong>Job Responsibilities:</strong></h6>
                <ul>
                    <li>Develop and maintain modular, scalable front-end code using ServiceNow platform.</li>
                    <li>Collaborate closely with cross-functional teams and external partners.</li>
                    <li>Create responsive and optimized UI to deliver superior user experience.</li>
                    <li>Solve complex technical challenges related to front-end development.</li>
                </ul>

                <h6><strong>Required Skills:</strong></h6>
                <ul>
                    <li>1-5 years of experience as a Frontend Developer, specifically with ServiceNow.</li>
                    <li>Proficiency in HTML, CSS, and JavaScript.</li>
                    <li>Strong problem-solving and effective communication skills.</li>
                    <li>Proficient English communication skills, both written and verbal.</li>
                </ul>

                <h6><strong>Offer Details:</strong></h6>
                <ul>
                    <li>Full-time dedication (40 hours/week)</li>
                    <li>Remote work</li>
                    <li>Required: 30-hour overlap with CST</li>
                </ul>

                <h6><strong>Hiring Process:</strong></h6>
                <ul>
                    <li>Coding challenge</li>
                    <li>Live task/interview</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-apply">Apply Now</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Function to handle the "View job description" button click
    document.getElementById('viewJobBtn').addEventListener('click', function () {
        var jobModal = new bootstrap.Modal(document.getElementById('jobModal'));
        jobModal.show();
    });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>