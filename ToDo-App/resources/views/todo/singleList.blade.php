<li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">{{$todoData->todo}}</div>
    <span class="badge rounded-pill">
        <a
            href="{{route('todo', ['todo' => $todoData -> todo, 'id' => $todoData->id])}}"
            class="btn btn btn-secondary btn-sm"
        >Edit
        </a>
        <a
            href="#"
            onclick="event.preventDefault();document.getElementById('delete-to').submit();"
            class="btn btn btn-danger btn-sm"
        >Delete
        </a>
        <form id="delete-to" action="{{route('delete_toDo', $todoData->id)}}" method="POST" class="d-none">
            @method('delete')
            @csrf
        </form>
    </span>
</li>
