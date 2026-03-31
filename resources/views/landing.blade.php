<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
            color: white;
        }
        .features {
            padding: 50px 0;
        }
    </style>
</head>
<body>
    <header class="hero">
        <div class="container">
            <h1 class="display-3">Welcome to Laundry App</h1>
            <p class="lead">Your best solution for managing laundry services efficiently.</p>
            <a href="{{ route('login') }}" class="btn btn-light btn-lg">Go to Login</a>
        </div>
    </header>

    <section class="features">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h3>Efficient</h3>
                    <p>Manage your transactions and customers with ease.</p>
                </div>
                <div class="col-md-4">
                    <h3>Reliable</h3>
                    <p>Always available and ready to serve your business needs.</p>
                </div>
                <div class="col-md-4">
                    <h3>Secure</h3>
                    <p>Your data is safe with our robust authentication system.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <p>&copy; {{ date('Y') }} Laundry App. All rights reserved.</p>
    </footer>
</body>
</html>
