@extends("theme2")

@section("content")

<div class="bg-image"
  style="
    background-image: url('https://d341ezm4iqaae0.cloudfront.net/assets/2020/06/30160014/librarian-scaled.jpg');
    height: 200vh; "
>

 


<form  action="/loginaction" method="post" >

{{ csrf_field() }}


</form>
</div>
</div> 
</div>
</div>


@endsection