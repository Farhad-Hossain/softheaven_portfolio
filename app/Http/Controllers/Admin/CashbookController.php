<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CashEntryCategory;
use App\Models\CashEntryType;

class CashbookController extends Controller
{
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
