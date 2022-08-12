<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="{{ asset('assets/avatar.jpg') }}" alt="user-img" class="avatar-xl rounded-circle mb-1 mCS_img_loaded">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark">{{ Session::get('name')}}</h6>
								<span class="text-muted app-sidebar__user-name text-sm">{{ Session::get('email')}}</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('author/dashboard') }}"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('/author/users') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Users List</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('/author/history') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">History List</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

					</ul>
				
 </aside>