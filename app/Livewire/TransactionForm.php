<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Transaction;

class TransactionForm extends Component
{

    public $amount;
    public $type;
    public $category_id;
    public $note;
    public $date;

    public $categories; // To populate the category dropdown

    public function mount()
    {
        $this->categories = Category::all(); // Load categories from DB
    }

    public function render()
    {
        return view('livewire.transaction-form');
    }

    public function save()
    {
        $this->validate([
            'amount' => 'required|numeric',
            'type' => 'required|in:income,expense',
            'category_id' => 'required|exists:categories,id',
            'note' => 'nullable|string',
            'date' => 'required|date',
        ]);

        Transaction::create([
            'amount' => $this->amount,
            'type' => $this->type,
            'category_id' => $this->category_id,
            'note' => $this->note,
            'date' => $this->date,
            'user_id' => auth()->id(), 
        ]);

        $this->reset(['amount', 'type', 'category_id', 'note', 'date']);

        session()->flash('success', 'Transaction saved!');

        $this->dispatch('transactionSaved');
    }


}
