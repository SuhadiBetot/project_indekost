<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Integrasi Midtrans dengan Laravel
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    @if ($sewa->status == 'pending')
        tunggu konfirmasi
    @elseif ($sewa->status == 'sudah dikonfirmasi')
        <main class="py-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="card border rounded shadow">
                            <div class="card-body">
                                anda telah mengajukan sewa, silahkan untuk melanjutkan pembayaran
                                <button href="#" class="btn btn-primary rounded-pill" id="pay-button">Bayar
                                    Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @elseif ($sewa->status == 'sudah tertolak')
        maaf permintaan anda ditolak karna kos ini sudah penuh / sudah tersewa oleh orang lain
    @else
        success
    @endif


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('{{ $sewa->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // Pengiriman data ke server
                    $.ajax({
                        type: 'POST',
                        url: '/simpan-data-transaksi', // Sesuaikan dengan endpoint yang sesuai di server Anda
                        data: {
                            paymentResult: result
                        },
                        success: function(response) {
                            console.log('Data transaksi berhasil disimpan ke database.');
                        },
                        error: function(error) {
                            console.error('Gagal menyimpan data transaksi ke database.');
                        }
                    });

                    // Pengalihan ke halaman sukses
                    window.location.href = "{{ route('pengajuan-sewa-success', $sewa) }}";
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
</body>

</html>
