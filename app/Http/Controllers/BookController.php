<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    //
    public function getCreatePage() {
        return view('create');
    }

    public function createBook(BookRequest $request){

        Book::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'telfon' => $request->telfon,
        ]);


        return redirect(route('getBooks'));
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', ['books' => $books]);
    }

    public function getBookById($id){
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id){
        $book = Book::find($id);
        $book->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'telfon' => $request->telfon,
        ]);

        return redirect(route('getBooks'));
    }

    public function deleteBook ($id){
        Book::destroy($id);

        return redirect(route('getBooks'));
    }
}
