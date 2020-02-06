<!DOCTYPE html>
<html>
<head>
	<title>Affichage d'une catégorie</title>
</head>
<body>
    <h1>Affichage d'une catégorie</h1>

    <a href="{{ route('categories.index') }}">Retour a l'accueil</a>

    @if(!is_null($category))
        {{ $category->name }}
    @else
        <p>la catégorie n'existe pas</p>
    @endif

</body>
</html>