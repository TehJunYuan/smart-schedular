@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Assign Subject List</h3>
                  <a href="{{route('assign_subject.add')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Add Assign Subject</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SL</th>
								<th>Class Name</th>
								<th width="25%">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $value)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$value['student_class']['name']}}</td>
								<td><a href="{{route('assign_subject.edit',$value->class_id)}}" class="btn btn-info">Edit</a>
								<a href="{{route('assign_subject.details',$value->class_id)}}"  class="btn btn-warning">Details</a></td>
							</tr>
                            @endforeach
					
						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>        
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection