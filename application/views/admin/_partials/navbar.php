<nav class="navbar navbar-expand navbar-dark static-top" style=" background-color: #FBE900; font-weight: 600;">

	<!-- <a class="navbar-brand mr-1 text-dark" href="<?php echo site_url('admin') ?>"><?php echo SITE_NAME ?></a> -->
	<a><img src="<?php echo base_url('assets/logoweb/logoweb.png') ?>" width="130px" height="50px" alt=""></a>

	<button class="btn btn-link btn-sm text-dark order-1 order-sm-0" id="sidebarToggle" style="color: #FBE900;" href="#">
		<i class="fas fa-bars"></i>
	</button>

	<!-- Navbar Search -->
	<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		<!-- <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-light" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div> -->
	</form>

	<!-- Navbar -->
	<ul class="navbar-nav ml-auto ml-md-0">
		<!-- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li> -->

		<!-- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li> -->

		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user-circle fa-fw"></i> Admin
			</a>
			<div class="dropdown-menu dropdown-menu-right badge-danger" aria-labelledby="userDropdown">
				<!-- <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a> -->
				<!-- <div class="dropdown-divider"></div> -->
				<a class="dropdown-item badge-danger text-light" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
			</div>
		</li>
	</ul>

</nav>
