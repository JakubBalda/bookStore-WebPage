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
            <div class="card d-flex shadow h-150 justify-content-between">
                <div>
                    {{$book['id']}}---
                    {{$book['title']}}---
                    {{$book['author']}}---
                    {{$book['price']}} zł</br>
                    On stock: {{$book['amount']}}
                    @if($book['amount'] == 0)
                        </br><b>unavailable</b>
                    @endif
                </div>
                <div class="">
                    <form action="getDetails" method="get" class="d-flex">
                        <input type="hidden" name="bookID" value="{{$book['id']}}"/>
                        <input type="submit" class="btn btn-primary" value="Details">
                    </form>
                    @if($book['amount'] > 0)
                    <form action="" method="get" class="d-flex mt-10">
                        <input type="hidden" name="bookID" value="{{$book['id']}}"/>
                        <input type="submit" class="btn btn-success" value="Order">
                    </form>
                    @else
                        <input type="submit" class="btn btn-success disabled mt-10" value="Order">
                    @endif
                </div>
            </div>
            @endforeach
            
        </div>
    </body>
</html>