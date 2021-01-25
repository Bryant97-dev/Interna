<!DOCTYPE html>
<html>
<head>
    <title>Interna - Mahasiswa Magang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
</style>
<center>
    <h5>Interna - Mahasiswa Magang</h5>
</center>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>NIM</th>
        <th>Phone</th>
        <th>Company Name</th>
        <th>Company Address</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($period_now as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->nim}}</td>
            <td>{{$p->phone}}</td>
            @foreach ($companies as $c)
                @if ($p->id == $c->user_id)
                    <td>{{$c->name}}</td>
                    <td>{{$c->address}}</td>
                @endif
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>