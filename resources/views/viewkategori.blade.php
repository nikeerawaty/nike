<!DOCTYPE html>
<html>
<head>
<title> Kategori </title>
</head>

<body>
<table border="3px">
<tr>
<td>Nama Kategori</td>
<td>Deskripsi</td>
</tr>

@foreach($lihat as $data)
<tr>
<td>{{$data->category_name}}</td>
<td>{{$data->remarks}}</td>
</tr>
@endforeach
</table>

</body>
</html>