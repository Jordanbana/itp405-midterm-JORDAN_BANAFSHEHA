<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\book;


class books extends Controller
{

  public function index($bookID)
  {

      $book = DB::select('

      SELECT reviews.headline, reviews.body, reviews.rating, books.title, authors.first_name , authors.last_name, publishers.name AS publisher_name
      FROM books
      INNER JOIN reviews
      ON books.id = reviews.book_id
      INNER JOIN authors
      ON books.author_id = authors.id
      INNER JOIN publishers
      ON books.publisher_id = publishers.id
      WHERE books.id = ?


      ', [$bookID]);


      return $book;
  }

  public function showAll(){

      $book = DB::table('books')->join('authors', 'books.author_id', '=', 'authors.id')
          ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
          ->get();
      return view('book', [
        'book' => $book
      ]);

  }

}
