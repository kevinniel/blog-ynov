<!DOCTYPE html>
<html>
<head>
	<title>Index des catégories</title>
</head>
<body>
    <h1>Index des catégories</h1>

    <a href="{{ route('categories.create') }}" title="Ajouter une catégorie">Ajouter une catégorie</a>

    <ul>
        @foreach($categories as $category)
        <li>
            <!-- web.php categories/{id}/show -->
            <a href="{{ route('categories.show', $category->id) }}" title="{{ $category->name }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>

</body>
</html>