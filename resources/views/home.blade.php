<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Sep 2019 07:01:43 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Compass Bootstrap4 Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}" />
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/logo.svg" width="48" height="48" alt="Compass"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo.svg" width="30" alt="Compass"><span class="m-l-10">Compass</span></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>            
            <li class="hidden-sm-down">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <div class="menu-info">
                                    <h4>8 New Members joined</h4>
                                    <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                <div class="menu-info">
                                    <h4>4 Sales made</h4>
                                    <p> <i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> Deleted account</h4>
                                    <p> <i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> Changed name</h4>
                                    <p> <i class="zmdi zmdi-time"></i> 2 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> Commented your post</h4>
                                    <p> <i class="zmdi zmdi-time"></i> 4 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                <div class="menu-info">
                                    <h4><b>John</b> Updated status</h4>
                                    <p> <i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
                                <div class="menu-info">
                                    <h4>Settings Updated</h4>
                                    <p> <i class="zmdi zmdi-time"></i> Yesterday </p>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <div class="progress-container progress-primary">
                                    <span class="progress-badge">Footer display issue</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li> <a href="javascript:void(0);">
                                <div class="progress-container progress-info">
                                    <span class="progress-badge">Answer GitHub questions</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                            <span class="progress-value">35%</span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li> <a href="javascript:void(0);">
                                <div class="progress-container progress-success">
                                    <span class="progress-badge">Solve transition issue</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">
                                            <span class="progress-value">72%</span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li><a href="javascript:void(0);">
                                <div class="progress-container">
                                    <span class="progress-badge"> Create new dashboard</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="progress-value">45%</span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li> <a href="javascript:void(0);">
                                <div class="progress-container progress-warning">
                                    <span class="progress-badge">Panding Project</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                            <span class="progress-value">29%</span>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            <li><a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>UI UX Designer</small>                        
                    </div>
                    <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="sign-in.html" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">MAIN</li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li class="active"><a href="index-2.html">Main</a> </li>
                    <li><a href="dashboard-rtl.html">RTL</a></li>
                    <li><a href="index2.html">Horizontal</a></li>
                    <li><a href="ec-dashboard.html">Ecommerce</a></li>
                    <li><a href="blog-dashboard.html">Blog</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Inbox</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="events.html">Calendar</a></li>
					<li><a href="file-dashboard.html">File Manager</a></li>
                    <li><a href="contact.html">Contact list</a></li>
                    <li><a href="blog-dashboard.html">Blog</a></li>
                </ul>
            </li>            
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li> <a href="ui_kit.html">UI KIT</a> </li>                    
                    <li> <a href="alerts.html">Alerts</a> </li>                    
                    <li> <a href="collapse.html">Collapse</a> </li>
                    <li> <a href="colors.html">Colors</a> </li>
                    <li> <a href="dialogs.html">Dialogs</a> </li>
                    <li> <a href="icons.html">Icons</a> </li>                    
                    <li> <a href="list-group.html">List Group</a> </li>
                    <li> <a href="media-object.html">Media Object</a> </li>
                    <li> <a href="modals.html">Modals</a> </li>
                    <li> <a href="notifications.html">Notifications</a></li>                    
                    <li> <a href="progressbars.html">Progress Bars</a></li>
                    <li> <a href="range-sliders.html">Range Sliders</a></li>
                    <li> <a href="sortable-nestable.html">Sortable & Nestable</a></li>
                    <li> <a href="tabs.html">Tabs</a></li>
                    <li> <a href="waves.html">Waves</a></li>
                </ul>
            </li>
            <li class="header">FORMS, CHARTS, TABLES</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Form Elements</a> </li>
                    <li><a href="advanced-form-elements.html">Advanced Form Elements</a> </li>
                    <li><a href="form-examples.html">Form Examples</a> </li>
                    <li><a href="form-validation.html">Form Validation</a> </li>
                    <li><a href="form-wizard.html">Form Wizard</a> </li>
                    <li><a href="form-editors.html">Editors</a> </li>
                    <li><a href="form-upload.html">File Upload</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> </a>
                <ul class="ml-menu">                        
                    <li> <a href="normal-tables.html">Normal Tables</a> </li>
                    <li> <a href="jquery-datatable.html">Jquery Datatables</a> </li>
                    <li> <a href="editable-table.html">Editable Tables</a> </li>
                    <li> <a href="footable.html">Foo Tables</a> </li>
                    <li> <a href="table-color.html">Tables Color</a> </li>
                </ul>
            </li>            
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                <ul class="ml-menu">
                    <li> <a href="morris.html">Morris</a> </li>
                    <li> <a href="flot.html">Flot</a> </li>
                    <li> <a href="chartjs.html">ChartJS</a> </li>
                    <li> <a href="sparkline.html">Sparkline</a> </li>
                    <li> <a href="jquery-knob.html">Jquery Knob</a> </li>
                </ul>
            </li>
            <li class="header">EXTRA COMPONENTS</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li> <a href="ec-dashboard.html">Dashboard</a></li>
                    <li> <a href="ec-product.html">Product</a></li>
                    <li> <a href="ec-product-List.html">Product List</a></li>
                    <li> <a href="ec-product-detail.html">Product detail</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                <ul class="ml-menu">
                    <li><a href="widgets-app.html">Apps Widgets</a></li>
                    <li><a href="widgets-data.html">Data Widgets</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a> </li>
                    <li><a href="sign-up.html">Sign Up</a> </li>
                    <li><a href="forgot-password.html">Forgot Password</a> </li>
                    <li><a href="404.html">Page 404</a> </li>
                    <li><a href="500.html">Page 500</a> </li>
                    <li><a href="page-offline.html">Page Offline</a> </li>
                    <li><a href="locked.html">Locked Screen</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a> </li>
                    <li> <a href="image-gallery.html">Image Gallery</a> </li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> </a>
                <ul class="ml-menu">
                    <li> <a href="google.html">Google Map</a> </li>
                    <li> <a href="yandex.html">YandexMap</a> </li>
                    <li> <a href="jvectormap.html">jVectorMap</a> </li>
                </ul>
            </li>
            <li class="header">Extra</li>
            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">Traffic this Month</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">Server Load</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active slideRight" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan" class="active">
                            <div class="cyan"></div>                    
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>                    
                        </li>
                    </ul>                    
                </div>
                <div class="card">
                    <h6>Left Menu</h6>
                    <ul class="list-unstyled theme-light-dark">
                        <li>
                            <div class="t-light btn btn-default btn-simple btn-round">Light</div>
                        </li>
                        <li>
                            <div class="t-dark btn btn-default btn-round">Dark</div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Report Panel Usage</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>                        
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked="">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Account Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox6" type="checkbox" checked="">
                                <label for="checkbox6">Location Permission</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>                
        </div>       
        <div class="tab-pane right_chat pullUp" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <div class="search">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia</span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson</span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">John</span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander</span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
                <div class="card">
                    <h6>Contacts</h6>
                    <ul class="list-unstyled">
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane slideRight" id="activity">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Recent Activity</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-cake bg-blue"></i>                    
                                <div class="info">
                                    <h4>Admin Birthday</h4>                    
                                    <small>Will be Dec 21th</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-file-text bg-red"></i>
                                <div class="info">
                                    <h4>Code Change</h4>                    
                                    <small>Will be Dec 22th</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                <div class="info">
                                    <h4>Add New Contact</h4>                    
                                    <small>Will be Dec 23th</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-email bg-amber"></i>
                                <div class="info">
                                    <h4>New Email</h4>
                                    <small>Will be July 28th</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Project Status</h6>
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">eCommerce Website</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86%</span>
                            </div>
                        </div>                        
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small>Team</small></li>
                            <li>
                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                            </li>                            
                        </ul>
                    </div>
                    <div class="progress-container">
                        <span class="progress-badge">iOS Game Dev</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                <span class="progress-value">45%</span>
                            </div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small>Team</small></li>
                            <li>
                                <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                            </li>
                        </ul>
                    </div>
                    <div class="progress-container progress-warning">
                        <span class="progress-badge">Home Development</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                <span class="progress-value">29%</span>
                            </div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small>Team</small></li>
                            <li>
                                <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                            </li>
                            <li>
                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Design Team</h2></li>
                <li>
                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>                       
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="#">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard
                <small class="text-muted">Welcome to Compass</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card widget_2">
            <ul class="row clearfix list-unstyled m-b-0">
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="m-t-0">Traffic</h5>
                                <p class="text-small">4% higher than last month</p>
                            </div>
                            <div class="col-5 text-right">
                                <h2 class="">20</h2>
                                <small class="info">of 1Tb</small>
                            </div>
                            <div class="col-12">
                                <div class="progress m-t-20">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="m-t-0">Sales</h5>
                                <p class="text-small">6% higher than last month</p>
                            </div>
                            <div class="col-5 text-right">
                                <h2 class="">12%</h2>
                                <small class="info">of 100</small>
                            </div>
                            <div class="col-12">
                                <div class="progress m-t-20">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="m-t-0">Email</h5>
                                <p class="text-small">Total Registered email</p>
                            </div>
                            <div class="col-5 text-right">
                                <h2 class="">39</h2>
                                <small class="info">of 100</small>
                            </div>
                            <div class="col-12">
                                <div class="progress m-t-20">
                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 col-sm-12">
                    <div class="body">
                        <div class="row">
                            <div class="col-7">
                                <h5 class="m-t-0">Domians</h5>
                                <p class="text-small">Total registered Domain</p>
                            </div>
                            <div class="col-5 text-right">
                                <h2 class="">8</h2>
                                <small class="info">of 10</small>
                            </div>
                            <div class="col-12">
                                <div class="progress m-t-20">
                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Sales</strong> Report</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row text-center">
                            <div class="col-sm-3 col-6">
                                <h4 class="m-t-0">$ 106 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                <p class="text-muted"> Today's Sales</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="m-t-0">$ 907 <i class="zmdi zmdi-trending-down col-red"></i></h4>
                                <p class="text-muted">This Week's Sales</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="m-t-0">$ 4210 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                <p class="text-muted">This Month's Sales</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="m-t-0">$ 67,000 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                <p class="text-muted">This Year's Sales</p>
                            </div>
                        </div>
                        <div id="area_chart" class="graph"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial1" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#666" readonly>                        
                        <h6 class="m-t-20">Satisfaction Rate</h6>
                        <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                        <h6 class="m-t-20">Project Panding</h6>
                        <p class="displayblock m-b-0">13% Average <i class="zmdi zmdi-trending-down"></i></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                        <h6 class="m-t-20">Productivity Goal</h6>
                        <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                        <h6 class="m-t-20">Total Revenue</h6>
                        <p class="displayblock m-b-0">54% Average <i class="zmdi zmdi-trending-up"></i></p>
                        
                    </div>
                </div>
            </div>            
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-8">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Visitors</strong> Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body">
                        <div id="world-map-markers" class="jvector-map m-b-5"></div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from america</span>
                                    <div class="progress">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from Canada</span>
                                    <div class="progress">
                                        <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from asia</span>
                                    <div class="progress">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from america</span>
                                    <div class="progress">
                                        <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from Canada</span>
                                    <div class="progress">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="progress-container m-b-20">
                                    <span class="progress-badge">visitor from asia</span>
                                    <div class="progress">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Browser</strong> Usage</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="donut_chart" class="dashboard-donut-chart"></div>
                        <table class="table m-t-15 m-b-0">
                            <tbody>
                                <tr>                                   
                                    <td>Chrome</td>
                                    <td>6985</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td>2697</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Safari</td>
                                    <td>3597</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>Firefox</td>
                                    <td>2145</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Opera</td>
                                    <td>1854</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="card project_list">
                    <div class="header">
                        <h2><strong>Products</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>                                       
                                        <th style="width:50px;">Assigned</th>
                                        <th></th>
                                        <th>Name</th>                                        
                                        <th class="hidden-md-down">Team</th>
                                        <th class="hidden-md-down" width="150px">Status</th>
                                        <th>Priority</th>
                                        <th>Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar1.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="#">Jonathan Deo</a><br>
                                            <small>Project Lead</small>
                                        </td>
                                        <td>
                                            <strong>eCommerce Website</strong><br>
                                            <small>Cost: $215</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">                                               
                                                <li>
                                                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                </li>                            
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info">Medium</span></td>
                                        <td>25 Dec 2017</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar2.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="#">Jannie Dvis</a><br>
                                            <small>Design Lead</small>
                                        </td>
                                        <td>
                                            <strong>One Page Landing</strong><br>
                                            <small>Cost: $100</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">                                               
                                                <li>
                                                    <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                </li>                                                                                                                         
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">High</span></td>
                                        <td>21 Dec 2017</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar10.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="#">Petere Husen</a><br>
                                            <small>Swift Developer</small>
                                        </td>
                                        <td>
                                            <strong>iOS Game</strong><br>
                                            <small>Cost: $890</small>
                                            
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">                                               
                                                <li>
                                                    <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                </li>                            
                                                <li>
                                                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                </li>                                                
                                            </ul>
                                        </td>
                                       <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info">Medium</span></td>
                                        <td>26 Dec 2017</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar4.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="#">John Deo</a><br>
                                            <small>UI UX Lead</small>
                                        </td>
                                        <td>
                                            <strong>Digital Marketing</strong><br>
                                            <small>Cost: $350</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">                                               
                                                <li>
                                                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                </li>                                                
                                                <li>
                                                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                </li>                            
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-warning">Panding</span></td>
                                        <td>12 Jan 2018</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="assets/images/xs/avatar5.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="#">Emma Welson</a><br>
                                            <small>Angular Developer</small>
                                        </td>
                                        <td>
                                            <strong>Hospital Admin</strong><br>
                                            <small>Hire: $45 Per Hour</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info  margin-0">                                               
                                                <li>
                                                    <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar1.jpg" alt="Avatar">
                                                </li>
                                                <li>
                                                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                </li>                            
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-primary">Low</span></td>
                                        <td>20 Jan 2018</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card weather2">
                    <div class="city-selected body l-salmon">
                        <div class="row">
                            <div class="info col-7">
                                <div class="city"><span>City:</span> New York</div>
                                <div class="night">Day - 12:07 PM</div>
                                <div class="temp"><h2>34°</h2></div>									
                            </div>
                            <div class="icon col-5">
                                <img src="assets/images/weather/summer.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                            <td>Wind</td>
                            <td class="font-medium">ESE 17 mph</td>
                        </tr>
                        <tr>
                            <td>Humidity</td>
                            <td class="font-medium">72%</td>
                        </tr>
                        <tr>
                            <td>Pressure</td>
                            <td class="font-medium">25.56 in</td>
                        </tr>
                        <tr>
                            <td>Cloud Cover</td>
                            <td class="font-medium">80%</td>
                        </tr>
                        <tr>
                            <td>Ceiling</td>
                            <td class="font-medium">25280 ft</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item text-center active">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Monday</p>
                                            <img src="assets/images/weather/rain.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Tuesday</p>
                                            <img src="assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Wednesday</p>
                                            <img src="assets/images/weather/wind.svg" alt="">
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                            <div class="carousel-item text-center">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Thursday</p>
                                            <img src="assets/images/weather/sky.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Friday</p>
                                            <img src="assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Saturday</p>
                                            <img src="assets/images/weather/summer.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>							
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <ul class="row profile_state list-unstyled">
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-eye col-amber"></i>
                                        <h4>2,365</h4>
                                        <span>Post View</span>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-thumb-up col-blue"></i>
                                        <h4>365</h4>
                                        <span>Likes</span>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-comment-text col-red"></i>
                                        <h4>65</h4>
                                        <span>Comments</span>
                                    </div>
                                </li>
                                <li class="col-lg-3 col-md-3 col-6">
                                    <div class="body">
                                        <i class="zmdi zmdi-account text-success"></i>
                                        <h4>2,055</h4>
                                        <span>Profile Views</span>
                                    </div>
                                </li>                      
                            </ul>
                        </div>
                    </div>            
                    <div class="col-lg-6 col-md-6">
                        <div class="card activities">
                            <div class="header">
                                <h2><strong>Activities</strong> <small>Recent user Activities</small></h2>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled activity">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-cake bg-blue"></i>                    
                                            <div class="info">
                                                <h4>Admin Birthday</h4>                    
                                                <small>Will be Dec 21th</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-file-text bg-red"></i>
                                            <div class="info">
                                                <h4>Code Change</h4>                    
                                                <small>Will be Dec 22th</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                            <div class="info">
                                                <h4>Add New Contact</h4>                    
                                                <small>Will be Dec 23th</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-email bg-amber"></i>
                                            <div class="info">
                                                <h4>New Email</h4>
                                                <small>Will be July 28th</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                            <div class="info">
                                                <h4>Add New Contact</h4>                    
                                                <small>Will be Dec 23th</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Sales</strong> Overview</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                            <li><a href="javascript:void(0);">Edit</a></li>
                                            <li><a href="javascript:void(0);">Delete</a></li>
                                            <li><a href="javascript:void(0);">Report</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div id="m_area_chart2" style="height: 290px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->
<script src="{{asset('assets/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/index.js')}}"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Sep 2019 07:02:41 GMT -->
</html>