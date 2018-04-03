<!DOCTYPE html>
<html>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.js')}}" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
                </script>
                <link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
                        <title>
                            {{$videos->videoName}} - {{$videos->caption}}
                        </title>
                        <body>
                            <div style="position: absolute;padding-left: 2px;visibility: show;">
                                <video class="video-js vjs-default-skin vjs-big-play-centered" height="440" id="example_video_1" style="visibility: hidden;" width="720">
                                    <source src="#" type="video/mp4">
                                        <source src="#" type="video/3gpp">
                                            <source src="#" type="video/3gp">
                                                <source src="#" type="video/ogg">
                                                </source>
                                            </source>
                                        </source>
                                    </source>
                                </video>
                                <h4>
                                    <b>
                                        {{$videos->caption}}
                                    </b>
                                    <i id="like" style="right: 0;;margin-left: 80%;">
                                    </i>
                                    <br>
                                        {{$videos->description}}
                                        <i id="views" style="left: 0;;margin-left: 87%;">
                                            Views: {{$videos->views}}
                                        </i>
                                        <br/>
                                    </br>
                                </h4>
                                <div style="position: absolute;">
                                    <h3 style="color: #759df9;margin-left: 80%; margin-bottom: : -20px">
                                        @if(session()->has('loggedUser'))

@if(session('loggedUser')->username =='admin')
                                        <a href="{{route('video.delete', [$videos->videoId])}}">
                                            Delete
                                        </a>
                                        @else
                                        <a href="#">
                                            Report
                                        </a>
                                        <!-- <i onclick="myFunction(this)" class="{{$class}}" id="like_button"> </i> -->
                                        <button id="like_button" value="{{$videos->videoId}}">
                                            Like
                                        </button>
                                        <script type="text/javascript">
                                            var likeCount = {{$videos->likeCount}};
 document.getElementById("like").innerHTML = "Likes: " + likeCount;
                                        </script>
                                        @endif
@endif
                                    </h3>
                                </div>
                            </div>
                            <div style="position: fixed;background-color: white;visibility: show;">
                                <video autoplay="" class="video-js vjs-default-skin vjs-big-play-centered" controls="" height="440" id="example_video_1" width="720">
                                    <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/mp4">
                                        <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gpp">
                                            <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/3gp">
                                                <source src="{{URL::asset('uploads/'.$videos->videoName.'')}}" type="video/ogg">
                                                </source>
                                            </source>
                                        </source>
                                    </source>
                                </video>
                            </div>
                            <div style="position: fixed; background-color: #4D545D;width: 40%; height: 50%; margin-left: 743px; top: 20; right: 0; overflow-y: auto;">
                                @foreach($lay as $vid)
                                <div id="imgSlider" style="float:left; padding: 8px;">
                                    <video class="video-js vjs-default-skin vjs-big-play-centered" controls="" height="125" id="example_video_1" preload="off" width="225">
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
                            @if(session()->has('loggedUser'))
                            <div style="float:right; background-color: #00B1B3;width: 40%;position: fixed;overflow-y: auto;height: 50%; bottom: 0;right: 0; text-align: center;">
                                <h3>
                                    Comments
                                </h3>
                            </div>
                        </body>
                    </link>
                </link>
            </link>
        </link>
    </link>
</html>
<form action="{{route('comment.store')}}" id="comment_from" method="post">
    {{csrf_field()}}
    <b>
        {{session()->get('loggedUser')->name}}
    </b>
    <input id="post" name="comment" placeholder="comment here" style="width: 340px;" type="text">
        <input id="user_id" name="user_id" type="hidden" value="{{session()->get('loggedUser')->userId}}"/>
        <input id="video_id" name="video_id" type="hidden" value="{{$videos->videoId}}"/>
    </input>
</form>
<div>
    @foreach($comment as $cmnt)
        @foreach($all as $ulist)

        @if(($ulist->userId) == ($cmnt->user_id) && ($videos->videoId == $cmnt->video_id))
    <h3>
        {{$ulist->name}}
        <br/>
    </h3>
    @if($videos->videoId == $cmnt->video_id)
    <h4>
        {{$cmnt->post}}
    </h4>
    @endif

        @endif

        @endforeach
	    @endforeach
</div>
@endif
<div style="float: left;width: 50%;height: 50%">
    <br>
        <br>
            <br>
                <br>
                    <br>
                    </br>
                </br>
            </br>
        </br>
    </br>
</div>
<script src="{{asset('js')}}/app.js" type="text/javascript">
</script>
<script src="{{asset('js')}}/video_like.js" type="text/javascript">
</script>
<script src="{{asset('js')}}/comment_save.js" type="text/javascript">
</script>
