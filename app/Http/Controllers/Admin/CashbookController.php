<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CashEntryCategory;
use App\Models\CashEntryType;
use App\Models\CashBook;

class CashbookController extends Controller
{
    public function getBooks(Request $request)
    {
        $books = CashBook::all();
        return view('admin.cashbook.books', compact('books'));
    }

    public function editBook(Request $request, $id)
    {
        $book = CashBook::find($id);
        if ( $request->method() == 'GET' ) {
            return view('admin.cashbook.books.edit', compact('book'));
        }

        if ( $request->method() == 'POST' ) {
            $book->name = $request->name;
            $book->save();
            return redirect()->route('admin.cashbook.books');
        }
    }

    public function deleteBook(Request $request, $id)
    {
        $book = CashBook::find($id);
        $book->delete();
        return redirect()->route('admin.cashbook.books');
    }

    public function addEntry(Request $request)
    {
        $entryTypes = CashEntryType::where('status', 1)->orderBy('id', 'desc')->get();
        $categories = CashEntryCategory::where('status', 1)->orderBy('id', 'asc')->get();
        return view('admin.cashbook.add', compact('entryTypes', 'categories'));
    }

    public function editEntry(Request $request, $id)
    {
        $entryTypes = CashEntryType::where('status', 1)->orderBy('id', 'desc')->get();
        $categories = CashEntryCategory::where('status', 1)->orderBy('id', 'asc')->get();
        return view('admin.cashbook.edit', compact('id', 'entryTypes', 'categories'));
    }

    public function deleteEntry(Request $request, $id)
    {
        return view('admin.cashbook.delete', compact('id'));
    }
}
