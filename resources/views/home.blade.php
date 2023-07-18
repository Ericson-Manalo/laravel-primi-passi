<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            @dump($listItems);
            @foreach ($listItems as $item)
            <ul>
                <li>
                    {{$item['element']}}
                </li>
            </ul>
        </nav>
        @endforeach
    </header>
</body>
</html>