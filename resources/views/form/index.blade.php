<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Registro</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 border border-gray-300 shadow-md rounded-md max-w-md w-full">

        <h2 class="text-2xl font-semibold mb-6 text-center"  style="font-size: 19px;">Para activar tu tarjeta, por favor responde el siguiente formulario</h2>
    
        <form action="{{ route('tap.storage', ['tag'=> $id]) }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="route" class="block text-sm font-medium text-gray-600">Ruta</label>
                <input type="text" name="route" id="route" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="agency" class="block text-sm font-medium text-gray-600">Agencia</label>
                <input type="text" name="agency" id="agency" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="employee_number" class="block text-sm font-medium text-gray-600">Número de empleado</label>
                <input type="text" name="employee_number" id="employee_number" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md w-full hover:bg-blue-600">Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>