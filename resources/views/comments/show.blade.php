<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'un commentaire</title>
</head>
<body>
    <h1>Affichage d'un commentaire</h1>

    <a href="{{ route('categories.index') }}">Retour a la liste des categories</a>

    @if(!is_null($comment))
        <p>Le commentaire est :
            <strong>{{ $comment->comment }}</strong>
        </p>
        @else
        <p>aucune commentaire correspondant</p>
    @endif

    @if(!is_null($comment->category))
        <p>La catégorie est : 
            <strong>
                <a href="{{ route('categories.show', $comment->category->id) }}" title="retour a la catégorie">{{ $comment->category->name }}</a>
            </strong>
        </p>
    @endif


</body>
</html>