<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="../vendor/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fileUploadstyle.css">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg>
                <div class="brand-title">
                    <h2 class="">FELIX.</h2>
                    <span class="brand-sub-title">Company Dashboard</span>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>

                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="images/user.jpg" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="page-error-404.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-info-circle"></i>
                            <span class="nav-text">Apps</span>
                        </a>

                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-text">Charts</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul> -->
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fab fa-bootstrap"></i>
                            <span class="nav-text">Bootstrap</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alert.html">Alert</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-card.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-popover.html">Popover</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>

                        </ul> -->
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-heart"></i>
                            <span class="nav-text">Plugins</span>
                        </a>

                    </li>
                    <li><a href="widget-basic.html" class="" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                             <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation.html">Form Validate</a></li> 
                        </ul> -->
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul> -->
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-clone"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul> 
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="empty-page.html">Empty Page</a></li>
                        </ul> 
                    </li>
                </ul>-->




            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-xl-3 col-xxl-4">
                                        <div class="p-4">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div>
                                                    <span class="fs-24 font-w700 mb-0 me-2">Chat</span>
                                                    <!-- <span class="fs-18 font-w600 text-light">(2,456)</span> -->
                                                </div>
                                                <!-- <div class="plus-bx">
                                                    <a href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                                                </div> -->
                                            </div>
                                            <div class="d-flex align-items-center project-tab message-tab">
                                                <!-- <div class="card-tabs">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#All" role="tab">All</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#Social" role="tab">Social</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#Updates" role="tab">Updates</a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="dlab-scroll chat-sidebar" id="chatSidebar">
                                            <span class="fs-16">RECENT MESSAGE</span>
                                            <div class="chat-bx d-flex active mb-2 border-bottom">

                                            </div>
                                            <div class="chat-bx d-flex border-bottom">
                                                <div class="group-pic">
                                                    <div class="d-flex">
                                                        <img src="images/group/g1.jpg" alt="">
                                                        <img src="images/group/g2.jpg" alt="">
                                                    </div>
                                                    <div class="d-flex">
                                                        <img src="images/group/g3.jpg" alt="">
                                                        <img src="images/group/g4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex mb-1 align-items-center">
                                                        <span class="fs-16 text-black">Fillow Designer Team</span>
                                                        <span class="fs-12 ms-auto">2m ago</span>
                                                    </div>
                                                    <p class="mb-0">Hey Jenny, don’t forget to prepare prototype for next week</p>
                                                </div>
                                            </div>
                                            <div class="recent-msg py-3 chat-bx">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-16">RECENT MESSAGE</span>
                                                    <div class="dropdown ms-2">
                                                        <div class="btn-link" data-bs-toggle="dropdown">
                                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                                <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                                <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                            </svg>
                                                        </div>
                                                        <!-- <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                        </div> -->
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="chat-bx d-flex border-bottom">
                                                <div class="chat-img">
                                                    <img src="images/contacts/pic11.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex mb-1 align-items-center">
                                                        <span class="fs-16 text-black">Rayna Carder</span>
                                                        <span class="fs-12 ms-auto">2m ago</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-0">I remember that project due is tomorrow.</p>
                                                        <!-- <span>
                                                            <svg class="mt-4" width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0)">
                                                                    <path d="M16.4935 6.34536C16.0279 5.87458 15.2693 5.86865 14.7964 6.33213L5.92643 15.0987L2.07056 11.1069C1.61067 10.6276 0.849313 10.6118 0.370044 11.0717C-0.109276 11.5316 -0.125009 12.293 0.334881 12.7723C0.336964 12.7744 0.338996 12.7765 0.34108 12.7787L5.0425 17.6508C5.26749 17.8804 5.57501 18.0103 5.89643 18.0116H5.90966C6.22499 18.0107 6.52734 17.8858 6.75156 17.6641L16.4826 8.04239C16.9528 7.57614 16.9576 6.8176 16.4935 6.34536Z" fill="#886CC0"></path>
                                                                    <path d="M12.2591 17.6509C12.4835 17.8798 12.79 18.0097 13.1106 18.0117H13.1238C13.4392 18.0107 13.7415 17.8859 13.9657 17.6641L23.6969 8.0424C24.1379 7.54574 24.0929 6.78557 23.5963 6.34449C23.146 5.94461 22.4695 5.93935 22.0131 6.33215L13.1467 15.0987L12.8303 14.7703C12.3705 14.291 11.6092 14.2752 11.1298 14.7351C10.6505 15.195 10.6347 15.9563 11.0946 16.4356C11.0967 16.4378 11.0988 16.44 11.1009 16.4421L12.2591 17.6509Z" fill="#886CC0"></path>
                                                                </g>
                                                                <defs>
                                                                    <clippath id="clip0">
                                                                        <rect width="24" height="24" fill="white"></rect>
                                                                    </clippath>
                                                                </defs>
                                                            </svg>
                                                        </span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-bx d-flex border-bottom">
                                                <div class="chat-img">
                                                    <img src="images/contacts/pic22.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex mb-1 align-items-center">
                                                        <span class="fs-16 text-black">Skylar Dorwart</span>
                                                        <span class="fs-12 ms-auto">2m ago</span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">I remember that project due is tomorrow.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-bx d-flex border-bottom">
                                                <div class="chat-img">
                                                    <img src="images/contacts/pic33.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex mb-1 align-items-center">
                                                        <span class="fs-16 text-black">Kierra Curtis</span>
                                                        <span class="fs-12 ms-auto">2m ago</span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">I remember that project due is tomorrow.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-bx d-flex border-bottom">
                                                <div class="chat-img">
                                                    <img src="images/contacts/pic33.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex mb-1 align-items-center">
                                                        <span class="fs-16 text-black">Kierra Curtis</span>
                                                        <span class="fs-12 ms-auto">2m ago</span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">I remember that project due is tomorrow.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-xxl-8">
                                        <div class="d-flex justify-content-between align-items-center border-bottom px-4 pt-4 flex-wrap">
                                            <div class="d-flex align-items-center pb-3">
                                                <div class="fillow-design">
                                                    <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                                                </div>
                                                <div class="ms-3">
                                                    <h4 class="fs-20 font-w700">Fillow Designer Team</h4>
                                                    <span>We share about daily life as designer in the world</span>
                                                </div>
                                            </div>
                                            <div class="activity d-flex align-items-center pb-3">
                                                <ul class="d-flex">
                                                    <li><a href="javascript:void(0);"><i class="fas fa-video"></i></a>
                                                    <li>
                                                    <li><a href="javascript:void(0);"><i class="fas fa-search"></i></a>
                                                    <li>
                                                    <li><a href="javascript:void(0);"><i class="fas fa-star text-orange"></i></a>
                                                    <li>
                                                    </li>
                                                </ul>
                                                <div class="dropdown ms-2">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
                                                            <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
                                                            <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-box-area dlab-scroll chat-box-area" id="chatArea">
                                            <div class="chat-box-area dz-scroll" id="chartBox">
                                                <div class="media my-4  justify-content-start align-items-start">
                                                    <div class="image-box me-sm-4 me-2">
                                                        <img src="images/group/g1.jpg" alt="" class="rounded-circle img-1">
                                                        <span class="active1"></span>
                                                    </div>
                                                    <div class="message-received">
                                                        <p class="mb-1">
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat
                                                        </p>
                                                        <span class="fs-12">Sunday, October 24th, 2020 at 4.30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="media my-4  justify-content-start align-items-start">
                                                    <div class="image-box me-sm-4 me-2">
                                                        <img src="images/group/g1.jpg" alt="" class="rounded-circle img-1">
                                                        <span class="active1"></span>
                                                    </div>
                                                    <div class="message-received">
                                                        <p class="mb-1 me-5">
                                                            Hey, check my design update last night. Tell me what you think and if that is OK
                                                        </p>
                                                        <span class="fs-12">Sunday, October 24th, 2020 at 4.30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="media mb-4 justify-content-end align-items-end">
                                                    <div class="message-sent">
                                                        <p class="mb-1">
                                                            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                                        </p>
                                                        <span class="fs-12">9.30 AM</span>
                                                    </div>
                                                    <div class="image-box ms-sm-4 ms-2 mb-4">
                                                        <img src="images/contacts/3.jpg" alt="" class="rounded-circle img-1">
                                                        <span class="active"></span>
                                                    </div>
                                                </div>
                                                <div class="media mb-4 justify-content-end align-items-end">
                                                    <div class="message-sent">
                                                        <p class="mb-1">
                                                            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                                                        </p>
                                                        <span class="fs-12">9.30 AM</span>
                                                    </div>
                                                    <div class="image-box ms-sm-4 ms-2 mb-4">
                                                        <img src="images/contacts/3.jpg" alt="" class="rounded-circle img-1">
                                                        <span class="active"></span>
                                                    </div>
                                                </div>
                                                <div class="media my-4  justify-content-start align-items-start">
                                                    <div class="image-box me-sm-4 me-2">
                                                        <img src="images/group/g1.jpg" alt="" class="rounded-circle img-1">
                                                        <span class="active1"></span>
                                                    </div>
                                                    <div class="message-received">
                                                        <p class="mb-1 me-5">
                                                            Hey, check my design update last night. Tell me what you think and if that is OK
                                                        </p>
                                                        <span class="fs-12">Sunday, October 24th, 2020 at 4.30 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0 type-massage">
                                            <div class="input-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="I think we should get that project in this month"></textarea>
                                            </div>
                                            <div class="input-group-append d-flex justify-content-between flex-wrap">
                                                <div>
                                                    <button type="button" class="btn pr-0">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.1203 5.03707C13.662 4.98187 12.5048 4.99997 12.0003 4.99997V2.99997C12.0001 2.82307 11.953 2.64939 11.8638 2.49661C11.7746 2.34384 11.6465 2.21744 11.4926 2.1303C11.3387 2.04315 11.1644 1.99838 10.9875 2.00053C10.8106 2.00269 10.6374 2.0517 10.4857 2.14257L2.48567 6.94257C2.3378 7.03156 2.21546 7.15728 2.13054 7.30751C2.04561 7.45775 2.00098 7.62739 2.00098 7.79997C2.00098 7.97255 2.04561 8.14219 2.13054 8.29243C2.21546 8.44266 2.3378 8.56838 2.48567 8.65737L10.4857 13.4574C10.6374 13.5482 10.8106 13.5972 10.9875 13.5994C11.1644 13.6016 11.3387 13.5568 11.4926 13.4696C11.6465 13.3825 11.7746 13.2561 11.8638 13.1033C11.953 12.9506 12.0001 12.7769 12.0003 12.6V11H14.0003C15.9303 11 18.9903 12.6973 18.9903 17.25C18.9908 17.4696 19.0635 17.6829 19.1972 17.857C19.3309 18.0312 19.5183 18.1566 19.7303 18.2137C19.9423 18.2709 20.1672 18.2568 20.3704 18.1735C20.5736 18.0902 20.7437 17.9424 20.8546 17.7529C21.5751 16.5077 21.9672 15.0998 21.9942 13.6614C22.0211 12.223 21.682 10.8014 21.0087 9.53007C20.3354 8.25873 19.35 7.17941 18.1451 6.39347C16.9401 5.60754 15.5551 5.14079 14.1203 5.03707Z" fill="#717579"></path>
                                                        </svg>

                                                    </button>
                                                    <button type="button" class="btn">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.87973 5.03707C10.338 4.98187 11.4952 4.99997 11.9997 4.99997V2.99997C11.9999 2.82307 12.047 2.64939 12.1362 2.49661C12.2254 2.34384 12.3535 2.21744 12.5074 2.1303C12.6613 2.04315 12.8356 1.99838 13.0125 2.00053C13.1894 2.00269 13.3626 2.0517 13.5143 2.14257L21.5143 6.94257C21.6622 7.03156 21.7845 7.15728 21.8695 7.30751C21.9544 7.45775 21.999 7.62739 21.999 7.79997C21.999 7.97255 21.9544 8.14219 21.8695 8.29243C21.7845 8.44266 21.6622 8.56838 21.5143 8.65737L13.5143 13.4574C13.3626 13.5482 13.1894 13.5972 13.0125 13.5994C12.8356 13.6016 12.6613 13.5568 12.5074 13.4696C12.3535 13.3825 12.2254 13.2561 12.1362 13.1033C12.047 12.9506 11.9999 12.7769 11.9997 12.6V11H9.99973C8.06973 11 5.00973 12.6973 5.00973 17.25C5.00923 17.4696 4.93651 17.6829 4.80278 17.857C4.66905 18.0312 4.48174 18.1566 4.26974 18.2137C4.05773 18.2709 3.83279 18.2568 3.62962 18.1735C3.42644 18.0902 3.2563 17.9424 3.14543 17.7529C2.42495 16.5077 2.0328 15.0998 2.00583 13.6614C1.97886 12.223 2.31796 10.8014 2.99125 9.53007C3.66455 8.25873 4.64997 7.17941 5.85493 6.39347C7.05989 5.60754 8.44486 5.14079 9.87973 5.03707Z" fill="#717579"></path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M20 1H4C3.46957 1 2.96086 1.21071 2.58579 1.58579C2.21071 1.96086 2 2.46957 2 3V7C2 7.53043 2.21071 8.03914 2.58579 8.41421C2.96086 8.78929 3.46957 9 4 9C4.53043 9 5.03914 8.78929 5.41421 8.41421C5.78929 8.03914 6 7.53043 6 7V5H10V19H8C7.46957 19 6.96086 19.2107 6.58579 19.5858C6.21071 19.9609 6 20.4696 6 21C6 21.5304 6.21071 22.0391 6.58579 22.4142C6.96086 22.7893 7.46957 23 8 23H16C16.5304 23 17.0391 22.7893 17.4142 22.4142C17.7893 22.0391 18 21.5304 18 21C18 20.4696 17.7893 19.9609 17.4142 19.5858C17.0391 19.2107 16.5304 19 16 19H14V5H18V7C18 7.53043 18.2107 8.03914 18.5858 8.41421C18.9609 8.78929 19.4696 9 20 9C20.5304 9 21.0391 8.78929 21.4142 8.41421C21.7893 8.03914 22 7.53043 22 7V3C22 2.46957 21.7893 1.96086 21.4142 1.58579C21.0391 1.21071 20.5304 1 20 1Z" fill="#717579"></path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <svg width="1" height="32" viewbox="0 0 1 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="1" height="32" rx="0.5" fill="#717579"></rect>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <svg width="14" height="17" viewbox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 17V16.4599L0.409506 16.3313C0.767824 16.1942 1.0067 16.0141 1.12614 15.7912C1.26264 15.5683 1.3309 15.2683 1.3309 14.8911C1.34796 13.9138 1.35649 12.9365 1.35649 11.9592C1.35649 10.9647 1.35649 9.97025 1.35649 8.97579V8.04992C1.35649 7.05547 1.34796 6.06959 1.3309 5.09228C1.3309 4.09783 1.3309 3.10338 1.3309 2.10892C1.3309 1.69743 1.27118 1.3888 1.15174 1.18306C1.0323 0.960161 0.784887 0.788704 0.409506 0.668683L0 0.54009V0H7.21755C9.26508 0 10.7495 0.385779 11.6709 1.15734C12.5923 1.91175 13.053 2.87191 13.053 4.03782C13.053 4.9294 12.7288 5.73525 12.0804 6.45537C11.4321 7.15835 10.2974 7.66415 8.67642 7.97277C10.5533 8.17852 11.9098 8.66717 12.7459 9.43873C13.582 10.2103 14 11.1533 14 12.2678C14 12.8164 13.8806 13.3737 13.6417 13.9395C13.4028 14.4882 12.9933 14.9939 12.4132 15.4569C11.8501 15.9198 11.0823 16.297 10.1097 16.5885C9.13711 16.8628 7.90859 17 6.42413 17H0ZM4.99086 7.79274H6.19378C7.35405 7.79274 8.19013 7.53555 8.70201 7.02118C9.23096 6.48966 9.49543 5.58951 9.49543 4.32073C9.49543 3.0005 9.25655 2.07463 8.77879 1.54312C8.30104 1.0116 7.55027 0.745839 6.52651 0.745839H4.99086V7.79274ZM4.99086 16.2542H6.39854C7.67824 16.2542 8.63376 15.937 9.26508 15.3026C9.8964 14.6682 10.2121 13.648 10.2121 12.2421C10.2121 10.8875 9.90494 9.93596 9.29068 9.38729C8.69348 8.82148 7.70384 8.53858 6.32175 8.53858H4.99086V16.2542Z" fill="#717579"></path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <svg width="9" height="17" viewbox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 17L0.101695 16.4599L0.737288 16.2284C0.974576 16.1599 1.16102 16.0398 1.29661 15.8684C1.44915 15.6798 1.55085 15.474 1.60169 15.2511L2.94915 7.97277C3.11864 7.02975 3.29661 6.01815 3.48305 4.93797C3.68644 3.84064 3.86441 2.79475 4.01695 1.8003C4.0678 1.56026 4.02542 1.33737 3.88983 1.13162C3.77119 0.908723 3.59322 0.762985 3.35593 0.694403L2.89831 0.54009L3.02542 0H9L8.87288 0.54009L8.26271 0.745839C7.77119 0.883005 7.48305 1.20877 7.39831 1.72315L6.02542 9.02723C5.85593 9.97025 5.67797 10.9818 5.49153 12.062C5.30508 13.1422 5.11864 14.171 4.9322 15.1483C4.8983 15.4054 4.94068 15.6369 5.05932 15.8427C5.17797 16.0484 5.34746 16.1942 5.5678 16.2799L6.1017 16.4599L5.97458 17H0Z" fill="#717579"></path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <svg width="16" height="17" viewbox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.21951 17C7 17 5.9187 16.7743 4.97561 16.323C4.04878 15.8717 3.31707 15.1613 2.78049 14.1917C2.26016 13.2055 2 11.91 2 10.3053V7.59734C2 6.66126 2 5.71681 2 4.76401C2 3.81121 1.99187 2.85005 1.97561 1.88053C1.97561 1.22861 1.6748 0.819076 1.07317 0.651916L0.536585 0.526548V0H7.12195V0.526548L6.43902 0.676991C5.82114 0.827434 5.5122 1.24533 5.5122 1.93068C5.49593 2.86676 5.48781 3.81121 5.48781 4.76401C5.48781 5.7001 5.48781 6.64454 5.48781 7.59734V10.7817C5.48781 12.4031 5.80488 13.5733 6.43902 14.292C7.08943 15.0108 8.00813 15.3702 9.19512 15.3702C10.4472 15.3702 11.4228 14.9857 12.122 14.2168C12.8374 13.4312 13.1951 12.2694 13.1951 10.7316V2.0059C13.1951 1.67158 13.1301 1.37906 13 1.12832C12.8699 0.87758 12.6423 0.71878 12.3171 0.651916L11.7317 0.526548V0H15.4878V0.526548L14.8049 0.676991C14.4959 0.743854 14.2846 0.894296 14.1707 1.12832C14.0569 1.36234 14 1.64651 14 1.98083V10.5811C14 12.6539 13.4715 14.2419 12.4146 15.3451C11.3577 16.4484 9.95935 17 8.21951 17Z" fill="#717579"></path>
                                                            <path d="M0 9.35251H16V10.6062H0V9.35251Z" fill="#717579"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn pr-0"><i class="fas fa-smile scale5 text-primary"></i></button>
                                                    <button type="button" class="btn"><i class="fas fa-paperclip scale5 text-primary"></i></button>
                                                    <button type="button" class="btn btn-primary rounded text-white"><i class="far fa-paper-plane me-2"></i>SEND</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../vendor/global/global.min.js"></script>
    <script src="../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../vendor/dropzone/dist/dropzone.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/dlabnav-init.js"></script>
    <script src="../js/demo.js"></script>
    <script src="../js/styleSwitcher.js"></script>

</body>

</html>