 <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                <span class="user-name">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{url('/')}}" target="_blank"  data-toggle=""><i class="ft-home"></i>
                  <span class="badge  badge-default badge-danger badge-default">Anteprima Sito</span>
                </a>
                <a class="dropdown-item" href="{{route('users.edit', Auth::user()->id )}}"><i class="ft-user"></i> Edita profilo</a>
                {{-- <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a> --}}

                <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ft-power"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </div>
            </li>