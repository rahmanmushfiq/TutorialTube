<!DOCTYPE html>
<html>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <head>
            <title>
                Home
            </title>
        </head>
        @extends('layout.header')
        <body>
            @section('top')
            <hr>
                <div>
                    <div class="trnd">
                        <h3>
                            Trending
                        </h3>
                    </div>
                    <div class="stuck">
                        @foreach($videos as $vid)
                        <div id="imgSlider" style="float:left; padding: 8px;">
                            <video class="video-js vjs-default-skin vjs-big-play-centered" controls="" height="125" id="example_video_1" preload="auto" width="225">
                                <source src="{{URL::asset('uploads/'.$vid->videoName.'')}}" type="video/mp4">
                                    <source src="{{URL::asset('uploads/'.$vid->videoName.'')}}" type="video/3gpp">
                                        <source src="{{URL::asset('uploads/'.$vid->videoName.'')}}" type="video/ogg">
                                        </source>
                                    </source>
                                </source>
                            </video>
                            <br>
                                Views: {{$vid->views}}
                                <h5>
                                    <a href="{{route('video.play', [$vid->videoId])}} ">
                                        {{$vid->caption}}
                                    </a>
                                </h5>
                                <br>
                                </br>
                            </br>
                        </div>
                        @endforeach
                    </div>
                </div>
            </hr>
        </body>
        <body>
            @foreach($recent as $rec)
            <div id="imgSlider" style="float:left; padding: 35px">
                <video class="video-js vjs-default-skin vjs-big-play-centered" controls="" height="200" id="example_video_1" preload="auto" width="350">
                    <source src="{{URL::asset('uploads/'.$rec->videoName.'')}}" type="video/mp4">
                        <source src="{{URL::asset('uploads/'.$rec->videoName.'')}}" type="video/3gpp">
                            <source src="{{URL::asset('uploads/'.$rec->videoName.'')}}" type="video/ogg">
                            </source>
                        </source>
                    </source>
                </video>
                <br>
                    Views: {{$rec->views}}
                    <h4>
                        <a href="{{route('video.play', [$rec->videoId])}} ">
                            {{$rec->caption}}
                        </a>
                    </h4>
                    <br>
                    </br>
                </br>
            </div>
            @endforeach






	@endsection
        </body>
    </link>
</html>