<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'salary' => 'required',
            'bonus' => 'nullable',
            'deduction' => 'nullable',
            'month' => 'required'
        ]);

        $salary = $request->salary;
        $bonus = $request->bonus ?? 0;
        $deduction = $request->deduction ?? 0;

        // Payroll Calculation
        $netSalary = $salary + $bonus - $deduction;

        Payroll::create([
            'user_id' => $request->user_id,
            'salary' => $salary,
            'bonus' => $bonus,
            'deduction' => $deduction,
            'net_salary' => $netSalary,
            'month' => $request->month,
            'status' => 'Unpaid'
        ]);

        return redirect()->route('payrolls.index')
            ->with('success', 'Payroll Generated Successfully');
    }
}