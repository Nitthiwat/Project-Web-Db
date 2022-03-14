<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>


<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="username">
        </div>
        <div class="mb-3">
            <label for="inputpassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputpassword1">
        </div>
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="inputfname" aria-describedby="fname">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="inputlname" aria-describedby="lname">
        </div>
        <div class="mb-3">
            <label for="bday" class="form-label">Your Birthday</label>
            <input type="date" class="form-control" id="inputbday" aria-describedby="bday">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Your Phone Number</label>
            <input type="number" class="form-control" id="phone" aria-describedby="phone">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="email">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Your Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="address">
        </div>
        
        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn bd-purple-600">Login</button>
            </div>
            </div>
        </div>
        </div>
</body>
</html>