<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tambahkan link CDN untuk Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Contoh Tabel dengan Latar Belakang, Padding, dan Margin Tailwind CSS</title>
    <style>
        .custom-bg {
            background-color: #f7fafc;
            /* Warna latar belakang tabel */
        }
    </style>
</head>

<body>
    <div class="p-4">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg custom-bg">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama Lengkap</th>
                    <th class="py-2 px-4 border-b">Perusahaan</th>
                    <th class="py-2 px-4 border-b">Permasalahan</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td class="py-2 px-4 border-b">{{$item->fullname}}</td>
                    <td class="py-2 px-4 border-b">{{$item->company_name}}</td>
                    <td class="py-2 px-4 border-b">{{$item->problems}}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{url('detail/'.$item->id)}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-2 rounded focus:outline-none focus:shadow-outline">Detail</a>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
                @endforeach
                <!-- Tambahkan data lainnya sesuai kebutuhan -->
            </tbody>
        </table>
        {{$data->links()}}
    </div>
</body>

</html>