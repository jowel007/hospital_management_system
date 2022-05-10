<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper">
      		<div align="Center" style="padding-top: 100px;">
      			
      			<table>
      				<tr style="background-color: black;">
      					<th style="padding: 10px;">Customer Name</th>
      					<th style="padding: 10px;">Email</th>
      					<th style="padding: 10px;">Phone</th>
      					<th style="padding: 10px;">Doctor Name</th>
      					<th style="padding: 10px;">Date</th>
      					<th style="padding: 10px;">Message</th>
      					<th style="padding: 10px;">Status</th>
      					<th style="padding: 10px;">Approved</th>
      					<th style="padding: 10px;">Cancle</th>
                <th style="padding: 10px;">Send Mail</th>
      				</tr>

      			@foreach($data as $appoint)
      				<tr align="Center" style="background-color: skyblue; color: black;">
      					<td>{{ $appoint->name }}</td>
      					<td>{{ $appoint->email }}</td>
      					<td>{{ $appoint->phone }}</td>
      					<td>{{ $appoint->doctor }}</td>
      					<td>{{ $appoint->date }}</td>
      					<td>{{ $appoint->message }}</td>
      					<td>{{ $appoint->status }}</td>
      					<td> <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a> </td>
      					<td><a class="btn btn-danger" href="{{ url('cancle',$appoint->id) }}">Cancle</a></td>

                <td><a class="btn btn-primary" href="{{ url('emailview',$appoint->id) }}">Send Mail</a></td>

      				</tr>
      			@endforeach

      			</table>	

      		</div>
      </div>

    <!-- container-scroller -->

      @include('admin.script')
      
  </body>
</html>