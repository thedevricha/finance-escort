<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Category;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
class ExpenseController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::with('category')->where('user_id', auth()->id())->get();
        return view('expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', 'enable')->get();
        return view('expenses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);
        Expense::create(array_merge($validated, ['user_id' => auth()->id()]));
        return redirect()->route('expenses.index')->with('success', 'Expense added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $this->authorize('update', $expense);
        $categories = Category::where('status', 'enable')->get();
        return view('expenses.edit', compact('expense', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $this->authorize('update', $expense);
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);
        $expense->update($validated);
        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $this->authorize('delete', $expense);
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
}
