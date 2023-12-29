@include('admin.template.header')
<body>

    <div id="preloader">
	  <div class="loader">
		<div class="dots">
			  <div class="dot mainDot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
		</div>

		</div>
	</div>

    <div id="main-wrapper">

        @include('layout.navbarr')
        @include('layout.sidebarr')

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>
                </div>
            </div>
        </div>

        @include('layout.navbar')

        <div class="content-body">
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap">
                            <div class="input-group search-area mb-md-0 mb-3">
                                <input type="text" class="form-control" placeholder="Search here...">
                                <span class="input-group-text"><a href="javascript:void(0)">
                                    <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"/>
                                    </svg>
                                </a></span>
                            </div>
                            <div>
                                <select class="image-select bs-select dashboard-select me-3" aria-label="Default">
                                    <option selected>Newest</option>
                                    <option value="1">Oldest</option>
                                    <option value="2">Recent</option>
                                </select>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-12">
                        <!-- Row -->
						<div class="row">
                            <!--column-->
                            <div class="col-xl-12">
                                 <!-- Row -->
                                <div class="row">
                                    <!--column-->
                                    <div class="col-xl-4 col-lg-4 col-sm-6">
                                        <div class="card contact_list text-center">
                                            <div class="card-body">
                                                <div class="user-content">
                                                    <div class="user-info">
                                                        <div class="user-img">
                                                            <img src="images/contacts/1.jpg" alt="" class="avatar avatar-xl">
                                                        </div>
                                                            @foreach($owners as $owner)
                                                            <div class="user-details">
                                                                <h4 class="user-name mb-0">{{ $owner->name}}</h4>
                                                                <h4 class="user-name mb-0">{{ $owner->email}}</h4>
                                                            </div>
                                                            @endforeach
                                                    </div>
                                                </div>
                                                <br>
												<div class="d-flex justify-content-center">
													<a href="app-profile.html" class="btn  btn-primary btn-sm w-30 me-2"></i>Lihat</a>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/column-->
							</div>

                        	<!--/Row -->
						</div>


					</div>
				</div>
			</div>
		</div>
        <div class="table-pagenation teach">
            <small>Showing <span>1-5</span>from <span>100</span>data</small>
            <nav>
                <ul class="pagination pagination-gutter pagination-primary no-bg">
                    <li class="page-item page-indicator">
                        <a class="page-link" href="javascript:void(0)">
                        <i class="fa-solid fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item "><a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item page-indicator">
                        <a class="page-link" href="javascript:void(0)">
                        <i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>

		<div class="footer out-footer style-2">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2023</p>
			</div>
		</div>
	</div>

</body>
@include('admin.template.script')

<!-- Mirrored from akademi.dexignlab.com/xhtml/teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:33:59 GMT -->
</html>
