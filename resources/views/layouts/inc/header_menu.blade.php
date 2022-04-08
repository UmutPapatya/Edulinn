<!-- Navbar Brand -->
<a href="{{ url('/') }}" class="navbar-brand mr-16pt">
   <img style="width: 150px; height: auto;" class="navbar-brand-icon" src="{{ asset('assets/images/logo/edulinn.png') }}" height="20" alt="Edulinn">
</a>
<ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
   <li class="nav-item active">
       <a href="{{ url('/home') }}"
          class="nav-link" style="font-size: 18px;">Home</a>
   </li>
   <li class="nav-item">
      <a href="{{ url('/courses') }}"
         class="nav-link" style="font-size: 18px;">Courses</a>
    </li>
    <li class="nav-item">
       <a href="{{ url('/about') }}"
          class="nav-link" style="font-size: 18px;">About</a>
   </li>
   <li class="nav-item">
   <a href="{{ url('/contact') }}"
      class="nav-link" style="font-size: 18px;">Contact</a>
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