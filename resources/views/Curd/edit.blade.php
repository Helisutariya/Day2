@extends('welcome')
@section('content')
    <div class="container">
        <form action="{{route('Curd.update')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" id="id" value="{{$data->id}}">

                <label class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$data->name}}">

                <label class="form-label">Gender&nbsp;:</label><br>
                <input type="radio"  name="status" id="Name"  value="male"{{($data->gender == 'male'? 'checked':'')}}>male
                <input type="radio"  name="status" id="Name"  value="female"{{($data->gender == 'female'? 'checked':'')}}>female<br>
                <label class="form-label">Hobby&nbsp;:</label><br>
            <input type="checkbox"  name="hobby[]" id="Name"  value="Dance">Dance
            <input type="checkbox"  name="hobby[]" id="Name"  value="Music">Music
            <input type="checkbox"  name="hobby[]" id="Name"  value="Cricket">Cricket

            </div>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
@endsection