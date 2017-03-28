<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <h2> New Users</h2>
            <ul v-for="user in users">
                <li>@{{ user }}</li>
            </ul>
        </div>
        <script src="https://unpkg.com/vue@2.2.5"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>
        <script>
            var socket = io('http://localhost:3000');

            new Vue({
                el: '#app',
                data: {
                    users: [],
                },
                mounted: function() {
                    socket.on('test-channel:App\\Events\\UserSingedUp', function(data) {
                        this.users.push(data.username);
                    }.bind(this));
                }
            });
        </script>
    </body>
</html>
