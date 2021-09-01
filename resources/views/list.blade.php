
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:skyblue;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
    <th>Manage Activity</th>
  </tr>
  @foreach($i as $l)
      <tr>
        <td>{{$l->username}}</td>
        <td>{{$l->email}}</td>
        <td>{{$l->password}}</td>
        <td><a href="/update/{{$l->id}}">update</a>/<a href="delete/{{$l->id}}">delete</a>
      </tr>
      @endforeach
      

</table>

</body>
</html>
