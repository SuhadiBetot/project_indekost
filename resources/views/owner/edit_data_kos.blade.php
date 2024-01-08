@include('owner.template.header')
<style>
    table.dataTable thead th {
        color: #000;
        font-weight: 200px;
    }

    .coklat {
        background-color: #7E6D2E;
        color: #fff;
    }

    .coklat:hover {
        background-color: #7E6D3E;
        color: #fff;
    }

    input[type=file]::file-selector-button {
        background-color: #7E6D2E;
        color: #fff;
    }

    input[type=file]::file-selector-button:hover {
        background-color: #7E6D2E;
        color: #fff;
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
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Ubah Data Kos</h3>
                            <form action="{{ route('owner.data_kos_update', $OwnerDataKosts) }}" method="post"
                                enctype="multipart/form-data">
                                <div class="row p-3">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-xl-6">
                                        <div class="row">
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Nama kost<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nama_kost"
                                                    placeholder="Cth: Arumba 2 Gpa"
                                                    value="{{ $OwnerDataKosts->nama_kost }}">
                                                @error('nama_kost')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Tipe kost<span
                                                        class="text-danger">*</span></label>
                                                <select name="tipe_kost" id="" class="form-control">
                                                    <option selected disabled>pilih tipe kost</option>
                                                    <option value="laki-laki" {{ $OwnerDataKosts->tipe_kost == 'laki-laki' ? 'selected' : '' }}>laki-laki</option>
                                                    <option value="perempuan" {{ $OwnerDataKosts->tipe_kost == 'perempuan' ? 'selected' : '' }}>perempuan</option>
                                                    <option value="campur" {{ $OwnerDataKosts->tipe_kost == 'campur' ? 'selected' : '' }}>campur</option>
                                                </select>
                                                @error('tipe_kost')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Ketentuan<span
                                                        class="text-danger">*</span></label>
                                                <textarea rows="3" class="form-control" name="ketentuan" placeholder="Cth: Perempuan">{{ $OwnerDataKosts->ketentuan }}</textarea>
                                                @error('ketentuan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">kecamatan<span
                                                        class="text-danger">*</span></label>
                                                <select name="kecamatan" id="" class="form-control">
                                                    <option selected disabled>pilih kecamatan</option>
                                                    <option value="Ampelgading" {{ $OwnerDataKosts->kecamatan == 'Ampelgading' ? 'selected' : '' }}>Ampelgading</option>
                                                    <option value="Bantur" {{ $OwnerDataKosts->kecamatan == 'Bantur' ? 'selected' : '' }}>Bantur</option>
                                                    <option value="Bululawang" {{ $OwnerDataKosts->kecamatan == 'Bululawang' ? 'selected' : '' }}>Bululawang</option>
                                                    <option value="Dampit" {{ $OwnerDataKosts->kecamatan == 'Dampit' ? 'selected' : '' }}>Dampit</option>
                                                    <option value="Dau" {{ $OwnerDataKosts->kecamatan == 'Dau' ? 'selected' : '' }}>Dau</option>
                                                    <option value="Donomulyo" {{ $OwnerDataKosts->kecamatan == 'Donomulyo' ? 'selected' : '' }}>Donomulyo</option>
                                                    <option value="Gedangan" {{ $OwnerDataKosts->kecamatan == 'Gedangan' ? 'selected' : '' }}>Gedangan</option>
                                                    <option value="Gondanglegi" {{ $OwnerDataKosts->kecamatan == 'Gondanglegi' ? 'selected' : '' }}>Gondanglegi</option>
                                                    <option value="Jabung" {{ $OwnerDataKosts->kecamatan == 'Jabung' ? 'selected' : '' }}>Jabung</option>
                                                    <option value="Kalipare" {{ $OwnerDataKosts->kecamatan == 'Kalipare' ? 'selected' : '' }}>Kalipare</option>
                                                    <option value="Karangploso" {{ $OwnerDataKosts->kecamatan == 'Karangploso' ? 'selected' : '' }}>Karangploso</option>
                                                    <option value="Kasembon" {{ $OwnerDataKosts->kecamatan == 'Kasembon' ? 'selected' : '' }}>Kasembon</option>
                                                    <option value="Kepanjen" {{ $OwnerDataKosts->kecamatan == 'Kepanjen' ? 'selected' : '' }}>Kepanjen</option>
                                                    <option value="Kromengan" {{ $OwnerDataKosts->kecamatan == 'Kromengan' ? 'selected' : '' }}>Kromengan</option>
                                                    <option value="Lawang" {{ $OwnerDataKosts->kecamatan == 'Lawang' ? 'selected' : '' }}>Lawang</option>
                                                    <option value="Ngajum" {{ $OwnerDataKosts->kecamatan == 'Ngajum' ? 'selected' : '' }}>Ngajum</option>
                                                    <option value="Ngantang" {{ $OwnerDataKosts->kecamatan == 'Ngantang' ? 'selected' : '' }}>Ngantang</option>
                                                    <option value="Pagak" {{ $OwnerDataKosts->kecamatan == 'Pagak' ? 'selected' : '' }}>Pagak</option>
                                                    <option value="Pagelaran" {{ $OwnerDataKosts->kecamatan == 'Pagelaran' ? 'selected' : '' }}>Pagelaran</option>
                                                    <option value="Pakis" {{ $OwnerDataKosts->kecamatan == 'Pakis' ? 'selected' : '' }}>Pakis</option>
                                                    <option value="Pakisaji" {{ $OwnerDataKosts->kecamatan == 'Pakisaji' ? 'selected' : '' }}>Pakisaji</option>
                                                    <option value="Poncokusumo" {{ $OwnerDataKosts->kecamatan == 'Poncokusumo' ? 'selected' : '' }}>Poncokusumo</option>
                                                    <option value="Pujon" {{ $OwnerDataKosts->kecamatan == 'Pujon' ? 'selected' : '' }}>Pujon</option>
                                                    <option value="Singosari" {{ $OwnerDataKosts->kecamatan == 'Singosari' ? 'selected' : '' }}>Singosari</option>
                                                    <option value="Sumbermanjing Wetan" {{ $OwnerDataKosts->kecamatan == 'Sumbermanjing Wetan' ? 'selected' : '' }}>Sumbermanjing Wetan</option>
                                                    <option value="Sumberpucung" {{ $OwnerDataKosts->kecamatan == 'Sumberpucung' ? 'selected' : '' }}>Sumberpucung</option>
                                                    <option value="Tajinan" {{ $OwnerDataKosts->kecamatan == 'Tajinan' ? 'selected' : '' }}>Tajinan</option>
                                                    <option value="Tirtoyudo" {{ $OwnerDataKosts->kecamatan == 'Tirtoyudo' ? 'selected' : '' }}>Tirtoyudo</option>
                                                    <option value="Tumpang" {{ $OwnerDataKosts->kecamatan == 'Tumpang' ? 'selected' : '' }}>Tumpang</option>
                                                    <option value="Turen" {{ $OwnerDataKosts->kecamatan == 'Turen' ? 'selected' : '' }}>Turen</option>
                                                    <option value="Wagir" {{ $OwnerDataKosts->kecamatan == 'Wagir' ? 'selected' : '' }}>Wagir</option>
                                                    <option value="Wajak" {{ $OwnerDataKosts->kecamatan == 'Wajak' ? 'selected' : '' }}>Wajak</option>
                                                    <option value="Wonosari" {{ $OwnerDataKosts->kecamatan == 'Wonosari' ? 'selected' : '' }}>Wonosari</option>
                                                </select>
                                                @error('kecamatan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Lokasi<span
                                                        class="text-danger">*</span></label>
                                                <textarea rows="3" class="form-control" name="lokasi"
                                                    placeholder="Cth: Jl.Griya Permata Alam Ngijo, KarangPloso">{{ $OwnerDataKosts->lokasi }}</textarea>
                                                @error('lokasi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Peraturan<span
                                                        class="text-danger">*</span></label>
                                                <textarea rows="3" class="form-control" name="peraturan"
                                                    placeholder="Cth: Tidak boleh merokok, tidak boleh bergadang">{{ $OwnerDataKosts->peraturan }}</textarea>
                                                @error('peraturan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Spesifikasi<span
                                                        class="text-danger">*</span></label>
                                                <textarea rows="3" class="form-control" name="spesifikasi"
                                                    placeholder="Cth: Luas rumah 80 meter, luas kamar 5 meter">{{ $OwnerDataKosts->spesifikasi }}</textarea>
                                                @error('spesifikasi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Harga/bulan<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="harga"
                                                    placeholder="1.000.000" value="{{ $OwnerDataKosts->harga }}">
                                                @error('harga')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row">
                                            <div class="col-xl-12" id="dynamic-fields">
                                                <label for="" class="form-label">Fasilitas kamar<span
                                                        class="text-danger">*</span></label>

                                                @php
                                                    $fasilitasKamarArray = json_decode($OwnerDataKosts->fasilitas_kamar, true);
                                                @endphp

                                                @if (is_array($fasilitasKamarArray))
                                                    @foreach ($fasilitasKamarArray as $fasilitas)
                                                        <div class="d-flex dynamic-field mb-2">
                                                            <input type="text" class="form-control"
                                                                name="fasilitas_kamar[]" placeholder="Cth: Kasur"
                                                                value="{{ $fasilitas }}">
                                                            @error('fasilitas_kamar[]')
                                                                <div class="invalid-feedback">{{ $message }}
                                                                </div>
                                                            @enderror
                                                            <button type="button" class="btn coklat btn-sm ms-2"
                                                                onclick="removeField(this)">Hapus</button>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="d-flex dynamic-field mb-2">
                                                        <input type="text" class="form-control"
                                                            name="fasilitas_kamar[]" placeholder="Cth: Kasur"
                                                            value="{{ $OwnerDataKosts->fasilitas_kamar }}">
                                                        @error('fasilitas_kamar[]')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                        <button type="button" class="btn coklat btn-sm ms-2"
                                                            onclick="removeField(this)">Hapus</button>
                                                    </div>
                                                @endif


                                                <!-- Tombol untuk menambahkan bidang dinamis -->
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <button type="button" class="btn coklat mt-2"
                                                    onclick="addField()">Tambah Fasilitas
                                                    Kamar</button>
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Fasilitas kamar
                                                    mandi<span class="text-danger">*</span></label>
                                                <textarea rows="3" class="form-control" name="fasilitas_kamar_mandi"
                                                    placeholder="Cth: 4 kamar mandi bawah, 2 kamar mandi atas">{{ $OwnerDataKosts->fasilitas_kamar_mandi }}</textarea>
                                                @error('fasilitas_kamar_mandi')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">Fasilitas tempat
                                                    parkir<span class="text-danger">*</span></label>
                                                <textarea rows="3" class="form-control" name="fasilitas_tempat_parkir"
                                                    placeholder="Cth: Tempat parkir dengan ukuran 180 meter : 20 meter">{{ $OwnerDataKosts->fasilitas_tempat_parkir }}</textarea>
                                                @error('fasilitas_tempat_parkir')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <span class="text-dark mb-3"><b>Upload 2 gambar dengan area yang
                                                    berbeda!</b></span>
                                            <div class="col-xl-12 mb-4">
                                                <label class="form-label" for="">Foto depan kost<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control" name="foto_depan">
                                                @error('foto_depan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <label class="form-label" for="">Foto dalam kost<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control" name="foto_dalam">
                                                @error('foto_belakang')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div id="photo-fields">
                                                <!-- Foto tambahan akan ditambahkan di sini -->
                                            </div>
                                            <div class="col-xl-12 mb-4">
                                                <button type="button" class="btn coklat mt-2"
                                                    onclick="addPhotoField()">Tambah foto kos</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn coklat px-5"
                                            onclick="return confirm('apakah anda yakin ingin merubah data ini')">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
        </div>
        <div class="footer footer-outer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/"
                        target="_blank">DexignLab</a> 2023</p>
            </div>
        </div>
    </div>
    </div>

    <script>
        function addField() {
            var dynamicFields = document.getElementById('dynamic-fields');
            var newField = document.createElement('div');
            newField.className = 'd-flex dynamic-field mb-2';
            newField.innerHTML = `
                <input type="text" class="form-control" name="fasilitas_kamar[]" placeholder="Cth: Kasur">
                <button type="button" class="btn coklat btn-sm ms-2" onclick="removeField(this)">Hapus</button>
            `;
            dynamicFields.appendChild(newField);
        }

        function removeField(field) {
            var dynamicFields = document.getElementById('dynamic-fields');
            var fieldContainer = field.parentNode;
            dynamicFields.removeChild(fieldContainer);
        }
    </script>
    <script>
        function addPhotoField() {
            var container = document.getElementById('photo-fields');
            var field = document.createElement('div');
            field.classList.add('col-xl-12', 'mb-4');

            field.innerHTML = `
                <label class="form-label" for="">Foto tambahan (opsional)</label>
                <div class="d-flex">
                    <input type="file" class="form-control" name="foto_tambahan[]">
                    <button type="button" class="btn coklat btn-sm ms-2" onclick="removePhotoField(this)">Hapus</button>
                </div>
            `;

            container.appendChild(field);
        }

        function removePhotoField(element) {
            var field = element.parentNode.parentNode;
            field.parentNode.removeChild(field);
        }
    </script>
</body>
@include('owner.template.script')

</html>
