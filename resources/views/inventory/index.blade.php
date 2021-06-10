@extends('main.app')

@section('content')
<div class="container">
<FORM>
<TABLE BORDER="1">
  <TR>
    <TD id="days"></TD>
    <TD id="shift_strat">Shift Start</TD>
    <TD id="shift_end">Shift End</TD>
    <TD id="interval">Interval</TD>
    
  </TR>
  <tbody id="tbody">
  	<TR>
    <TD>Monday</TD>
    <TD><select class="form-control"><option>2.00</option><option>3.00</option><option>4.00</option></select></TD>
    <TD><select class="form-control"><option>2.00</option><option>3.00</option><option>4.00</option></select></TD>
    <TD><select class="form-control"><option>2.00</option><option>3.00</option><option>4.00</option></select></TD>
    <TD><button class="btn btn-success add" id="add" type="button">+</button></TD>
    <TD><button class="btn btn-danger">-</button></TD>
    <div id="new_chq"></div>
  </TR>
  </tbody>
  
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>
</div>
@endsection
@push('script')
<script type="text/javascript" src="{{asset('js/inventory.js')}}"></script>
@endpush
