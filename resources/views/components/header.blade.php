<div>
    <h1> Ini Adalah Header Componen </h1>
    <h3> Hello {{$name}} </h3>
    <h3> Fruits are: {{$name}} </h3>
    <ul>
        @foreach($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>