<div class="p-4 bg-white shadow rounded">
    <h2 class="text-lg font-semibold mb-4">Add Transaction</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <input type="number" wire:model="amount" class="form-control" placeholder="Amount">
    </div>

    <div class="mb-3">
        <select wire:model="type" class="form-control">
            <option value="">Select Type</option>
            <option value="income">Income</option>
            <option value="expense">Expense</option>
        </select>
    </div>

    <div class="mb-3">
        <select wire:model="category_id" class="form-control">
            <option value="">Select Category</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <input type="text" wire:model="note" class="form-control" placeholder="Note">
    </div>

    <div class="mb-3">
        <input type="date" wire:model="date" class="form-control">
    </div>

    <button wire:click="save" class="btn btn-primary w-100">Submit</button>
</div>
