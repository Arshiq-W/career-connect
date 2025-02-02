<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes - Career.Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
          font-family: 'Times New Roman', Times, serif;
          background-color: #f8f9fa;
        }
        .btn-start {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-start:hover {
            background-color: #0056b3;
        }
        .card {
            position: relative;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .quiz-status {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        
        .status-passed {
            background-color: #28a745;
            color: white;
        }
        
        .status-failed {
            background-color: #dc3545;
            color: white;
        }
        
        .btn-start:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
        }
        
        .retry-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
        }
        .recommended-courses {
            color: #007bff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-top: 8px;
            font-size: 13px;
        }

        .recommended-courses:hover {
            text-decoration: underline;
        }

        .course-link {
            display: block;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            color: #212529;
            text-decoration: none;
        }

        .course-link:hover {
            background-color: #f8f9fa;
        }

        .course-link i {
            color: #ff0000;
            margin-right: 8px;
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
            <div>
                <span>Next step:</span>
                <button class="btn btn-outline-light btn-sm " type="button">
                    Take one of the core quizzes for your role
                </button>
            </div>
            <div class="d-flex align-items-center">
                <span class="me-2">Your Progress:</span>
                <button class="btn btn-light btn-sm me-2">Basic Info</button>
                <button class="btn btn-light btn-sm me-2">Assessment</button>
                <button class="btn btn-outline-light btn-sm me-2" onclick="location.href='portfolio.html'">Portfolio</button>
                <button class="btn btn-outline-light btn-sm me-2" onclick="location.href='gethired.html'">Get Hired</button>
            </div>
        </div>
    </div>

<div class="container mt-4">
    <h2>Quizzes</h2>
    <div class="profile-section">
        <h5>Introduction to quizzes</h5>
        <p><strong>What are quizzes?</strong><br>
            Turing quizzes are multiple-choice questionnaires designed to assess your knowledge of specific tech skills.</p>

        <p><strong>What you should do next?</strong><br>
            There are multiple ways to progress.</p>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>• Required:</strong> Take core quizzes</p>
                </div>
                <div class="col-md-6">
                    <p><strong>• Optional:</strong> Take Work Experience Survey</p>
                </div>
                <div class="col-md-6">
                    <p><strong>• Optional:</strong> Take additional quizzes</p>
                </div>
                <div class="col-md-6">
                    <p><strong>• Required:</strong> Move on to Challenges</p>
                </div>
            </div>
    </div>

<div class="container mt-4">
    <h4 class="mt-4">Core quizzes</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div id="reactStatus" class="quiz-status"></div>
                <img src="https://cdn-icons-png.flaticon.com/128/1126/1126012.png" width="50">
                <h6 class="mt-2">ReactJS</h6>
                <p>15 min</p>
                <button class="btn-start" id="reactBtn" onclick="openModal('ReactJS', 'https://cdn-icons-png.flaticon.com/128/1126/1126012.png')">Start Quiz</button>
                <p id="reactRetryMessage" class="retry-message"></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div id="typeScriptStatus" class="quiz-status"></div>
                <img src="https://cdn-icons-png.flaticon.com/128/919/919832.png" width="50">
                <h6 class="mt-2">TypeScript</h6>
                <p>15 min</p>
                <button class="btn-start" id="typeScriptBtn" onclick="openModal('TypeScript', 'https://cdn-icons-png.flaticon.com/128/919/919832.png')">Start Quiz</button>
                <p id="typeScriptRetryMessage" class="retry-message"></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div id="angularStatus" class="quiz-status"></div>
                <img src="https://cdn-icons-png.flaticon.com/128/919/919831.png" width="50">
                <h6 class="mt-2">Angular</h6>
                <p>15 min</p>
                <button class="btn-start" id="angularBtn" onclick="openModal('Angular', 'https://cdn-icons-png.flaticon.com/128/919/919831.png')">Start Quiz</button>
                <p id="angularRetryMessage" class="retry-message"></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div id="gitStatus" class="quiz-status"></div>
                <img src="https://cdn-icons-png.flaticon.com/128/5968/5968672.png" width="50">
                <h6 class="mt-2">Git</h6>
                <p>15 min</p>
                <button class="btn-start" id="gitBtn" onclick="openModal('Git', 'https://cdn-icons-png.flaticon.com/128/5968/5968672.png')">Start Quiz</button>
                <p id="gitRetryMessage" class="retry-message"></p>
            </div>
        </div>
    </div>
</div>


    <!-- Modal (Popup) for Quiz Rules -->
    <div class="modal fade" id="quizModal" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <img id="quizIcon" width="30"> 
                        <span id="quizTitle"></span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>This quiz is your next step towards <span id="quizDescription"></span> positions in Silicon Valley, and other top U.S companies.</p>
                    <h6><strong>Fair Assessment Policy</strong></h6>
                    <p>To ensure fairness, we track browser activity and submission patterns to detect any signs of cheating during the test attempt.</p>
                    <h6><strong>During the test attempt, DO NOT:</strong></h6>
                    <ul>
                        <li>Open new browser tabs or windows</li>
                        <li>Capture screenshots</li>
                        <li>Conduct any online searches for answers</li>
                        <li>Utilize any tools to answer questions (such as ChatGPT, browser plugins, etc.)</li>
                    </ul>
                    <div class="alert alert-warning">
                        <strong>⚠ Violation of this policy can result in a temporary or permanent ban from the platform.</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small class="text-muted">⏳ Max. Time: <strong>15 min</strong></small>
                        <button class="btn btn-primary" onclick="startQuiz()">Accept & Start Quiz</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add this new modal after the existing quiz modal -->
    <div class="modal fade" id="coursesModal" tabindex="-1" aria-labelledby="coursesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <img id="courseIcon" width="30"> 
                        Recommended <span id="courseTitle"></span> Courses
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="courseLinks">
                    <!-- Course links will be populated dynamically -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add this course data object
        const courseResources = {
            'ReactJS': [
                { title: 'React JS Full Course for Beginners', url: 'https://www.youtube.com/watch?v=RVFAyFWO4go' },
                { title: 'React Tutorial for Beginners', url: 'https://www.youtube.com/watch?v=SqcY0GlETPk' },
                { title: 'React JS Crash Course', url: 'https://www.youtube.com/watch?v=w7ejDZ8SWv8' }
            ],
            'TypeScript': [
                { title: 'TypeScript Tutorial for Beginners', url: 'https://www.youtube.com/watch?v=30LWjhZzg50' },
                { title: 'TypeScript Full Course for Beginners', url: 'https://www.youtube.com/watch?v=gp5H0Vw39yw' },
                { title: 'TypeScript Crash Course', url: 'https://www.youtube.com/watch?v=BCg4U1FzODs' }
            ],
            'Angular': [
                { title: 'Angular Tutorial for Beginners', url: 'https://www.youtube.com/watch?v=3qBXWUpoPHo' },
                { title: 'Angular Crash Course', url: 'https://www.youtube.com/watch?v=3dHNOWTI7H8' },
                { title: 'Angular Full Course for Beginners', url: 'https://www.youtube.com/watch?v=3qBXWUpoPHo' }
            ],
            'Git': [
                { title: 'Git and GitHub for Beginners', url: 'https://www.youtube.com/watch?v=RGOj5yH7evk' },
                { title: 'Git Tutorial for Beginners', url: 'https://www.youtube.com/watch?v=8JJ101D3knE' },
                { title: 'Git Crash Course', url: 'https://www.youtube.com/watch?v=SWYqp7iY_Tc' }
            ]
        };

        function openCoursesModal(courseName, icon) {
            document.getElementById("courseIcon").src = icon;
            document.getElementById("courseTitle").textContent = courseName;
            
            // Populate course links
            const courseLinksDiv = document.getElementById("courseLinks");
            courseLinksDiv.innerHTML = ''; // Clear existing content
            
            courseResources[courseName].forEach(course => {
                const link = document.createElement('a');
                link.href = course.url;
                link.target = "_blank";
                link.className = 'course-link';
                link.innerHTML = `
                    <i class="fab fa-youtube"></i>
                    ${course.title}
                `;
                courseLinksDiv.appendChild(link);
            });

            var coursesModal = new bootstrap.Modal(document.getElementById("coursesModal"));
            coursesModal.show();
        }

        function checkQuizStatus() {
            const quizScores = JSON.parse(localStorage.getItem('quizScores')) || {};
            const courses = [
                { name: 'ReactJS', btnId: 'reactBtn', statusId: 'reactStatus', retryMsgId: 'reactRetryMessage', icon: 'https://cdn-icons-png.flaticon.com/128/1126/1126012.png' },
                { name: 'TypeScript', btnId: 'typeScriptBtn', statusId: 'typeScriptStatus', retryMsgId: 'typeScriptRetryMessage', icon: 'https://cdn-icons-png.flaticon.com/128/919/919832.png' },
                { name: 'Angular', btnId: 'angularBtn', statusId: 'angularStatus', retryMsgId: 'angularRetryMessage', icon: 'https://cdn-icons-png.flaticon.com/128/919/919831.png' },
                { name: 'Git', btnId: 'gitBtn', statusId: 'gitStatus', retryMsgId: 'gitRetryMessage', icon: 'https://cdn-icons-png.flaticon.com/128/5968/5968672.png' }
            ];

            courses.forEach(course => {
                const quizResult = quizScores[course.name];
                const button = document.getElementById(course.btnId);
                const statusDiv = document.getElementById(course.statusId);
                const retryMsg = document.getElementById(course.retryMsgId);

                if (quizResult) {
                    const score = quizResult.score;
                    const attemptDate = new Date(quizResult.timestamp);
                    const daysSinceAttempt = Math.floor((new Date() - attemptDate) / (1000 * 60 * 60 * 24));

                    if (score >= 10) {
                        statusDiv.textContent = "PASSED";
                        statusDiv.classList.add('status-passed');
                        button.disabled = true;
                        button.textContent = "Completed";
                        retryMsg.textContent = "";
                    } else {
                        statusDiv.textContent = "FAILED";
                        statusDiv.classList.add('status-failed');
                        
                        if (daysSinceAttempt < 45) {
                            button.disabled = true;
                            const daysLeft = 45 - daysSinceAttempt;
                            retryMsg.innerHTML = `
                                Retake available in ${daysLeft} days
                                <div class="recommended-courses" onclick="openCoursesModal('${course.name}', '${course.icon}')">
                                    Recommended Courses <i class="fas fa-external-link-alt"></i>
                                </div>
                            `;
                        } else {
                            button.disabled = false;
                            retryMsg.textContent = "";
                        }
                    }
                }
            });
        }

        function openModal(title, icon) {
            document.getElementById("quizTitle").innerText = title;
            document.getElementById("quizIcon").src = icon;
            document.getElementById("quizDescription").innerText = title;
            var quizModal = new bootstrap.Modal(document.getElementById("quizModal"));
            quizModal.show();
        }

        function startQuiz() {
            const quizTitle = document.getElementById("quizTitle").innerText;
            window.location.href = `quizquestion.html?quiz=${encodeURIComponent(quizTitle)}`;
        }

        // Check quiz status when page loads
        window.onload = function() {
            checkQuizStatus();
        }
    </script>

    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>