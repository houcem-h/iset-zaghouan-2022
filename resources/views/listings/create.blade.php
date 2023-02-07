@extends('layouts.app')

@section('content')
    <h2>New Listing</h2>
    <form>
        <div class="mb-3">
          <label for="titleInput" class="form-label">Title</label>
          <input type="text" class="form-control" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="tagsInput" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tagsInput" aria-describedby="tagsHelp">
            <div id="tagsHelp" class="form-text">Write words seperated by spaces (Example: laravel php)</div>
        </div>
        <div class="mb-3">
          <label for="positionNumberInput" class="form-label">Position Number</label>
          <input type="number" class="form-control" id="positionNumberInput" value="1" min="1">
        </div>
        <div class="mb-3">
            <label for="jobLocationInput" class="form-label">Job Location</label>
            <input type="text" class="form-control" id="jobLocationInput">
          </div>
          <div class="mb-3">
            <label for="descriptionTextarea" class="form-label">Description</label>
            <textarea class="form-control" id="descriptionTextarea" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <select class="form-select" aria-label="Default select example" id="company">
                <option selected disabled>Open to select company name</option>
                @foreach ($companies as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
