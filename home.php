<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffccff, #ccccff); /* Gradient background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #ffffff; /* White background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        h1 {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            color: #663399; /* Purple */
            text-align: center;
        }
        h3 a {
            text-decoration: none;
        }
        .btn-primary {
            background-color: #663399; /* Purple */
            border-color: #663399;
            border-radius: 20px;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #9966cc; /* Lighter purple on hover */
            border-color: #9966cc;
        }
        .text-center {
            margin-top: 20px;
        }
    </style>
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <div class="text-center">
            <h3><a href="logout.php" class="btn btn-primary btn-lg">Logout</a></h3>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
