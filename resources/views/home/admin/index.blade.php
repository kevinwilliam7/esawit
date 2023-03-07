@extends('layouts.admin.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/DataTables/datatables.min.css') }}">
@endsection
@section('content-title', 'Dashboard')
@section('content')
<div class="container-fluid">            
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    <div class="d-flex justify-content-between">
                        <div class="rounded-circle bg-primary widget-two-icon mb-5">
                            <i class="mdi mdi-tree avatar-title font-30 text-white"></i>
                        </div>
                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Perkebunan</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{ $countPerkebunan }}</span> Kebun</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom ">
                <div class="media">
                    <div class="d-flex justify-content-between">
                        <div class="rounded-circle bg-primary widget-two-icon mb-5">
                            <i class="mdi mdi-domain avatar-title font-30 text-white"></i>
                        </div>
                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Pabrik</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{ $countPabrik }}</span> Pabrik</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom ">
                <div class="media">
                    <div class="d-flex justify-content-between">
                        <div class="rounded-circle bg-primary widget-two-icon mb-5">
                            <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                        </div>
                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Kontribusi</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{ $countKontribusi }}</span> Kontribusi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom ">
                <div class="media">
                    <div class="d-flex justify-content-between">
                        <div class="rounded-circle bg-primary widget-two-icon mb-5">
                            <i class="mdi mdi-account avatar-title font-30 text-white"></i>
                        </div>
                        <div class="wigdet-two-content media-body">
                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Admin</p>
                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">{{ $countUser }}</span> Admin</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->    
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Harga TBS</h4>
                <p class="sub-header">
                    Grafik & Statistik Harga TBS
                </p>
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Recent Candidates</h4>
                <p class="sub-header">
                    Your awesome text goes here.
                </p>

                <div class="table-responsive">
                    <table class="table table-hover m-0 table-actions-bar">

                        <thead>
                            <tr>
                                <th>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-light btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"> <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Job Timing</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-medium">Tomaslau</h5>
                            </td>

                            <td>
                                <i class="mdi mdi-map-marker text-primary"></i> New York
                            </td>

                            <td>
                                <i class="mdi mdi-clock-outline text-success"></i> Full Time
                            </td>

                            <td>
                                <i class="mdi mdi-currency-usd text-warning"></i> 3265
                            </td>

                            <td>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-medium">Erwin E. Brown</h5>
                            </td>

                            <td>
                                <i class="mdi mdi-map-marker text-primary"></i> California
                            </td>

                            <td>
                                <i class="mdi mdi-clock-outline text-success"></i> Part Time
                            </td>

                            <td>
                                <i class="mdi mdi-currency-usd text-warning"></i> 1365
                            </td>

                            <td>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-medium">Margeret V. Ligon</h5>
                            </td>

                            <td>
                                <i class="mdi mdi-map-marker text-primary"></i> New York
                            </td>

                            <td>
                                <i class="mdi mdi-clock-outline text-success"></i> Full Time
                            </td>

                            <td>
                                <i class="mdi mdi-currency-usd text-warning"></i> 115248
                            </td>

                            <td>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-medium">Jose D. Delacruz</h5>
                            </td>

                            <td>
                                <i class="mdi mdi-map-marker text-primary"></i> New York
                            </td>

                            <td>
                                <i class="mdi mdi-clock-outline text-success"></i> Part Time
                            </td>

                            <td>
                                <i class="mdi mdi-currency-usd text-warning"></i> 2451
                            </td>

                            <td>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src="assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-medium">Luke J. Sain</h5>
                            </td>

                            <td>
                                <i class="mdi mdi-map-marker text-primary"></i> Australia
                            </td>

                            <td>
                                <i class="mdi mdi-clock-outline text-success"></i> Part Time
                            </td>

                            <td>
                                <i class="mdi mdi-currency-usd text-warning"></i> 3265
                            </td>

                            <td>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- end col -->

        <div class="col-xl-3 col-lg-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Total Unique Visitors</h4>

                <div class="widget-chart text-center" dir="ltr">
                    <div id="donut-chart" style="height: 280px; max-height: 280px; position: relative;" class="c3"><svg width="363" height="280" style="overflow: hidden;"><defs><clipPath id="c3-1678067195169-clip"><rect width="363" height="254"></rect></clipPath><clipPath id="c3-1678067195169-clip-xaxis"><rect x="-31" y="-20" width="425" height="42"></rect></clipPath><clipPath id="c3-1678067195169-clip-yaxis"><rect x="-29" y="-4" width="20" height="278"></rect></clipPath><clipPath id="c3-1678067195169-clip-grid"><rect width="363" height="254"></rect></clipPath><clipPath id="c3-1678067195169-clip-subchart"><rect width="363" height="0"></rect></clipPath></defs><g transform="translate(0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="181.5" y="127" style="opacity: 0;"></text><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip)" class="c3-regions" style="visibility: hidden;"></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip-grid)" class="c3-grid" style="visibility: hidden;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="254" style="visibility: hidden;"></line></g></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip)" class="c3-chart"><g class="c3-stanford-elements"><g class="c3-stanford-lines" style="shape-rendering: geometricprecision;"></g><g class="c3-stanford-texts"></g><g class="c3-stanford-regions"></g></g><g class="c3-event-rects" style="fill-opacity: 0;"><rect class="c3-event-rect" x="0" y="0" width="363" height="254"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Male" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Male c3-bars c3-bars-Male" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Female" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Female c3-bars c3-bars-Female" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Male" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Male c3-lines c3-lines-Male"></g><g class=" c3-shapes c3-shapes-Male c3-areas c3-areas-Male"></g><g class=" c3-selected-circles c3-selected-circles-Male"></g><g class=" c3-shapes c3-shapes-Male c3-circles c3-circles-Male" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Female" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Female c3-lines c3-lines-Female"></g><g class=" c3-shapes c3-shapes-Female c3-areas c3-areas-Female"></g><g class=" c3-selected-circles c3-selected-circles-Female"></g><g class=" c3-shapes c3-shapes-Female c3-circles c3-circles-Female" style="cursor: pointer;"></g></g></g><g class="c3-chart-arcs" transform="translate(181.5,122)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 1;">Candidates</text><g class="c3-chart-arc c3-target c3-target-Male"><g class=" c3-shapes c3-shapes-Male c3-arcs c3-arcs-Male"><path class=" c3-shape c3-shape c3-arc c3-arc-Male" transform="" style="fill: rgb(100, 197, 177); cursor: pointer;" d="M7.096828201058911e-15,-115.89999999999999A115.89999999999999,115.89999999999999,0,1,1,-96.72704010629897,63.848960150298694L-71.68984249465989,47.32205070673561A85.89999999999999,85.89999999999999,0,1,0,5.2598580023378814e-15,-85.89999999999999Z"></path></g><text dy=".35em" class="" transform="translate(81.64881771375676,43.937102384496434)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Female"><g class=" c3-shapes c3-shapes-Female c3-arcs c3-arcs-Female"><path class=" c3-shape c3-shape c3-arc c3-arc-Female" transform="" style="fill: rgb(241, 241, 241); cursor: pointer;" d="M-96.72704010629897,63.848960150298694A115.89999999999999,115.89999999999999,0,0,1,-2.129048460317673e-14,-115.89999999999999L-1.5779574007013643e-14,-85.89999999999999A85.89999999999999,85.89999999999999,0,0,0,-71.68984249465989,47.32205070673561Z"></path></g><text dy=".35em" class="" transform="translate(-81.64881771375676,-43.93710238449642)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Male" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Male"></g></g><g class="c3-chart-text c3-target c3-target-Female" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Female"></g></g></g></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip-xaxis)" transform="translate(0,254)" style="visibility: visible; opacity: 0;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="363" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(182, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H363V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,253)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">22</tspan></text></g><g class="tick" transform="translate(0,233)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">24</tspan></text></g><g class="tick" transform="translate(0,214)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">26</tspan></text></g><g class="tick" transform="translate(0,195)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">28</tspan></text></g><g class="tick" transform="translate(0,176)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,157)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">32</tspan></text></g><g class="tick" transform="translate(0,138)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">34</tspan></text></g><g class="tick" transform="translate(0,118)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">36</tspan></text></g><g class="tick" transform="translate(0,99)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">38</tspan></text></g><g class="tick" transform="translate(0,80)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,61)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">42</tspan></text></g><g class="tick" transform="translate(0,42)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">44</tspan></text></g><g class="tick" transform="translate(0,23)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">46</tspan></text></g><g class="tick" transform="translate(0,3)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">48</tspan></text></g><path class="domain" d="M-6,1H0V254H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(363,0)" style="visibility: hidden; opacity: 0;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,254)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,229)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,204)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,179)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,153)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,128)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,103)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,77)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,52)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,27)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V254H6"></path></g></g><g transform="translate(0.5,280.5)" style="visibility: hidden;"><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip)" class="c3-brush" fill="none" pointer-events="all"><rect class="overlay" pointer-events="all" cursor="crosshair" x="0" y="0" width="363" height="0"></rect><rect class="selection" cursor="move" fill="#777" fill-opacity="0.3" stroke="#fff" shape-rendering="crispEdges" style="display: none;"></rect><rect class="handle handle--w" cursor="ew-resize" style="display: none;"></rect><rect class="handle handle--e" cursor="ew-resize" style="display: none;"></rect></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195169-clip-xaxis)" style="opacity: 0;"><g class="tick" transform="translate(182, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H363V6"></path></g></g><g transform="translate(0,258)"><g class="c3-legend-item c3-legend-item-Male" style="visibility: visible; cursor: pointer; opacity: 1;"><text x="132.3671875" y="9" style="pointer-events: none;">Male</text><rect class="c3-legend-item-event" x="118.3671875" y="-5" width="58.859375" height="22" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="116.3671875" y1="4" x2="126.3671875" y2="4" stroke-width="10" style="stroke: rgb(100, 197, 177); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Female" style="visibility: visible; cursor: pointer; opacity: 1;"><text x="191.2265625" y="9" style="pointer-events: none;">Female</text><rect class="c3-legend-item-event" x="177.2265625" y="-5" width="67.40625" height="22" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="175.2265625" y1="4" x2="185.2265625" y2="4" stroke-width="10" style="stroke: rgb(241, 241, 241); pointer-events: none;"></line></g></g><text class="c3-title" x="181.5" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 77.0625px; left: 99px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name--Female"><td class="name"><span style="background-color:#f1f1f1"></span>Female</td><td class="value">34.3%</td></tr></tbody></table></div></div>

                    <div class="row text-center mt-4">
                        <div class="col-6">
                            <h3 data-plugin="counterup">1,507</h3>
                            <p class="text-muted mb-0">Visitors Male</p>
                        </div>
                        <div class="col-6">
                            <h3 data-plugin="counterup">854</h3>
                            <p class="text-muted mb-1">Visitors Female</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Number of Transactions</h4>

                <div class="widget-chart text-center" dir="ltr">

                    <div id="pie-chart" style="height: 280px; max-height: 280px; position: relative;" class="c3"><svg width="363" height="280" style="overflow: hidden;"><defs><clipPath id="c3-1678067195261-clip"><rect width="363" height="254"></rect></clipPath><clipPath id="c3-1678067195261-clip-xaxis"><rect x="-31" y="-20" width="425" height="42"></rect></clipPath><clipPath id="c3-1678067195261-clip-yaxis"><rect x="-29" y="-4" width="20" height="278"></rect></clipPath><clipPath id="c3-1678067195261-clip-grid"><rect width="363" height="254"></rect></clipPath><clipPath id="c3-1678067195261-clip-subchart"><rect width="363" height="0"></rect></clipPath></defs><g transform="translate(0.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="181.5" y="127" style="opacity: 0;"></text><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip)" class="c3-regions" style="visibility: hidden;"></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip-grid)" class="c3-grid" style="visibility: hidden;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="254" style="visibility: hidden;"></line></g></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip)" class="c3-chart"><g class="c3-stanford-elements"><g class="c3-stanford-lines" style="shape-rendering: geometricprecision;"></g><g class="c3-stanford-texts"></g><g class="c3-stanford-regions"></g></g><g class="c3-event-rects" style="fill-opacity: 0;"><rect class="c3-event-rect" x="0" y="0" width="363" height="254"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Done" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Done c3-bars c3-bars-Done" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Due" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Due c3-bars c3-bars-Due" style="cursor: pointer;"></g></g><g class="c3-chart-bar c3-target c3-target-Hold" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Hold c3-bars c3-bars-Hold" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Done" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Done c3-lines c3-lines-Done"></g><g class=" c3-shapes c3-shapes-Done c3-areas c3-areas-Done"></g><g class=" c3-selected-circles c3-selected-circles-Done"></g><g class=" c3-shapes c3-shapes-Done c3-circles c3-circles-Done" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Due" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Due c3-lines c3-lines-Due"></g><g class=" c3-shapes c3-shapes-Due c3-areas c3-areas-Due"></g><g class=" c3-selected-circles c3-selected-circles-Due"></g><g class=" c3-shapes c3-shapes-Due c3-circles c3-circles-Due" style="cursor: pointer;"></g></g><g class="c3-chart-line c3-target c3-target-Hold" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Hold c3-lines c3-lines-Hold"></g><g class=" c3-shapes c3-shapes-Hold c3-areas c3-areas-Hold"></g><g class=" c3-selected-circles c3-selected-circles-Hold"></g><g class=" c3-shapes c3-shapes-Hold c3-circles c3-circles-Hold" style="cursor: pointer;"></g></g></g><g class="c3-chart-arcs" transform="translate(181.5,122)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text><g class="c3-chart-arc c3-target c3-target-Done"><g class=" c3-shapes c3-shapes-Done c3-arcs c3-arcs-Done"><path class=" c3-shape c3-shape c3-arc c3-arc-Done" transform="" style="fill: rgb(241, 241, 241); cursor: pointer;" d="M7.096828201058911e-15,-115.89999999999999A115.89999999999999,115.89999999999999,0,0,1,28.82315792240666,112.25878837480833L0,0Z"></path></g><text dy=".35em" class="" transform="translate(91.98887510587838,-11.620897416082286)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Due"><g class=" c3-shapes c3-shapes-Due c3-arcs c3-arcs-Due"><path class=" c3-shape c3-shape c3-arc c3-arc-Due" transform="" style="fill: rgb(100, 197, 177); cursor: pointer;" d="M-115.67129782483667,-7.277421213447466A115.89999999999999,115.89999999999999,0,0,1,8.164939424006777e-14,-115.89999999999999L0,0Z"></path></g><text dy=".35em" class="" transform="translate(-63.47120766170797,-67.5899711345133)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g><g class="c3-chart-arc c3-target c3-target-Hold"><g class=" c3-shapes c3-shapes-Hold c3-arcs c3-arcs-Hold"><path class=" c3-shape c3-shape c3-arc c3-arc-Hold" transform="" style="fill: rgb(230, 137, 0); cursor: pointer;" d="M28.82315792240666,112.25878837480833A115.89999999999999,115.89999999999999,0,0,1,-115.67129782483667,-7.277421213447466L0,0Z"></path></g><text dy=".35em" class="" transform="translate(-59.101952329498545,71.44198787017115)" style="opacity: 1; text-anchor: middle; pointer-events: none;"></text></g></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Done" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Done"></g></g><g class="c3-chart-text c3-target c3-target-Due" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Due"></g></g><g class="c3-chart-text c3-target c3-target-Hold" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Hold"></g></g></g></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip-xaxis)" transform="translate(0,254)" style="visibility: visible; opacity: 0;"><text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="363" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(182, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H363V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text><g class="tick" transform="translate(0,253)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">22</tspan></text></g><g class="tick" transform="translate(0,233)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">24</tspan></text></g><g class="tick" transform="translate(0,214)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">26</tspan></text></g><g class="tick" transform="translate(0,195)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">28</tspan></text></g><g class="tick" transform="translate(0,176)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">30</tspan></text></g><g class="tick" transform="translate(0,157)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">32</tspan></text></g><g class="tick" transform="translate(0,138)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">34</tspan></text></g><g class="tick" transform="translate(0,118)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">36</tspan></text></g><g class="tick" transform="translate(0,99)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">38</tspan></text></g><g class="tick" transform="translate(0,80)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,61)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">42</tspan></text></g><g class="tick" transform="translate(0,42)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">44</tspan></text></g><g class="tick" transform="translate(0,23)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">46</tspan></text></g><g class="tick" transform="translate(0,3)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">48</tspan></text></g><path class="domain" d="M-6,1H0V254H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(363,0)" style="visibility: hidden; opacity: 0;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,254)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,229)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,204)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,179)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,153)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,128)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,103)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,77)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,52)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,27)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V254H6"></path></g></g><g transform="translate(0.5,280.5)" style="visibility: hidden;"><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip)" class="c3-brush" fill="none" pointer-events="all"><rect class="overlay" pointer-events="all" cursor="crosshair" x="0" y="0" width="363" height="0"></rect><rect class="selection" cursor="move" fill="#777" fill-opacity="0.3" stroke="#fff" shape-rendering="crispEdges" style="display: none;"></rect><rect class="handle handle--w" cursor="ew-resize" style="display: none;"></rect><rect class="handle handle--e" cursor="ew-resize" style="display: none;"></rect></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(https://coderthemes.com/adminox/layouts/vertical/index.html#c3-1678067195261-clip-xaxis)" style="opacity: 0;"><g class="tick" transform="translate(182, 0)" style="opacity: 1;"><line x1="0" x2="0" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><path class="domain" d="M0,6V0H363V6"></path></g></g><g transform="translate(0,258)"><g class="c3-legend-item c3-legend-item-Done" style="visibility: visible; cursor: pointer; opacity: 1;"><text x="112.4375" y="9" style="pointer-events: none;">Done</text><rect class="c3-legend-item-event" x="98.4375" y="-5" width="63.265625" height="22" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="96.4375" y1="4" x2="106.4375" y2="4" stroke-width="10" style="stroke: rgb(241, 241, 241); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Due" style="visibility: visible; cursor: pointer; opacity: 1;"><text x="175.703125" y="9" style="pointer-events: none;">Due</text><rect class="c3-legend-item-event" x="161.703125" y="-5" width="54.4375" height="22" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="159.703125" y1="4" x2="169.703125" y2="4" stroke-width="10" style="stroke: rgb(100, 197, 177); pointer-events: none;"></line></g><g class="c3-legend-item c3-legend-item-Hold" style="visibility: visible; cursor: pointer; opacity: 1;"><text x="230.140625" y="9" style="pointer-events: none;">Hold</text><rect class="c3-legend-item-event" x="216.140625" y="-5" width="48.421875" height="22" style="fill-opacity: 0;"></rect><line class="c3-legend-item-tile" x1="214.140625" y1="4" x2="224.140625" y2="4" stroke-width="10" style="stroke: rgb(230, 137, 0); pointer-events: none;"></line></g></g><text class="c3-title" x="181.5" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 73.0625px; left: 214.25px;"><table class="c3-tooltip"><tbody><tr class="c3-tooltip-name--Done"><td class="name"><span style="background-color:#f1f1f1"></span>Done</td><td class="value">46.0%</td></tr></tbody></table></div></div>

                    <div class="row text-center mt-4">
                        <div class="col-6">
                            <h3 data-plugin="counterup">2,854</h3>
                            <p class="text-muted mb-0">Payment Done</p>
                        </div>
                        <div class="col-6">
                            <h3 data-plugin="counterup">22</h3>
                            <p class="text-muted mb-1">Payment Due</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var data = @json($tbs);
        var dataLabel = [];
        var dataContent = [];
        var dataTbs3= [];
        var dataTbs4= [];
        var dataTbs5 = [];
        var dataTbs6 = [];
        var dataTbs7 = [];
        var dataTbs8 = [];
        var dataTbs9 = [];
        var dataTbs10 = [];
        var dataTbs21 = [];
        var dataTbs22 = [];
        var dataTbs23 = [];
        var dataTbs24 = [];
        var dataTbs25 = [];
        for(var i=0; i<data.length; i++){
            var year = new Date(data[i]['created_at']);
            dataLabel.push(data[i]['bulan']+' '+year.getFullYear());
            dataTbs3.push(data[i]['tbs_3']);
            dataTbs4.push(data[i]['tbs_4']);
            dataTbs5.push(data[i]['tbs_5']);
            dataTbs6.push(data[i]['tbs_6']);
            dataTbs7.push(data[i]['tbs_7']);
            dataTbs8.push(data[i]['tbs_8']);
            dataTbs9.push(data[i]['tbs_9']);
            dataTbs10.push(data[i]['tbs_10']);
            dataTbs21.push(data[i]['tbs_21']);
            dataTbs22.push(data[i]['tbs_22']);
            dataTbs23.push(data[i]['tbs_23']);
            dataTbs24.push(data[i]['tbs_24']);
            dataTbs25.push(data[i]['tbs_25']);
        }
        var dataset = [
            {    
                label: 'TBS 3',
                data: dataTbs3,
                borderWidth: 1
            },
            {
                label: 'TBS 4',
                data: dataTbs4,
                borderWidth: 1
            },
            {
                label: 'TBS 5',
                data: dataTbs5,
                borderWidth: 1
            },
            {
                label: 'TBS 6',
                data: dataTbs6,
                borderWidth: 1
            },
            {
                label: 'TBS 7',
                data: dataTbs7,
                borderWidth: 1
            },
            {
                label: 'TBS 8',
                data: dataTbs8,
                borderWidth: 1
            },
            {
                label: 'TBS 9',
                data: dataTbs9,
                borderWidth: 1
            },
            {
                label: 'TBS 10',
                data: dataTbs10,
                borderWidth: 1
            },
            {
                label: 'TBS 21',
                data: dataTbs21,
                borderWidth: 1
            },
            {
                label: 'TBS 22',
                data: dataTbs22,
                borderWidth: 1
            },
            {
                label: 'TBS 23',
                data: dataTbs23,
                borderWidth: 1
            },
            {
                label: 'TBS 24',
                data: dataTbs24,
                borderWidth: 1
            },
            {
                label: 'TBS 25',
                data: dataTbs25,
                borderWidth: 1
            },
        ];
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
        type: 'line',
        data: {
            labels: dataLabel,
            datasets: dataset,
        },
        options: {
            title: {
                display: true,
                text: 'Polveri',
                fontSize: 18
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
        });
    </script>
@endsection