<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaction;

class TransactionTable extends Component
{
    public $transactions = [];

    protected $listeners = ['transactionSaved' => 'refreshTransactions'];

    public $showSummaryCardFor = null;

    public function toggleSummaryCard($transactionId)
    {
        $this->showSummaryCardFor = $this->showSummaryCardFor === $transactionId ? null : $transactionId;
    }

    
    public function mount()
    {
        $this->refreshTransactions();
    }

    public function refreshTransactions()
    {
        $this->transactions = Transaction::where('user_id', auth()->id())->latest()->get();
    }

    public function render()
    {
        return view('livewire.transaction-table', [
            'transactions' => $this->transactions,
        ]);
    }
}
