<h1>Expenses</h1>
<a href="{{ route('expenses.create') }}">Add Expense</a>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($expenses as $expense)
            <tr>
                <td>{{ $expense->date }}</td>
                <td>{{ $expense->category->name }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->description }}</td>
                <td>
                    <a href="{{ route('expenses.edit', $expense) }}">Edit</a>
                    <form action="{{ route('expenses.destroy', $expense) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
