@extends('layouts.app2')

@section('content')
<br>
<br>
<br>
<br>
<div style="padding-left:35%; color:#e0e0eb; font-family:Helvetica;">
    <h2>ADD NEW HOTEL</h2>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif                                 

    <div class="container-fluid"  style="padding-left:20%;">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{route('hotels.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <form class="form-horizontal">
                            <div class="card-body">

                            <!-- <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>Admin name:</strong></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="admin_id">
                                        @foreach($admins as $admin)
                                        @if(auth()->user()->email == $admin->email)
                                            <option value="{{ $admin->id }}">{{ $admin->nom}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> -->


                            <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>Hotel Image :</strong></label>
                            <div class="col-sm-9">
                              <input type="file" name="image" class="form-control">
                             @error('image')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                         </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>Select Photos:</strong></label>
                            <div class="col-sm-9">
                            <input type="file" class="default" class="btn btn-theme04 fileupload-exists"  class="form-control" name="filename[]" accept="image/*"  multiple>
                            </div>
                            </div>


                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>Hotel name:</strong></label>
                                        <div class="col-sm-9">
                                        <input type="text" name="nom" class="form-control" placeholder="Nom hotel">
                                        </div>
                                    </div>

                          <div class="form-group row">
                          <strong class="col-sm-3 text-right control-label col-form-label">City :</strong>
                          <div class="col-sm-9">
                          <select class="form-control" name="ville" aria-invalid="false">
                          <option value="">--Select--</option>
                          <option value="Casablanca">Casablanca</option>
                          <option value="Fés">Fés</option>
                          <option value="Tanger">Tanger</option>
                          <option value="Marrakech">Marrakech</option
                          ><option value="Salé">Salé</option>
                          <option value="Meknés">Meknés</option
                          ><option value="Rabat">Rabat</option>
                          <option value="Oujda">Oujda</option>
                          <option value="Kénitra">Kénitra</option>
                          <option value="Agadir">Agadir</option>
                          <option value="tetouan">tetouan</option>
                          <option value="El jadida">El jadida</option
                          ><option value="Berkane">Berkane</option>
                          <option value="Safi">Safi</option>
                          <option value="Mohammédia">Mohammédia</option>
                          <option value="Khouribga">Khouribga</option>
                          <option value="Al-Hoceima">Al-Hoceima</option>
                          <option value="Bouznika">Bouznika</option>
                          <option value="Chefchaouen">Chefchaouen</option>
                          <option value="Essaouira">Essaouira </option>
                          <option value="Guelmim">Guelmim</option>
                          <option value="Ifrane">Ifrane</option>
                          <option value="Laâyoune">Laâyoune </option>
                          <option value="Martil">Martil</option>
                          <option value="Mediouna">Mediouna</option>
                          <option value="Saïdia">Saïdia</option>
                          <option value="Tan-Tan">Tan-Tan</option>
                          <option value="Taza">Taza</option>
                          <option value="Youssoufia">Youssoufia</option>
                          <option value="asilah">asilah</option>
                          </select>                             
                      </div>
                        </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>Address :</strong></label>
                                        <div class="col-sm-9">
                                            <textarea  name="adresse" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>Phone:</strong></label>
                                        <div class="col-sm-9">
                                            <input type="tel" name="tel" class="form-control" placeholder="Telephone">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>ZIP code:</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="code_postale" class="form-control" placeholder="Code Postale">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                          <strong class="col-sm-3 text-right control-label col-form-label">Category :</strong>
                          <div class="col-sm-9">
                          <select class="form-control" name="categorie" aria-invalid="false">
                          <option value="">--Select--</option>
                          <!-- Hébergement économique -->
                          <option value="1*">Hôtel 1*(Budget accommodation)</option> 
                          <!--Hébergement milieu de gamme  -->
                          <option value="2*">Hôtel 2*(Mid-range accommodation)</option> 
                          <!-- Hébergement milieu de gamme-supérieur -->
                          <option value="3*">Hôtel 3*(Mid-range-to-upper accommodation)</option> 
                          <!-- Hébergement haut de gamme -->
                          <option value="4*">Hôtel 4*(High-end accommodation)</option>  
                          <!-- Hébergement très haut de gamme -->
                          <option value="5*">Hôtel 5*(Very high-end accommodation)</option> 
                          </select>
                      </div>
                        </div>

                                   <div class="form-group row">
                                    <strong class="col-sm-3 text-right control-label col-form-label">
                                        Status :
                                    </strong>
                                    <div class="col-sm-9">
                                    <select class="form-control" name="etat">
                                    <option selected="selected" value="">--Select--</option>
                                    <option value="available">available</option>
                                    <option value="unavailable">unavailable</option>
                                    </select>
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"><strong>Description :</strong></label>
                                        <div class="col-sm-9">
                                            <textarea  name="description" class="form-control" rows="9"></textarea>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <a class="btn btn-primary" href="{{route('hotels.index')}}">Back</a>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

@endsection




