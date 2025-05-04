@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(session('uploaded_file'))
    <!-- Display uploaded file as a clickable link -->
    <p>Uploaded File: <a href="{{ asset('uploads/' . session('uploaded_file')) }}">
    {{ session('uploaded_file') }}</a></p>
@endif

<form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<label>Choose File:</label>
	<input type="file" name="file">
	<button type="submit">Upload</button>
</form>