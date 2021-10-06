@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Information</div>
                <div class="card-body">
                	<table class="table table-bordered">                        
                		{{-- <tr>
                			<th>SL</th>
                			<th>Name</th>
                			<th>Email</th>                			                		
                            <th>State</th>                                                  
                            <th>Country</th>                                                  
                		</tr>
                		@foreach ($users->addresses as $user)                			                		
                		<tr>
                			<td>{{ $user->id }}</td>
                			<td>{{ $user->name }}</td>
                			<td>{{ $user->email }}</td>                	
                            <td>{{ $user->address->state }}</td>                                               
                            <td>{{ $user->address->country }}</td>                                            		
                		</tr>
                		@endforeach --}}
                        {{-- @foreach ($users as $user)
                            <p>{{ $user->name }}</p>
                            @foreach ($user->addresses as $address)
                                <p>{{ $address->state }}</p>
                            @endforeach
                        @endforeach --}}
                        @foreach ($users as $user)
                            <p>{{ $user->name }}</p>
                            @foreach ($user->posts as $post)
                                <p>{{ $post->title }}</p>
                            @endforeach
                        @endforeach
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
