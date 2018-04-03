<!DOCTYPE html>
<html>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
                <title>
                    {{$videos->videoName}} - {{$videos->caption}}
                </title>
                @extends('layout.header')
                <body>
                    @section('top')
                    <center>
                        <div>
                            <video class="video-js vjs-default-skin vjs-big-play-centered" height="500" id="example_video_1" width="780">
                                <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/mp4">
                                    <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gpp">
                                        <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gp">
                                            <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/ogg">
                                            </source>
                                        </source>
                                    </source>
                                </source>
                            </video>
                            <p id="like">
                            </p>
                            <h3>
                                {{$videos->caption}}
                            </h3>
                            <h4>
                                <a href="#">
                                    {{$videos->category}}
                                </a>
                                <br>
                                    {{$videos->description}}
                                </br>
                            </h4>
                            <button onclick="alert('{{$videos->description}}')">
                                About
                            </button>
                            <br>
                            </br>
                        </div>
                        <h4>
                            Are you sure? This cannot be undone.
                        </h4>
                        <form method="post">
                            {{csrf_field()}}
                            <input name="videoId" type="hidden" value="{{$videos->videoId}}">
                                <input type="submit" value="Confirm">
                                </input>
                            </input>
                        </form>
                    </center>
                    @endsection
                </body>
            </link>
        </link>
    </link>
</html>