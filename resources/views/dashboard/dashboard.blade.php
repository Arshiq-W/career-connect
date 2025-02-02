<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career.Connect - Stepper Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-right: 20px;
        }
        .sidebar .nav-item {
            margin-bottom: 15px;
            font-weight: bold;
        }
        .sidebar .nav-item.active {
            color: #007bff;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 900px;
            margin: 50px auto;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-next {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-prev {
            background-color: #6c757d;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .welcome-text {
            text-align: right;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
        }
        .note-box {
            background-color: #e9f5ff;
            border-left: 5px solid #007bff;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
        }
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
        label {
            font-weight: bold;
        }
        .btn-next:hover, .btn-prev:hover {
            opacity: 0.9;
        }
        .mb-3 input, .mb-3 select {
            padding: 10px;
        }
        .text-danger {
            font-size: 0.9rem;
        }
        .skill-badge {
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            margin: 5px;
            display: inline-block;
        }
        .skill-badge.selected {
            background-color: #007bff;
            color: white;
        }
        .counter {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }
        .counter input {
            width: 50px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="row">
<div class="col-md-3">
    <div class="sidebar">
        <h5 class="mb-3"><strong>Career.Connect</strong></h5>
        <div class="nav flex-column">
            <div class="nav-item active">Basic Information</div>
            <div class="nav-item text-danger">Education <span class="text-danger">●</span></div>
            <div class="nav-item text-danger">Technical Skills <span class="text-danger">●</span></div>
            <div class="nav-item text-danger">Profile Summary <span class="text-danger">●</span></div>
        </div>
    </div>
</div>

<div class="col-md-9">
    <div class="welcome-text">
        Welcome to Career.Connect
</div>

    <div class="col-md-9">
        <div class="form-container">
            <form id="stepperForm" action="">
                <!-- Step 1: Basic Information -->
                <div class="step active" id="step1">
                    <h4>Basic Information</h4>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name *</label>
                        <input type="text" id="firstName" name="firstName" value="{{auth()->user()->first_name??''}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" value="{{auth()->user()->last_name??''}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country of Residence *</label>
                        <select id="country" name="country" class="form-select" required>
                            <option value="">Select Country</option>
                            @forelse ($countries as $country)
                                <option value="{{$country->id}}">{{$country->country??''}}</option>
                            @empty
                            <option value="">No Country Available</option>
                            @endforelse
                        </select>
                    </div>
                    <button type="button" class="btn btn-next">Next</button>
                </div>

                <!-- Step 2: Education -->
                <div class="step" id="step2">
                    <h4>Education</h4>
                    <div class="mb-3">
                        <label for="university" class="form-label">University / School *</label>
                        <input type="text" id="university" name="university" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="degree" class="form-label">Degree *</label>
                        <select id="degree" name="degree" class="form-select" required>
                            <option value="">Select Degree</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Bachelors">Bachelors</option>
                            <option value="Masters">Masters</option>
                            <option value="PhD">PhD</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-prev">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>

                <!-- Step 3: Technical Skills -->
                <div class="step" id="step3">
                    <h4>Technical Skills</h4>
                    <div class="mb-3">
                        <label for="experience" class="form-label">Years of Full-time Work Experience *</label>
                        <select id="experience" name="experience" class="form-select" required>
                            <option value="">Select experience</option>
                            <option value="0-1">0-1 years</option>
                            <option value="1-3">1-3 years</option>
                            <option value="3-5">3-5 years</option>
                            <option value="5+">5+ years</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Preferred Role *</label>
                        <select id="role" name="role" class="form-select" required>
                            <option value="">Select a role</option>
                            <option value="frontend">Web Frontend</option>
                            <option value="backend">Backend Developer</option>
                            <option value="fullstack">Full Stack Developer</option>
                        </select>
                    </div>
                    <div id="skillsSection" class="mt-4 d-none">
                    <h4>Skills *</h4>
                    <p>Select the skills relevant to your job interests.</p>

                    <div id="skillsList">
                        <!-- Skills will be dynamically loaded here -->
                    </div>
                </div>

                <div id="selectedSkills" class="mt-4"></div>
                    <button type="button" class="btn btn-prev">Previous</button>
                    <button type="submit" class="btn btn-next">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script>
     const skillsData = {
        frontend: ["JavaScript", "HTML/CSS", "React", "Angular", "Vue.js"],
        backend: ["Node.js", "Python", "Django", "Ruby on Rails", "Express.js"],
        fullstack: ["JavaScript", "React", "Node.js", "MongoDB", "GraphQL"]
    };

    // Event listener for role selection
    document.getElementById('role').addEventListener('change', function() {
        let selectedRole = this.value;
        let skillsSection = document.getElementById('skillsSection');
        let skillsList = document.getElementById('skillsList');

        skillsList.innerHTML = ''; // Clear previous skills

        if (selectedRole && skillsData[selectedRole]) {
            skillsSection.classList.remove('d-none');
            skillsData[selectedRole].forEach(skill => {
                let skillElement = document.createElement('span');
                skillElement.classList.add('skill-badge');
                skillElement.textContent = skill;
                skillElement.setAttribute('onclick', `selectSkill('${skill}')`);
                skillsList.appendChild(skillElement);
            });
        } else {
            skillsSection.classList.add('d-none');
            document.getElementById('selectedSkills').innerHTML = '';
        }
    });

    // Function to handle skill selection
    function selectSkill(skill) {
        let skillElement = document.querySelector(`.skill-badge[onclick="selectSkill('${skill}')"]`);
        if (skillElement.classList.contains('selected')) {
            skillElement.classList.remove('selected');
            document.getElementById(`skill-${skill}`).remove();
        } else {
            skillElement.classList.add('selected');
            addSkillCounter(skill);
        }
    }

    // Add skill counter with range input
    function addSkillCounter(skill) {
        let selectedSkillsDiv = document.getElementById('selectedSkills');
        let skillHTML = `
            <div class="counter mt-2" id="skill-${skill}">
                <span>${skill}</span>
                <input type="range" id="counter-${skill}" min="1" max="20" value="1" onchange="updateCounter('${skill}')">
                <span id="value-${skill}">1 year</span>
                <button class="btn btn-danger btn-sm" onclick="removeSkill('${skill}')">X</button>
            </div>
        `;
        selectedSkillsDiv.insertAdjacentHTML('beforeend', skillHTML);
    }

    // Update the skill counter display
    function updateCounter(skill) {
        let counter = document.getElementById(`counter-${skill}`);
        document.getElementById(`value-${skill}`).innerText = `${counter.value} year${counter.value > 1 ? 's' : ''}`;
    }

    // Remove skill selection
    function removeSkill(skill) {
        document.getElementById(`skill-${skill}`).remove();
        let skillElement = document.querySelector(`.skill-badge[onclick="selectSkill('${skill}')"]`);
        skillElement.classList.remove('selected');
    }
</script>
<script>
    let currentStep = 0;
    const steps = $(".step");

    function showStep(stepIndex) {
        steps.removeClass("active");
        steps.eq(stepIndex).addClass("active");
    }

    function validateCurrentStep() {
        const validator = $("#stepperForm").validate();
        return validator.form();
    }

    $(".btn-next").click(function () {
        if (validateCurrentStep()) {
            currentStep++;
            if (currentStep >= steps.length) {
                currentStep = steps.length - 1;
            }
            showStep(currentStep);
        }
    });

    $(".btn-prev").click(function () {
        currentStep--;
        if (currentStep < 0) {
            currentStep = 0;
        }
        showStep(currentStep);
    });

    $("#stepperForm").validate({
        rules: {
            firstName: "required",
            lastName: "required",
            country: "required",
            university: "required",
            degree: "required",
            experience: "required",
            role: "required"
        },
        messages: {
            firstName: "Please enter your first name",
            lastName: "Please enter your last name",
            country: "Please select a country",
            university: "Please enter your university/school name",
            degree: "Please select a degree",
            experience: "Please select your work experience",
            role: "Please select your preferred role"
        },
        errorElement: "div",
        errorClass: "text-danger mt-1"
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>