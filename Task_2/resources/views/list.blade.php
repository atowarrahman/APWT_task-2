<h1> Product list </h1>
<table border="1">
        <tr>
            <th> Id</th>
            <th> Name</th>
            <th> price</th>
        </tr>

        @foreach($products as $s)
            <tr>
                
               <td>{{$s->id}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->price}}</td>
            </tr>
        @endforeach
</table>