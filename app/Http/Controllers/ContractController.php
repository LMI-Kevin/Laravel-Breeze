<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Contract;
use App\Models\Brand;
use App\Models\Detail;

class ContractController extends Controller
{
    public function allContracts() {
        $contracts = Contract::allContracts();

        return Inertia::render('Contracts', [
            'contracts' => $contracts
        ]);
    }

    public function addContract() {
        $brands = Brand::all();
        $details = Detail::all();
        return Inertia::render('AddContract', [
            'brands' => $brands,
            'details' => $details
        ]);
    }

    public function submitContract(Request $request) {
        // dd($request);
        $request->validate([
            'pwp' => 'required',
            'brand' => 'required',
            'details' => 'required',
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'deliverables' => 'required',
            'amount' => 'required',
            'number_of_kols' => 'required',
            'number_of_posts' => 'required'
        ]);

        $contract = Contract::addContract($request->all());
        return redirect()->route('contracts');
    }

    public function viewContract($contractId) {
        $contract = Contract::getContract($contractId);
        $brands = Brand::all();
        $details = Detail::all();

        return Inertia::render('ViewContract', [
            'contract' => $contract,
            'brands' => $brands,
            'details' => $details
        ]);
    }
}
