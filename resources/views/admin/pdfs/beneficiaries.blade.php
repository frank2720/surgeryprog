<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>List of all beneficiaries</h2>

<table>
  <tr>
    <th>Id</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Phone number</th>
    <th>Gender</th>
  </tr>
  @foreach ($beneficiaries as $beneficiary)
    <tr>
        <td>{{$beneficiary->beneficiary_id}}</td>
        <td>{{$beneficiary->firstname}}</td>
        <td>{{$beneficiary->lastname}}</td>
        <td>{{$beneficiary->contact}}</td>
        <td>{{$beneficiary->gender}}</td>
    </tr>
  @endforeach
</table>

</body>
</html>

