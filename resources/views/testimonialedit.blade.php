<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">


            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

     

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                     Testimonial EDIT
                    </div>
                    <div class="text-center mb-5">
                        <a href="/testimonialedit/create" class="btn btn-warning mt-5">Create</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover"
                                id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID:</th>
                                        <th>Titre:</th>
                                        <th>Description:</th>
                                        <th>Action:</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimonial)
                                    <tr class="odd gradeX">
                                        <td>{{$testimonial->id}}</td>
                                      <td></td>
                                        <td class="center">{{$testimonial->name}}</td>
                                        <td class="">{{$testimonial->desc}}
                                         
                                            <a href="/testimonialedit/{{$testimonial->id}}/edit" class="btn btn-success">Update</a>
                                            <a href="/testimonialedit/{{$testimonial->id}}/destroy" class="btn btn-danger">Delete</a></td>
                                      
                                    
                                    </tr>
                                    <tr class="odd gradeX">
                                       
                                        
                                    
                                    </tr>
                                    
                     
                                </tbody>
                                @endforeach
                            </table>
                   
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <!-- /. ROW  -->
    
        <!-- /. ROW  -->
    </div>

</div>