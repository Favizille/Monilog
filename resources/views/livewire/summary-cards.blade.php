<div class="card mt-2 p-3 bg-light border">
    <h5>Transaction Summary</h5>
    <p><strong>Amount:</strong> ₦{{ number_format($transaction->amount, 2) }}</p>
    <p><strong>Type:</strong> {{ ucfirst($transaction->type) }}</p>
    <p><strong>Category:</strong> {{ $transaction->category->name ?? 'N/A' }}</p>
    <p><strong>Note:</strong> {{ $transaction->note ?? 'None' }}</p>
    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($transaction->date)->format('M d, Y') }}</p>
</div>
