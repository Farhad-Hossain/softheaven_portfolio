<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CashEntryCategory;
use App\Models\CashEntryType;
use App\Models\CashBook;
use App\Models\CashEntry;
use App\Models\CashPaymentMode;

class CashbookController extends Controller
{
    public function addBook(Request $request)
    {
        if ( $request->method() == 'GET' ) {
            $view = view('admin.cashbook.books.add');
            if ( $request->ajax() ) {
                $view = $view->render();
                return response()->json([
                    'status' => 'success',
                    'html_content' => $view,
                    'title' => 'Add Book'
                ]);
            }
            return $view;
        }

        if ( $request->method() == 'POST' ) {
            $book = new CashBook();
            $book->name = $request->name;
            $book->save();
            session()->flash('success', 'Book added successfully');
            return redirect()->route('admin.cashbook.books');
        }
    }


    public function getBooks(Request $request)
    {
        $books = CashBook::all();
        return view('admin.cashbook.books', compact('books'));
    }

    public function viewBook(Request $request, $book_id) {
        $book = CashBook::find($book_id);

        $entries = CashEntry::where('book_id', $book_id);
        $payment_type = $request->  payment_type ?? "all";

        // if ( $payment_type == 'cash_in' ) {
        //     $entries = $entries->where('cash_entry_type_id', 1);
        // } elseif ( $payment_type == 'cash_out' ) {
        //     $entries = $entries->where('cash_entry_type_id', 2);
        // }

        $entries = $entries->latest()->get();
        $paymentModes = CashPaymentMode::all();
        $categories = CashEntryCategory::all();
        $entryTypes = CashEntryType::all();

        $total_cash_in = CashEntry::where('book_id', $book_id)->where('cash_entry_type_id', 1)->sum('amount');
        $total_cash_out = CashEntry::where('book_id', $book_id)->where('cash_entry_type_id', 2)->sum('amount');
        $final_cash = $total_cash_in - $total_cash_out;

        return view('admin.cashbook.books.view', compact(
            'book',
            'entries',
            'paymentModes',
            'categories',
            'entryTypes',
            'total_cash_in',
            'total_cash_out',
            'final_cash'
        ));
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
        session()->flash('success', 'Book deleted successfully');
        return redirect()->route('admin.cashbook.books');
    }

    public function addEntry(Request $request)
    {
        $entry = new CashEntry();
        $entry->book_id = $request->book_id;
        $entry->cash_entry_type_id = $request->cash_entry_type_id;
        $entry->category_id = $request->category_id;
        $entry->amount = $request->amount;
        $entry->payment_mode_id = $request->payment_mode_id;
        $entry->entry_date = $request->entry_date;
        $entry->entry_time = $request->entry_time;
        $entry->contact_person = $request->contact_person;
        $entry->remarks = $request->remarks;
        $entry->save();
        session()->flash('success', 'Entry added successfully');
        return redirect()->back();
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

    public function getCategories(Request $request)
    {
        $categories = CashEntryCategory::where('status', 1)->orderBy('id', 'asc')->get();
        return view('admin.cashbook.categories', compact('categories'));
    }

    public function addEntryCategory(Request $request)
    {
        if ( $request->method() == 'GET' ) {
            $view = view('admin.cashbook.categories_add');
            if ( $request->ajax() ) {
                $view = $view->render();
                return response()->json([
                    'status' => 'success',
                    'html_content' => $view,
                    'title' => 'Add Category'
                ]);
            }
            return $view;
        }

        $isExists = CashEntryCategory::where('name', $request->name)->exists();
        if ( $isExists ) {
            session()->flash('error', 'Category already exists');
            return redirect()->route('admin.cashbook.categories');
        }

        $category = new CashEntryCategory();
        $category->name = $request->name;
        $category->save();

        if ( $request->method() == 'POST' ) {
            if ( $request->ajax() ) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Category added successfully',
                ]);
            }

            session()->flash('success', 'Category added successfully');
            return redirect()->route('admin.cashbook.categories');
        }
    }

    public function editEntryCategory(Request $request, $id)
    {
        $category = CashEntryCategory::find($id);
        if ( $request->method() == 'GET' ) {
            $view = view('admin.cashbook.categories_edit', compact('category'));
            if ( $request->ajax() ) {
                $view = $view->render();
                return response()->json([
                    'status' => 'success',
                    'html_content' => $view,
                    'title' => 'Edit Category'
                ]);
            }
            return $view;
        }

        if ( $request->method() == 'POST' ) {
            $isExists = CashEntryCategory::where('name', $request->name)->exists();
            if ( $isExists ) {
                session()->flash('error', 'Category already exists');
                return redirect()->route('admin.cashbook.categories');
            }
            
            $category->name = $request->name;
            $category->save();
            if ( $request->ajax() ) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Category updated successfully',
                ]);
            }

            session()->flash('success', 'Category updated successfully');
            return redirect()->route('admin.cashbook.categories');
        }
    }

    public function deleteEntryCategory(Request $request, $id)
    {
        $category = CashEntryCategory::find($id);
        $category->delete();
        return redirect()->route('admin.cashbook.categories');
    }
}
