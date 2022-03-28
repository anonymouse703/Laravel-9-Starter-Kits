<x-app-layout>
    @include('layouts.shared.flash')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clients</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <a href="{{route('clients.create')}}" class="btn btn-info ml-5 mb-2">
                    <i class="fa fa-plus"></i>&nbspAdd Client
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="clients" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{$client->fullname}}</td>
                        <td>{{$client->address}}</td>
                        <td>{{$client->contact_no}}</td>
                        <td>{{$client->email}}</td>
                        <td class="text-center align-middle">
                            <div class="btn-group">
                                <a href="{{route('clients.edit',$client->id)}}" class="btn btn-info m-1 btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                
                                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                                
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger delete-header m-1 btn-sm" title="Delete"><i class="fa fa-trash" small></i></button>
                                </form>

                            </div>   
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-app-layout>

  @include('layouts.shared.scripts.user_scripts')
