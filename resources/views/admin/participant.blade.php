@extends('layouts\master')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Participant</h2>
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
                          <h5 class="modal-title" id="exampleModalLabel">Participant of Invitation</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="participant/create" method="POST" enctype="multipart/form-data"> 
                                {{csrf_field()}}             
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" required name="name"class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text"  required name="location"class="form-control" id="location">
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
                          <th>Location</th>
                          <th>Url</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @php $no = 1; @endphp
                        @foreach($participant as $part)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $part->name }}</td>
                          <td>{{ $part->location }}</td>
                          <td>{{ $part->url }}</td>
                          <td>
                            <a href="/participant/{{$part->url}}" type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModal1" >Edit</a href>
                            <a href="/participant/{{$part->url}}/delete" type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#exampleModal2" >Delete</a href>

                            <img class="img-thumbnail " src="{{asset('admin/assets/icon/instagram.png')}}" alt="image" height="20" width="50" />
                            <img class="img-thumbnail " src="{{asset('admin/assets/icon/whatsapp.png')}}" alt="image" height="20" width="50" />
                          </td>
                        </tr>
                        
                        @endforeach

                        
                    </table>
                        <!-- modal edit -->
                          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel1">Participant of Invitation</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form action="participant/create" method="POST" enctype="multipart/form-data"> 
                                        {{csrf_field()}}             
                                            <div class="form-group">
                                                <label for="name">Nama</label>
                                                <input type="text" required name="name"class="form-control" id="name" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text"  required name="location"class="form-control" id="location" value="{{$participant}}">
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
                        <!-- modal edit -->
                        <!-- modal delete -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel2">Participant of Invitation</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <h2>Apakah Anda Yakin Ingin Menghapus?</h2>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- modal delete -->
          
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

@endsection