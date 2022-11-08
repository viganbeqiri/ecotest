<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OppController extends Controller
{
    public function index()
    {
        return view('opportunities.index', [
            'opportunities' => Opportunity::latest()->filter(
                request(['search', 'client', 'author'])
            )->paginate(18)->withQueryString()
        ]);
    }

    public function show(Opportunity $opportunity)
    {
        return view('opportunities.show', [
            'opportunity' => $opportunity
        ]);
    }
}
