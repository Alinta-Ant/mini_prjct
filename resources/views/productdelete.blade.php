@extends("theme2")

@section("content")

<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

<form action="/proddeleteprocess/{{$proddel->id}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">


<tr>
    <td>librarybook Category</td>
    <td><input type="text"  name="librarybookCategory" class="form-control" value="{{$proddel->librarybookCategory}}"></td>

</tr>
<br>

<tr>
    <td>librarybook Id</td>
    <td><input type="text"  name="librarybookId" class="form-control" value="{{$proddel->librarybookId}}"></td>
</tr>
<br>

<tr>
    <td>librarybook Name</td>
    <td><input type="text" name="librarybookName" class="form-control" value="{{$proddel->librarybookName}}"></td>
</tr>
<br>

<tr>
    <td>librarybook Price</td>
    <td><input type="text" name="librarybookPrice" class="form-control" value="{{$proddel->librarybookPrice}}"></td>
</tr>
<br>

<tr>
    <td>librarybook Description</td>
    <td><input type="text" name="librarybookDescription" class="form-control" value="{{$proddel->librarybookDescription}}"></td>
</tr>
<tr>
    <td>image</td>
    <td><input type="file" name="pimage"class="form-control" value="{{$proddel->pimage}}"></td>
    
    
</tr>

<tr>
   
    <td><td> <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger"> DELETE  </button></td></td>
   
</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>

@endsection