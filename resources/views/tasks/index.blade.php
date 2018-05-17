<h1>Tasks List</h1>

{{--this is blade syntax. it's a --}}
{{--syntaxing template.--}}
{{--this is blade template--}}
{{--just like razor in .net--}}
{{--like create it that you can--}}
{{--see the details of a task.--}}
{{--use the url function--}}

@foreach($tasks as $t)
    <li><a href="{{url('/tasks', $t->id)}}">{{$t->name}}</a>
        <form method="post" action="{{url('tasks', $t->id)}}">
            {{csrf_field()}}

            {{--this will create a hidden method--}}
            {{method_field('DELETE')}}
            <input type="submit" value="Delete">
        </form>
    </li>
@endforeach


<a href="{{url('/tasks/create')}}">Add task</a>