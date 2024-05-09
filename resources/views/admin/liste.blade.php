@extends('admin.dashboard')
@section('liste')
 <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nom</th>
                        <th>Categorie</th>
                        <th>Date_expiration</th>
                        <th>prix</th>
                        <th>image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Nom</th>
                        <th>Categorie</th>
                        <th>Date_expiration</th>
                        <th>prix</th>
                        <th>image</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach($fruits as $fruit)
                      <tr>
                        <td>{{ $fruit->nom }}</td>
                        <td>{{ $fruit->categorie->origine }}</td>
                        <td>{{ $fruit->date_expiration }}</td>
                        <td>{{ $fruit->prix }}</td>
                        <td><img src="{{ asset($fruit->image) }}" alt="Image du fruit" style="max-width: 100px;"></td>
                        <td><!-- Ajoutez ici vos boutons d'action --></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          
          @endsection