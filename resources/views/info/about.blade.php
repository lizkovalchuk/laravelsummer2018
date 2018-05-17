<h1>This is my about page</h1>

<?php

//echo $data['name'];
//echo $country;

//foreach ($data as $key => $value){
//    echo "<li>" . $key . " : " . $value . "</li>";
//}

?>


{{--@foreach($data as $key => $value)--}}
    {{--<li>{{ $key }} : {{ $value }}</li>--}}
{{--@endforeach--}}

@foreach($tasks as $key => $value)
    <li>{{ $key }} : {{ $value }}</li>
@endforeach

<h3>This is my footer</h3>
