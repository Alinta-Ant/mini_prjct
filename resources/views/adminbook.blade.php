@extends("theme1")

@section("content")
<div class="bg-image"
  style="
    background-image: url('https://th.bing.com/th/id/OIP.QAn3pzSP8Bl4dDDgH_SXTQHaH9?pid=ImgDet&rs=1');
    height: 100vh; "
>
<div class="container" 
  ><div  class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div  class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5" >


<form  action="/loginaction" method="post" >

{{ csrf_field() }}
<br><br><br><br>
<div class="row"> <br><br></div>
<div class="row" >

</form>
</div>
</div> 
</div>
</div>


@endsection