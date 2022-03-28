<div>
    @if (session()->has('success') )
    <div id="alert" class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ session('success') }}</strong>
    </div>
    @endif
    
    @if ($message = session()->has('error'))
    <div id="alert" class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ session('error') }}</strong>
    </div>
    @endif
    
    @if ($message = session()->has('warning') )
    <div id="alert" class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ session('warning') }}</strong>
    </div>
    @endif
    
    @if ($message = session()->has('info') )
    <div  id="alert"  class="alert alert-info alert-block" >
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ session('info') }}</strong>
    </div>
    @endif
    
    @if ($errors->any())
    <div id="alert" class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
