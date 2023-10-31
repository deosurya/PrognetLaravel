<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Claudio Surya - ProgNet</title>
    <link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" integrity="sha512-x7JROg1bfo6rXdDIz+IcAR4/bI/DQZOwuIlLFE3fHcDKBhwrMhZv8XrccrmI6OBTxRX/kwDZ0PIUUbP2lNc5Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body background="https://images.pexels.com/photos/428429/pexels-photo-428429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" bgproperties="fixed">

    <section class="mb-10">
        <div class="container" id="aboutme">
            <div class="row gx-0 align-items-center justify-content-center">
                <div class="w-50 mb-5 mb-lg-0">
                    <a href="/form" class="mt-5 btn btn-secondary btn-rounded">Kembali</a>
                    <div style="background: hsla(0, 0%, 100%, 0.55); 
                backdrop-filter: blur(25px);
                z-index: 1;" class="card rounded-7 me-lg-n5 mt-3">
                        <div class="card-body p-lg-5 shadow-5">
                            <h2 class="fw-bold">
                                <span class="text-primary">{{ $data->nama }}</span>
                            </h2>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NIM</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $data->nim }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">No Telepon</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $data->telp }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $data->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $data->gender }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Agama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $data->agama }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Program Studi</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $data->prodi }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $data->tgl_lahir }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<!-- MDB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js" integrity="sha512-kZKnID21//xaFiEISBXk6V1AdFCPOIpHhuEdBMprlAHdb0ICnvgSLsb89DAixlLJDuPyvNR+hN3lPvsFNn5XLg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>