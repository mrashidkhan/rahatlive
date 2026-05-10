<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowController extends Controller
{
    public function index()
    {
        $shows = Show::orderBy('show_date')->paginate(15);
        return view('admin.shows.index', compact('shows'));
    }

    public function create()
    {
        return view('admin.shows.form', ['show' => new Show(), 'action' => 'create']);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request);

        if ($request->hasFile('city_image')) {
            $data['city_image'] = $request->file('city_image')->store('shows', 'public');
        }

        Show::create($data);
        return redirect()->route('admin.shows.index')->with('success', 'Show added successfully.');
    }

    public function edit(Show $show)
    {
        return view('admin.shows.form', compact('show') + ['action' => 'edit']);
    }

    public function update(Request $request, Show $show)
    {
        $data = $this->validate($request);

        if ($request->hasFile('city_image')) {
            if ($show->city_image) Storage::disk('public')->delete($show->city_image);
            $data['city_image'] = $request->file('city_image')->store('shows', 'public');
        }

        $show->update($data);
        return redirect()->route('admin.shows.index')->with('success', 'Show updated.');
    }

    public function destroy(Show $show)
    {
        if ($show->city_image) Storage::disk('public')->delete($show->city_image);
        $show->delete();
        return redirect()->route('admin.shows.index')->with('success', 'Show deleted.');
    }

    private function validate(Request $request): array
    {
        return $request->validate([
            'city'        => 'required|string|max:100',
            'state'       => 'nullable|string|max:100',
            'country'     => 'required|string|max:100',
            'venue'       => 'nullable|string|max:255',
            'show_date'   => 'required|date',
            'doors_time'  => 'nullable|date_format:H:i',
            'show_time'   => 'nullable|date_format:H:i',
            'ticket_url'  => 'nullable|url|max:500',
            'city_image'  => 'nullable|image|max:5120',
            'status'      => 'required|in:upcoming,announced,soldout,cancelled',
            'sort_order'  => 'integer|min:0',
            'is_featured' => 'boolean',
        ]);
    }
}
