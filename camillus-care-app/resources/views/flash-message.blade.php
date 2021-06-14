@if ($message = Session::get('success'))
  <div class="alert alert-success" id="myAlertDiv" role="alert">
    <h4 class="alert-heading">Success!</h4>
    <strong>{{ $message }}</strong>
   </div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Check the following errors :(
</div>
@endif

<script type="text/javascript">
    setTimeout(function () {
        $('#myAlertDiv').fadeOut('slow');
    }, 3000); // <-- time in milliseconds
</script>