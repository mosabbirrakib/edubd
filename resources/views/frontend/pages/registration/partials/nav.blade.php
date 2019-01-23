<ul>
  <li><a href="{{url('/')}}">EduBD</a></li>
  <li><a href="{{url('/')}}">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Registration</a>
    <div class="dropdown-content">
      <a href="{{route('section_selection')}}">Section Selection</a>
      <a href="{{route('pre_advising')}}">Pre Advising(New Course)</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">My View</a>
    <div class="dropdown-content">
      <a href="{{route('result')}}">Result History</a>
      <a href="#">My Class Routine</a>
    </div>
  </li>
  <li style="float:right"><a href="{{url('/')}}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
</ul>