<table class="table table-striped">
    <thead>
        <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Note</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->date }}</td>
                <td>{{ ucfirst($transaction->type) }}</td>
                <td>{{ $transaction->category->name }}</td>
                <td>₦{{ number_format($transaction->amount, 2) }}</td>
                <td>{{ $transaction->note }}</td>
                <td>
                    <button wire:click="toggleSummaryCard({{ $transaction->id }})" class="btn btn-sm btn-info">
                        {{ $showSummaryCardFor === $transaction->id ? 'Hide Summary' : 'Show Summary' }}
                    </button>
                </td>
            </tr>
    
            @if ($showSummaryCardFor === $transaction->id)
                <tr>
                    <td colspan="6">
                        @livewire('summary-cards', ['transaction' => $transaction], key('summary-cards-' . $transaction->id))

                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
    
    
</table>
