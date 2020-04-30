<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'une catégorie</title>
</head>
<body>
    <h1>Affichage d'une catégorie</h1>

    <a href="{{ route('categories.index') }}">Retour a l'accueil</a>

    <div>
        @if(!is_null($category))
            La catégorie s'appelle : {{ $category->name }}
        @else
            <p>la catégorie n'existe pas</p>
        @endif
    </div>

    {{-- Formulaire d'ajout d'un commentaire --}}
    <h2>Ajouter un commentaire</h2>
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <input type="hidden" name="category_id" value="{{ $category->id }}">
        <input name="comment" type="text" placeholder="commentaire">
        <button type="submit">Envoyer</button>
    </form>

    {{-- Liste des commentaires de cette catégorie --}}
    @if(!is_null($category->comments))
        <ul>
            @foreach($category->comments as $comment)
                <li>
                    <a href="{{ route('comment.show', $comment->id) }}" title="voir le commentaire">{{ $comment->comment }}</a>
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>