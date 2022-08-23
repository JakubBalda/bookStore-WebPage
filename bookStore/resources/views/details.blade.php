<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <title>Book Store</title>
    <!--styles-->
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>

    </head>
    <body>
        <div class="page-wrapper"></div>
        <div class="content-wrapper">
            <?php
                $book = session()->get('book');
                
            ?>
            @for($i = 0; $i<1; $i++)
            <div class="card d-flex flex-column shadow h-450">
                
                <b>Title:</b> {{$book['title']}} </br>
                <b>Author:</b> {{$book['author']}} </br>
                <b>Price:</b> {{$book['price']}} zł </br>
                <b>ISBN:</b> {{$book['isbn']}}</br></br>
                <b>Description:</b> {{$book['description']}}</br></br>
                <b>On stock:</b> {{$book['amount']}}
                <button class="btn btn-primary w-100" onclick="location='books'">Back</button>
            </div>
            @endfor
            
        </div>
    </body>
</html>