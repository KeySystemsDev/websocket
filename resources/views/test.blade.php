@extends('layouts.master')

@section('content')
    <p id="power">0</p>
    <a href="https://laracasts.com/discuss/channels/general-discussion/step-by-step-guide-to-installing-socketio-and-broadcasting-events-with-laravel-51/">tutorial</div>
@stop

@section('footer')
    <script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>
    <script>
        var socket = io('http://localhost:3000');
        //var socket = io('http://192.168.10.10:3000');
        socket.on("test-channel:App\\Events\\EventName", function(message){
            // increase the power everytime we load test route
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>
@stop