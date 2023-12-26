<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"] {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .result p {
            margin-bottom: 5px;
        }
    </style>

    @if(isset($nama))
    <div class="result">
    <h2>Data Pendaftar:</h2>
    <p>NIM: {{ $nim }}</p>
    <p>Nama: {{ $nama }}</p>
    <p>Jenis Kelamin {{ $jk }}</p>
    <p>Program Studi: {{ $prodi }}</p>
    <p>Alamat: {{ $alamat }}</p>
    </div>
    <hr>
    @endif

    <form action="{{ route('submit-form') }}" method="POST">
    @csrf

        <p> Daftarkan Diri Kamu Untuk Mengakses Lebih Jauh Aplikasi!</p>
        <br>
        <div>
            <label for="nim">
                <span>NIM</span>
                <input type="text" name="nim" required>
             </label>
        </div>
        <br>
        <div>
           <label for="nama">
                <span>Nama</span>
                <input type="text" name="nama" required>
           </label>
        </div>
        <br>
        <div>
            <label for="jk">
                <span>Jenis Kelamin</span>
                <input type="text" name="" required>
             </label>
        </div>
        <br>
       <div>
        <label for="prodi">
            <span>Prodi</span>
            <input type="text" name="prodi" required>
         </label>
       </div>
       <div>
        <label for="alamat">
            <span>Alamat</span>
            <input type="text" name="alamat" required>
         </label>
    </div>
    <br>
       <br>
        </label>
        <button type="submit" value="Submit">Submit</button>
        <p>
           Sudah Punya Akun ?
           <a href="#">Sign in</a>
        </p>
</body>
</html>
