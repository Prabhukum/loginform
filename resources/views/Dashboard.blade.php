@include('header')

<div class="container-fluid">
    {{--   <nav class="navbar navbar-expand-lg bg-body-tertiary"> --}}
    <div class="container-fluid shadow p-2">
        <div class="row mt-3 mb-3">
            <div class="col-2">
                <img src="{{asset('assets/header.png')}}" class="Logo" alt="image">
            </div>
            <div class="col-3">
                <form class="d-flex me-auto ms-5 align-items-center" role="search">
                    <input type="search" placeholder="Search by Borrower Last Name or Loan Number">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex align-items-center me-4">
                    <img src="{{asset('assets/bell_icon.png')}}" alt="Notification icon" class="bellicon">
                </li>
                <li class="nav-item dropdown me-4 d-flex align-items-center">
                    <div class="ms-4">
                        <img src="{{asset('assets/user_icon.png')}}" alt="Notification icon" class="usericon">
                    </div>
                    <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        style="font: normal normal 600 11px/17px Poppins;">Alexander M<span
                            style="font: normal normal normal 9px/13px Poppins;"><br>Lo Broker</span></a>
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span
                            class="fa fa-angle-down"></span></a>
                    <div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">View Account</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                </li>
            </ul>
            {{--       </nav> --}}
        </div>




    </div>
    <style>

    </style>


    <div class="popup d-flex">
        <div class="side col-4">
            <nav id="navbar-example3" class="vh-100">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link ms-3 my-1 links " href="#"><i class="fa fa-list-alt"></i> Pipe Line</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ms-3 my-1 links " href="#"><i class="fa fa-list-alt"></i> Price Scenario</a>
                        <a class="nav-link ms-3 my-1 links " href="#"><i class="fa fa-thumbs-o-up"
                                aria-hidden="true"></i> Quick Pricing</a>
                        <a class="nav-link ms-3 my-1 links " href="#"><i class="fa fa-file-text-o"
                                aria-hidden="true"></i> Submit Loans</a>
                    </nav>
                    <div class="text-start ms-3 my-1">
                        <p><i></i>Accounts</p>
                    </div> {{-- <a class="nav-link" href="#item-2">Item 2</a>
          <a class="nav-link" href="#item-3">Item 3</a> --}}
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ms-3 my-1 links " href="#"><i class="fa fa-list-alt"></i> Settings</a>
                        <a class="nav-link ms-3 my-1 links " href="#"><i class="fa fa-list-alt"></i> Logout</a>
                    </nav>
                </nav>
            </nav>
        </div>

        <div class="content shadow p-4">
            <div class="pipe-head d-flex justify-content-between mb-3">
                <div>
                    <p><strong> pipe line</strong></p>
                </div>
                <div class="btn-group section_btn" role="group" aria-label="Basic example">
                    <button type="button" class="btn section_btn">Scenarios</button>
                    <button type="button" class=" section_btn">Active</button>
                    <button type="button" class=" section_btn">Funded</button>
                    <button type="button" class=" section_btn">Cancelled/Declined</button>
                </div>

            </div>


            {{---------------- Search panel ------------}}
            <div class="search-panel py-3 px-2 shadow mb-3">
                <div class="search-headings">
                    <p>Search</p>
                </div>
                <div class="search-by row justify-content-between px-4 py-4">
                    <div class="col-10">
                        <span>Search by</span>
                        <input type="text" name="name" placeholder="mm/dd/yy" class="col-2">
                        <i class="fa fa-thin fa-chevron-down drop-icon"></i>
                        <input type="text" name="password" placeholder="Borrower Name" class="col-2">
                        <i class="fa fa-thin fa-chevron-down drop-icon"></i>
                    </div>
                    <div class="col-2 ">
                        <button class="reset-button justify-content-end">Reset</button>
                        <button class="Go-button justify-content-end">Go</button>
                    </div>
                </div>
            </div>
            {{---------------- Tables ------------------}}
            <div class="px-2">
                <table id="example" class="table shadow" style="border-radius: 12px;">
                    <thead class="thead">
                        <th>Scenario Name <i class="fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i></th>
                        <th>Action <i class="fa fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i></th>
                        <tr>
                            <th>Scenario Name <i class="fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i>
                            </th>
                            <th>Borrower Name <i class="fa fa-thin fa-arrow-down-wide-short"
                                    style="color: #8ab7e9;"></i></th>
                            <th>Date <i class="fa fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i></th>
                            <th>Loan Officer <i class="fa fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i>
                            </th>
                            <th>Loan Purpose <i class="fa fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i>
                            </th>
                            <th>Broker Name <i class="fa fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i>
                            </th>
                            <th>Action <i class="fa fa-thin fa-arrow-down-wide-short" style="color: #8ab7e9;"></i></th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr>
                            <td>Scenario-1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>2011-04-25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Scenario-2</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011-07-25</td>
                            <td>2011-04-25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Scenario-3</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009-01-12</td>
                            <td>2011-04-25</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Scenario-4</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012-03-29</td>
                            <td>2011-04-25</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Scenario-5</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008-11-28</td>
                            <td>2011-04-25</td>
                            <td>$162,700</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
        // "searching": false
    });

</script>




</div>
</div>
</div>


{{-- <div class="container-fluid">
        <div class="d-flex text-center row shadow  bg-danger col-3" style="height:cover">
            <button type="button" class="fa fa-list-alt"  aria-hidden="true"></i>Pipe Line</p></button>
            <button type="button" class="fa fa-list-alt"  aria-hidden="true"></i>Price Scenario</p></button>
            <button type="button" class="fa fa-list-alt"  aria-hidden="true"></i>Quick Pricing</p></button>
            <button type="button" class="fa fa-list-alt"  aria-hidden="true"></i>Submit Loans</p></button>
            <div class="text-start">
            <p><i></i>Accounts</p>
        </div>
        <button type="button" class="fa fa-list-alt"  aria-hidden="true"></i>Settings</p></button>
            <button type="button" class="fa fa-list-alt"  aria-hidden="true"></i>Logout</p></button> --}}
</div>
</div>
</div>
