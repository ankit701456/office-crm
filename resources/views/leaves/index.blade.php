<a href="{{ route('leave.approve', $leave->id) }}"
   class="btn btn-success btn-sm">
   Approve
</a>

<a href="{{ route('leave.reject', $leave->id) }}"
   class="btn btn-danger btn-sm">
   Reject
</a>