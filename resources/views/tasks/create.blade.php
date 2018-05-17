<form method="post" action="{{url('tasks')}}">
    {{--this will create a field and--}}
    {{--put the token there.--}}
    {{ csrf_field() }}
    name <input type="text" name="name"><br>
    status <input type="text" name="status"><br>
    <input type="submit" value="Add task">
</form>