@extends('dashboard.master')

@section('content')
    <h1>Create Post</h1>    
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br><br>
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">
        <br><br>
        <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>
        <br><br>
        <label for="">Category</label>
        <select name="category_id">
            <option value="">-- Select Category --</option>
        <br><br>
        </select>
        <br><br>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <br><br>
        <label for="">Posted</label>
        <select name="posted">
            <option value="1">Yes</option>
            <option value="0">No</option>

        <button type="submit">Enviar</button>
    </form>

@endsection