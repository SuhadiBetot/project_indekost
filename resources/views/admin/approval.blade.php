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

		@include('layout.navbar')
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
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-symbols-outlined">home</i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">school</i>
						<span class="nav-text">Approval Kost</span>
					</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">person</i>
						<span class="nav-text">Kelola Owner</span>
					</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">restaurant_menu</i>
						<span class="nav-text">Transaksi</span>
					</a>
					</li>
			    </div>
            </div>
        <div class="content-body">
            <!-- row -->
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
						<div class="row">
							<!--column-->
							<div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
								<div class="table-responsive full-data">
									<table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer" id="example-student">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nama Owner</th>
												<th>Nama Kost</th>
												<th>Harga</th>
												<th>Foto</th>
												<th>Alamat</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="trans-list">
														<h4>1</h4>
													</div>
												</td>
												<td>
													<div class="trans-list">
														<h4>SITI AISYAH</h4>
													</div>
												</td>
												<td><span class="text-primary font-w600">Kos Barokah</span></td>
												<td>
													<div class="date">600.000</div>
												</td>
												<td><img src="images/trans/1.jpg" alt="" class="avatar avatar-sm me-3"></td>
												<td><h6 class="mb-0">Probolinggo</h6></td>
												<td>
													<div>
                                                        <div class="action-buttons">
                                                            <button type="detail-button" class="btn btn-primary" onclick="detail()"><i class="fas fa-eye"></i></button>
                                                            <button type="submit" class="btn btn-danger" id="" onclick="return confirm()"><i class="fas fa-trash-alt"></i></button>
                                                          </div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!--/column-->
						</div>
					</div>
				</div>
			</div>
		</div>

				<div class="footer out-footer style-2">
					<div class="copyright">
						<p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2023</p>
					</div>
				</div>
	</div>
</body>
@include('admin.template.script')

<!-- Mirrored from akademi.dexignlab.com/xhtml/student.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:33:51 GMT -->
</html>
