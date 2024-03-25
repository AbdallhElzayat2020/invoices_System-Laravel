<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionsRequest;
use App\Http\Requests\UpdateSectionsRequest;
use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = sections::all();
        return view("sections.sections", compact("sections"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(SectionsRequest $request)
    {
        $data = $request->all();

        $e_check = sections::where("section_name", "=", $data["section_name"])->exists();

        if ($e_check) {

            session()->flash("error", "القسم مدخل موجود بالفعل ");
            return redirect("/sections");
        } else {
            sections::create([
                "section_name" => $request->section_name,
                "description" => $request->description,
                "created_by" => (Auth::user()->name),
            ]);
            session()->flash("success", "تم اضافة القسم بنجاح ");
            return redirect("/sections");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sections $sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionsRequest $request)
    {
        $id = $request->id;

        $section = sections::findOrFail($id);
        $section->update($request->all());
        session()->flash('success', 'تم تحديث القسم بنجاح');
        return redirect('/sections');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        sections::findOrFail($id)->delete();
        session()->flash('success', 'تم حذف القسم بنجاح');
        return redirect('/sections');
    }
}
