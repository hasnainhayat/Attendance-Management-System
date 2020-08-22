<nav class="navbar navbar-expand-lg navbar-light bg-white ">
  
  <h2>
  <i class="feather"></i>
  
  AMS
</a>
</h2>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mr-auto">
    
    
  </ul>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="myattendance">My Attendance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="myleaves">My Leaves</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto  float-right">
            <li class="pcoded-header bg-white">
                <div class="dropdown drp-user">
                    <a href="javascript:" class="dropdown-toggle " data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="{{ Auth::user()->image }}" class="img-radius" alt="User-Profile-Image">
                            <span>{{ Auth::user()->name }}</span>
                            <a class="dud-logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                
                                <i class="feather icon-log-out"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                       <a href="settings">
                       <div class="pro-body text-center">
                            <!-- <img src="images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"> -->
                            Account settings
                                      </div>
                                    </a>
                    </div>
                </div>
            </li>
        </ul>
</div>
</nav>

