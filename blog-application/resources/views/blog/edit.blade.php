{{-- layoute --}}
{{-- foldername.filename
@extends("component.layout")

@section("title", "My Simple web application")

@section("content")
<h1>Index layout system baby</h1>
@endsection --}}


{{-- component --}}
<x-layout>
    <div>
        <div class="container">
            <h2>Update Blog</h2>
            <form method="post">
                {{-- @method("PUT")
                @csrf --}}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" value="Sample Title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description"
                        placeholder="Enter description">
                        {{-- {{ $blog->description }} --}}
                    </textarea>
                </div>
                <button type="submit" class="form-btn">Update Blog</button>
            </form>
            <br>
            {{-- <a href="{{ route('blog.index') }}" class="action-link view-link">Back</a> --}}
        </div>
    </div>
</x-layout>
