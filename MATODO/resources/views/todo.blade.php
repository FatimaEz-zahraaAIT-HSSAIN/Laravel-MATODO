
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATODO</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/todo.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="container"><img src="{{ asset('img/logo4.png') }}" alt=""> <a class="logout" href="{{route('logout')}}"><ion-icon name="exit-outline"></ion-icon></a>
    </div>
 
    <form class="form" action="{{route('todos.store')}}" method="POST">
        @csrf
        <div class="input-container">
          <input type="text" placeholder="Task" name="task">
          <span>
          </span>
        </div>
        <button type="submit" class="submit">Add Task</button>
   </form>
    <div class="tasks">
        <p class="title">Tasks</p>

        <div id="checklist">
            @foreach($tasks as $task)
            <div class="task">
                <input value="{{ $task->id }}" name="task" type="checkbox" id="{{ $task->id }}">
                <label for="{{ $task->id }}">{{ $task->task }}</label>
                <a class="btn1" href="/todos/edit/{{$task->id}}">Edit</a>
                <a class="btn2" href="/todos/delete/{{$task->id}}">Delete</a>
            </div>
            @endforeach
        </div>

    </div>
    
    
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>