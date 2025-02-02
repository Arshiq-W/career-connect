<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career.Connect</title>
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
    </style>
</head>
<body>

<div class="container-fluid mt-4">
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
            <div>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
            <div class="form-container">
                <h4>Let's level up your profile!</h4>
                <p>Filling out this form helps Career.Connect match you with job opportunities that best align with your skills.</p>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="autosave" checked>
                    <label class="form-check-label" for="autosave">This form auto-saves all your progress.</label>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">First name *</label>
                        <input type="text" class="form-control" placeholder="First name" value="{{auth()->user()->first_name??''}}" required>
                        <small class="message">First name is a required field, it can't be empty</small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last name *</label>
                        <input type="text" class="form-control" placeholder="Last name" value="{{auth()->user()->last_name??''}}" required>
                        <small class="message">Last name is a required field, it can't be empty</small>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Country of residence *</label>
                        <select class="form-select">
                            <option value="" selected>Country of residence</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                            <option value="Canada">Canada</option>
                        </select>
                        <small class="message">Please provide your country</small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">City of residence (Optional)</label>
                        <input type="text" class="form-control" placeholder="City of residence">
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Phone number *</label>
                        <div class="input-group">
                            <span class="input-group-text">+92</span>
                            <input type="tel" class="form-control phone-input" placeholder="Phone number">
                        </div>
                        <small class="message">Please provide your phone number</small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Expected annual earnings (Optional)</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Expected earnings">
                            <span class="input-group-text">PKR</span>
                        </div>
                    </div>
                </div>

                <div class="mt-3 note-box">
                    <p>The rate you provide here is just a reference point, you can update it later.</p>
                </div>

                <div class="mt-4 text-end">
                    <button class="btn btn-next" onclick="goToNextPage()">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateFields() {
        const fields = document.querySelectorAll(".form-control, .form-select, .phone-input");

        fields.forEach(field => {
            let message;
            if (field.classList.contains("phone-input")) {
                message = field.closest(".input-group").nextElementSibling;
            } else {
                message = field.closest(".col-md-6").querySelector(".message");
            }

            if (field.value.trim() === "" || (field.tagName === "SELECT" && field.value === "")) {
                if (message) {
                    message.style.color = "red";
                }
            } else {
                if (message) {
                    message.style.color = "black";
                }
            }
        });
    }

    // Attach event listeners to inputs and select dropdowns
    document.querySelectorAll(".form-control, .form-select, .phone-input").forEach(input => {
        input.addEventListener("input", validateFields);
    });

    // Initial validation on page load
    window.onload = validateFields;

    function goToNextPage() {
        window.location.href = 'education.html';
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>