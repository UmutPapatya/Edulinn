<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Edulinn</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('/assets/vendor/spinkit.css') }}"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{ asset('/assets/vendor/perfect-scrollbar.css') }}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{ asset('/assets/css/material-icons.css') }}"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="{{ asset('/assets/css/fontawesome.css') }}"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('/assets/css/preloader.css') }}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{ asset('/assets/css/app.css') }}"
              rel="stylesheet">

    </head>

    <body class="layout-sticky-subnav layout-default ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0"
                 data-effects="parallax-background waterfall"
                 data-fixed
                 data-condenses>
                <div class="mdk-header__bg">
                    <div class="mdk-header__bg-front"
                         style="background-image: url({{ asset('/assets/images/photodune-4161018-group-of-students-m.jpg') }});"></div>
                </div>
                <div class="mdk-header__content justify-content-center">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood bg-transparent will-fade-background"
                         id="default-navbar"
                         data-primary>
                         @auth
                        <!-- Navbar toggler -->
                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>
                        @endauth
                        <!-- Navbar Brand -->
                        <a href="{{ url('/home') }}" class="navbar-brand mr-16pt">
                           <img width="150" height="auto" class="navbar-brand-icon" src="{{ asset('assets/images/logo/edulinn.png') }}" height="20" alt="Edulinn">
                        </a>
                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                            <li class="nav-item active">
                                <a href="{{ url('/home') }}"
                                   class="nav-link" style="font-size: 18px">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/courses') }}"
                                   class="nav-link" style="font-size: 18px;">Courses</a>
                              </li>
                             <li class="nav-item">
                                <a href="{{ url('/about') }}"
                                   class="nav-link" style="font-size: 18px">About</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{ url('/contact') }}"
                               class="nav-link" style="font-size: 18px">Contact</a>
                          </li>
                         </ul>
                         @if (Route::has('login'))
                         <ul class="nav navbar-nav ml-auto mr-0">
                               @auth
                                     {{-- START: logged in --}}
                                           <!-- Authentication Links -->
                                           @guest
                                              @if (Route::has('login'))
                                                 <li class="nav-item">
                                                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                 </li>
                                              @endif
                         
                                              @if (Route::has('register'))
                                                 <li class="nav-item">
                                                       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                 </li>
                                              @endif
                                           @else
                                              <li class="nav-item dropdown">
                                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                       {{ Auth::user()->name }}
                                                 </a>
                         
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                       <a class="dropdown-item" href="{{ route('logout') }}"
                                                          onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                          {{ __('Logout') }}
                                                       </a>
                         
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                          @csrf
                                                       </form>
                                                 </div>
                                              </li>
                                           @endguest
                                     {{-- END: logged in --}}
                                  </ul>
                               @else
                                  <li class="nav-item">
                                     <a href="{{ route('login') }}" class="btn btn-outline-white">Login</a>
                                  </li>
                                  @if (Route::has('register'))
                                     <li class="nav-item">
                                           <a href="{{ route('register') }}" class="btn btn-outline-white">Register</a>
                                           {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> --}}
                                     </li>
                                  @endif   
                               @endauth
                         </ul>
                         @endif
                    </div>

                    <div class="hero container page__container text-center text-md-left py-112pt">
                        <h1 class="text-white text-shadow">Learning for anyone, anywhere</h1>
                        <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">English, math, science and many other courses taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>

                        <a href=""
                           class="btn btn-lg btn-white btn--raised mb-16pt">Join us</a>

            <!--            <p class="mb-0"><a href=""
                               class="text-white text-shadow"><strong>Are you a teacher?</strong></a></p> -->

                    </div>
                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
                    <div class="container page__container">
                        <div class="row align-items-center">
                            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">subscriptions</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">8,000+ Courses</div>
                                    <p class="card-subtitle text-70">Explore a wide range of skills.</p>
                                </div>
                            </div>
                            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">verified_user</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">By Industry Experts</div>
                                    <p class="card-subtitle text-70">Professional development from the best people.</p>
                                </div>
                            </div>
                            <div class="d-flex col-md align-items-center">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">update</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">Unlimited Access</div>
                                    <p class="card-subtitle text-70">Unlock Library and learn any topic with one subscription.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <div class="container page__container page-section d-flex flex-column">
                  <div class="row" style="margin-top:30px; margin-bottom:30px;">
                      <div class="col-md-7">
                          <br><br> <span style="font-size:2rem">Education of the World at Your Fingertips</span>
                          <p class="text-70" style="font-size:20px">
                              Thousands of professional educators from different parts of the world are in one place ... With the difference of <strong>Edulinn</strong> ...</p>
                          <a class=" btn btn-primary" style="font-size: 16px;" href="#soon"> SOON </a>
                      </div>
                      <div class="col-md-5">
                          <img src="{{ asset('/assets/images/resim.jpg') }}" alt="image" class="card-img-top">
                      </div>
                  </div>
                </div>
            </div>

            <div class="border-bottom-2 py-16pt navbar-light bg-white">
                <div class="container page__container">
                    <div class="row"  style="margin-top:30px; margin-bottom:30px;">
                        <div class="col-md-5">
                            <img src="{{ asset('/assets/images/resim2.png') }}" alt="image" class="card-img-top">
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-6">
                            <br><br> <span style="font-size:2rem"><strong>Take the next step</strong> toward your professional goals with Edulinn.</span>
                            <p class="text-70" style="font-size:20px">Join our Edulinn family so that your name reaches more people / students in the globalizing world..</p>
                            <a class=" btn btn-primary" style="font-size: 16px;" href="signup.php"> Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
            <!-- // END Header Layout Content -->

            <!-- Footer -->

   @include('layouts.inc.footer')

            <!-- // END Footer -->

        </div>
        <!-- // END Header Layout -->

        <!-- Drawer -->
        @auth
        <div class="mdk-drawer js-mdk-drawer"
             id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
                     data-perfect-scrollbar>

                    <!-- Sidebar Content -->

                    <div class="d-flex align-items-center navbar-height">
                        <form action="{{ url('/home') }}"
                              class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                            <input type="text"
                                   class="form-control pl-0"
                                   placeholder="Search">
                            <button class="btn"
                                    type="submit"><i class="material-icons">search</i></button>
                        </form>
                    </div>

                    <a href="{{ url('/home') }}"
                       class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="{{ asset('/assets/images/illustration/student/128/white.svg') }}" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="{{ asset('/assets/images/illustration/student/128/white.svg') }}"
                                     class="img-fluid"
                                     alt="logo" /></span>

                        </span>

                        <span>Luma</span>
                    </a>

                    <div class="sidebar-heading">Student</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button"
                               href="{{ url('/home') }}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Browse Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="paths.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Browse Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-dashboard.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-my-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-paths.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                                <span class="sidebar-menu-text">My Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-path.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                                <span class="sidebar-menu-text">Path Details</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                                <span class="sidebar-menu-text">Course Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-lesson.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                                <span class="sidebar-menu-text">Lesson Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-take-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                                <span class="sidebar-menu-text">Take Course</span>
                                <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-take-lesson.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                <span class="sidebar-menu-text">Take Lesson</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-take-quiz.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                                <span class="sidebar-menu-text">Take Quiz</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-quiz-results.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-quiz-result-details.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                                <span class="sidebar-menu-text">Quiz Result</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-path-assessment.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                <span class="sidebar-menu-text">Skill Assessment</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-path-assessment-result.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                                <span class="sidebar-menu-text">Skill Result</span>
                            </a>
                        </li>

                    </ul>
                    <div class="sidebar-heading">Instructor</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-dashboard.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                <span class="sidebar-menu-text">Instructor Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                <span class="sidebar-menu-text">Manage Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-quizzes.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                                <span class="sidebar-menu-text">Manage Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-earnings.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                                <span class="sidebar-menu-text">Earnings</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-statement.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                                <span class="sidebar-menu-text">Statement</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-edit-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                                <span class="sidebar-menu-text">Edit Course</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-edit-quiz.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                <span class="sidebar-menu-text">Edit Quiz</span>
                            </a>
                        </li>

                    </ul>

                    <div class="sidebar-heading">Applications</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse"
                               data-toggle="collapse"
                               href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                Enterprise
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="erp-dashboard.html">
                                        <span class="sidebar-menu-text">ERP Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="crm-dashboard.html">
                                        <span class="sidebar-menu-text">CRM Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="hr-dashboard.html">
                                        <span class="sidebar-menu-text">HR Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="employees.html">
                                        <span class="sidebar-menu-text">Employees</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="staff.html">
                                        <span class="sidebar-menu-text">Staff</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="leaves.html">
                                        <span class="sidebar-menu-text">Leaves</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="departments.html">
                                        <span class="sidebar-menu-text">Departments</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#productivity_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                Productivity
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="productivity_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="projects.html">
                                        <span class="sidebar-menu-text">Projects</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="tasks-board.html">
                                        <span class="sidebar-menu-text">Tasks Board</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="tasks-list.html">
                                        <span class="sidebar-menu-text">Tasks List</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="kanban.html">
                                        <span class="sidebar-menu-text">Kanban</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#ecommerce_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                eCommerce
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="ecommerce_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ecommerce.html">
                                        <span class="sidebar-menu-text">Shop Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="edit-product.html">
                                        <span class="sidebar-menu-text">Edit Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#messaging_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                                Messaging
                                <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span>
                                <span class="sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="messaging_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="messages.html">
                                        <span class="sidebar-menu-text">Messages</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="email.html">
                                        <span class="sidebar-menu-text">Email</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#cms_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                CMS
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="cms_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="cms-dashboard.html">
                                        <span class="sidebar-menu-text">CMS Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="posts.html">
                                        <span class="sidebar-menu-text">Posts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#account_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                Account
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="account_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="pricing.html">
                                        <span class="sidebar-menu-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="login.html">
                                        <span class="sidebar-menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="signup.html">
                                        <span class="sidebar-menu-text">Signup</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="signup-payment.html">
                                        <span class="sidebar-menu-text">Payment</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="reset-password.html">
                                        <span class="sidebar-menu-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="change-password.html">
                                        <span class="sidebar-menu-text">Change Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account.html">
                                        <span class="sidebar-menu-text">Edit Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account-profile.html">
                                        <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account-notifications.html">
                                        <span class="sidebar-menu-text">Email Notifications</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account-password.html">
                                        <span class="sidebar-menu-text">Account Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing.html">
                                        <span class="sidebar-menu-text">Subscription</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-upgrade.html">
                                        <span class="sidebar-menu-text">Upgrade Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-payment.html">
                                        <span class="sidebar-menu-text">Payment Information</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-history.html">
                                        <span class="sidebar-menu-text">Payment History</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-invoice.html">
                                        <span class="sidebar-menu-text">Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#community_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                Community
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="community_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="teachers.html">

                                        <span class="sidebar-menu-text">Browse Teachers</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="student-profile.html">

                                        <span class="sidebar-menu-text">Student Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="teacher-profile.html">

                                        <span class="sidebar-menu-text">Teacher Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="blog.html">

                                        <span class="sidebar-menu-text">Blog</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="blog-post.html">

                                        <span class="sidebar-menu-text">Blog Post</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="faq.html">
                                        <span class="sidebar-menu-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="help-center.html">
                                        <!--  -->
                                        <span class="sidebar-menu-text">Help Center</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="discussions.html">
                                        <span class="sidebar-menu-text">Discussions</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="discussion.html">
                                        <span class="sidebar-menu-text">Discussion Details</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="discussions-ask.html">
                                        <span class="sidebar-menu-text">Ask Question</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="sidebar-heading">UI</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#components_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                Components
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="components_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-buttons.html">
                                        <span class="sidebar-menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-avatars.html">
                                        <span class="sidebar-menu-text">Avatars</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-forms.html">
                                        <span class="sidebar-menu-text">Forms</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-loaders.html">
                                        <span class="sidebar-menu-text">Loaders</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-tables.html">
                                        <span class="sidebar-menu-text">Tables</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-cards.html">
                                        <span class="sidebar-menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-icons.html">
                                        <span class="sidebar-menu-text">Icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-tabs.html">
                                        <span class="sidebar-menu-text">Tabs</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-alerts.html">
                                        <span class="sidebar-menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-badges.html">
                                        <span class="sidebar-menu-text">Badges</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-progress.html">
                                        <span class="sidebar-menu-text">Progress</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-pagination.html">
                                        <span class="sidebar-menu-text">Pagination</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="">
                                        <span class="sidebar-menu-text">Disabled</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#plugins_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                                Plugins
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="plugins_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-charts.html">
                                        <span class="sidebar-menu-text">Charts</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-flatpickr.html">
                                        <span class="sidebar-menu-text">Flatpickr</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-daterangepicker.html">
                                        <span class="sidebar-menu-text">Date Range Picker</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-dragula.html">
                                        <span class="sidebar-menu-text">Dragula</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-dropzone.html">
                                        <span class="sidebar-menu-text">Dropzone</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-range-sliders.html">
                                        <span class="sidebar-menu-text">Range Sliders</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-quill.html">
                                        <span class="sidebar-menu-text">Quill</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-select2.html">
                                        <span class="sidebar-menu-text">Select2</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-nestable.html">
                                        <span class="sidebar-menu-text">Nestable</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-fancytree.html">
                                        <span class="sidebar-menu-text">Fancy Tree</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-maps-vector.html">
                                        <span class="sidebar-menu-text">Vector Maps</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-sweet-alert.html">
                                        <span class="sidebar-menu-text">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-toastr.html">
                                        <span class="sidebar-menu-text">Toastr</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="">
                                        <span class="sidebar-menu-text">Disabled</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#layouts_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                Layouts
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="layouts_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Compact_App_Layout/{{ url('/home') }}">
                                        <span class="sidebar-menu-text">Compact</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Mini_App_Layout/{{ url('/home') }}">
                                        <span class="sidebar-menu-text">Mini</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Mini_Secondary_Layout/{{ url('/home') }}">
                                        <span class="sidebar-menu-text">Mini + Secondary</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../App_Layout/{{ url('/home') }}">
                                        <span class="sidebar-menu-text">App</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Boxed_App_Layout/{{ url('/home') }}">
                                        <span class="sidebar-menu-text">Boxed</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Sticky_App_Layout/{{ url('/home') }}">
                                        <span class="sidebar-menu-text">Sticky</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button"
                                       href="../Fixed_Layout/{{ url('/home') }}">
                                        <span class="sidebar-menu-text">Fixed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- // END Sidebar Content -->

                </div>
            </div>
        </div>

        <!-- // END Drawer -->
        @endauth
        <!-- jQuery -->
        <script src="{{ asset('/assets/vendor/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('/assets/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('/assets/vendor/bootstrap.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ asset('/assets/vendor/perfect-scrollbar.min.js') }}"></script>

        <!-- DOM Factory -->
        <script src="{{ asset('/assets/vendor/dom-factory.js') }}"></script>

        <!-- MDK -->
        <script src="{{ asset('/assets/vendor/material-design-kit.js') }}"></script>

        <!-- App JS -->
        <script src="{{ asset('/assets/js/app.js') }}"></script>

        <!-- Preloader -->
        <script src="{{ asset('/assets/js/preloader.js') }}"></script>

        <script>
            (function() {
                'use strict';
                var headerNode = document.querySelector('.mdk-header')
                var layoutNode = document.querySelector('.mdk-header-layout')
                var componentNode = layoutNode ? layoutNode : headerNode
                componentNode.addEventListener('domfactory-component-upgraded', function() {
                    headerNode.mdkHeader.eventTarget.addEventListener('scroll', function() {
                        var progress = headerNode.mdkHeader.getScrollState().progress
                        var navbarNode = headerNode.querySelector('#default-navbar')
                        navbarNode.classList.toggle('bg-transparent', progress <= 0.2)
                    })
                })
            })()
        </script>

    </body>

</html>