<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Edit post</h1>
    <form method="post" action="{{ route("posts.update", $post ) }}">
        @csrf @method("PATCH")
        @include('posts.form-fields')
        <button type="submit">Send</button>
    </form>
    <br>
    <a href="{{ route("posts.index") }}">Back</a>
</x-layouts.app>
