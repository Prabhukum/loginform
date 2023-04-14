@include('header')
<body>
    <div class="py-5">
      <div class="container-fluid screen mt-5">
        <div class="card border">
            <div class="d-flex justify-content-center align-items-center">
                            <div class="col-8">
                                <img src="{{asset('assets/login_img.png')}}" alt="image">
                              </div>
                                   <div class="col-4">
                                    <div class="d-flex justify-content-center mb-4">
                                    <img src="{{asset('assets/header.png')}}" alt="image">
                                     </div>

                                    <div class="d-flex justify-content-lg-center">
                                    <h2 class="sub_head mb-5 mb-2"> <strong>Enter Code</strong> <br>We texted your phone <strong>+XX XXXXXXX21,</strong> <br>Please enter the Code to sign in.</h2>
                                    </div>
                                    <!-- Email input -->
                                        <div class="px-5 mb-3">
                                   <input type="number" class="login_password"  autocomplete="off" placeholder="Enter code">
                                        </div>
                                      <!-- Checkbox -->
                                    <div class="px-5">
                                    <div class="d-flex align-items-start justify-content-start">
                                        <p >If your number is incorrect please reach out to <br> <strong><a href="" style="text-decoration: none"> itsupport@acrabrokerlinks.com </a></strong> </p>
                                    </div>
                                    <a href="{{asset('Dashboard')}}"><button type="button" class="button1 btn btn-primary">VERIFY</button></a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</body>

</html>
