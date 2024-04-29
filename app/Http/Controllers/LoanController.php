<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Loan;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Class LoanController
 * @package App\Http\Controllers
 */
class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::orderBy('created_at', 'desc')->paginate(10);

        return view('loan.index', compact('loans'))
            ->with('i', (request()->input('page', 1) - 1) * $loans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loan = new Loan();
        $products = Product::pluck('name', 'id')->all();
        $clients = Client::pluck('name')->all();
        return view('loan.create', compact('loan', 'products', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Loan::$rules);

        $loan = Loan::create($request->all());

        return redirect()->route('loans.index')
            ->with('success', 'Loan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loan = Loan::find($id);

        return view('loan.show', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loan = Loan::find($id);
        $products = Product::pluck('name', 'id')->all();
        $clients = Client::pluck('name')->all();

        return view('loan.edit', compact('loan', 'products', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        request()->validate(Loan::$rules);

        $loan->update($request->all());

        return redirect()->route('loans.index')
            ->with('success', 'Loan updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $loan = Loan::find($id)->delete();

        return redirect()->route('loans.index')
            ->with('success', 'Loan deleted successfully');
    }
}
