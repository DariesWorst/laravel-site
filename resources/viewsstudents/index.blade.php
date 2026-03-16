<h1>Students</h1>

<a href="/students/create">Add Student</a>

@foreach($students as $s)
<div>
{{ $s->name }} {{ $s->email }}

<a href="/students/{{ $s->id }}/edit">Edit</a>

<form action="/students/{{ $s->id }}" method="POST">
@csrf
@method('DELETE')
<button>Delete</button>
</form>

</div>
@endforeach
