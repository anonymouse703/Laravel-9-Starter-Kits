<x-app-layout>
    <br>
    <section class="content">
        <div class="row">
           <div class="col-md-12">
            <div class="col-md-8 offset-2">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Client Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if(isset($client))
                            <form method="post" action="{{ route('clients.update', $client->id) }}" enctype='multipart/form-data' class="form-horizontal" >
                           @method('put')
                        @else
                            <form method="post" action="{{ route('clients.store') }}" enctype="multipart/form-data" class="form-horizontal">
                        @endif
                        
                        @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fullname" class="col-sm-3 col-form-label text-right">Full Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname', isset($client->fullname) ? $client->fullname : '') }}" placeholder="Fullname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label text-right">Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', isset($client->address) ? $client->address : '') }}" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contact_no" class="col-sm-3 col-form-label text-right">Contact Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="contact_no" name="contact_no" value="{{ old('contact_no', isset($client->contact_no) ? $client->contact_no : '') }}" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label text-right">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', isset($client->email) ? $client->email : '') }}" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
           </div>
        </div>
    </section>
</x-app-layout>
@include('layouts.shared.scripts.user_scripts')