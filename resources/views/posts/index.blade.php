<x-app-layout>
    <h1>Aqui se mostraran todos los posts desde PostController - html </h1>
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