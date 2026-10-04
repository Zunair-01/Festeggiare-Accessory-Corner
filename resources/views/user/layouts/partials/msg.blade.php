@if (session('message'))
<div class="alert alert-danger alert-icon alert-dismissible">
    <em class="icon ni ni-cross-circle"></em> {{ session('message') }}
    <button class="close" data-dismiss="alert"></button>
</div>
@endif
@if (session('success'))
<div class="alert alert-success alert-icon alert-dismissible">
    <em class="icon ni ni-check-circle"></em> {{ session('success') }}
    <button class="close" data-dismiss="alert"></button>
</div>
@endif
