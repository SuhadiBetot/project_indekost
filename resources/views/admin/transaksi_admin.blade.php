@include('admin.template.header')
<body>
	<div id="preloader">
		<div class="loader"></div>
	  </div>

    <div id="main-wrapper">
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
						<div class="dashboard_bar">
						   Transaksi
						</div>
                        </div>
                    </div>
				</nav>
			</div>

		</div>

        <div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-symbols-outlined">home</i>
							<span class="nav-text">Dashboard</span>
						</a>

					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">school</i>
						<span class="nav-text">Kelola Owner</span>

					</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">person</i>
						<span class="nav-text">Transaksi</span>
					</a>
					</li>
				</ul>
			</div>
        </div>
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
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
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
										 + New Student
										</button>
									</div>
								</div>
							</div>
							<div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
								<div class="table-responsive full-data">
									<table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer" id="example-student">
										<thead>
											<tr>
												<th>
													<input type="checkbox" class="form-check-input" id="checkAll" required="">
												</th>
												<th>Nama Owner</th>
												<th>Nama User</th>
												<th>Nama Kos</th>
												<th>Harga Dibayar</th>
												<th>Keuntungan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										<tr>
												<td>
													<div class="checkbox me-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check8" required="">
															<label class="custom-control-label" for="check8"></label>
														</div>
													</div>
												</td>
												<td>
													<div class="trans-list">
														<h6 class="mb-0">Halu lo William </h6>
													</div>
												</td>
												<td><h6 class="mb-0">Mana William </h6></td>
												<td>
												<h6 class="mb-0">GPA</h6>
												</td>
												<td><span class="mb-0">30,000.000</span></td>
												<td><h6 class="mb-0">50%</h6></td>
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
</html>