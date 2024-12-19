<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootsrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <title>Bootstarp</title>
</head>
<body>
<form>
<!--<div class="mb-3">
    <label for="examplename" class="form-label">Name</label>
    <input type="name" class="form-control" id="examplename" aria-describedby="namelHelp">
    <div id="namelHelp" class="form-text">Please fill this input with name.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>-->
<div class="signup">
    <form action="register.php" class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required autofocus>
        <label for="inputEmail" class="sr-only">Last Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Last Name" name="lastname" required autofocus>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
        <label for="inputEmail" class="sr-only">Password</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Password" name="password" required autofocus>

        <button class="btn btn-sm btn-danger btn-block" type="submit" name="submit">Sign Up</button>

        <small>Already have account? <a href="login.php">Log In</a></small>

        <p class="mt-5 mb-2 text-muted">Digital School</p>
</form>
</div>
</form>
</body>
</html>