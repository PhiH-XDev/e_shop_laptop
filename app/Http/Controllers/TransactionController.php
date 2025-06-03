<?php

namespace App\Http\Controllers;

use App\Models\TransactionModel;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = TransactionModel::orderByDesc('transaction_date')->paginate(10);
        return view('admin.transaction', compact('transactions'));
    }
}
