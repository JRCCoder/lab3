<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #e0c3fc, #8ec5fc); /* Gradient background */
      font-family: 'Raleway', sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }
    .container {
      max-width: 500px;
      padding: 20px;
      background-color: #ffffff; /* White background */
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
    .btn-primary {
      background-color: #007bff !important; /* Blue */
      border-color: #007bff !important;
      border-radius: 20px;
    }
    .btn-primary:hover {
      background-color: #0056b3 !important; /* Darker blue on hover */
      border-color: #0056b3 !important;
      box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
    }
    .text-danger {
      color: #dc3545; /* Bootstrap red */
    }
    h2 {
      font-family: 'Raleway', sans-serif;
      color: #007bff; /* Blue */
    }
    label {
      font-family: 'Raleway', sans-serif;
      color: #6c757d; /* Bootstrap gray */
    }
    input.form-control {
      border-color: #007bff; /* Blue border for inputs */
      border-radius: 20px;
    }
    input.form-control:focus {
      border-color: #0056b3; /* Darker blue border on focus */
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }
    a {
      color: #007bff; /* Blue */
    }
    a:hover {
      color: #0056b3; /* Darker blue on hover */
      text-decoration: none;
    }
  </style>
</head>
<body>

<div class="container">
  <form action="index.php" method="post" class="rounded">
    <h2 class="mb-4 text-center">Login</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="text-danger text-center"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    
    <div class="mb-3">
      <label for="username" class="form-label">User Name</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>
  </form>
  <div class="mt-3 text-center">
    <p class="mb-0">Not signed up yet? <a href="registrationform.php">Sign Up</a></p>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
