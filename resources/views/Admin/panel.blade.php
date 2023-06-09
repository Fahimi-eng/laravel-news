@extends('Admin.Layouts.master')
@section('title','داشبورد')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex align-items-center justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Sales Ratio</h4>
                                </div>
                                <div class="ml-auto">
                                    <div class="dl m-b-10">
                                        <select class="custom-select border-0 text-muted">
                                            <option value="0" selected="">August 2018</option>
                                            <option value="1">May 2018</option>
                                            <option value="2">March 2018</option>
                                            <option value="3">June 2018</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sales-ratio ct-charts m-t-30"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="p-10 bg-info">
                            <div class="sales2 ct-charts mb-0"></div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="font-light m-b-5">$354.50</h3>
                                    <span class="text-muted">160 sales</span>
                                </div>
                                <div class="ml-auto">
                                    <h2><i class="mdi mdi-cart-outline text-info"></i></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body bg-danger">
                            <h1 class="font-light text-white m-b-0"><span>35<sup>°</sup></span></h1>
                            <h5 class="font-normal text-white">Clear with periodic clouds</h5>
                            <div style="max-width: 100%; height:110px;" class="m-t-20">
                                <div id="weather" class="ct-charts"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="font-light m-b-5">Sunday</h3>
                                    <span class="text-muted">August 2018</span>
                                </div>
                                <div class="ml-auto">
                                    <h2><i class="wi wi-day-sleet text-danger"></i></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Ravenue - page-view-bounce rate -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="font-light m-b-5">$354.50</h3>
                                    <span class="text-muted">160 sales</span>
                                </div>
                                <div class="ml-auto">
                                    <div id="sales3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="font-light m-b-5">$354.50</h3>
                                    <span class="text-muted">160 sales</span>
                                </div>
                                <div class="ml-auto">
                                    <div style="max-width:130px; height:40px;" class="m-b-10">
                                        <canvas id="sales4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h3 class="font-light m-b-5">$354.50</h3>
                                    <span class="text-muted">Main Balance</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="">
                                        <canvas id="balance" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Ravenue - page-view-bounce rate -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Latest Sales</h4>
                                </div>
                                <div class="ml-auto">
                                    <div class="dl m-b-10">
                                        <select class="custom-select border-0 text-muted">
                                            <option value="0" selected="">August 2018</option>
                                            <option value="1">May 2018</option>
                                            <option value="2">March 2018</option>
                                            <option value="3">June 2018</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle">
                                    <thead>
                                    <tr>
                                        <th class="border-0 text-muted">Team Lead</th>
                                        <th class="border-0 text-muted">Project</th>
                                        <th class="border-0 text-muted">Team</th>
                                        <th class="border-0 text-muted text-center">Status</th>
                                        <th class="border-0 text-muted text-center">Weeks</th>
                                        <th class="border-0 text-muted text-center">Budget</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex no-block align-items-center">
                                                <div class="m-r-10"><img src="Admin/assets/images/users/d1.jpg" alt="user" class="rounded-circle" width="45" /></div>
                                                <div class="">
                                                    <h5 class="m-b-0 font-16 font-medium">Hanna Gover</h5><span class="text-muted">hgover@gmail.com</span></div>
                                            </div>
                                        </td>
                                        <td>Elite Admin</td>
                                        <td>
                                            <div class="popover-icon">
                                                <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                                                <a class="btn-circle btn btn-purple text-white popover-item" href="javascript:void(0)">DS</a>
                                                <a class="btn-circle btn btn-danger text-white popover-item" href="javascript:void(0)">RP</a>
                                                <a class="btn-circle btn btn-outline-secondary" href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="text-center"><i class="fa fa-circle text-danger" data-toggle="tooltip" data-placement="top" title="In Progress"></i></td>
                                        <td class="text-center">35</td>
                                        <td class="font-medium text-center">$96K</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex no-block align-items-center">
                                                <div class="m-r-10"><img src="Admin/assets/images/users/d2.jpg" alt="user" class="rounded-circle" width="45" /></div>
                                                <div class="">
                                                    <h5 class="m-b-0 font-16 font-medium">Daniel Kristeen</h5><span class="text-muted">Kristeen@gmail.com</span></div>
                                            </div>
                                        </td>
                                        <td>Real Homes WP Theme</td>
                                        <td>
                                            <div class="popover-icon">
                                                <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                                                <a class="btn-circle btn btn-primary text-white popover-item" href="javascript:void(0)">DS</a>
                                                <a class="btn-circle btn btn-outline-secondary" href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="text-center"><i class="fa fa-circle text-success" data-toggle="tooltip" data-placement="top" title="Active"></i></td>
                                        <td class="text-center">35</td>
                                        <td class="font-medium text-center">$96K</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex no-block align-items-center">
                                                <div class="m-r-10"><img src="Admin/assets/images/users/d3.jpg" alt="user" class="rounded-circle" width="45" /></div>
                                                <div class="">
                                                    <h5 class="m-b-0 font-16 font-medium">Julian Josephs</h5><span class="text-muted">Josephs@gmail.com</span></div>
                                            </div>
                                        </td>
                                        <td>MedicalPro WP Theme</td>
                                        <td>
                                            <div class="popover-icon">
                                                <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                                                <a class="btn-circle btn btn-purple text-white popover-item" href="javascript:void(0)">DS</a>
                                                <a class="btn-circle btn btn-danger text-white popover-item" href="javascript:void(0)">RP</a>
                                                <a class="btn-circle btn btn-outline-secondary" href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="text-center"><i class="fa fa-circle text-success" data-toggle="tooltip" data-placement="top" title="Active"></i></td>
                                        <td class="text-center">35</td>
                                        <td class="font-medium text-center">$96K</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex no-block align-items-center">
                                                <div class="m-r-10"><img src="Admin/assets/images/users/2.jpg" alt="user" class="rounded-circle" width="45" /></div>
                                                <div class="">
                                                    <h5 class="m-b-0 font-16 font-medium">Jan Petrovic</h5><span class="text-muted">hgover@gmail.com</span></div>
                                            </div>
                                        </td>
                                        <td>Hosting Press HTML</td>
                                        <td>
                                            <div class="popover-icon">
                                                <a class="btn-circle btn btn-purple text-white" href="javascript:void(0)">RP</a>
                                                <a class="btn-circle btn btn-outline-secondary" href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="text-center"><i class="fa fa-circle text-info" data-toggle="tooltip" data-placement="top" title="Pending"></i></td>
                                        <td class="text-center">35</td>
                                        <td class="font-medium text-center">$96K</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Product Sales -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Visit Statistics</h4>
                                    <h5 class="card-subtitle">Total visits of the Month</h5>
                                </div>
                                <div class="ml-auto">
                                    <!-- Tabs -->
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab2" data-toggle="pill" href="#week" role="tab" aria-selected="true">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab2" data-toggle="pill" href="#month" role="tab" aria-selected="false">Month</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month-tab2" data-toggle="pill" href="#year" role="tab" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                    <!-- Tabs -->
                                </div>
                            </div>
                            <div class="tab-content m-t-20" id="pills-tabContent2">
                                <div class="tab-pane fade show active" id="week" role="tabpanel" aria-labelledby="pills-home-tab2">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-rounded btn-light pl-3 pr-3 pt-2 pb-2 text-muted border">PAGEVIEWS</button>
                                                    <button type="button" class="btn btn-sm btn-rounded bg-white pl-3 pr-3 pt-2 pb-2 text-muted border">REFERRALS</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <ul class="list-inline font-12 dl m-b-0 text-right mt-2">
                                                <li class="list-inline-item"><i class="fa fa-circle text-muted"></i> Site A</li>
                                                <li class="list-inline-item"><i class="fa fa-circle text-info"></i> Site B</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4" id="morris-area-chart2" style="height:400px; width:100%;"></div>
                                </div>
                                <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="pills-profile-tab2">
                                    <div class="monthlyvisit" style="height:400px; width:100%;"></div>
                                </div>
                                <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="pills-month-tab2">
                                    <div class="yearlyvisit" style="height:400px; width:100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Campaign</h4>
                            <div class="row align-items-center">
                                <!-- column -->
                                <div class="col-6">
                                    <div id="campaign" class="m-t-30" style="height:180px; width:100%;"></div>
                                </div>
                                <!-- column -->
                                <div class="col-5 ml-auto">
                                    <ul class="list-style-none">
                                        <li><i class="fa fa-circle m-r-5 text-info font-12"></i> <span class="font-medium">60%</span> <span class="text-muted">open</span></li>
                                        <li class="m-t-20"><i class="fa fa-circle m-r-5 text-purple font-12"></i> <span class="font-medium">26%</span> <span class="text-muted">clicks</span></li>
                                        <li class="m-t-20"><i class="fa fa-circle m-r-5 text-success font-12"></i> <span class="font-medium">18%</span> <span class="text-muted">bounce</span></li>
                                    </ul>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">Users</h4>
                            <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span></h2>
                            <div class="m-t-20 m-b-10">
                                <ul class="list-style-none m-t-30">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="m-b-0 font-medium">58% <span class="font-normal font-14 text-muted m-l-5">New Users</span></h4>
                                            </div>
                                        </div>
                                        <div class="progress m-t-10">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="m-t-30">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h4 class="m-b-0 font-medium">42% <span class="font-normal font-14 text-muted m-l-5">Repeat Users</span></h4>
                                            </div>
                                        </div>
                                        <div class="progress m-t-10">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Orders -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Nice admin. Designed and Developed by
            <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
@endsection
