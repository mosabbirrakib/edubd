<nav class="navbar navbar-default navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}" title="EduBD">EduBD</a>
                <a class="navbar-brand" href="{{url('/')}}" title="Home">Home</a>
                <a class="navbar-brand" href="" title="Account">Student Account</a>
                <a class="navbar-brand" href="{{ route('registration') }}" title="Registration">Registration</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }}<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="{{ route('profile_edit') }}"><i class="fa fa-user"></i> Profile</a></li>
                           <li class="divider"></li>
                           <!--<li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                           <li class="divider"></li>
                           <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>-->
                           <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">   <i class="fa fa-power-off"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none; text-align: center;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                   </li>
                </ul>
            </div>
        </nav>