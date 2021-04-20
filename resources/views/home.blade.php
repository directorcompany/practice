@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" name="mesage">
        <input type="text" name="login"><br/>
        <input type="text" name="mesage"><br/>
        <input type="submit" value="Click">
    </form>
    <div id="element"></div>
    <script>
        window.onload = function(){
            var socket = new WebSocket("ws://localhost:8081");
            var status = document.querySelector("#element");
    
            socket.onopen = function() {
                status.innerHTML = "cоединение установлено<br>";
            };
    
            socket.onclose = function(event) {
                if (event.wasClean) {
                    status.innerHTML = 'cоединение закрыто';
                } else {
                    status.innerHTML = 'соединения как-то закрыто';
                }
                status.innerHTML += '<br>код: ' + event.code + ' причина: ' + event.reason;
            };
    
            function subscribe(channel) {
        socket.send(JSON.stringify({command: "subscribe", channel: channel}));
    }
    
    function sendMessage(msg) {
        socket.send(JSON.stringify({command: "message", message: msg}));
    }
            socket.onmessage = function(event) {
                let message = JSON.parse(event.data);
                status.innerHTML+= 'пришли данные:' + message.name + '   ' + message.msg +'<br>';
            };
    
            socket.onerror = function(event) {
                status.innerHTML = "ошибка " + event.message;
            };
            document.forms["mesage"].onsubmit = function(){
                let message = {
                    name:this.login.value,
                    msg: this.mesage.value
                }
                socket.send(JSON.stringify(message));
                return false;
            }
    
    
        }
    </script>
    
</div>
@endsection
