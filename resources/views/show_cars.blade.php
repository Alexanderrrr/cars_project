
@include('head')

    <ul class="list-group">
      @foreach ($cars as $car)
      <li  class="list-group-item">
        <a class="badge badge-info"href="/cars/single_car/{{ $car->id }}">{{ $car->title }} {{ $car->producer }}
        </a>
      </li>

      @endforeach
    </ul>
  </body>
</div>

</html>
