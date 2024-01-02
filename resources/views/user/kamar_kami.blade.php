@extends('user.layouts.main')

@section('kamar-kami')
    <div class="container">
        <form class="form-inline">
            <label class="sr-only" for="namaLokasi">Nama Lokasi</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="namaLokasi" placeholder="Masukkan nama lokasi">
            <button type="submit" class="btn coklat mb-2">Cari</button>
        </form>
        <div class="card">
            <div class="card-body">
                @foreach ($kosts as $kost)
                <a href="{{route('detail-kos', $kost)}}" class="text-dark">
                    <div class="row mb-3">
                        <div class="col-xl-6">
                            <img class="rounded-5" src="{{ 'ownerkos/' . $kost->foto_depan }}" alt=""
                                style="width: 581px; height: 319px">
                        </div>
                        <div class="col-xl-6">
                            <span class="badge" style="background-color: #D6EEFF; color: #666666;">Cowok</span>
                            <h3 class="fw-medium">{{ $kost->nama_kost }}</h3>
                            <h4 style="color: #675656;">{{ $kost->lokasi }}</h4>
                            <p>
                                @php
                                    $fasilitas_kamar = json_decode($kost->fasilitas_kamar);
                                @endphp
                                @foreach ($fasilitas_kamar as $kamar)
                                    {{ $kamar }},
                                @endforeach
                            </p>
                            <div class="d-flex justify-content-between">
                                <h5>⭐⭐⭐⭐⭐/100</h5>
                                <h5>Rp.{{number_format($kost->harga, 0 , ',', '.')}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
