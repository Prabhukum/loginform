@include('header')
<div class="border">
<div class="container-fluid border">
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="{{asset('assets/header.png')}}" class="Logo" alt="image">
            </div>
            <div class="col-3">
            </div>
        </div>
        <form class="d-flex me-auto ms-5 align-items-center" role="search">
            <input type="search" placeholder="Search by Borrower Last Name or Loan Number">
            <i class="fa fa-search" aria-hidden="true"></i>
        </form>
        <div class="navbar" id="navbarSupportedContent">
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
        </div>
     </div>
  </div>

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



        <div class="content  vw-100 p-4">
            <div class="pipe-head d-flex justify-content-between mb-3">
                <div>
                    <p><strong> pipe line</strong></p>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn1">Scenarios</button>
                    <button type="button" class=" btn1">Active</button>
                    <button type="button" class=" btn1">Funded</button>
                    <button type="button" class="btn1"  style="width: 141px;">Cancelled/Declined</button>
                </div>

            </div>


            {{---------------- Search panel ------------}}
            <div class="search-panel py-3 px-2 mb-3">
                <div class="search-headings">
                    <p> <strong>Search</strong> </p>
                </div>
                <div class="search-by row border  justify-content-between px-3 py-3">
                    <div class="col-10">
                        <span>Search by</span>
                        <input type="search" name="name" placeholder="mm/dd/yy" class="col-2">
                        <i class="fa fa-thin fa-chevron-down drop-icon"></i>
                        <input type="search" name="password" placeholder="Borrower Name" class="col-2">
                        <i class="fa fa-thin fa-chevron-down drop-icon"></i>
                    </div>
                    <div class="col-2 ">
                        <button class="reset-button justify-content-end">Reset</button>
                        <button class="Go-button justify-content-end">Go</button>
                    </div>
                </div>
            </div>
            {{---------------- Tables ------------------}}

                 <div class="shadow border p-3">
                <table id="example" class="table" style="border-radius: 12px;">
                    <thead class="thead ">
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
                            <td>Andy America</td>
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
</div>
</div>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function () {

    $('#example').DataTable({
    scrollY: '250px',
    scrollCollapse: true,
    paging: true,

});

});
$(".btn1").click(function(){
        $(".btn1").removeClass("active");
        $(this).addClass("active");
    });
    </script>
</div>
