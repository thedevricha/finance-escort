<h1>Add Expense</h1>
<form action="{{ route('expenses.store') }}" method="POST">
    @csrf
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <label for="amount">Amount</label>
    <input type="number" name="amount" id="amount" required>
    <label for="date">Date</label>
    <input type="date" name="date" id="date" required>
    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea>
    <button type="submit">Save</button>
</form>
