@if(Auth::guard('web')->check())
  <p>You are logged In as a USER</p>
@else
  <p>You are logged out as a USER</p>
@endif

@if(Auth::guard('admin')->check())
  <p>You are logged In as a ADMIN</p>
@else
  <p>You are logged out as a ADMIN</p>
@endif
