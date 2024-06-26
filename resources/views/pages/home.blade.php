@extends('layout.app')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Horizontal Menu Dashboad - User
                <small class="text-muted">Welcome to Compass</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob" data-skin="tron" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#26dad2" readonly>                        
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
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card product-report">
                    <div class="header">
                        <h2><strong>Product</strong> Report</h2>
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
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">                               
                                <h3 class="counter m-b-0">$4,516</h3>
                                <small class="text-muted">Sales Report</small>
                                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="21px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="rgb(134, 139, 239)">7,5,3,1,5,9,8,5,2,6,5,4,2,5,8,4,5,6,3,5,7,8</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">
                                <h3 class="counter m-b-0">$6,481</h3>
                                <small class="text-muted">Annual Revenue </small>
                                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="21px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="rgb(25, 161, 183)">2,5,8,4,5,6,3,5,7,8,4,6,7,5,3,1,5,9,8,5,5,4</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">
                                <h3 class="counter m-b-0">$3,915</h3>
                                <small class="text-muted">Monthly Revenue</small>
                                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="21px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="rgb(254, 191, 15)">6,5,4,3,2,1,9,8,7,8,5,2,2,5,8,4,5,6,7,8,4,6</div>
                            </div>
                        </div>
                        <div id="m_area_chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Inbox</strong></h2>
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
                        <ul class="inbox-widget list-unstyled clearfix">
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/xs/avatar1.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Aaron	Enlightened</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/xs/avatar2.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Alvin Doe</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/xs/avatar3.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Austin</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/xs/avatar4.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Benjamin</p>
                                        <p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/xs/avatar5.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Broderick</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card member-card">
                    <div class="header l-blue">
                        <h4 class="m-t-10">Eliana Smith</h4>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                        <img src="assets/images/lg/avatar2.jpg" class="rounded-circle" alt="profile-image">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                <a title="facebook" href="#">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                </li>
                                <li>
                                <a title="twitter" href="#">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                                </li>
                                <li>
                                <a title="instagram" href="javascript:void(0);">
                                    <i class="zmdi zmdi-instagram"></i>
                                </a>
                                </li>
                            </ul>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        </div>                        
                        <hr>                        
                        <div class="row">
                            <div class="col-4">
                                <h5>18</h5>
                                <small>Files</small>
                            </div>
                            <div class="col-4">
                                <h5>2GB</h5>
                                <small>Used</small>
                            </div>
                            <div class="col-4">
                                <h5>65,6$</h5>
                                <small>Spent</small>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                    data-offset="90" data-width="100%" data-height="40px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                    data-fill-Color="rgba(0, 0, 0, 0.1)"> 1,6,2,8,4,7,3,6,2</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2><strong>Social</strong> Media</h2>                        
                    </div>
                    <div class="body">
                        <div class="table-responsive social_media_table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Media</th>
                                        <th>Name</th>
                                        <th>Like</th>                                                                                
                                        <th>Comments</th>
                                        <th>Share</th>
                                        <th>Members</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="social_icon linkedin"><i class="zmdi zmdi-linkedin"></i></span>
                                        </td>
                                        <td><span class="list-name">Linked In</span>
                                            <span class="text-muted">Florida, United States</span>
                                        </td>
                                        <td>19K</td>
                                        <td>14K</td>
                                        <td>10K</td>
                                        <td>
                                            <span class="badge badge-success">2341</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon twitter-table"><i class="zmdi zmdi-twitter"></i></span>
                                        </td>
                                        <td><span class="list-name">Twitter</span>
                                            <span class="text-muted">Arkansas, United States</span>
                                        </td>
                                        <td>7K</td>
                                        <td>11K</td>
                                        <td>21K</td>
                                        <td>
                                            <span class="badge badge-success">952</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon facebook"><i class="zmdi zmdi-facebook"></i></span>
                                        </td>
                                        <td><span class="list-name">Facebook</span>
                                            <span class="text-muted">Illunois, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>8K</td>
                                        <td>
                                            <span class="badge badge-success">6127</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon google"><i class="zmdi zmdi-google-plus"></i></span>
                                        </td>
                                        <td><span class="list-name">Google Plus</span>
                                            <span class="text-muted">Arizona, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>154</td>
                                        <td>
                                            <span class="badge badge-success">325</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="social_icon youtube"><i class="zmdi zmdi-youtube-play"></i></span>
                                        </td>
                                        <td><span class="list-name">YouTube</span>
                                            <span class="text-muted">Alaska, United States</span>
                                        </td>
                                        <td>15K</td>
                                        <td>18K</td>
                                        <td>200</td>
                                        <td>
                                            <span class="badge badge-success">160</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card agent">
                    <div class="agent-avatar"> <a href="agent-profile.html"> <img src="assets/images/lg/avatar1.jpg" class="img-fluid " alt=""> </a> </div>
                    <div class="agent-content">
                        <div class="agent-name">
                            <h4><a href="agent-profile.html">Tim Hank</a></h4>
                            <span>Fairview, Texas</span>
                            <ul class="list-unstyled team-info m-b-0">
                                <li class="m-r-15"><small>Team</small></li>                                
                                <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar9.jpg" alt="Avatar"></li>                            
                            </ul>
                        </div>
                        <ul class="agent-contact-details">
                            <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                            <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card agent">
                    <div class="agent-avatar"> <a href="agent-profile.html"> <img src="assets/images/lg/avatar2.jpg" class="img-fluid " alt=""> </a> </div>
                    <div class="agent-content">
                        <div class="agent-name">
                            <h4><a href="agent-profile.html">Gary Camara</a></h4>
                            <span>Bristol, Pennsylvania</span>
                            <ul class="list-unstyled team-info m-b-0">
                                <li class="m-r-15"><small>Team</small></li>
                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>                            
                            </ul>
                        </div>
                        <ul class="agent-contact-details">
                            <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                            <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card agent">
                    <div class="agent-avatar"> <a href="agent-profile.html"> <img src="assets/images/lg/avatar3.jpg" class="img-fluid " alt=""> </a> </div>
                    <div class="agent-content">
                        <div class="agent-name">
                            <h4><a href="agent-profile.html">Hossein Shams</a></h4>
                            <span>Springfield, Florida</span>
                            <ul class="list-unstyled team-info m-b-0">
                                <li class="m-r-15"><small>Team</small></li>
                                <li><img src="assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            </ul>
                        </div>
                        <ul class="agent-contact-details">
                            <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                            <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card agent">
                    <div class="agent-avatar"> <a href="agent-profile.html"> <img src="assets/images/lg/avatar4.jpg" class="img-fluid " alt=""> </a> </div>
                    <div class="agent-content">
                        <div class="agent-name">
                            <h4><a href="agent-profile.html">Tom Wilson</a></h4>
                            <span>Washington, Illinois</span>
                            <ul class="list-unstyled team-info m-b-0">
                                <li class="m-r-15"><small>Team</small></li>                               
                                <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            </ul>
                        </div>
                        <ul class="agent-contact-details">
                            <li><i class="zmdi zmdi-phone"></i><span>(123) 123-456</span></li>
                            <li><i class="zmdi zmdi-email"></i>info@example.com</li>
                        </ul>
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a class="gplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
           <div class="col-lg-12 col-md-12">
               <div class="card ">
                   <div class="header">
                       <h2><strong>Sales</strong> Overview</h2>
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
                   <div class="body table-responsive">
                       <table class="table table-hover table-borderless m-b-0">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th style="width:40%;">Product</th>
                                   <th class="number">Price</th>
                                   <th style="width:20%;">Date</th>
                                   <th style="width:20%;">Status</th>
                                   <th style="width:5%;" class="actions"></th>
                               </tr>
                           </thead>
                           <tbody class="no-border-x">
                               <tr>
                                   <td>1</td>
                                   <td>Sony Xperia M4</td>
                                   <td class="number">$149</td>
                                   <td>Aug 23, 2017</td>
                                   <td><span class="badge badge-success">Completed</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>Apple iPhone 6</td>
                                   <td class="number">$535</td>
                                   <td>Aug 20, 2017</td>
                                   <td><span class="badge badge-success">Completed</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>Samsung Galaxy S7</td>
                                   <td class="number">$583</td>
                                   <td>Aug 18, 2017</td>
                                   <td><span class="badge badge-warning">Pending</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>HTC One M9</td>
                                   <td class="number">$350</td>
                                   <td>Aug 15, 2017</td>
                                   <td><span class="badge badge-warning">Pending</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>
                               <tr>
                                   <td>5</td>
                                   <td>Sony Xperia Z5</td>
                                   <td class="number">$495</td>
                                   <td>Aug 13, 2017</td>
                                   <td><span class="badge badge-danger">Cancelled</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>
                               <tr>
                                   <td>6</td>
                                   <td>Samsung Galaxy S9</td>
                                   <td class="number">$583</td>
                                   <td>Aug 18, 2017</td>
                                   <td><span class="badge badge-warning">Pending</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>
                               <tr>
                                   <td>7</td>
                                   <td>HTC One M13</td>
                                   <td class="number">$350</td>
                                   <td>Aug 15, 2017</td>
                                   <td><span class="badge badge-warning">Pending</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>
                               <tr>
                                   <td>8</td>
                                   <td>Sony Xperia M4</td>
                                   <td class="number">$149</td>
                                   <td>Aug 23, 2017</td>
                                   <td><span class="badge badge-success">Completed</span></td>
                                   <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                               </tr>                               
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>           
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <p class="m-b-0">© 2017 Compass Admin by <a href="http://thememakker.com/" target="black">ThemeMakker</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    
@endsection

@push('meta')
<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
<meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">
<title>Save Big with Online Promo Codes - Coupons Percent Off</title>
@endpush