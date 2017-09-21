

<html>
    <head>
    
    </head>

    <body>
        <div>
        <ul>
            @foreach($numbers as $number) 
                <li> {{ $number }}  </li>
                <br>
            @endforeach
        </ul>
        </div>
    </body>
</html>