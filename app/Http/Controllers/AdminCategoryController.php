<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::latest()->paginate(5);

        //render view with posts
        return view('admin.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.categories.create');
    }

    public function store(Request $request) : RedirectResponse
    {
       $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id): View
    {
        $category = Category::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name'     => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

     /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        $category = Category::findOrFail($id);

        //render view with posts
        return view('admin.categories.show', compact('category'));
    }

     /**
     * destroy
     *
     * @param  mixed $category
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        $category= Category::find($id);

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
