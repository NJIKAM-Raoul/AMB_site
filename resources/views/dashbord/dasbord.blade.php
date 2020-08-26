<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.2/form-validation.html by HTTrack Website Copier/3.x [XR&CO 2014], Fri, 17 Jul 2020 05:23:19 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        {{--  <!-- Vendor styles -->  --}}
        <link rel="stylesheet" href="resources/vendors/zwicon/zwicon.min.css">
        <link rel="stylesheet" href="resources/vendors/animate.css/animate.min.css">
        <link rel="stylesheet" href="resources/vendors/overlay-scrollbars/OverlayScrollbars.min.css">

        {{--  <!-- App styles -->  --}}
        <link rel="stylesheet" href="resources/css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger d-xl-none" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zwicon-hamburger-menu"></i>
                </div>

                <div class="logo d-none d-sm-inline-flex">
                    <a href="">AMB</a>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zwicon-search search__helper"></i>
                        <i class="zwicon-arrow-left search__reset" data-sa-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="d-xl-none"><a href="#" data-sa-action="search-open"><i class="zwicon-search"></i></a></li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="top-nav__notify"><i class="zwicon-mail"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Messages

                                <div class="actions">
                                    <a href="messages.html" class="actions__item zwicon-plus"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover">
                                {{-- <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="avatar-img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="avatar-img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="avatar-img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/5.jpg" class="avatar-img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all messages</a> --}}
                            </div>
                        </div>
                    </li>

                    {{-- <li class="dropdown top-nav__notifications">
                        <a href="#" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zwicon-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Notifications

                                <div class="actions">
                                    <a href="#" class="actions__item zwicon-checkmark-square" data-sa-action="notifications-clear"></a>
                                </div>
                            </div> --}}

                            {{-- <div class="listview listview--hover">
                                <div class="listview__scroll scrollbar">
                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/4.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/5.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="avatar-img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div> --}}
                        {{-- </div>
                    </li> --}}

                    {{-- <li class="dropdown d-none d-sm-inline-block">
                        <a href="#" data-toggle="dropdown"><i class="zwicon-checkmark-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">Tasks</div>

                            <div class="listview listview--hover">
                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">HTML5 Validation Report</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Google Chrome Extension</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Social Intranet Projects</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Bootstrap Admin Template</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Youtube Client App</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all Tasks</a>
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li class="dropdown d-none d-sm-inline-block">
                        <a href="#" data-toggle="dropdown"><i class="zwicon-grid"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zwicon-calendar-never"></i>
                                    <small class="">Calendar</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zwicon-document"></i>
                                    <small class="">Files</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zwicon-mail"></i>
                                    <small class="">Email</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zwicon-line-chart"></i>
                                    <small class="">Reports</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zwicon-broadcast"></i>
                                    <small class="">News</small>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zwicon-image"></i>
                                    <small class="">Gallery</small>
                                </a>
                            </div>
                        </div>
                    </li> --}}

                    <li class="dropdown d-none d-sm-inline-block">
                        <a href="#" data-toggle="dropdown"><i class="zwicon-more-h"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                            <a href="#" class="dropdown-item">Clear Local Storage</a>
                            <a href="#" class="dropdown-item">Settings</a>
                        </div>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <a href="#" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zwicon-palette"></i></a>
                    </li>
                </ul>

                <div class="clock d-none d-md-inline-block">
                    <div class="time">
                        <span class="time__hours"></span>
                        <span class="time__min"></span>
                        <span class="time__sec"></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar ">
                <div class="scrollbar">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu dropdown-menu--invert">
                            <a class="dropdown-item" href="#">View Profile</a>
                            {{-- <a class="dropdown-item" href="#">Settings</a> --}}
                            <a class="dropdown-item" href="#">Deconnexion</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li><a href=""><i class="zwicon-home"></i> Home</a></li>

                        {{-- <li class="navigation__sub">
                            <a href="#"><i class="zwicon-three-h"></i> Variants</a>

                            <ul>
                                <li><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li><a href="boxed-layout.html">Boxed Layout</a></li>
                                <li><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="typography.html"><i class="zwicon-edit-square-feather"></i> Typography</a>
                        </li>

                        <li>
                            <a href="widgets.html"><i class="zwicon-layout-4"></i> Widgets</a>
                        </li> --}}

                        {{-- <li class="navigation__sub">
                            <a href="#"><i class="zwicon-layout-2"></i> Tables</a>

                            <ul>
                                <li>
                                    <a href="html-table.html">HTML Table</a>
                                </li>
                                <li>
                                    <a href="data-table.html">Data Table</a>
                                </li>
                            </ul>
                        </li>

                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="#"><i class="zwicon-note"></i> Forms</a>

                            <ul>
                                <li>
                                    <a href="form-elements.html">Basic Form Elements</a>
                                </li>
                                <li>
                                    <a href="form-components.html">Form Components</a>
                                </li>
                                <li>
                                    <a href="form-layouts.html">Form Layouts</a>
                                </li>
                                <li class="navigation__active">
                                    <a href="form-validation.html">Form Validation</a>
                                </li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zwicon-cursor-square"></i> User Interface</a>

                            <ul>
                                <li>
                                    <a href="colors.html">Colors</a>
                                </li>
                                <li>
                                    <a href="css-animations.html">CSS Animations</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="listview.html">Listview</a>
                                </li>
                                <li>
                                    <a href="toolbars.html">Toolbars</a>
                                </li>
                                <li>
                                    <a href="cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="breadcrumbs.html">Bredcrumbs</a>
                                </li>
                                <li>
                                    <a href="jumbotron.html">Jumbotron</a>
                                </li>
                                <li>
                                    <a href="navs.html">Navs</a>
                                </li>
                                <li>
                                    <a href="pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="progress.html">Progress</a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- <li class="navigation__sub">
                            <a href="#"><i class="zwicon-tray-stack"></i> Javascript Components</a>

                            <ul class="navigation__sub">
                                <li>
                                    <a href="carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="popover.html">Popover</a>
                                </li>
                                <li>
                                    <a href="tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="toast.html">Toasts</a>
                                </li>
                                <li>
                                    <a href="treeview.html">Tree View</a>
                                </li>
                                <li>
                                    <a href="custom-alerts.html">Custom Alerts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zwicon-line-chart"></i> Charts</a>

                            <ul>
                                <li>
                                    <a href="flot-charts.html">Flot</a>
                                </li>
                                <li>
                                    <a href="other-charts.html">Other Charts</a>
                                </li>
                                <li>
                                    <a href="maps.html">Maps</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html"><i class="zwicon-calendar-never"></i> Calendar</a>
                        </li>

                        <li>
                            <a href="photo-gallery.html"><i class="zwicon-image"></i> Photo Gallery</a>
                        </li> --}}

                        {{--  <li class="navigation__sub">
                            <a href="#"><i class="zwicon-repository"></i> Sample Pages</a>

                            <ul>
                                <li>
                                    <a href="profile-about.html">Profile</a>
                                </li>
                                <li>
                                    <a href="messages.html">Messages</a>
                                </li>
                                <li>
                                    <a href="contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="new-contact.html">New Contact</a>
                                </li>
                                <li>
                                    <a href="groups.html">Groups</a>
                                </li>
                                <li>
                                    <a href="pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="todo-lists.html">Todo Lists</a>
                                </li>
                                <li>
                                    <a href="notes.html">Notes</a>
                                </li>
                                <li>
                                    <a href="search-results.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="issue-tracker.html">Issue Tracker</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="team.html">Team</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-detail.html">Blog Detail</a>
                                </li>
                                <li>
                                    <a href="questions-answers.html">Questions & Answers</a>
                                </li>
                                <li>
                                    <a href="questions-answers-details.html">Questions & Answers Details</a>
                                </li>
                                <li>
                                    <a href="login.html">Login & SignUp</a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">Lockscreen</a>
                                </li>
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                                <li>
                                    <a href="empty.html">Empty Page</a>
                                </li>
                            </ul>
                        </li>  --}}
                    </ul>
                </div>
            </aside>

            <div class="themes">
                <div class="scrollbar">
                    <a href="#" class="themes__item " data-sa-value="1"><img src="resources/img/bg/1.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="2"><img src="resources/img/bg/2.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="3"><img src="resources/img/bg/3.jpg" alt=""></a>
                    <a href="#" class="themes__item active" data-sa-value="4"><img src="resources/img/bg/4.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="5"><img src="resources/img/bg/5.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="6"><img src="resources/img/bg/6.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="7"><img src="resources/img/bg/7.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="8"><img src="resources/img/bg/8.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="9"><img src="resources/img/bg/9.jpg" alt=""></a>
                    <a href="#" class="themes__item" data-sa-value="10"><img src="resources/img/bg/10.jpg" alt=""></a>
                </div>
            </div>

            <section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        {{--  <h1>Form Validation <small>Provide valuable, actionable feedback to your users with HTML5 form validation available in all supported browsers. Choose from the browser 
                            default validation feedback, or implement custom messages with our built-in classes and starter JavaScript.</small></h1>  --}}

                        <div class="actions">
                            <a href="#" class="actions__item zwicon-cog"></a>
                            <a href="#" class="actions__item zwicon-refresh-double"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zwicon-more-h"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                    </header>

                    {{--  <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic examples</h4>
                            <h6 class="card-subtitle">For custom Bootstrap form validation messages, you’ll need to add the novalidate boolean attribute to your <code>&#x3C;form&#x3E;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript.</h6>

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-body__title">Valid stats</h5>

                                    <div class="form-group">
                                        <input type="text" class="form-control is-valid" placeholder="Default" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control is-valid" placeholder="With description" required />
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="card-body__title">Invalid stats</h5>

                                    <div class="form-group">
                                        <input type="text" class="form-control is-invalid" placeholder="Default" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control is-invalid" placeholder="With description" required />
                                        <div class="invalid-feedback">Please provide a valid input</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  --}}

                    {{--  <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Tooltips</h2>
                            <h6 class="card-subtitle">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code>position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</h6>

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-body__title">Valid stats</h5>

                                    <div class="form-group">
                                        <input type="text" class="form-control is-valid" placeholder="Full Name" value="Malinda Hollaway" required />
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <h5 class="card-body__title">Invalid stats</h5>

                                    <div class="form-group">
                                        <input type="text" class="form-control is-invalid" placeholder="Email Address" value="malinda@hollaway" required />
                                        <div class="invalid-tooltip">
                                            Invalid input!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  --}}

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Supported elements</h4>
                            {{--  <h6 class="card-subtitle">Validation styles are available for the following form controls and components.</h6>  --}}

                            <form class="was-validated" action="{{ route('store_path') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <textarea class="form-control is-invalid" id="validationTextarea" 
                                      placeholder="Entrer les informations sur le post" name="contenu" required></textarea>
                                    {{--  <div class="invalid-feedback">
                                        Please enter a message in the textarea.
                                    </div>  --}}
                                </div>

                               

                                <br>
                            {{--  
                                <div class="form-group">
                                    <select class="custom-select" required>
                                        <option value="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                </div>  --}}

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" 
                                    @error('image') is-invalid @enderror id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    {{--  <div class="invalid-feedback">Example invalid custom file feedback</div>  --}}
                                </div><br><br>

                                <button type="submit" class="btn btn-secondary btn-block">Envoyer</button>

                            </form>
                        </div>
                    </div>
                </div>

                <footer class="footer d-none d-sm-block">
                    <p>© Super Admin Responsive. All rights reserved.</p>

                    <ul class="footer__nav">
                        <a href="#">Homepage</a>
                        <a href="#">Company</a>
                        <a href="#">Support</a>
                        <a href="#">News</a>
                        <a href="#">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
        {{-- <!--[if IE]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                <div class="ie-warning__downloads">
                    <a href="http://www.google.com/chrome">
                        <img src="img/browsers/chrome.png" alt="">
                    </a>

                    <a href="https://www.mozilla.org/en-US/firefox/new">
                        <img src="img/browsers/firefox.png" alt="">
                    </a>

                    <a href="http://www.opera.com">
                        <img src="img/browsers/opera.png" alt="">
                    </a>

                    <a href="https://support.apple.com/downloads/safari">
                        <img src="img/browsers/safari.png" alt="">
                    </a>

                    <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                        <img src="img/browsers/edge.png" alt="">
                    </a>

                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="img/browsers/ie.png" alt="">
                    </a>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]--> --}}

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="resources/vendors/jquery/jquery.min.js"></script>
        <script src="resources/vendors/popper.js/popper.min.js"></script>
        <script src="resources/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="resources/vendors/overlay-scrollbars/jquery.overlayScrollbars.min.js"></script>

        <!-- App functions and actions -->
        <script src="resources/js/app.min.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.2/form-validation.html by HTTrack Website Copier/3.x [XR&CO 2014], Fri, 17 Jul 2020 05:23:19 GMT -->
</html>