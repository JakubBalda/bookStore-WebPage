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
            
            @foreach($books as $book)
            <div class="card d-flex flex-column shadow h-150">
                {{$book['id']}}---
                {{$book['title']}}---
                {{$book['author']}}---
                {{$book['price']}} zł
                <form action="getDetails" method="get">
                    <input type="hidden" name="bookID" value="{{$book['id']}}"/>
                    <input type="submit" class="btn btn-primary" value="Details">
                </form>
            </div>
            @endforeach
            
        </div>
    </body>
</html>