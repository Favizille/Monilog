<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class SummaryCards extends Component
{
    public $transaction;

    public function mount(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    public function render()
    {
        return view('livewire.summary-cards');
    }
}
