<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career.Connect - Profile Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 900px;
            margin: 50px auto;
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
        .welcome-text {
            text-align: right;
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
        }
        .error-box {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            border-left: 5px solid #dc3545;
        }
        .section-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .edit-btn {
            border: 1px solid #007bff;
            background: transparent;
            color: #007bff;
            padding: 5px 15px;
            border-radius: 5px;
        }
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-back {
            border-radius: 5px;
            padding: 10px 20px;
            border: 1px solid #ccc;
            background-color: white;
        }
        .resume-btn {
            padding: 10px 20px;
            border: 1px solid #000;
            background-color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <h5 class="mb-3"><strong>Career.Connect</strong></h5>
                <div class="nav flex-column">
                    <div class="nav-item active text-primary">Basic Information <span class="text-danger"></span></div>
                    <div class="nav-item active text-primary">Education <span class="text-danger"></span></div>
                    <div class="nav-item active text-primary">Technical Skills <span class="text-danger"></span></div>
                    <div class="nav-item active text-primary">Profile Summary</div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="welcome-text">
                Welcome to Career.Connect
            </div>
            <div class="form-container">
                <div class="error-box mb-4">
                    <p>Please Recheck all required fields on your profile before proceeding. Identify any missing details flagged with exclamation marks in each section.</p>
                </div>

                <div class="section-box">
                    <div class="section-header">
                        <h5>Basic Information</h5>
                        <button class="edit-btn" onclick="window.location.href='{{route('dashboard',['key' => 'basic_info'])}}'">Edit Information</button>
                    </div>
                    <p><strong>●First Name: </strong>{{auth()->user()->first_name??''}} <strong>●Last Name: </strong>{{auth()->user()->last_name??''}}  <strong>●Country: </strong>{{auth()->user()->profile->country??''}} </p>
                    <!-- <p>City of residence <span class="text-danger">●</span> Phone number <span class="text-danger">●</span> Expected annual earnings</p> -->
                </div>

                <div class="section-box">
                    <div class="section-header">
                        <h5>Education</h5>
                        <button class="edit-btn" onclick="window.location.href='{{route('dashboard',['key' => 'education'])}}'">Edit Information</button>
                    </div>
                    @forelse(auth()->user()->userEducation as $education)
                        <p><strong>●Degree: </strong>{{$education->degree??''}} <strong>●Field of Study: </strong>{{$education->field_of_study??''}} <strong>●Start Year: </strong>{{$education->start_date??''}}</p>
                    @empty
                        <p>No education information available</p>
                    @endforelse
                </div>

                <div class="section-box">
                    <div class="section-header">
                        <h5>Technical Skills</h5>
                        <button class="edit-btn" onclick="window.location.href='{{route('dashboard',['key' => 'tech_skills'])}}'">Edit Information</button>
                    </div>
                    @forelse (auth()->user()->userSkill as $skill)
                        <p><strong>●Skill: </strong>{{$skill->skills??''}} <strong>●Experience: </strong>{{$skill->level??''}} <strong></p>
                        
                    @empty
                        <p>No technical skills information available</p>
                        
                    @endforelse
                    <!-- <p>Years of full-time work experience <span class="text-danger">●</span></p>
                    <p>Preferred Role <span class="text-danger">●</span></p>
                    <p>Skills</p> -->
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <a href="technicalskills.html" class="btn btn-back">Back</a>
                    <a href="{{route('profile_dashboard')}}" class="btn btn-submit" ><i class="bi bi-upload"></i> Submit profile</a>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function submitProfile() {
        // Add logic to validate and submit the profile
        window.location.href = 'home.html';
    }

    // Add event listener to the submit button
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.btn-submit').addEventListener('click', submitProfile);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>