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
                <th style="padding: 10px;">Doctor Name</th>
                <th style="padding: 10px;">Phone</th>
                <th style="padding: 10px;">Speciality</th>
                <th style="padding: 10px;">Room No</th>
                <th style="padding: 10px;">Image</th>
                <th style="padding: 10px;">Delete</th>
                <th style="padding: 10px;">Update</th>
              </tr>

            

            @foreach($data as $doctors)
            <tr  align="Center" style="background-color: skyblue; color: black;">
              <td>{{ $doctors->name }}</td>
              <td>{{ $doctors->phone }}</td>
              <td>{{ $doctors->speciality }}</td>
              <td>{{ $doctors->room }}</td>
              <td><img height="100" width="100" src="doctorimage/{{$doctors->image}}"></td>
              <td> <a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{ url('deletedoctor',$doctors->id) }}">Delete</a> </td>
              <td><a class="btn btn-facebook" href="{{ url('updatedoctor',$doctors->id) }}">Update</a></td>
            </tr>
            @endforeach
            </table>

          </div>
       </div>

    <!-- container-scroller -->

      @include('admin.script')
      
  </body>
</html>