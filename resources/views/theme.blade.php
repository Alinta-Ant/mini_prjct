<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <style>

      .card-columns {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
  text-align: center;
  background-color: #f1f1f1;
    column-count: 2;
    width: 65rem;

}

</style>
</head>
<body>




@extends("themeuser")
@section("content")

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

<div class="container">
<div class="row ">
<div  class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
</div>
<div  class="col col-12 col-sm-11 col-md-11 col-lg-11 col-xl-11 col-xxl-11">

 @foreach($prod as $prods)

 <form action="/add_to_cart" method="post">
      {{csrf_field()}}
      <input type="hidden" name="FurnitureId" value= "{{ $prods->id }}">

      <br>
         <div class="card-columns">
<img  height="230" width="150" src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}" class="card-img-top" alt="...">
<p class="card-text"><small class="text-muted"><h6>{{$prods->FurnitureCategory}} </h6></small></p>
    <h5 class="card-title">{{$prods->FurnitureName}}</h5>
    <p class="card-text">{{$prods->FurnitureDescription}} </p>
    <p class="card-text"><small class="text-muted"> <h5>₹ {{$prods->FurniturePrice}} </h5></small></p>
    <button class="btn btn-primary" type="submit">Submit</button>
    </div> 
	</form>
            @endforeach

			
            <br>
         
         </div> 
       </div>
</div>