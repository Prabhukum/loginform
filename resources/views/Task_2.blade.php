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
                                    <h2 class="sub_head mb-4"> <strong> Welcome to Acra Lending Broker Portal</strong></h2>
                                    </div>
                                    <!-- Email input -->
                                        <div class="px-5">
                                        <input type="text" class="login_email" autocomplete="off" placeholder="Email ID">
                                        <input type="password" class="login_password"  autocomplete="off" placeholder="Password">
                                        </div>
                                      <!-- Checkbox -->
                                    <div class="px-5">
                                    <div class="d-flex align-items-center justify-content-around ">
                                    <input class="form-check-input " style="margin:0px" type="checkbox" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3" style=" font-size:12px;"> Remember me </label>
                                    <a href="#!" style="text-decoration: none;color:#0033A1; padding:12px; font-size:12px;"><b>Forgot Your password?</a>
                                    </div>
                                    <a href=""><button type="button" class="button1 btn btn-primary">NEXT</button></a>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</body>

</html>
