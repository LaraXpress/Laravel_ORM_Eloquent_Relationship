@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Address Information</div>
                <div class="card-body">
                	<table class="table table-bordered">
                		<tr>
                			<th>SL</th>                			
                			<th>Person Name</th>                			                			
                            <th>Email Address</th>                                                        
                            <th>State</th>                                                        
                            <th>Country</th>                                                        
                		</tr>
                		@foreach ($address as $row)                			                		
                		<tr>
                			<td>{{ $row->id }}</td>                			
                            <td>{{ $row->user->name }}</td>                         
                            <td>{{ $row->user->email }}</td>                         
                            <td>{{ $row->state }}</td>                         
                            <td>{{ $row->country }}</td>                         
                		</tr>
                		@endforeach
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
