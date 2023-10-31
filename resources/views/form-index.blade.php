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
        <div class="container">
            <div class="row gx-0 align-items-center justify-content-center">
                <div class="w-50 mb-5 mb-lg-0 mt-5">
                    <a href="/" class="mt-3 mb-3 btn btn-secondary btn-rounded">Kembali</a>
                    <a href="/form/create" class="mt-3 mb-3 btn btn-white btn-rounded">Tambah Data</a>
                    <table class="table table-hover align-middle mb-0 bg-white">
                        <thead class="bg-light text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($data as $index)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $index->nama }}</td>
                                <td>
                                    <a href="{{ route('form.show', ['form' => $index->id]) }}" class="btn btn-link btn-sm px-3">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <form action="{{ route('form.destroy', ['form' => $index->id]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link btn-sm px-3 text-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('form.edit', ['form' => $index->id]) }}" class="btn btn-link btn-sm px-3">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>


    <!-- MDB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js" integrity="sha512-kZKnID21//xaFiEISBXk6V1AdFCPOIpHhuEdBMprlAHdb0ICnvgSLsb89DAixlLJDuPyvNR+hN3lPvsFNn5XLg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>