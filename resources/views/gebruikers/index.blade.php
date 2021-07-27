<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gebruikers</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="m-auto w-6/12">
        <div class="grid grid-cols-10 bg-blue-100 p-10">
            @foreach($data as $gebruiker) 
                <diV class="col-span-4">{{ $gebruiker->naam }}</div>
                <div class="col-span-6">{{ Str::upper($gebruiker->woonplaats) }}</div> 
            @endforeach
        </div>
    </div>   
</body>
</html>