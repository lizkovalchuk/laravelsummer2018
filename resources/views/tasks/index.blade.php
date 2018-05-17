<h1>Tasks List</h1>

{{--this is blade syntax. it's a --}}
{{--syntaxing template.--}}
{{--this is blade template--}}
{{--just like razor in .net--}}
{{--let create it that you can--}}
{{--see the details of a task.--}}
{{--use the url function--}}

@foreach($tasks as $t)
    <li><a href="{{url('/tasks', $t->id)}}">{{$t->name}}</a></li>
@endforeach


<a href="{{url('/tasks/create')}}">Add task</a>