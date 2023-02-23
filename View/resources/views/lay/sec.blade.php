@extends('lay.master')
@section('content')
    

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem quaerat consequuntur, voluptates sapiente, incidunt quisquam non repudiandae repellendus eius ipsam ipsa magni et accusantium provident. Sequi aut sapiente quo nulla!</p>

@isset($zm)
               <hr>
                <p>{{$zm}}</p>  
                <hr>
@endisset

@switch($zm_1)
    @case(1)
        <p>Rowna sie :</p>{{$zm_1}}
        @break
    @case(2)
        <p>Rowna sie :</p>{{$zm_1}}
        @break
    @default
        <p>Brak danych </p>
@endswitch


<hr>
@foreach ($data as $item)
    <div style="margin: 10px;display:flex;color:blue;padding:15px;background-color:red">
        <p>{{$item['title']}}</p>
        <p style="color:black; padding:5px">{{$item['body']}}</p>

</div>
    
@endforeach


@for($i=0;$i<count($data);$i++)

<div style="margin: 10px;display:flex;color:rgb(133, 190, 28);padding:15px;background-color:rgb(68, 27, 172)">
    <p>{{$data[$i]['title']}}</p>
    <p style="color:rgb(183, 175, 175); padding:5px">{{$data[$i]['body']}}</p>
</div>
@endfor


@for($i=0;$i<count($data);$i++)
        @if($i%2)
            <div style="margin: 10px;display:flex;color:rgb(237, 253, 64);padding:15px;background-color:rgb(164, 155, 186)">
                <p>{{$data[$i]['title']}}</p>
                <p style="color:rgb(183, 175, 175); padding:5px">{{$data[$i]['body']}}</p>
            </div>
        @endif
@endfor




@endsection
