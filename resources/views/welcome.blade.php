<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel AJAX Auth</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind CSS (Add your own styles or tweak as necessary) -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f9fafb;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .btn {
            background-color: #3b82f6;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #2563eb;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #d1d5db;
        }
        .input-field:focus {
            outline: none;
            border-color: #3b82f6;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
        .text-sm {
            font-size: 14px;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <div class="form-container">
            <h2 class="text-xl font-semibold mb-4 text-center">Login</h2>
            <form id="ajaxLoginForm">
                <div>
                    <label for="loginEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="loginEmail" name="email" class="input-field" placeholder="Enter your email" required>
                </div>
                <div class="mt-4">
                    <label for="loginPassword" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="loginPassword" name="password" class="input-field" placeholder="Enter your password" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn w-full">Login</button>
                </div>
            </form>
            <div id="loginError" class="error-message text-sm mt-2"></div>
        </div>

        <!-- Registration Form -->
        <div class="form-container">
            <h2 class="text-xl font-semibold mb-4 text-center">Register</h2>
            <form id="ajaxRegisterForm">
                <div>
                    <label for="registerName" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="registerName" name="name" class="input-field" placeholder="Enter your name" required>
                </div>
                <div class="mt-4">
                    <label for="registerEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="registerEmail" name="email" class="input-field" placeholder="Enter your email" required>
                </div>
                <div class="mt-4">
                    <label for="registerPassword" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="registerPassword" name="password" class="input-field" placeholder="Enter your password" required>
                </div>
                <div class="mt-4">
                    <label for="registerPasswordConfirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="registerPasswordConfirmation" name="password_confirmation" class="input-field" placeholder="Confirm your password" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn w-full">Register</button>
                </div>
            </form>
            <div id="registerError" class="error-message text-sm mt-2"></div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- AJAX Scripts -->
    <script>
        $(document).ready(function () {
            // CSRF token setup for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Handle Login Form Submission
            $('#ajaxLoginForm').on('submit', function (e) {
                e.preventDefault(); // Prevent form from submitting normally

                // Collect login form data
                var formData = {
                    email: $('#loginEmail').val(),
                    password: $('#loginPassword').val()
                };

                // Send AJAX POST request for login
                $.ajax({
                    url: '{{ route("login") }}',
                    type: 'POST',
                    data: formData,
                    success: function () {
                        // Redirect to dashboard on success
                        window.location.href = '/dashboard';
                    },
                    error: function (xhr) {
                        // Display login errors
                        $('#loginError').html('Login failed. Please check your credentials.');
                    }
                });
            });

            // Handle Registration Form Submission
            $('#ajaxRegisterForm').on('submit', function (e) {
                e.preventDefault(); // Prevent form from submitting normally

                // Collect registration form data
                var formData = {
                    name: $('#registerName').val(),
                    email: $('#registerEmail').val(),
                    password: $('#registerPassword').val(),
                    password_confirmation: $('#registerPasswordConfirmation').val()
                };

                // Send AJAX POST request for registration
                $.ajax({
                    url: '{{ route("register") }}',
                    type: 'POST',
                    data: formData,
                    success: function () {
                        // Redirect to dashboard on success
                        window.location.href = '/dashboard';
                    },
                    error: function (xhr) {
                        // Display registration errors
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = '';

                        for (var key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                errorMessage += errors[key] + '<br>';
                            }
                        }

                        $('#registerError').html(errorMessage);
                    }
                });
            });
        });
    </script>
</body>
</html>

