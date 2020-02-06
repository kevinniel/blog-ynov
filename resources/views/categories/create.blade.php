<!DOCTYPE html>
<html>
<head>
	<title>Création d'une catégorie</title>
</head>
<body>
    <h1>Création d'une catégorie</h1>

    <form method="POST" action="{{ route('categories.store') }}">

        @csrf

        <label for="name">Nom de la catégorie a créer</label>
        <input id="name" type="text" name="name">

        <input type="submit">
    </form>

</body>
</html>