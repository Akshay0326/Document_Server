<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<div class="container justify-content-center">
    <div class="d-flex justify-content-center">
<form action="{{ url('edit/'.$data->id)}}" method="PUT" enctype="multipart/form-data">
<!-- <form action="/edit" method="POST"> -->
    @csrf
    @method('PUT')

    <input type="hidden" name="id" value="{{$data['id']}}">
   Name:  <input type="text" name="name" value="{{$data['name']}}"><br><br>
   Description:  <input type="text" name="Description" value="{{$data['description']}}"><br><br>
   File:  <input type="file" name="file" value="assets/{{$data->file}}"><br><br>
   <!-- <iframe style="align-item:center;" height="700" width="700" src="/assets/{{$data->file}}"></iframe> -->
    <button type="submit">Update</button>
    </div>
    </div>
</form>
<p></p>
<style>
.container{
    margin-top: 15%;
}

</style>