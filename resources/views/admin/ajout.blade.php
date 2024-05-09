@extends('admin.dashboard')
@section('ajout')
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Fruit</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Fruit</li>
              <li class="breadcrumb-item active" aria-current="page">Enregistrez vos fruit</li>
            </ol>
          </div>

          <div class="row justify-content-center"> <!-- Centrer le formulaire -->
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Enregistrez vos fruits</h6>
        </div>
        <div class="card-body">
        <form method="POST" action="{{ route('fruit.saves') }}"  enctype="multipart/form-data">
        @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nom du fruit</label>
              <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Entrer votre fruit" required>
            </div>

            <div class="form-group">
    <label for="exampleInputEmail1">Origine</label>
    <select class="form-control" id="exampleInputPassword1" name="categorie_id" required>
        @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->origine }}</option>
        @endforeach
    </select>
</div>


            <div class="form-group">
                <label for="exampleInputPassword2">Entrer la date d'expiration</label>
                <input type="date" class="form-control" name="date_expiration" id="exampleInputPassword2" placeholder="Entrer la date d'expiration" required>
            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Prix </label>
              <input  class="form-control" name="prix" id="exampleInputPassword1" placeholder="Entrer le prix" required>
            </div>

                <div class="form-group">
        <label for="image">Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Choisissez votre image</label>
        </div>
    </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

             
          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
          </div>

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      
@endsection