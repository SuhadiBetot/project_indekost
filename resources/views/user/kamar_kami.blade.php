@extends('user.layouts.main')

@section('kamar-kami')
    <div class="container">
        <div class="row my-3">
            <div class="col">
                <form class="form-inline">
                    <label class="sr-only" for="namaLokasi">Nama Lokasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="namaLokasi" placeholder="Masukkan nama Lokasi">
                    <button type="submit" class="btn coklat mb-2">Cari</button>
                </form>
            </div>
            <div class="col">
                <form class="form-inline mt-1">
                    <select class="form-select" aria-label="Default select example" style="width: 150px;">
                        <option selected disabled>Pilih Lokasi</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </form>
            </div>

            <button type="button" class="btn btn-primary" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                pilih ini
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Filter</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="container text-center">
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                            <div class="col-md-6">
                                    <label for="namaLokasi">Cari</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="namaLokasi" placeholder="Masukkan nama Lokasi">
                                    <button type="submit" class="btn coklat mb-2">Cari</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn coklat mb-2">Cowok</button>
                              </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card">
            <div class="card-body">
                @foreach ($kosts as $kost)
                    <a href="{{ route('detail-kos', $kost) }}" class="text-dark">
                        <div class="row mb-3">
                            <div class="col-xl-6">
                                <img class="rounded-5" src="{{ 'ownerkos/' . $kost->foto_depan }}" alt=""
                                    style="width: 581px; height: 319px">
                            </div>
                            <div class="col-xl-6">
                                <span class="rounded-pill"
                                    style="background-color: #D6EEFF; color: #666666; padding-top:10px; padding-bottom:10px; padding-left:20px; padding-right:20px;
                            margin-top: 15px:">Cowok</span>
                                <h2 class="fw-medium mt-3">{{ $kost->nama_kost }}</h2>
                                <h3 style="color: #675656;">{{ $kost->lokasi }}</h3>
                                <p style="font-size: 20px;">
                                    @php
                                        $fasilitas_kamar = json_decode($kost->fasilitas_kamar);
                                    @endphp
                                    @foreach ($fasilitas_kamar as $kamar)
                                        {{ $kamar }},
                                    @endforeach
                                </p>
                                <div class="d-flex justify-content-between">
                                    <h3>⭐⭐⭐⭐⭐/100</h3>
                                    <div>
                                        <h5 style="color: red;">
                                            Rp.{{ number_format($kost->harga - $kost->diskon, 0, ',', '.') }}</h5>
                                        <h5 style="text-decoration: line-through;">
                                            Rp.{{ number_format($kost->harga, 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
