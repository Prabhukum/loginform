<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">


    <link rel="stylesheet" href={{asset('css/Task_2.css')}}>
    <title></title>
</head>

<body>


        <div class="container lg1366">
            <div class="card-fluid">
          <div class="row d-flex justify-content-center align-items-center">
           <div class="col-8">

              <img src="{{asset('assets/login_img.png')}}"
                class="img-fluid abcd" alt="Sample image">
            </div>
              <div class="col-md-8 col-lg-4 col-xl-4">

              <form>
                 <div class="container">
                 <div class="d-flex flex-row justify-content-center justify-content-lg-center">
                     <img src="{{asset('assets/header.png')}}" alt="">
                    </div>

                <div class="divider d-flex justify-content-lg-center">
                  <h2 class="sub_head mb-4">Welcome to Acra Lending Broker Portal</h2>
                </div>

                <!-- Email input -->
                <div class="form-outline frm">
                    <label class="form-label mail_id" for="form3Example3">Email ID</label>
                    {{-- <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" /> --}}
                    <hr>
                </div>

                <!-- Password input -->
                <div class="form-outline ">
                    <label class="form-label" for="form3Example4">Password</label>
                  {{-- <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" /> --}}
                    <hr>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" style="text-decoration: none;color:#0033A1; "><b >Forgot Your password?</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="button" class="button1 btn btn-primary">NEXT</button>
                  {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                      class="link-danger">Register</a></p> --}}
                </div>
            </div>
              </form>
            </div>
          </div>
        </div>
        </div>


        {{-- footer --}}
        {{-- <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          {{-- Copyright --}}
          <div class="text-white mb-3 mb-md-0">
          {{-- footer --}}
          </div>
            {{-- Copyright --}}

            {{-- Right --}}
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
</body>

</html>
