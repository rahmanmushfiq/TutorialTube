<!DOCTYPE html>
<html>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <title>
            Register Here
        </title>
        @extends('layout.header')
        <body>
            @section('top')
            <hr>
                <div style="margin-left: 15px;width: 95%;">
                </div>
                <table border="0" width="100%">
                    <tr>
                        <td width="100">
                        </td>
                        <td>
                            <br/>
                            <center>
                                <h2>
                                    Registration
                                </h2>
                                <form action="{{route('registration.verify')}}" method="post">
                                    {{csrf_field()}}
                                    <table>
                                        <tr>
                                            <td>
                                                FULL NAME:
                                            </td>
                                            <td>
                                                <input name="name" placeholder="Minimum 5" type="text"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                EMAIL:
                                            </td>
                                            <td>
                                                <input name="email" placeholder="YourEmail@example.com" type="text"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                USERNAME:
                                            </td>
                                            <td>
                                                <input name="username" placeholder="Unique User Name" type="text"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                PASSWORD:
                                            </td>
                                            <td>
                                                <input name="password" placeholder="Minimum 4" type="password"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                CONFIRM PASSWORD:
                                            </td>
                                            <td>
                                                <input name="password_conf" placeholder="Re-type Password" type="password"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input type="submit" value="Signup"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <br/>
                                                Click
                                                <a href="{{route('login.index')}}">
                                                    here
                                                </a>
                                                to login
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                <br/>
                                <br/>
                                @if ($errors->any())
					        
				            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                                @endforeach
					
                    @endif
                            </center>
                        </td>
                        <td width="100">
                        </td>
                    </tr>
                </table>
                @endsection
            </hr>
        </body>
    </link>
</html>