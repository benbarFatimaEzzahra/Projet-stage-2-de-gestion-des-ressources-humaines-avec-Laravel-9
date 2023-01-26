
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="form-search">
  <form action="{{ url('/service/search') }}" style="display:flex" method="get">
  <input type="text" name="search" class="form-control">
  <button type="submit" class="btn btn-primary">rechercher</button>
</form>
</div>
<table class="table table-striped container">
    <div class="row">
        <div class="col-12 lg">


    <thead>
        <tr>
            <th>NOM</th>
            <th>Nombre employés</th>
            <th>DELETE</th>


        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)

        <tr>
            <td>{{ $service->nom_s}}</td>
            <td>{{ $service->nbr_employes}}</td>
           
          <td><a href="{{ route('service.edit',['service' => $service->id]) }}">Edit</a></td> 
            <td>
                <form action="{{ route('service.destroy',['service' => $service->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-success">Delete</button>
                </form>
            </td> 
        </tr>


        @endforeach



    </tbody>
</div>
</div>
</table>
{{$services->render()}}
