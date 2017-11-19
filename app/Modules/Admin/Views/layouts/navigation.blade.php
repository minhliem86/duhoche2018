<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
  <ul class="list-group panel">
    <li class="list-group-item"><b>SIDE PANEL</b></li>
    <li class="list-group-item {{LP_lib::setActive(2,'dashboard')}}"><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard </a></li>
    <li class="list-group-item {{LP_lib::setActive(2,'country')}}"><a href="{{route('admin.country.index')}}"><i class="fa "></i>Countries </a></li>
    <li class="list-group-item {{LP_lib::setActive(2,'course')}}"><a href="{{route('admin.course.index')}}"><i class="fa "></i>Courses </a></li>
  </ul>
</div>
