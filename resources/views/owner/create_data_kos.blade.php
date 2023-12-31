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
                            <h3>Tambah Data Kos</h4>
                                <form action="{{ route('owner.data_kos_store') }}" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row p-3">
                                        @csrf
                                        <div class="col-xl-6">
                                            <div class="row">
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Nama kost<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="nama_kost"
                                                        placeholder="Cth: Arumba 2 Gpa" value="{{ old('nama_kost') }}">
                                                    @error('nama_kost')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Tipe kost<span
                                                            class="text-danger">*</span></label>
                                                    <select name="tipe_kost" id="" class="form-control">
                                                        <option selected disabled>pilih tipe kost</option>
                                                        <option value="laki-laki">laki-laki</option>
                                                        <option value="perempuan">perempuan</option>
                                                        <option value="campur">campur</option>
                                                    </select>
                                                    @error('tipe_kost')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Ketentuan<span
                                                            class="text-danger">*</span></label>
                                                    <textarea rows="3" class="form-control" name="ketentuan" placeholder="Cth: Perempuan">{{ old('ketentuan') }}</textarea>
                                                    @error('ketentuan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">kecamatan<span
                                                            class="text-danger">*</span></label>
                                                    <select name="kecamatan" id="" class="form-control">
                                                        <option selected disabled>pilih kecamatan</option>
                                                        <option value="Ampelgading">Ampelgading</option>
                                                        <option value="Bantur">Bantur</option>
                                                        <option value="Bululawang">Bululawang</option>
                                                        <option value="Dampit">Dampit</option>
                                                        <option value="Dau">Dau</option>
                                                        <option value="Donomulyo">Donomulyo</option>
                                                        <option value="Gedangan">Gedangan</option>
                                                        <option value="Gondanglegi">Gondanglegi</option>
                                                        <option value="Jabung">Jabung</option>
                                                        <option value="Kalipare">Kalipare</option>
                                                        <option value="Karangploso">Karangploso</option>
                                                        <option value="Kasembon">Kasembon</option>
                                                        <option value="Kepanjen">Kepanjen</option>
                                                        <option value="Kromengan">Kromengan</option>
                                                        <option value="Lawang">Lawang</option>
                                                        <option value="Ngajum">Ngajum</option>
                                                        <option value="Ngantang">Ngantang</option>
                                                        <option value="Pagak">Pagak</option>
                                                        <option value="Pagelaran">Pagelaran</option>
                                                        <option value="Pakis">Pakis</option>
                                                        <option value="Pakisaji">Pakisaji</option>
                                                        <option value="Poncokusumo">Poncokusumo</option>
                                                        <option value="Pujon">Pujon</option>
                                                        <option value="Singosari">Singosari</option>
                                                        <option value="Sumbermanjing Wetan">Sumbermanjing Wetan</option>
                                                        <option value="Sumberpucung">Sumberpucung</option>
                                                        <option value="Tajinan">Tajinan</option>
                                                        <option value="Tirtoyudo">Tirtoyudo</option>
                                                        <option value="Tumpang">Tumpang</option>
                                                        <option value="Turen">Turen</option>
                                                        <option value="Wagir">Wagir</option>
                                                        <option value="Wajak">Wajak</option>
                                                        <option value="Wonosari">Wonosari</option>
                                                    </select>
                                                    @error('kecamatan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Lokasi<span
                                                            class="text-danger">*</span></label>
                                                    <textarea rows="3" class="form-control" name="lokasi"
                                                        placeholder="Cth: Jl.Griya Permata Alam Ngijo, KarangPloso">{{ old('lokasi') }}</textarea>
                                                    @error('lokasi')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Peraturan<span
                                                            class="text-danger">*</span></label>
                                                    <textarea rows="3" class="form-control" name="peraturan"
                                                        placeholder="Cth: Tidak boleh merokok, tidak boleh bergadang">{{ old('peraturan') }}</textarea>
                                                    @error('peraturan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Spesifikasi<span
                                                            class="text-danger">*</span></label>
                                                    <textarea rows="3" class="form-control" name="spesifikasi"
                                                        placeholder="Cth: Luas rumah 80 meter, luas kamar 5 meter">{{ old('spesifikasi') }}</textarea>
                                                    @error('spesifikasi')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Harga/bulan<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="harga"
                                                        placeholder="1.000.000" value="{{ old('harga') }}">
                                                    @error('harga')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row">
                                                <div id="dynamic-fields">
                                                    <div class="col-xl-12">
                                                        <label for="" class="form-label">Fasilitas kamar<span
                                                                class="text-danger">*</span></label>

                                                        <div class="d-flex mb-2">
                                                            <input type="text" class="form-control"
                                                                name="fasilitas_kamar[]" placeholder="Cth: Kasur">
                                                            <button type="button" class="btn coklat btn-sm ms-2"
                                                                onclick="removeField(this)">Hapus</button>
                                                        </div>
                                                    </div>
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
                                                        placeholder="Cth: 4 kamar mandi bawah, 2 kamar mandi atas">{{ old('fasilitas_kamar_mandi') }}</textarea>
                                                    @error('fasilitas_kamar_mandi')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-12 mb-4">
                                                    <label for="" class="form-label">Fasilitas tempat
                                                        parkir<span class="text-danger">*</span></label>
                                                    <textarea rows="3" class="form-control" name="fasilitas_tempat_parkir"
                                                        placeholder="Cth: Tempat parkir dengan ukuran 180 meter : 20 meter">{{ old('fasilitas_tempat_parkir') }}</textarea>
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
                                                onclick="return confirm('apakah anda yakin ingin menambah data ini')">Kirim</button>
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
                        target="_blank">DexignLab</a>
                    2023</p>
            </div>
        </div>

    </div>
    </div>


    <script>
        function addField() {
            var container = document.getElementById('dynamic-fields');
            var field = document.createElement('div');
            field.classList.add('col-xl-12');

            field.innerHTML = `
                <label for="" class="form-label">Fasilitas kamar<span class="text-danger">*</span></label>
                <div class="d-flex mb-2">
                <input type="text" class="form-control" name="fasilitas_kamar[]" placeholder="Cth: Kasur">
                <button type="button" class="btn coklat btn-sm ms-2" onclick="removeField(this)">Hapus</button>
                </div>
            `;

            container.appendChild(field);

            // Menyimpan nilai fields ke localStorage
            var savedFields = container.innerHTML;
            localStorage.setItem('dynamicFields', savedFields);
        }

        function removeField(element) {
            var field = element.parentNode.parentNode;
            field.parentNode.removeChild(field);

            // Menyimpan nilai fields yang diupdate ke localStorage
            var container = document.getElementById('dynamic-fields');
            var savedFields = container.innerHTML;
            localStorage.setItem('dynamicFields', savedFields);
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

<!-- Mirrored from akademi.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:33:18 GMT -->

</html>
