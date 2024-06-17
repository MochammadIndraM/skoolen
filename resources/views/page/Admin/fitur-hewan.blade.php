@extends('page.Admin.app')

@section('content')
    <div class="m-3">
        <div class="flex mb-3">
            <div class="w-full">
                <button type="button" id="button-add"
                    class="bg-green-500 hover:bg-green-600 text-white tracking-wide py-2 px-4 rounded-md shadow-sm add-btn"
                    data-toggle="modal" id="create-btn" data-target="#modalTambah">
                    <i class="ri-add-line align-middle me-1"></i> Tambah Hewan
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table id="myTable" class="table-auto min-w-full bg-white shadow-md border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Kategori</th>
                        <th class="px-4 py-2">Nama Hewan</th>
                        <th class="px-4 py-2">Deskripsi</th>
                        <th class="px-4 py-2">Gambar</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataHewanAll as $hewan)
                        <tr>
                            <td class="border px-4 py-2 text-center">{{ $hewan->kategori }}</td>
                            <td class="border px-4 py-2 text-center">{{ $hewan->nama_hewan }}</td>
                            <td class="border px-4 py-2">{{ $hewan->deskripsi }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center">
                                    @if (file_exists(public_path('assets/img/sains/hewan/' . $hewan->gambar)))
                                        <img class="max-w-full h-[100px] rounded-lg"
                                            src="{{ asset('assets/img/sains/hewan/' . $hewan->gambar) }}"
                                            alt="{{ $hewan->gambar }}">
                                    @else
                                        <img class="max-w-full h-[100px] rounded-lg"
                                            src="{{ asset('/storage/' . $hewan->gambar) }}" alt="">
                                    @endif
                                </div>
                            </td>
                            <td class="text-center border px-4 py-2">
                                <button
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold tracking-wide py-2 px-4 rounded-md mr-2 edit-item-btn"
                                    data-toggle="modal" id="button-update" data-id="{{ $hewan->id_hewan }}">Edit</button>
                                <button
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold tracking-wide py-2 px-4 rounded-md remove-item-btn"
                                    data-toggle="modal" id="button-delete" data-id="{{ $hewan->id_hewan }}">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal add-->
    <div id="modal-add" class="hidden fixed z-50 inset-0 items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md h-full max-h-[75vh] overflow-y-auto">
            <h2 class="text-xl font-bold mb-4 text-center">Tambahkan Hewan</h2>
            <form method="POST" action="{{ route('Admin.fitur-hewan.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="options" class="block text-md tracking-wide font-medium text-gray-700">Pilih
                        Kategori</label>
                    <select id="options" name="id_kategori_hewan"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @foreach ($dataKategoriHewan as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->kategori_hewan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="nama_hewan" class="block text-md tracking-wide font-medium text-gray-700">Masukkan Nama
                        Hewan</label>
                    <input type="text" id="nama_hewan" name="nama_hewan" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-md tracking-wide font-medium text-gray-700">Masukkan
                        Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        rows="4"></textarea>
                </div>
                <div class="mb-4">
                    <label for="photo" class="block text-md tracking-wide font-medium text-gray-700">Masukkan
                        Photo</label>
                    <img class="img-preview img-fluid mb-3 h-[100px] hidden" alt="Preview">
                    <input type="file" name="photo" id="photo" onchange="previewImage()"
                        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500"
                        required />
                </div>
                <div class="flex justify-end">
                    <button type="button" id="button-cancel-add"
                        class="mr-2 py-2 px-4 bg-gray-500 text-white rounded-md hover:bg-gray-600">Cancel</button>
                    <button type="submit"
                        class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal udpate --}}
    <div id="modal-update" class="hidden fixed z-50 inset-0 items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md h-full max-h-[75vh] overflow-y-auto">
            <h2 class="text-xl font-bold mb-4 text-center">Update Data Hewan</h2>
            <form id="formUpdateData" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="text" name="id_hewan" id="id_hewan" class="hidden">
                <div class="mb-4">
                    <label for="id_kategori_hewan" class="block text-md tracking-wide font-medium text-gray-700">Pilih
                        Kategori</label>
                    <select id="id_kategori_hewan" name="id_kategori_hewan"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @foreach ($dataKategoriHewan as $kategori)
                            <option id="{{ $kategori->id }}" value="{{ $kategori->id }}">
                                {{ $kategori->kategori_hewan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="nama_hewan" class="block text-md tracking-wide font-medium text-gray-700">Masukkan
                        Nama
                        Hewan</label>
                    <input type="text" id="nama_hewan_u" name="nama_hewan" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-md tracking-wide font-medium text-gray-700">Masukkan
                        Deskripsi</label>
                    <textarea id="deskripsi_u" name="deskripsi" required
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        rows="4"></textarea>
                </div>
                <div class="mb-4">
                    <label for="photo" class="block text-md tracking-wide font-medium text-gray-700">Masukkan
                        Photo</label>
                    <input type="file" name="photo" id="photo_u"
                        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500" />
                </div>
                <div class="flex justify-end">
                    <button type="button" id="button-cancel-update"
                        class="mr-2 py-2 px-4 bg-gray-500 text-white rounded-md hover:bg-gray-600">Cancel</button>
                    <button id="button-update-hewan" type="submit"
                        class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Delete --}}
    <div id="modal-delete" class="hidden fixed inset-0 z-50  items-center justify-center bg-black bg-opacity-50"
        tabindex="-1" aria-hidden="true">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-2 sm:mx-auto">
            <div class="flex justify-end p-2">
                <button type="button" class="text-gray-400 hover:text-gray-500" id="icon-cancel-delete">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-4 text-center">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('assets/icon/trash.png') }}" alt="icon trash" class="h-[100px] ">
                </div>
                <div class="mb-4">
                    <h4 class="text-xl font-semibold">Anda Yakin?</h4>
                    <p class="text-gray-600">Anda Yakin Mau Menghapus Data Ini?</p>
                </div>
                <div class="flex gap-2 justify-center">
                    <button type="button" class="btn-light border px-4 py-2 rounded"
                        id="button-cancel-delete">Batal</button>
                    <form id="formDeleteData" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger bg-red-600 text-white px-4 py-2 rounded"
                            id="delete-record">Ya, Hapus!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/Admin/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

            $('body').on('click', '#button-update', function(e) {
                let id = $(this).data('id');

                $.ajax({
                    url: '/fitur-hewan/' + id + '/hewan',
                    type: 'GET',
                    success: function(response) {
                        // console.log(response.result);
                        $('#modal-update').removeClass('hidden');
                        $('#modal-update').addClass('flex');
                        $('#id_hewan').val(response.result.id);
                        $('#formUpdateData').attr('action',
                            `{{ route('Admin.fitur-hewan.update', ':id') }}`.replace(':id',
                                response.result.id)
                        );
                        $('#id_kategori_hewan').val(response.result.id_kategori_hewan);
                        $('#nama_hewan_u').val(response.result.nama_hewan);
                        $('#deskripsi_u').val(response.result.deskripsi);
                        console.log($('#modal-update').html());
                    }
                });
            })

            $('body').on('click', '#button-delete', function(e) {
                let id = $(this).data('id');

                $.ajax({
                    url: '/fitur-hewan/' + id + '/hewan',
                    type: 'GET',
                    success: function(response) {
                        $('#modal-delete').removeClass('hidden');
                        $('#modal-delete').addClass('flex');
                        $('#formDeleteData').attr('action',
                            `{{ route('Admin.fitur-hewan.destroy', ':id') }}`.replace(
                                ':id',
                                response.result.id)
                        );
                        console.log($('#modal-delete').html());
                    }
                });
            })

            // let gambar;
            // $('#photo_u').change(function(e) {
            //     // console.log(e.target.files[0].name);
            //     gambar = e.target.files[0].name;
            // })

            // $('#button-update-hewan').on('click', function(e) {
            //     e.preventDefault();
            //     let id_hewan = $('#id_hewan').val();
            //     let id_kategori_hewan = $('#id_kategori_hewan').val();
            //     let nama_hewan = $('#nama_hewan_u').val();
            //     let deskripsi = $('#deskripsi_u').val();

            //     // var formData = new FormData();
            //     // formData.append('_token', '{{ csrf_token() }}');
            //     // formData.append('id_kategori_hewan', id_kategori_hewan);
            //     // formData.append('nama_hewan', nama_hewan);
            //     // formData.append('deskripsi', deskripsi);
            //     // formData.append('photo', gambar);

            //     var formData = new FormData();
            //     formData.append('_token', $('input[name="_token"]').val());
            //     formData.append('_method', 'PUT');
            //     formData.append('id_hewan', id_hewan);
            //     formData.append('id_kategori_hewan', id_kategori_hewan);
            //     formData.append('nama_hewan', nama_hewan);
            //     formData.append('deskripsi', deskripsi);
            //     if (gambar) {
            //         formData.append('photo', gambar);
            //     }
            //     console.log(formData);

            //     // $.ajax({
            //     //     type: 'POST',
            //     //     url: '/fitur-hewan/update/' + id_hewan,
            //     //     data: formData,
            //     //     enctype: "multipart/form-data",
            //     //     contentType: false,
            //     //     processData: false,
            //     //     dataType: "json",
            //     //     success: function(response) {
            //     //         console.log('Data berhasil diperbarui:', response);
            //     //     },
            //     //     error: function(xhr, status, error) {
            //     //         console.error('Terjadi kesalahan saat memperbarui data:', status,
            //     //             error);
            //     //         console.log(xhr.responseText); // Tampilkan respons dari server
            //     //     }
            //     // })
            // })
        });
    </script>
@endsection
