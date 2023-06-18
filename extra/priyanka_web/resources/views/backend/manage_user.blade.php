<!DOCTYPE html>
<html lang="en">
   
@extends('backend.layout.main')

@section('main_container') 


               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Tables</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        
                     
                     
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Manage Users</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm table table-hover table table-bordered">
                                    <table class="table">
                                       <thead class=thead-dark>
                                          <tr>
                                             <th>#</th>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Age</th>
                                             <th>City</th>
                                             <th>Country</th>
                                             <th>Sex</th>
                                             <th><a>Edit</th>
                                             <th>Delete</th>
                                             
                                          </tr>
                                       </thead>
                                       <tbody>
                                       @foreach($data as $d)
                                          <tr>
                                            
                                             <td>{{$d->id}}</td>
                                             <td>{{$d->cu_fname}}</td>
                                             <td>{{$d->cu_lname}}</td>
                                             <td><a href="#" class="btn btn-primary">Edit</a></td>
                                             <a href="{{url('manage_user/'.$d->id)}}" class="btn btn-danger">Delete</a>
                                            
                                             
                                          </tr>
                                       @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Modal Heading</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
      </div>
     
   </body>
</html>

@endsection