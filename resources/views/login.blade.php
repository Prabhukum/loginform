<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href={{asset('css/login.css')}}>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row py-5">
            <div class="d-flex justify-content-center">
    <form action="/register" method="post">
    <div class="d-flex justify-content-center mb-3 ">
        <h1>Registration Form</h1>
    </div>

    <div class=" p-0">
    <div class="d-flex justify-content-center col-12 mb-3">
    <label for="name" class="m-1">FirstName:</label>
    <input type="text" id="name" name="name"  placeholder="firstName" required>
    </div>
    <div class="d-flex  justify-content-center col-12 mb-3">
    <label for="name" class="m-1">LastName:</label>
    <input type="text" id="name" name="name" placeholder="lastName" required>
    </div>

    <div class="d-flex justify-content-center col-12 mb-3">
    <label for="phone" class="m-1">Phone Number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
     </div>


     <div class="d-flex justify-content-center col-12 mb-3">
    <label for="dob" class="m-1">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>
</div>

<div class="d-flex justify-content-center col-12 mb-3">
    <label for="present-address" class="m-1">Present Address:</label>
    <textarea id="present-address" name="present_address" rows="1" placeholder="Present Address" required></textarea>
</div>

<div class="d-flex justify-content-center col-12 mb-3">
    <label for="permanent-address" class="m-1">Permanent Address:</label>
    <textarea id="permanent-address" name="permanent_address" rows="1" placeholder="Permanent Address" required></textarea>
</div>

<div class="d-flex justify-content-center col-12 mb-3">
    <label for="email" class="m-1">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" required>
</div>

    <div class="d-flex justify-content-center col-12 mb-3">
    <label for="password" class="m-1">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password" required>
</div>

    <div class="d-flex justify-content-center col-12 mb-3">
    <label for="upload-file" class="m-1">Upload File:</label>
    <input type="file" class="m-1" id="upload-file" name="upload_file" width="100">
</div>

    <div class="d-flex justify-content-center col-12 mb-3">
    <label >Gender: </label>
    <label for="gender-male">
      <input type="radio" id="gender-male" name="gender" value="male" class="m-1">Male
    </label>
    <label for="gender-female">
      <input type="radio" id="gender-female" name="gender" value="female" class="m-1">Female
    </label>
    <label for="gender-other">
        <input type="radio" id="gender-other" name="gender" value="other" class="m-1">Other
      </label>
    </div>

      <div class="d-flex justify-content-center col-12 mb-3">
      <div class="d-flex mt-2 mb-3 col-6">
      {{-- <label for="comments">Comments:</label>
      <textarea id="comments" name="comments" rows="1" placeholder="comments"></textarea> --}}
    </div>
</div>
      {{-- <label for="captcha">Captcha:</label>
      <input type="text" id="captcha" name="captcha" placeholder="Enter Captcha" required> --}}
      <!-- Replace the below line with actual captcha implementation -->

      <!-- Example of a basic captcha -->
      {{-- <img src="captcha_image.jpg" alt="Captcha Image" style="width: 150px; height: auto;">
      <br>
      <label for="captcha">Enter the text above:</label> --}}
                   <div class="col-12 d-flex justify-content-center">
                 <input type="submit" value="Submit" style="width: 30%">
                </div></div>
        </div>
     </div>
    </div>
