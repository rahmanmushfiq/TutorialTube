<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        </link>
    </head>
    <body>
        <h2>
            Welcome home
        </h2>
        <h1>
            {{session('loggedUser')}}
        </h1>
        <a href="{{route('video.index')}}">
            <button>
                Videos
            </button>
        </a>
    </body>
</html>
|
<a href="{{route('logout.index')}}">
    <button>
        Logout
    </button>
</a>
