@if (session('success'))
<strong>
    {{ session('success') }}
</strong>
    
@endif


<form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
@csrf
Upload Image: <input type="file" name="profile_image"/>
<p><button type="submit" class="btn btn-default">Submit</button></p>
</form>