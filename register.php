<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen flex justify-center items-center bg-green-500">
    <form action="register.php" method="POST" autocomplete="off" class="bg-white w-96 rounded flex flex-col p-4">

        <h1 class="mb-4 text-3xl font-medium">Crie uma conta</h1>

            <p class="p-2 rounded bg-red-300 my-4">error register</p>
        
        <label for="username">Usuário</label>
        <input type="text" name="username" class="border p-2 focus:outline-none text-green-500">

        <label for="">Senha</label>
        <input type="password" name="password" class="border p-2 focus:outline-none text-green-500">

        <label for="">Senha novamente</label>
        <input type="password" name="password2" class="border p-2 focus:outline-none text-green-500">

        <button class="p-2 border rounded mt-4 text-green-500 hover:bg-green-500  hover:text-white focus:outline-none">REGISTRAR</button>
        <p class="mt-4 text-sm text-right">Já é registrado? <a href="login.php" class="text-green-500 hover:underline">faça login</a></p>
    </form>
</body>
</html>