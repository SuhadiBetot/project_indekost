@extends('user.layouts.main')

@section('kamar-kami')
    <div class="container-fluid">
        <!-- Row -->
        <div class="card p-3">
            <div class="row">
                <div class="col-xl-8 text-black">
                    <img src="{{ asset('ownerkos/' . $ownerDataKosts->foto_depan) }}" class="w-100" alt="foto depan">
                    <h4 class="mt-5">{{ $ownerDataKosts->nama_kost }}</h4>
                    <div class=" d-flex align-items-center gap-3">
                        <p class="py-1 px-3 text-black fw-semibold" style="background-color: #D9D9D9">kost
                            {{ $ownerDataKosts->tipe_kost }}</p>
                        <p class="text-black fw-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <g clip-path="url(#clip0_117_55)">
                                    <path
                                        d="M15.13 29.1724C15.0836 29.2188 15.0402 29.2619 15 29.3017C14.9598 29.2619 14.9164 29.2188 14.87 29.1724C14.5658 28.8685 14.1302 28.4244 13.6071 27.866C12.5603 26.7485 11.1656 25.176 9.77212 23.3545C8.37752 21.5315 6.99162 19.4688 5.95618 17.3708C4.91803 15.2674 4.25 13.1639 4.25 11.25C4.25 8.39892 5.38259 5.66462 7.3986 3.6486C9.41462 1.63259 12.1489 0.5 15 0.5C17.8511 0.5 20.5854 1.63259 22.6014 3.6486C24.6174 5.66462 25.75 8.39892 25.75 11.25C25.75 13.1639 25.082 15.2674 24.0438 17.3708C23.0084 19.4688 21.6225 21.5315 20.2279 23.3545C18.8344 25.176 17.4397 26.7485 16.3929 27.866C15.8698 28.4244 15.4342 28.8685 15.13 29.1724ZM10.669 15.581C11.8176 16.7297 13.3755 17.375 15 17.375C16.6245 17.375 18.1824 16.7297 19.331 15.581C20.4797 14.4324 21.125 12.8745 21.125 11.25C21.125 9.62555 20.4797 8.06763 19.331 6.91897C18.1824 5.77031 16.6245 5.125 15 5.125C13.3755 5.125 11.8176 5.77031 10.669 6.91897C9.52031 8.06763 8.875 9.62555 8.875 11.25C8.875 12.8745 9.52031 14.4324 10.669 15.581Z"
                                        fill="white" stroke="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_117_55">
                                        <rect width="30" height="30" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Kec.{{ $ownerDataKosts->kecamatan }}
                        </p>
                    </div>
                    <h4>
                        Kost disewakan oleh {{ $ownerDataKosts->user->name }}
                    </h4>
                    <p class="text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_117_57)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.65 16.8C4.71986 16.7069 4.81045 16.6313 4.91459 16.5792C5.01873 16.5271 5.13357 16.5 5.25 16.5H9C9.19891 16.5 9.38968 16.579 9.53033 16.7197C9.67098 16.8603 9.75 17.0511 9.75 17.25C9.75 17.4489 9.67098 17.6397 9.53033 17.7803C9.38968 17.921 9.19891 18 9 18H5.625L2.25 22.5H21.75L18.375 18H15C14.8011 18 14.6103 17.921 14.4697 17.7803C14.329 17.6397 14.25 17.4489 14.25 17.25C14.25 17.0511 14.329 16.8603 14.4697 16.7197C14.6103 16.579 14.8011 16.5 15 16.5H18.75C18.8664 16.5 18.9813 16.5271 19.0854 16.5792C19.1896 16.6313 19.2801 16.7069 19.35 16.8L23.85 22.8C23.9336 22.9114 23.9845 23.0439 23.997 23.1826C24.0095 23.3214 23.9831 23.4608 23.9208 23.5854C23.8585 23.71 23.7628 23.8148 23.6443 23.888C23.5258 23.9612 23.3893 24 23.25 24H0.75C0.610716 24 0.474184 23.9612 0.355702 23.888C0.23722 23.8148 0.14147 23.71 0.07918 23.5854C0.0168903 23.4608 -0.00947761 23.3214 0.00303087 23.1826C0.0155393 23.0439 0.06643 22.9114 0.15 22.8L4.65 16.8Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 1.50005C11.4091 1.50005 10.8239 1.61645 10.2779 1.8426C9.73196 2.06874 9.23588 2.40021 8.81802 2.81807C8.40016 3.23594 8.06869 3.73201 7.84254 4.27798C7.6164 4.82394 7.5 5.40911 7.5 6.00005C7.5 6.591 7.6164 7.17617 7.84254 7.72213C8.06869 8.2681 8.40016 8.76417 8.81802 9.18204C9.23588 9.5999 9.73196 9.93137 10.2779 10.1575C10.8239 10.3837 11.4091 10.5001 12 10.5001C13.1935 10.5001 14.3381 10.0259 15.182 9.18204C16.0259 8.33812 16.5 7.19353 16.5 6.00005C16.5 4.80658 16.0259 3.66199 15.182 2.81807C14.3381 1.97416 13.1935 1.50005 12 1.50005ZM6 6.00005C6.00011 4.84539 6.33339 3.71529 6.95984 2.74534C7.5863 1.7754 8.47932 1.00681 9.53176 0.531814C10.5842 0.0568166 11.7513 -0.104417 12.8931 0.0674594C14.0349 0.239336 15.1029 0.737022 15.9688 1.5008C16.8348 2.26458 17.462 3.262 17.7751 4.37339C18.0883 5.48477 18.0741 6.66291 17.7343 7.76643C17.3945 8.86996 16.7434 9.85199 15.8593 10.5947C14.9752 11.3374 13.8956 11.8092 12.75 11.9536V20.2501C12.75 20.449 12.671 20.6397 12.5303 20.7804C12.3897 20.921 12.1989 21.0001 12 21.0001C11.8011 21.0001 11.6103 20.921 11.4697 20.7804C11.329 20.6397 11.25 20.449 11.25 20.2501V11.9551C9.79945 11.7723 8.46553 11.0662 7.49882 9.96941C6.53211 8.87261 5.99913 7.46207 6 6.00005Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_117_57">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        {{ $ownerDataKosts->lokasi }}
                    </p>
                    <hr>
                    <h4>
                        Spesifikasi Kamar
                    </h4>
                    <p class="text-black">
                        {{ $ownerDataKosts->spesifikasi }}
                    </p>
                    <hr>
                    <h4>
                        Fasilitas Kamar
                    </h4>
                    <p class="text-black">
                        @php
                            $fasilitas_kamar = json_decode($ownerDataKosts->fasilitas_kamar);
                        @endphp
                        @foreach ($fasilitas_kamar as $kamar)
                            {{ $kamar }},
                        @endforeach
                    </p>
                    <hr>
                    <h4>
                        Fasilitas Kamar Mandi
                    </h4>
                    <p class="text-black">
                        {{ $ownerDataKosts->fasilitas_kamar_mandi }}
                    </p>
                    <hr>
                    <h4>
                        Peraturan Kos
                    </h4>
                    <p class="text-black">

                    </p>
                    <hr>
                    <h4>
                        Fasilitas Umum
                    </h4>
                    <p class="text-black">

                    </p>
                    <hr>
                    <h4>
                        Fasilitas Parkir
                    </h4>
                    <p class="text-black">
                        {{ $ownerDataKosts->fasilitas_tempat_parkir }}
                    </p>
                    <hr>
                    <h4 class="mb-0">Ulasan Terhadap Kost</h4>
                    <style>
                        .rating .fa-star {
                            color: rgb(218, 218, 4);
                            cursor: pointer;
                        }

                        .fa-star:hover {
                            transform: scale(1.1);
                        }
                    </style>

                    <form action="">
                        <div class="rating mb-3">
                            <input type="number" name="rating" hidden>
                            <i class="far fa-star fa-lg"></i>
                            <i class="far fa-star fa-lg"></i>
                            <i class="far fa-star fa-lg"></i>
                            <i class="far fa-star fa-lg"></i>
                            <i class="far fa-star fa-lg"></i>
                        </div>
                        <textarea name="Ulasan" class="form-control" id="" cols="150" rows="5" placeholder="Tulis Ulasan Anda Mengenai Kost Ini"></textarea>
                        <button type="submit" class="btn coklat my-3">Kirim</button>
                    </form>

                    <script>
                        const allstr = document.querySelectorAll('.rating .fa-star');
                        const ratingInput = document.querySelector('.rating input[name="rating"]');

                        allstr.forEach((item, idx) => {
                            item.addEventListener('click', function () {
                                for (let i = 0; i < allstr.length; i++) {
                                    if (i <= idx) {
                                        allstr[i].classList.replace('far', 'fas');
                                    } else {
                                        allstr[i].classList.replace('fas', 'far');
                                    }
                                }
                                ratingInput.value = idx + 1;
                            });
                        });
                    </script>

                </div>
                <div class="col-xl-4">
                    <img src="{{ asset('ownerkos/' . $ownerDataKosts->foto_dalam) }}" alt="" class="w-100">
                    @php
                        $foto_tambahan = json_decode($ownerDataKosts->foto_tambahan);
                    @endphp

                    @if (!empty($foto_tambahan) && is_array($foto_tambahan))
                        @foreach ($foto_tambahan as $foto)
                            <img src="{{ asset('ownerkos/' . $foto) }}" alt="" class="w-100 mt-2">
                        @endforeach
                    @endif

                    <div class="card my-4" style="border-color: black;">
                        <div class="card-body">
                            <form action="{{ route('pengajuan-sewa-proses') }}" method="post">
                                @csrf
                                @php
                                    $promo = $ownerDataKosts->harga - $ownerDataKosts->diskon;
                                @endphp
                                <h4>Rp.{{ number_format($promo, 0, ',', '.') }}/bulan</h4>
                                <div class="d-flex gap-3">
                                    <input class="form-control" type="date" name="mulai_kos">
                                    @error('mulai_kos')
                                        <p>{{ $message }}</p>
                                    @enderror
                                    <select class="form-control" name="bulan" id="select-bulan">
                                        <option selected disabled>pilih bulanan</option>
                                        <option value="1">per bulan</option>
                                        <option value="6">per 6 bulan</option>
                                        <option value="12">per tahun</option>
                                    </select>
                                    @error('bulan')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <input type="number" name="user_id" value="{{ auth()->user()->id }}">
                                <input type="number" name="owner_data_kosts_id" value="{{ $ownerDataKosts->id }}">
                                <div class="row mt-1">
                                    <div class="col">
                                        <div>
                                            Bayar Sewa
                                        </div>
                                    </div>
                                    <div class="col" id="harga-sewa">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        Biaya Admin(5%)
                                    </div>
                                    <div class="col" id="biaya-admin">

                                    </div>
                                </div>
                                <hr style="border-color: black;">
                                <div class="row mb-3">
                                    <div class="col">Pembayaran Total</div>
                                    <div class="col" id="total">

                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn border-dark rounded-pill">Ajukan
                                        Sewa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <iframe class="rounded"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.000878217937!2d112.61032568807774!3d-7.893598040022315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1704182611591!5m2!1sid!2sid"
                        width="470" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="justify-content-end d-flex gap-3">
                    <a href="{{ route('kamar-kami') }}" class="btn text-white fw-bold"
                        style="background-color: #C91919;">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Add this script section after your existing script section -->
    <script>
        function kalkulator() {
            let pack = document.getElementById("select-bulan");
            let packselect = pack.value;

            let hargaSewa = 0;
            let biayaAdmin = 0;
            let total = 0;

            if (packselect == 1) {
                hargaSewa = parseInt("{{ $ownerDataKosts->harga }}");
                biayaAdmin = 0.05 * hargaSewa;
                total = hargaSewa + biayaAdmin;
            } else if (packselect == 6) {
                hargaSewa = parseInt("{{ $ownerDataKosts->harga }}") * 6;
                biayaAdmin = 0.05 * hargaSewa;
                total = hargaSewa + biayaAdmin;
            } else if (packselect == 12) {
                hargaSewa = parseInt("{{ $ownerDataKosts->harga }}") * 12;
                biayaAdmin = 0.05 * hargaSewa;
                total = hargaSewa + biayaAdmin;
            } else {
                hargaSewa = 0;
                biayaAdmin = 0;
                total = 0;
            }

            document.getElementById("harga-sewa").innerText = " : Rp. " + hargaSewa.toLocaleString();
            document.getElementById("biaya-admin").innerText = " : Rp. " + biayaAdmin.toLocaleString();
            document.getElementById("total").innerText = " : Rp. " + total.toLocaleString();
        }

        // Pemanggilan fungsi kalkulator() saat ada perubahan pada elemen select-bulan
        document.getElementById("select-bulan").addEventListener("change", kalkulator);

        // Pemanggilan fungsi kalkulator() pada saat halaman dimuat
        kalkulator();
    </script>

@endsection
