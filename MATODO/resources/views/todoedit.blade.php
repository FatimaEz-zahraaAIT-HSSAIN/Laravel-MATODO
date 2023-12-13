<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATODO : Edit</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="container"><img src="{{ asset('img/logo4.png') }}" alt=""> <a class="logout" href="{{route('logout')}}"><ion-icon name="exit-outline"></ion-icon></a>
    </div>

    <center>
        <form class="form" action="{{route('todos.update')}}" method="POST">
            <p class="title">Edit task</p>
            @csrf
            <div class="input-container">
                <input type="hidden" name="task_id" value="{{$task->id}}">
            <input type="text" placeholder="" name="task" value="{{$task->task}}">
            <span>
            </span>
            </div>
            <button type="submit" class="submit">save</button>
        </form>
    </center>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>