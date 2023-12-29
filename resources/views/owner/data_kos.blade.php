@include('owner.template.header')
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
    @include('layout.navbar')
    @include('layout.sidebar')

    <div class="content-body">
      <div class="container-fluid">

        <div class="card">
          <div class="card-body">
            <h3>Data Kos Saya</h3>
            <div class="col-xl-12 text-end">
              <a href="{{ route('owner.data_kos_create') }}" class="btn btn-primary">+</a>
            </div>

            <div class="col-xl-12 wow fadeInUp mt-5" data-wow-delay="1.5s">
              <div class="table-responsive full-data">
                <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer"
                  id="example-student">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kost</th>
                      <th>Ketentuan</th>
                      <th>Alamat</th>
                      <th>Harga</th>
                      <th>Bukti</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datas as $data)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-truncate" style="max-width: 150px;">{{ $data->nama_kost }}</td>
                        <td class="text-truncate" style="max-width: 150px;">{{ $data->ketentuan }}</td>
                        <td class="text-truncate" style="max-width: 150px;">{{ $data->lokasi }}</td>
                        <td>Rp. {{ number_format($data->harga, 0, ',', '.') }}</td>
                        <td>
                          <img class="rounded-circle" width="50" height="50"
                            src="{{ asset('ownerkos/' . $data->foto_depan) }}" alt="">
                          <img class="rounded-circle" width="50" height="50"
                            src="{{ asset('ownerkos/' . $data->foto_dalam) }}" alt="">
                        </td>
                        <td>
                          <div class="d-flex">
                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal"
                              data-bs-target="#exampleModal{{ $data->id }}"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('owner.data_kos_edit', $data->id) }}"
                              class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                            <a href="{{ route('owner.data_kos_delete', $data->id) }}"
                              class="btn btn-danger shadow btn-xs sharp"
                              onclick="return confirm('yakin mau menghapus data ini')"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>

                      <!-- Modal -->
                      <div class="modal fade text-black" id="exampleModal{{ $data->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="d-flex align-items-center p-2">
                                <div class="offset-xl-2 col-xl-8 text-center">
                                    <h1>Griya Permata Alam Regency 2</h1>
                                </div>
                                <div class="col-xl-2 text-end align-self-start">
                                    <button type="button" class="btn-close fs-3" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>

                            <div class="modal-body row">
                              <div class="col-xl-12">
                                <div class="row text-break">
                                  <h5 class="col-xl-3">KETENTUAN</h5>
                                  <span class="col-xl-9">:{{ $data->ketentuan }}</span>
                                </div>
                              </div>
                              <div class="col-xl-12">
                                <div class="row text-break">
                                  <h5 class="col-xl-3">LOKASI</h5>
                                  <span class="col-xl-9">:{{ $data->lokasi }}</span>
                                </div>
                              </div>
                              <div class="col-xl-12">
                                <div class="row">
                                  <h5 class="col-xl-3">HARGA</h5>
                                  <span class="col-xl-9">:{{ 'Rp.' . number_format($data->harga, 0, ',', '.') }}</span>
                                </div>
                              </div>
                              <div class="col-xl-12">
                                <div class="row">
                                  <h5 class="col-xl-4">GAMBAR</h5>
                                  :<img src="{{ 'ownerkos/' . $data->foto_depan }}" alt="" class="mb-3">
                                  <img src="{{ 'ownerkos/' . $data->foto_dalam }}" alt="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
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
@include('owner.template.script')

<!-- Mirrored from akademi.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:33:18 GMT -->

</html>
