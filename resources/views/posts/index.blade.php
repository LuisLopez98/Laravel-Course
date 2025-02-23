<x-app-layout>
    <h1>Aqui se mostraran todos los posts  </h1>
    <a href="/posts/create">
        Nuevo Post
    </a>
    <ul>
        @foreach($posts as $posts)
            <li>
                <a href="/posts/{{$posts->id}}">
                    {{$posts->title}}
                </a>
            </li> 
        @endforeach
    </ul>
</x-app-layout>