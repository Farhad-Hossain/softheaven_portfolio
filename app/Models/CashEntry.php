<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashEntry extends Model
{
    use HasFactory;

    public function cash_entry_type()
    {
        return $this->belongsTo(CashEntryType::class, 'cash_entry_type_id', 'id');
    }

    public function cash_entry_category()
    {
        return $this->belongsTo(CashEntryCategory::class, 'category_id', 'id');
    }

    public function cash_payment_mode()
    {
        return $this->belongsTo(CashPaymentMode::class, 'payment_mode_id', 'id');
    }

    public function book()
    {
        return $this->belongsTo(CashBook::class, 'book_id', 'id');
    }
}
