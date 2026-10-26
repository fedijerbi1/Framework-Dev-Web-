<a href="{{ route('home') }}">Home</a> 
<a href="{{ route('contact') }}">Contact</a>
<a href="{{ route('home.controller', ['n' => 1]) }}">Home Controller</a> 
<a href="{{ route('home.index', ['nom' => 'fedi','prenom'=>'jerbi']) }}">HomeActivites</a>
<a href = "{{ route('contacts.create') }}">Contact Form</a>