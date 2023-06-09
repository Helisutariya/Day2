@extends('welcome')
@section('content')
    <div class="container">
        <form action="{{route('Curd.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- < class="form-group"> --}}
                <label class="form-label">Name</label>
                <input type="text" name="name" id="name"><br>
            
                <label>Gender:</label>
                <input type="radio"  value="Male" name="gender"><label for="Male" class="light">Male</label>
                <input type="radio" value="Female" name="gender"><label for="Female" class="light">Female</label><br>

                <label>Hobby:</label>
          <input type="checkbox"  value="Dance" name="hobby[]"><label class="light" >Dance</label>
          <input type="checkbox" value="Drawing" name="hobby[]"><label class="light">Drawing</label>
          <input type="checkbox"  value="Cricket" name="hobby[]"><label class="light">Cricket</label><br>

          <label> image:</label>
         <input type='file' name="image"><br>
            
<label><button>submit</button></label>
            {{-- <button type="submit" name="submit">submit</button> --}}
            
        </form>
    </div>
@endsection