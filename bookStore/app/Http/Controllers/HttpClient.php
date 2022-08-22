<?php

namespace  App\Http\Controllers;

use Illuminate\Support\Facades\Http;

    class HttpClient extends Controller{
        public function getBooks(){

            $response = Http::acceptJson()->get('http://localhost:3000/api/books');
            $books = json_decode($response,true)['books'];
            
            return view('/books', ['books' => $books]);
        }

        public function getDetails(){
            $response = Http::acceptJson()->get('http://localhost:3000/api/books/'.$_GET['bookID']);
            $book = json_decode($response,true);
            print_r($book);
            return redirect()->to('bookDetails')->with('book', $book);
        }
    }
?>