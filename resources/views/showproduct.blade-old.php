<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Data</title>
</head>
<body>

<style>
  *{
    background-color:#FBF8F1;
    font-size: 20px;
  }

table {
  font-family: arial, sans-serif;
  width: 100%;
  box-shadow: 5px 7px 7px #000;

}

td, th {
  text-align: left;
  padding: 15px;

}

td{
  text-align: center;
}

a{
  font-size: 17px;
  text-decoration: none;
  border: 2px solid black;
  background-color:  #a881af;
  color: black;
  padding: 8px;
 border-radius:  50px;
  font-weight: bolder;
  opacity: 0.7;
}

#red a{
  background-color: #E40017;
  border-radius:  50px;

}
tr:nth-child(even) {
  background-color: #d6cadd;
}

a:hover{
  opacity: 1.0;
  transform: translateY(4px);
}
 #red a:hover{
  opacity: 1.0;
 }
 #th{
padding-left: 40px;
 }
</style>


<table border="3px" style="width:100%; font-weight: 600;">
<tr>
<th id="th">Name</th>
<th>Description</th>
<th>View</th>
<th>Download</th>
<th>Edit</th>
<th>Share</th>
<th>Delete</th>
</tr>

@foreach($data as $data)
<tr>
<td >{{($data->name)}}</td>
<td >{{($data->description)}}</td>
<td ><a href="{{url('/view',$data->id)}}">View</a></td>
<td ><a href="{{url('/download',$data->file)}}">Download</a></td>
<td ><a href="{{url('/edit/'.$data->id)}}">Edit</a></td>
<td ><a href="{{url('/share',$data->file)}}">Share</a></td>
<td id="red"><a href="{{url('/delete/'.$data->id)}}">Delete</a></td>
</tr>
 @endforeach
 </table>
</body>
</html>