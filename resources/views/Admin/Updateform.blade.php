@extends('Admin.layout.headerfooterdashboard')
@section("content")
<div class="main-content">
    <div class="row">
</div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Drag & Drop Row Table</h4>
          <div class="card-header-action">
            <form>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped" id="sortable-table">
              <thead>
                <tr>
                  <th class="text-center">
                    <i class="fas fa-th"></i>
                  </th>
                  <th>Movie_Title</th>
                  <th>Movie_Category</th>
                  <th>Movie Image</th>
                  <th>Due Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
@foreach ($product as $product)

@endforeach
                <tr>
                  <td>
                    <div class="sort-handler">
                      <i class="fas fa-th"></i>
                    </div>
                  </td>
                  <td>{{ $product->Movie_Title}}</td>
                  <td class="align-middle">
                   {{ $product->Movie_Category }}
                  </td>
                  <td>
                    <img alt="image" src="assets/assets/img/users/user-1.png" class="rounded-circle" width="35"
                      data-toggle="tooltip" title="Rizal Fakhri">

                  </td>
                  <td>{{ $product->created_at }}</td>
                  <td>
                   <div class="btn btn-primary">Edit</div>
                  </td>
                  <td><a href="#" class="btn btn-primary">Detail</a></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
