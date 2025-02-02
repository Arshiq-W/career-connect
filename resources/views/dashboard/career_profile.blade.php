<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career.Connect - Career Profile</title>
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
        .profile-section {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .btn-save {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-save:hover {
            background-color: #0056b3;
        }
        .accordion-item {
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 15px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .accordion-header button {
            font-weight: bold;
        }
        .accordion-body {
            padding: 20px;
        }
        .btn-edit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .btn-edit:hover {
            background-color: #0056b3;
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

<div class="container mt-4">
    <div class="profile-section">
        <h3>Finalize Career.Connect Profile</h3>

        <div class="accordion" id="profileAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalInfoCollapse">
                        Personal Information
                    </button>
                </h2>
                <div id="personalInfoCollapse" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#personalInfoModal">Edit Information</button>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sideProjectsCollapse">
                        Side Projects
                    </button>
                </h2>
                <div id="sideProjectsCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#sideProjectsModal">Edit Information</button>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#additionalInfoCollapse">
                        Additional Information
                    </button>
                </h2>
                <div id="additionalInfoCollapse" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#addCertificationsModal">Add Certifications</button>
                    </div>
                </div>
            </div>

        <div class="mt-4 d-flex justify-content-between">
            <button class="btn btn-save">Save Career.Connect Profile</button>
        </div>
    </div>
</div>

<div class="modal fade" id="personalInfoModal" tabindex="-1" aria-labelledby="personalInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="personalInfoModalLabel">Personal Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Let’s start and get to know you better!!! 😊</p>

                <div class="text-center mb-3">
                    <img src="https://via.placeholder.com/80" alt="Profile Photo" class="rounded-circle">
                    <button class="btn btn-outline-secondary mt-2">Upload profile photo</button>
                </div>

                <div class="mb-3">
                    <label for="github" class="form-label">Github:</label>
                    <input type="text" id="github" class="form-control" placeholder="github.com/">
                </div>

                <div class="mb-3">
                    <label for="linkedin" class="form-label">LinkedIn:</label>
                    <input type="text" id="linkedin" class="form-control" placeholder="linkedin.com/in/">
                </div>

                <div class="mb-3">
                    <label for="skills" class="form-label">Tell us about your skills, strengths, work style, and personality:</label>
                    <textarea id="skills" class="form-control" rows="4" placeholder="- Identify yourself professionally
- Describe the tech skills and soft skills you want to highlight
- Mention your personal strengths with supporting examples
- Outline your career goals"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='careerprofile.html'">Update Information</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Side Projects -->
<div class="modal fade" id="sideProjectsModal" tabindex="-1" aria-labelledby="sideProjectsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sideProjectsModalLabel">Side Projects</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addSideProjectModal">
                    <i class="bi bi-plus"></i> Add side project
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='careerprofile.html'">Update Information</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Add Side Project -->
<div class="modal fade" id="addSideProjectModal" tabindex="-1" aria-labelledby="addSideProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Side Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Project Name:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">URL or GitHub Repository:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Project Description:</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tech Stacks:</label>
                    <input type="text" class="form-control" placeholder="Technologies and tools used">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='careerprofile.html'">Update Information</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Add Certifications -->
<div class="modal fade" id="addCertificationsModal" tabindex="-1" aria-labelledby="addCertificationsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCertificationsModalLabel">Certifications & Awards</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Certifications show your interest in the subject and prove that you have a specific expertise, which is issued by an authorized organization. Show the U.S. recruiters your unique traits and qualifications.</p>
                <div class="mb-3">
                    <input type="checkbox" id="addCertification">
                    <label for="addCertification" class="fw-bold"> Add Certifications </label>
                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                    <label class="form-label">Certification or award:</label>
                    <input type="text" class="form-control" placeholder="Enter min 3 chars to add/search for certifications">
                </div>
                <div class="mb-3">
                    <label class="form-label">Year:</label>
                    <select class="form-control">
                        <option>Year</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='careerprofile.html'">Update Information</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>