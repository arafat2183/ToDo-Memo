<div class="input-group mb-3">
    <input type="text" name="todo" class="form-control" value="{{request()->todo}}" placeholder="update your task . . .">
    <input type="hidden" name="id" value="{{request()->id}}">
    <button class="input-group-text" type="submit">Update</button>
    <a class="input-group-text btn" href="{{route('todo')}}">Cancel</a>
</div>
