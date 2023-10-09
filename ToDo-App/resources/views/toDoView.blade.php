@extends('layouts.main')

@section('container')
    <div class="card mt-5">
        <div class="card-header">ToDo</div>
        <div class="card-body">
            <div class="row">
                @if(request()->has('id'))
                    <form action="{{route('update_toDo', request()->has('id'))}}" method="POST">
                        @method('put')
                        @csrf
                        @include('todo.edit')
                    </form>
                @else
                    <form action="{{route('store_toDo')}}" method="POST">
                        @csrf
                        @include('todo.add')
                    </form>
                @endif
                @include('layouts.flashMessage')
            </div>
            <div class="row mt-3">
                <ul class="list-group">
                    @foreach($toDoAllData as $todoData)
                        @include('todo.singleList', ['todo' => $todoData])
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
