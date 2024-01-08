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
                            {{-- <div>
                                <select class="image-select bs-select dashboard-select me-3" aria-label="Default">
                                    <option selected>Newest</option>
                                    <option value="1">Oldest</option>
                                    <option value="2">Recent</option>
                                </select>
                            </div> --}}
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
                                                        @foreach($owners as $owner)
                                                        <div class="user-img">
                                                            <img src="{{ asset('storage/' . $owner->foto) }}" alt="" class="avatar avatar-xl">
                                                             {{-- <img src="{{ asset('storage/' . $owner->foto) }}" alt="Profile Picture" height="53" width="50" style="border-radius:25%;">    </div> --}}
                                                            <div class="user-details">
                                                                <h4 class="user-name mb-0">{{ $owner->name}}</h4>
                                                                <h4 class="user-name mb-0">{{ $owner->email}}</h4>
                                                            </div>
                                                            @endforeach
                                                    </div>
                                                </div>
                                                <br>
												<div class="d-flex justify-content-center gap-2" >
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                       <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="currentColor" d="M10 14q-1.25 0-2.125-.875T7 11q0-.55.175-1.037t.525-.888q-.1-.25-.15-.525T7.5 8q0-.95.513-1.687T9.35 5.225q.5-.575 1.175-.9T12 4q.8 0 1.475.325t1.175.9q.825.35 1.338 1.088T16.5 8q0 .275-.05.55t-.15.525q.35.4.525.888T17 11q0 1.25-.875 2.125T14 14zm-6 8v-2.8q0-.85.438-1.562T5.6 16.55q1.55-.775 3.15-1.162T12 15q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 19.2V22z"/></svg></span>Detail
                                                      </button>
													{{-- <a href="app-profile.html" class="btn  btn-primary btn-sm w-30 me-2" ></i><span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="currentColor" d="M10 14q-1.25 0-2.125-.875T7 11q0-.55.175-1.037t.525-.888q-.1-.25-.15-.525T7.5 8q0-.95.513-1.687T9.35 5.225q.5-.575 1.175-.9T12 4q.8 0 1.475.325t1.175.9q.825.35 1.338 1.088T16.5 8q0 .275-.05.55t-.15.525q.35.4.525.888T17 11q0 1.25-.875 2.125T14 14zm-6 8v-2.8q0-.85.438-1.562T5.6 16.55q1.55-.775 3.15-1.162T12 15q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 19.2V22z"/></svg></span>Detail</a> --}}
                                                    <a href="#" class="btn  btn-danger btn-sm w-30 me-2"></i><span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5q0-.425.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.587 1.413T17 21zm3-4q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8q-.425 0-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8q-.425 0-.712.288T13 9v7q0 .425.288.713T14 17"/></svg></span>Hapus</a>
												</div>

                                                    {{-- MODAL --}}
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ asset('storage/' . $owner->foto) }}" alt="" class="avatar avatar-xl">
                                                                <br><br><br>
                                                                <h2>{{ $owner->name}}</h2>
                                                                <h5>{{ $owner->email}}</h5>
                                                                <br>
                                                                <h5>Kost tersedia : <span>18</span></h5>
                                                                <h5>Kost ditempati : <span>12</span></h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                          </div>
                                                        </div>
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
