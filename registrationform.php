<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<style>
  body {
    background-color: #f0f0f0; /* Light gray background */
    font-family: Arial, sans-serif;
  }
  .container {
    margin-top: 50px;
  }
  .shadow-lg {
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
  }
  .form-label {
    color: #6c757d; /* Bootstrap gray */
  }
  .form-control {
    border-radius: 10px; /* Rounded corners */
    border-color: #6c757d; /* Gray border */
  }
  .form-control:focus {
    border-color: #8a2be2; /* Purple border on focus */
    box-shadow: 0 0 0 0.2rem rgba(138, 43, 226, 0.25);
  }
  .btn-primary {
    background-color: #8a2be2; /* Purple */
    border-color: #8a2be2;
    border-radius: 10px;
  }
  .btn-primary:hover {
    background-color: #9370db; /* Lighter purple on hover */
    border-color: #9370db;
  }
  a {
    color: #8a2be2; /* Purple */
  }
  a:hover {
    color: #9370db; /* Lighter purple on hover */
    text-decoration: none;
  }
</style>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <br>
      <?php if(isset($_GET['error'])) { ?>
      <div class="alert alert-danger text-center">
        <?php echo $_GET['error']; ?>
      </div>
      <?php } ?>
      <form class="shadow-lg p-3 mb-5 bg-white rounded" action="register.php" method="POST">
        <h2 class="text-center mb-4">Register</h2>
        <div class="mb-3">
          <label for="Firstname" class="form-label">Firstname:</label>
          <input type="text" id="Firstname" name="Firstname" class="form-control" placeholder="Firstname" required>
        </div>
        <div class="mb-3">
          <label for="Middlename" class="form-label">Middlename:</label>
          <input type="text" id="Middlename" name="Middlename" class="form-control" placeholder="Middlename" required>
        </div>
        <div class="mb-3">
          <label for="Lastname" class="form-label">Lastname:</label>
          <input type="text" id="Lastname" name="Lastname" class="form-control" placeholder="Lastname" required>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username:</label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password:</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="mb-3">
          <label for="confirm_password" class="form-label">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
        </div>
        <button type="submit" name="register_btn" class="btn btn-primary w-100">Register</button>
      </form>
      <div class="text-center mt-3">
        <a href="loginform.php">Click to login</a>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
