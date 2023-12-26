<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Website</title>
    <link rel="stylesheet" href="{{ URL :: asset('style.css')}}">
</head>
<body>
    <header>
        <h1>Welcome In Your Company Chandra's</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/dataRelawan">Data Relawan</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2023 KSCARE Website of Red Cross</p>
    </footer>
    <script>
        const msg = '{{Session::get('status')}}';
        const exist = '{{Session::has('status')}}';
        if(exist){
            alert(msg);
        }
    </script>
</body>
</html>
