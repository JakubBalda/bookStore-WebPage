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
            <div class="card d-flex flex-column shadow h-150">
                {{$book['id']}}---
                {{$book['title']}}---
                {{$book['author']}}---
                {{$book['price']}} zł---
                {{$book['isbn']}}</br>
                {{$book['description']}}</br>
                On stock: {{$book['amount']}}
            </div>
            @endfor
            
        </div>
    </body>
</html>