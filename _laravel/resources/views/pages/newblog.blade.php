@extends('layouts.main')

@section('content')

<form>

    <form action="/submitform" methon="get">
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input name="yourname" type="text" class="form-control">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input name="email" type="text">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</form>

@if ($formSuccess == 'form-successfull')
<h1>Good</h1>
@endif

@if ($formSuccess == 'form-not-successfull')
<h1>Nope</h1>
@endif

@endsection
