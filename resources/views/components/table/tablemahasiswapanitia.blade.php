{{--isi props yang dilempar dari hal utama dataakademik di view--}}
@props(['mahasiswa'])

<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg mt-14 bg-gray-50">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Data Mahasiswa
            </caption>

            <tbody>
            <tr>
                <th scope="col" class="px-3 py-3">
                    No
                </th>
                <th scope="col" class="px-4 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    No Identitas
                </th>
                <th scope="col" class="px-6 py-3">
                    Prodi
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul Skripsi
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Aksi
                </th>
            </tr>
            {{--             show data disini --}}
            @php
                $counter = 1;
            @endphp
            @foreach ($mahasiswa as $datamahasiswa)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-3 py-4">
                        {{ $counter++ }}
                    </td>
                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 dark:text-white">
                        {{ $datamahasiswa['nama'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $datamahasiswa['nomor_identitas'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datamahasiswa['mahasiswa_id']['prodi'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{--tampil text di limit menggunakan method berikut--}}
                        {{ \Illuminate\Support\Str::limit($datamahasiswa['mahasiswa_id']['judul_skripsi'], 20) }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{--tombol detail data mahasiswa--}}
                        <button data-modal-target="detailMahasiswa{{ $datamahasiswa['id'] }}" data-modal-toggle="detailMahasiswa{{ $datamahasiswa['id'] }}" class="font-medium text-primary-800" type="button">
                            <i class="fas fa-info-circle fa-lg inline-block mr-1 p-3 transform hover:scale-105"></i>
                        </button>

                        {{--panggil modal detail mahasiswa component--}}
                        <x-modal.detailmahasiswa :datamahasiswa="$datamahasiswa" />
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

