<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background-color: #1F5782;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav ul {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        nav li {
            font-size: 1.2rem;
            list-style:none;
        }
        nav li + li {
            margin-left: 20px;
        }
        nav li a {
            text-decoration: none;
            color: #FFF;
        }
    </style>
</head>
<body>
    <header>
            <h2>JagEstetistica</h2>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contactos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="{{route('site.loginForm')}}">Login</a></li>
                </ul>
            </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        
    </footer>
</body>
</html>