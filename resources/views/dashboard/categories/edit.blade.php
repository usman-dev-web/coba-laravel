@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap    flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Edit Category</h2>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/categories/{{ $category->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Category Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $category->slug) }}">
              @error('name')
               <div class="invalid-feedback">
                {{ $message }}  
              </div>   
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required readonly value="{{ old('slug', $category->slug) }}">
              @error('slug')
              <div class="invalid-feedback">
               {{ $message }}  
             </div>   
             @enderror

            <button type="submit" class="btn btn-primary mt-4">Edit Category</button>
          </form>
    </div>

    <script>
        const title = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/categories/checkSlug?name=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

    </script>
@endsection