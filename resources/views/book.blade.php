<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<html>
  <head>
    <meta charset="utf-8">
    <title>Book</title>
  </head>
  <body>





    @foreach ($book as $boo)
      <tr>
        <td>Book title: {{ $boo->title }} , </td>
        <td>Name: {{ $boo->first_name}} </td>
        <td>{{ $boo->last_name}} , </td>
        <td>Publisher: {{ $boo->name}} </td>

        <br>


      </tr>
    @endforeach

    <br>
    <br>
  </body>
</html>

<!-- TESTING  -->
<?php
// var_dump($book);
?>
