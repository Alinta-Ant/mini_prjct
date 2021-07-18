@extends("theme2")
@section("content")
<div class="bg-image"
  style="
    background-image: url('https://d341ezm4iqaae0.cloudfront.net/assets/2020/06/30160014/librarian-scaled.jpg');
    height: 100vh; "
><br><br><br><br><div class="container" style="background-color: #EBEBEB;">
<div class="container">
<div class="row">
<div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
<br>
<br>
<br>
<br>
<br>
<table class="table table table-dark">
<tr><th scope="row">Category Id</th>
    <th scope="row">Category Name</th>
   </tr>
    
@foreach($cat as $categorys)

<tr class="table-primary">
   
    <td>{{$categorys->CategoryId}}</td>
  
    <td>{{$categorys->CategoryName}}</td>
  
   
</tr>

@endforeach
</table>
</div>
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
</div>
<div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
<form action="/categoryread" method="post">
{{csrf_field()}}
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
    @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
    @endif
<table class="table table-borderless">
<tr>
<br>
<br>
<br>
<br>
<center><h2 style="color:black"><b>ADD CATEGORY</b></h2></center>
<br>
    <td style="color:black"><b>CATEGORY ID</b></td>
    <td><input type="text" value="{{old('CategoryId')}}" class="form-control" name="CategoryId" required>
    <span class="text-danger">@error('CategoryId'){{$message}} @enderror  </span></td>
</tr>
<tr>
    <td style="color:black"><b>CATEGORY NAME</b></td>
    <td><input type="text" value="{{old('CategoryName')}}" class="form-control" name="CategoryName" required> 
    <span class="text-danger">@error('CategoryName'){{$message}} @enderror  </span></td>
</tr>
<tr>
<tr>
    <td></td>
</tr>
    <td></td>
    <td><button class="btn btn-success">Add</button></td>
</tr>
</table>

</form>
</div>


</div>
</div>
</div>
</div>

@endsection
