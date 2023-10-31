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
    <div class="container py-5 w-50">
        <div class="col-md">
            <a href="/form" class="mt-3 mb-3 btn btn-secondary btn-rounded">Kembali</a>
            <div class="card mb-4 mb-md-0">
                <h2 class="fw-bold mb-3 mt-5 text-center">Form Biodata</h2>
                <div class="card-body">
                    <form class="row g-3" method="post" action="/form/{{ $data->id }}">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <input type="text" id="form-nama" name="form-nama" class="form-control" required pattern="[A-Za-z ]+" title="Nama hanya boleh berupa huruf!" value="{{ $data->nama }}" />
                                <label class="form-label" for="form-nama">Nama</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-outline mb-4 col-md-4">
                                <input type="text" id="form-nim" name="form-nim" class="form-control" required maxlength="10" minlength="10" pattern="[0-9]{10}" title="Nim terdiri dari 10 angka!" value="{{ $data->nim }}" />
                                <label class="form-label" for="form-nim">NIM</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-outline mb-4 col-md-4">
                                <input type="tel" id="form-telp" name="form-telp" class="form-control" required pattern="[0-9]+" title="Contoh: 08123456789" value="{{ $data->telp }}" />
                                <label class="form-label" for="form-telp">No Telepon</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <input type="email" id="form-email" name="form-email" class="form-control" required title="Masukkan format email yang benar!" value="{{ $data->email }}" />
                                <label class="form-label" for="form-email">Email</label>
                            </div>
                        </div>


                        <div class="col-md-2 align-items-center justify-content-center mt-4">
                            <span class="text-dark me-2 font-weight-600 fw-bold">Jenis Kelamin</span>
                        </div>
                        <div class="col-md-10 mb-4">
                            <div class="mb-2 radio-group">
                                <div class="btn-group">
                                    <input type="radio" class="btn-check" value="Laki-laki" name="gender" id="gender1" @if($data->gender == 'Laki-laki') {{ "checked" }} @endif autocomplete="off" required />
                                    <label class="btn btn-secondary" for="gender1">Laki-laki</label>

                                    <input type="radio" class="btn-check" value="Perempuan" name="gender" id="gender2" @if($data->gender == 'Perempuan') {{ "checked" }} @endif autocomplete="off" />
                                    <label class="btn btn-secondary" for="gender2">Perempuan</label>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-2 align-items-center justify-content-center mt-4">
                            <span class="text-dark me-2 font-weight-600 fw-bold">Agama</span>
                        </div>
                        <div class="col-md-10 mb-4">
                            <div class="mb-2 radio-group">
                                <div class="btn-group">
                                    <input type="radio" class="btn-check" value="Hindu" name="options" id="option1" @if($data->agama == 'Hindu') {{ "checked" }} @endif autocomplete="off" required />
                                    <label class="btn btn-secondary" for="option1">Hindu</label>

                                    <input type="radio" class="btn-check" value="Buddha" name="options" id="option2" @if($data->agama == 'Buddha') {{ "checked" }} @endif autocomplete="off" />
                                    <label class="btn btn-secondary" for="option2">Buddha</label>

                                    <input type="radio" class="btn-check" value="Islam" name="options" id="option3" @if($data->agama == 'Islam') {{ "checked" }} @endif autocomplete="off" />
                                    <label class="btn btn-secondary" for="option3">Islam</label>

                                    <input type="radio" class="btn-check" value="Kristen" name="options" id="option4" @if($data->agama == 'Kristen') {{ "checked" }} @endif autocomplete="off" />
                                    <label class="btn btn-secondary" for="option4">Kristen</label>

                                    <input type="radio" class="btn-check" value="Katholik" name="options" id="option5" @if($data->agama == 'Katholik') {{ "checked" }} @endif autocomplete="off" />
                                    <label class="btn btn-secondary" for="option5">Katholik</label>

                                    <input type="radio" class="btn-check" value="Konghucu" name="options" id="option6" @if($data->agama == 'Konghucu') {{ "checked" }} @endif autocomplete="off" />
                                    <label class="btn btn-secondary" for="option6">Konghucu</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2 align-items-center justify-content-center mt-4">
                            <span class="text-dark me-2 font-weight-600 fw-bold">Program Studi</span>
                        </div>
                        <div class="col-md-10">
                            <div class="form-outline mb-4">
                                <select class="form-select" id="form-prodi" name="form-prodi">
                                    <option value="S1 Teknologi Informasi" @if($data->prodi == 'S1 Teknologi Informasi') selected @endif>S1 Teknologi Informasi</option>
                                    <option value="S1 Teknik Sipil" @if($data->prodi == 'S1 Teknik Sipil') selected @endif>S1 Teknik Sipil</option>
                                    <option value="S1 Teknik Mesin" @if($data->prodi == 'S1 Teknik Mesin') selected @endif>S1 Teknik Mesin</option>
                                    <option value="S1 Teknik Elektro" @if($data->prodi == 'S1 Teknik Elektro') selected @endif>S1 Teknik Elektro</option>
                                    <option value="S1 Teknik Arsitektur" @if($data->prodi == 'S1 Teknik Arsitektur') selected @endif>S1 Teknik Arsitektur</option>
                                    <option value="S1 Teknik Industri" @if($data->prodi == 'S1 Teknik Industri') selected @endif>S1 Teknik Industri</option>
                                    <option value="S1 Teknik Lingkungan" @if($data->prodi == 'S1 Teknik Lingkungan') selected @endif>S1 Teknik Lingkungan</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-2 align-items-center justify-content-center mt-4">
                            <span class="text-dark me-2 font-weight-600 fw-bold">Tanggal Lahir</span>
                        </div>
                        <div class="col-md-10 mb-4">
                            <div class="datepicker-container">
                                <input type="date" id="datepicker" name="datepicker" data-mdb-inline="true" disable-future required value="{{ $data->tanggal_lahir }}">
                            </div>
                        </div>


                        <div class="col-12 mt-4 mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

<!-- MDB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js" integrity="sha512-kZKnID21//xaFiEISBXk6V1AdFCPOIpHhuEdBMprlAHdb0ICnvgSLsb89DAixlLJDuPyvNR+hN3lPvsFNn5XLg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>