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
                                                <label for="" class="form-label">Ketentuan<span
                                                        class="text-danger">*</span></label>
                                                <textarea rows="3" class="form-control" name="ketentuan" placeholder="Cth: Perempuan">{{ $OwnerDataKosts->ketentuan }}</textarea>
                                                @error('ketentuan')
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
                                            <div class="col-xl-12 mb-4">
                                                <label for="" class="form-label">diskon</label>
                                                <input type="number" class="form-control" name="diskon"
                                                    placeholder="100.000" value="{{ $OwnerDataKosts->diskon }}">
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
