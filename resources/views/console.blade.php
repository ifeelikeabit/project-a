@extends('layouts.app')
@section('content')
@section('Page','Console')

    <title>Admin Console</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: white;
            padding: 20px;
        }
        #console {
            width: 100%;
            height: 400px;
            background-color: black;
            color: white;
            font-family: monospace;
            padding: 10px;
            overflow-y: auto;
        }
        #command {
            width: 100%;
            padding: 10px;
            background-color: #444;
            color: white;
            border: 1px solid #666;
        }
    </style>
</head>
<body>
    <h1>Admin Console</h1>
    <div id="console">Console started. Type your commands below.</div>
    <input type="text" id="command" placeholder="Type a command..." onkeydown="if(event.key === 'Enter'){ runCommand(); }">

    <script>
        function runCommand() {
            var command = document.getElementById("command").value;
            document.getElementById("console").innerHTML += "\n> " + command;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "execute_command.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("console").innerHTML += "\n" + xhr.responseText;
                    document.getElementById("command").value = '';  // Clear the input field
                    document.getElementById("console").scrollTop = document.getElementById("console").scrollHeight;  // Scroll to the bottom
                }
            };
            xhr.send("command=" + encodeURIComponent(command));
        }
    </script>


@endsection