@include('header')



<div class="py-5">
  <body class="p-3 m-0 border-0 bd-example">
  <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
      <img src="{{asset('assets/header.png')}}" class="image" alt="image">
        <form class="d-flex" role="search">
          <input class="form-control me-2 searchbtn" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success " type="submit">Search</button> <hr>
          <img src="{{asset('assets/header.png')}}" class="image" alt="image">
        </form>
      </div>
    </nav>

    <!-- module session -->
    <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
    <div class="col-8">
    <div class="tab-content" id="nav-tabContent">

    </div>
    <div class="d-flex flex-row mt-3">
        <h1 class="text_head">pipe line</h1>
                <div class="btn-group mod px-5" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Scenarios</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Active</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Funded</label>
            
            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio4">Cancelled/Declined</label>
            </div>
  </div
  </div>
  </div>
  </div>
  <!-- module session ends-->
    </div>
     </body>
</html>