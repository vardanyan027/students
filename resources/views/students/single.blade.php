@extends('layoutes.menu')

@section('content')
<form method="post" action="update/{{$student->id}}">
    @csrf
    <input type="hidden" value="{{$student->id}}" id="student_id">
    <div  class="mb-3">
        <label>First Name</label>
        <input type="text" name="first_name" value="{{$student->first_name}}">
    </div>
    <div  class="mb-3">
        <label>Last Name</label>
        <input type="text" name="last_name" value="{{$student->last_name}}">
    </div>
    <div  class="mb-3">
        <label>Date of birth</label>
        <input type="date" name="date_birth" value="{{$student->date_birth}}">
    </div>
    <div  class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{$student->email}}">
    </div>
    <div  class="mb-3">
        <label>Phone Number</label>
        <input type="text" name="phone_number" value="{{$student->phone_number}}">
    </div>
    <div  class="mb-3">
        <label>Favorites Sports</label>
        <div class='form-floating'>
            <select class="selectpicker"  multiple name="sport_ids[]" id="sports_select">
                @foreach ($sports as $sport)
                    @if(in_array($sport->id, $student->studentSports->pluck('id')->toArray()))
                        <option value="{{$sport->id}}" selected>
                            {{$sport->name}}
                        </option>
                    @else
                    <option value="{{$sport->id}}">
                        {{$sport->name}}
                    </option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div>
        
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>
<form method="post" action="/students/delete/{{$student->id}}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-primary">Delete</button>
</form>
@endsection
@section('script')
<script>
        $(document).ready(function() {

        $('#sports_select').selectpicker();
        });
</script>
<script>
    function deleteStudent() {
              $.ajax({
                  type: 'delete',
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: `${$('#student_id').val()}`,
                  success: function (response, textStatus, xhr) {
                    window.location='/students';
                  }
              });
    }
</script>
@endsection