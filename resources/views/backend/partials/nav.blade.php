<nav class="navbar navbar-default navbar-fixed-top" role="navigation">            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" title="EduBD">EduBD</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="{{url('/')}}"><i class="glyphicon glyphicon-th"></i> Dashboard</a></li>
                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-user"></i> User <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('admin.student-data') }}"><i class="fa fa-user"></i> Student Data</a></li>
                            <li><a href="{{ route('admin.faculty-data') }}"><i class="fa fa-user"></i> Faculty Data</a></li>
                        </ul>
                    </li>

                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-users"></i> Manage Student <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('students.index') }}"><i class="fa fa-archive"></i>Manage Student</a></li>
                            <li><a href="{{ route('students.create') }}"><i class="fa fa-plus"></i>Add Student</a></li>
                        </ul>
                    </li>

                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-user"></i> Manage Faculty <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('faculty.index') }}"><i class="fa fa-archive"></i>Manage Faculty</a></li>
                            <li><a href="{{ route('faculty.create') }}"><i class="fa fa-plus"></i>Add Faculty</a></li>
                        </ul>
                    </li>

                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-book"></i> Manage Course <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('course.index') }}"><i class="fa fa-book"></i>Manage Course</a></li>
                            <li><a href="{{ route('course.create') }}"><i class="fa fa-plus"></i>Add Course</a></li>
                        </ul>
                    </li>

                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-clock-o"></i> Manage Time Slot <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('time_slot.index') }}"><i class="fa fa-clock-o"></i>Manage Time Slot</a></li>
                            <li><a href="{{ route('time_slot.create') }}"><i class="fa fa-plus"></i>Add Time Slot</a></li>
                        </ul>
                    </li>

                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-font"></i> Manage Section <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('section.index') }}"><i class="fa fa-font"></i>Manage Section</a></li>
                            <li><a href="{{ route('section.create') }}"><i class="fa fa-plus"></i>Add Section</a></li>
                        </ul>
                    </li>
                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-edit"></i> Manage Result <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('result.index') }}"><i class="fa fa-edit"></i>Manage Result</a></li>
                            <li><a href="{{ route('result.create') }}"><i class="fa fa-plus"></i>Add Result</a></li>
                        </ul>
                    </li>
                    <li class="nav nav-list nav-list-expandable">
                        <a><i class="fa fa-registered"></i> Manage Registration <span class="caret"></span></a>
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('registration.index') }}"><i class="fa fa-registered"></i>Manage Registration</a></li>
                            <li><a href="{{ route('registration.create') }}"><i class="fa fa-plus"></i>Add Registration</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown user-dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }}<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li><a href="{{route('faculty.profile_edit')}}"><i class="fa fa-user"></i> Profile</a></li>
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