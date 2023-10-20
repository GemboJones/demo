<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div style="border: 3px solid black;">
        <h2>Add member</h2>
        <form action="/create-member" method='POST'>
            @csrf
            <input name="name" type="text" placeholder='name'>
            <input name="email" type="text" placeholder='email'>
            <input name="school" type="text" placeholder='school'>
            <button>Add</button>
        </form>
    </div>
</body>
</html>