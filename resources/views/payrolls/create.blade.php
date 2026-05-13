<form action="{{ route('payrolls.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Salary</label>
        <input type="number" name="salary" class="form-control">
    </div>

    <div class="mb-3">
        <label>Bonus</label>
        <input type="number" name="bonus" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deduction</label>
        <input type="number" name="deduction" class="form-control">
    </div>

    <button class="btn btn-primary">
        Generate Payroll
    </button>

</form>