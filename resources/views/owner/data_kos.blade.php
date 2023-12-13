@include('admin.template.header')
<style>
    table.dataTable thead th {
        color: #000;
        font-weight: 200px;
    }
</style>
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

  <div id="main-wrapper" class="wallet-open active">
  @include('owner.template.navbar')
  @include('owner.template.sidebar')

  <div class="content-body">
    <div class="container-fluid">

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

        <div class="col-xl-12 wow fadeInUp mt-5" data-wow-delay="1.5s">
            <div class="table-responsive full-data">
            <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer" id="example-student">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kost</th>
                    <th>Alamat</th>
                    <th>Ketentuan</th>
                    <th>Harga</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kost Cahaya Mahasiswa</td>
                    <td>Jl. Kenanga Asri No.26</td>
                    <td>Kost Cewek</td>
                    <td>Rp 1.000.000</td>
                    <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kost Mantep</td>
                    <td>Jl. Kenduri No.43</td>
                    <td>Kost Cowok</td>
                    <td>Rp 750.000</td>
                    <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                    <td>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
            </table>
            </div>
            </div>
      <!-- row -->

    </div>
    </div>
    <div class="footer footer-outer">
      <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a>
          2023</p>
      </div>
    </div>

  </div>
  </div>
</body>
@include('admin.template.script')

<!-- Mirrored from akademi.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:33:18 GMT -->

</html>
