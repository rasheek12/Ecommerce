<h1>product add form</h1>

@if($errors-> any())
    @foreach($errors-> all() as $error)
    <div class ="w-full "> {{$error}} </div>
    @endforeach
    @endif

    @if(session()-> has('SuccessMessage'))
    <div class=""> {{session() -> get('SuccessMessage')}}</div>
    @endif
<form action="/photo/store" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">product ID</label>
    <input type="text" name="photo_id"><br>

    <label for=""> Product file </label>
    <input type="file" name= "photo" id=""><br>

    <input type="submit">
</form>