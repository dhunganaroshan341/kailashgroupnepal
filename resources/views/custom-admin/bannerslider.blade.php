@extends('backpack::layout')

@section('content')
    <div class="container">
        <h2>Media Section</h2>

        <!-- Create Folder -->
        <form action="{{ url('admin/media/create-folder') }}" method="POST">
            @csrf
            <input type="text" name="folder_name" placeholder="New Folder Name">
            <button type="submit">Create Folder</button>
        </form>

        <!-- Display Folders and Images -->
        @foreach ($folders as $folder)
            <div>
                <h3>{{ $folder->name }}</h3>
                @foreach ($folder->images as $image)
                    <img src="{{ Storage::url($image->image_path) }}" alt="Image" style="max-width: 100%;">
                    <form action="{{ url('admin/media/' . $image->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
