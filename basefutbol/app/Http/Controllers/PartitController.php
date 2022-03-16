<?php

namespace App\Http\Controllers;

use App\Partit;
use App\Club;
use Illuminate\Http\Request;

/**
 * Class PartitController
 * @package App\Http\Controllers
 */
class PartitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partits = Partit::paginate();

        return view('partit.index', compact('partits'))
            ->with('i', (request()->input('page', 1) - 1) * $partits->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partit = new Partit();

        $club = Club::pluck('club','id');

        return view('partit.create', compact('partit','club'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Partit::$rules);

        $partit = Partit::create($request->all());

        return redirect()->route('partit.index')
            ->with('success', 'Partit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partit = Partit::find($id);

        return view('partit.show', compact('partit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partit = Partit::find($id);
        $club = Club::pluck('club','id');

        return view('partit.edit', compact('partit','club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Partit $partit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partit $partit)
    {
        request()->validate(Partit::$rules);

        $partit->update($request->all());

        return redirect()->route('partit.index')
            ->with('success', 'Partit updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $partit = Partit::find($id)->delete();

        return redirect()->route('partit.index')
            ->with('success', 'Partit deleted successfully');
    }
}
