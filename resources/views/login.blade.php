<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href={{asset('css/login.css')}}>
</head>



<body>
  <form action="/register" method="post">
    <h1>Registration Form</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Name" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="present-address">Present Address:</label>
    <textarea id="present-address" name="present_address" rows="3" placeholder="Present Address" required></textarea>

    <label for="permanent-address">Permanent Address:</label>
    <textarea id="permanent-address" name="permanent_address" rows="3" placeholder="Permanent Address" required></textarea>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password" required>

    <label for="upload-file">Upload File:</label>
    <input type="file" id="upload-file" name="upload_file">

    <label>Gender:</label>
    <label for="gender-male">
      <input type="radio" id="gender-male" name="gender" value="male"> Male
    </label>
    <label for="gender-female">
      <input type="radio" id="gender-female" name="gender" value="female"> Female
    </label>
    <label for="gender-other">
        <input type="radio" id="gender-other" name="gender" value="other"> Other
      </label>

      <label for="comments">Comments:</label>
      <textarea id="comments" name="comments" rows="3" placeholder="Comments"></textarea>

      <label for="captcha">Captcha:</label>
      <input type="text" id="captcha" name="captcha" placeholder="Enter Captcha" required>
      <!-- Replace the below line with actual captcha implementation -->

      <!-- Example of a basic captcha -->
      {{-- <img src="captcha_image.jpg" alt="Captcha Image" style="width: 150px; height: auto;">
      <br>
      <label for="captcha">Enter the text above:</label> --}}

      <input type="submit" value="Submit">
