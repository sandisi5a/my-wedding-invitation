@extends('layouts\master')

@section('content')
    <!-- page content -->
        <div class="right_col" role="main">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>attendance</h2>
                    <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Add
                    </button> 
                    <div class="clearfix"></div>
                  </div>

                  <!-- message -->
                  @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Tambahkan
                  </div>
                  @elseif (session('update'))
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Update
                  </div>
                  @elseif (session('delete'))
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Delete
                  </div>
                  @endif
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Presense</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="/attendance/create" method="POST" enctype="multipart/form-data"> 
                                {{csrf_field()}}             
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" required name="name"class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text"  required name="location"class="form-control" id="location">
                                    </div>
                                    <div class="form-group">
                                        <label for="contribution">Contribution</label>
                                        <input type="text"  required name="contribution"class="form-control" id="contribution">
                                    </div>
                                    <input type="hidden" name="created_at" class="form-control" id="created_at">
                                    <input type="hidden" name="updated_at" class="form-control" id="updated_at">    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Lokasi</th>
                          <th>Contribution</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach($attendance as $att)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $att->name }}</td>
                          <td>{{ $att->location }}</td>
                          <td>{{ $att->contribution }}</td>
                          <td><button type="button" class="btn btn-primary btn-sm" >Edit</button><button type="button" class="btn btn-danger btn-sm" >Delete</button></td>
                        </tr>
                        
                        @endforeach
                      
                      
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
@endsection