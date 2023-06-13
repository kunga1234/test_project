<!DOCTYPE html>
<html>
<head>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<button type="button">
  <a href="/create_role_index">
  Create New
</a></button>
<button type="button">
  <a href="/get_role_list/status/NA/Active">
    list Active Role
</a></button>
<button type="button">
  <a href="/get_role_list/ALL/NA/ALL">
    list ALL Role
</a></button>
<body>

<table>
  <tr>
    <th>Sl  No 1</th>
    <th>Role Name 2</th>
    <th>status</th>
    <th>Action 3</th>
  </tr>
@foreach($response_data as $i=>$data)
  <tr>
    <td>{{$i+1}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->status}}</td>
    <td>
      <button type="button"><a href="/edit_role/{{$data->id}}">edit</a></button>
      <button type="button"><a href="/delete_role/{{$data->id}}">delete </a> </button>
    </td>
  </tr>
  @endforeach
</table>

</body>


</html>
