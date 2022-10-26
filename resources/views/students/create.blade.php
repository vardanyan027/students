<div class="modal-body">
<form method="POST" action="{{ url('students/store') }}">
    @csrf
    <div  class="mb-3">
        <label>First Name</label>
        <input type="text" name="first_name">
    </div>
    <div  class="mb-3">
        <label>Last Name</label>
        <input type="text" name="last_name">
    </div>
    <div  class="mb-3">
        <label>Date of birth</label>
        <input type="date" name="date_birth">
    </div>
    <div  class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div  class="mb-3">
        <label>Phone Number</label>
        <input type="text" name="phone_number">
    </div>
    <div  class="mb-3">
        <label>Favorites Sports</label>
        <div class='form-group'>
            <select class="selectpicker" multiple name="sports_id[]" id="sports_select">
                @foreach ($sports as $sport)
                    <option value="{{$sport->id}}">
                        {{$sport->name}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
</form>
</div>
@section('script')
<script>
    $('#sports_select').selectpicker();
</script>
@endsection