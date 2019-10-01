<h1>Meals</h1>

<ul>
@foreach ($meals as $meal)
<li>
    <a href="/meals/{{$meal->id}}"> {{ $meal->name }} </a>
</li>
@endforeach
</ul>