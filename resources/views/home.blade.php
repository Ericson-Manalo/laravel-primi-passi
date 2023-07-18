<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @dump($listItems)
    <header>

        <nav>
        @foreach ($listItems as $item)
            <ul>
                <a href="{{$item['ref']}}">
                    <li>
                        {{$item['element']}}
                    </li>
                </a>
            </ul>
        @endforeach
        </nav>

    </header>
</body>
</html>