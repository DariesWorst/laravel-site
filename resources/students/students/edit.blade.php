<form method="POST" action="/students/{{ $student->id }}">
@csrf
@method('PUT')
<input name="name" value="{{ $student->name }}">
<input name="email" value="{{ $student->email }}">
<button>Update</button>
</form>
