@include('head')
  <div class="alert alert-primary" role="alert">
<pre>
    <ul>

      <h3>Single car info</h3>

      <li>Title <p class="lead font-weight-bold">{{ $car->title }}</p></li>
      <li>Producer <p class="lead font-weight-bold">{{ $car->producer }}</p></li>
      <li>Number of doors <p class="lead font-weight-bold">{{ $car->numberOfDoors }}</p></li>


    </ul>
    </pre>
  </div>
</div>

  </body>
</html>
