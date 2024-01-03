@extends('user.layouts.main')

@section('kamar-kami')
    <div class="container">
        <div class="filterisasi mt-3 mb-2 d-flex justify-content-between">
            <form class="form-inline">
                <label class="sr-only" for="namaLokasi">Nama Lokasi</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="namaLokasi" placeholder="Masukkan nama Lokasi">
                <button type="submit" class="btn coklat mb-2">Cari</button>
            </form>
            <!-- Button trigger modal -->
            <button type="button" class="btn coklat py-0" data-bs-toggle="modal" data-bs-target="#filter-modal">
                Filter
            </button>

            <!-- Modal -->
            <div class="modal fade" id="filter-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #dddbdb;">
                        <div class="modal-header" style="border-bottom-color: #0000;">
                            <span class="modal-title" id="exampleModalLabel" style="font-size: 20px; font-weight: 500;">Filter</span>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <h4 style="color: #675656">Ketentuan</h4>
                                 <div class="radio-list2 d-flex">
                                    <style>
                                        .form-check{
                                            margin-left: 20px;
                                        }
                                    </style>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Cewe
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Cowo
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Campur
                                        </label>
                                      </div>
                                </div>
                                <h4 class="mt-2" style="color: #675656">Batas Harga</h4>
                                    <div class="range-harga d-flex justify-between mx-3">
                                        <input type="number" name="minharga" id="" class="form-control" placeholder="Minimum" >
                                        <span class="mx-3"> - </span>
                                        <input type="number" name="maxharga" id="" class="form-control" placeholder="Maximum">
                                    </div>
                                <h4 class="mt-2" style="color: #675656">Rating</h4>
                                <div class="radio-list d-flex">
                                    <style>
                                        .form-check1{
                                            margin-left: 25px;
                                        }
                                    </style>
                                    <div class="form-check1" style="background-color: #ffff; padding: 10px; border-radius: 12px;">
                                        <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          ⭐⭐⭐⭐⭐
                                        </label>
                                    </div>
                                    <div class="form-check1" style="background-color: #ffff; padding: 10px; border-radius: 12px;">
                                        <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          ⭐⭐⭐⭐
                                        </label>
                                    </div>
                                    <div class="form-check1" style="background-color: #ffff; padding: 10px; border-radius: 12px;">
                                        <input class="form-check-input" type="radio" name="rating" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          ⭐⭐⭐
                                        </label>
                                    </div>
                                </div>   
                            </form>
                        </div>
                        <div class="modal-footer" style="border-bottom: 2px solid #0000; border-top-color: #0000;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            <button type="button" class="btn coklat">Cari</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card p-4">
            <div class="card-body" style="padding-top: 10px; padding-bottom:10px; padding-left: 7px; padding-right:7px;">
                @foreach ($kosts as $kost)
                    <a href="{{ route('detail-kos', $kost) }}" class="text-dark ">
                        <div class="row mb-3 mt-4">
                            <div class="col-xl-6">
                                <img class="rounded-5" src="{{ 'ownerkos/' . $kost->foto_depan }}" alt=""
                                    style="width: 581px; height: 319px">
                            </div>
                            <div class="col-xl-6">
                                <span class="rounded-pill"
                                    style="background-color: #D6EEFF; color: #666666; padding-top:7px; padding-bottom:7px; padding-left:20px; padding-right:20px; 
                            margin-top: 50px;">Cowok</span>
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
                        <hr>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
