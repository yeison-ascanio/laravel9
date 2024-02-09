<x-layouts.app title="Crear un nuevo post" meta-description="Formulario para crear un nuevo post">
    <h1>Create a new post</h1>
    <form method="post" action="{{ route("posts.store") }}">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Send</button>
    </form>
    <br>
    <a href="{{ route("posts.index") }}">Back</a>
</x-layouts.app>
