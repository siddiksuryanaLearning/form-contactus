<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tambahkan link CDN untuk Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Contoh Tabel dengan <th> di Kiri dan
        <td> di Kanan menggunakan Tailwind CSS
    </title>
    <style>
        .custom-bg {
            background-color: #f7fafc;
            /* Warna latar belakang tabel */
        }
    </style>
</head>

<body>
    <table class="min-w-90 bg-white border border-gray-300 rounded-lg shadow-lg custom-bg">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nama Lengkap</th>
                <td class="py-2 px-4 border-b">{{$data->fullname}}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b">Email</th>
                <td class="py-2 px-4 border-b">{{$data->email}}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b">Perusahaan</th>
                <td class="py-2 px-4 border-b">{{$data->company_name}}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b">Sector</th>
                <td class="py-2 px-4 border-b">{{$data->company_type}}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b">Permasalahan</th>
                <td class="py-2 px-4 border-b">{{$data->problems}}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b">Expetasi Solusi</th>
                <td class="py-2 px-4 border-b">{{$data->expectation}}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b text-left">Action</th>
                <td class="py-2 px-4 border-b text-right">
                    <a href="/customer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">Kembali</a>
                </td>
            </tr>
        </thead>
    </table>
</body>

</html>