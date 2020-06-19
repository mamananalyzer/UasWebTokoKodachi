@extends('layout/base')

@section('title', 'Add Categories')

@section('container')

    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Add Categories</h1>
            <form action="{{ url('/procategorie') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
            else {
                alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                return false;
            }">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="discat">Display Category *</label>
                        <input type="text" class="form-control @error('discat') is-invalid @enderror" id="discat" placeholder="" name="display_kategori" value="{{ old('display_kategori')}}">
                        @error('discat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="valcat">Value Category *</label>
                        <input type="text" class="form-control @error('valcat') is-invalid @enderror" id="valcat" placeholder="" name="kategori" value="{{ old('kategori')}}">
                        @error('valcat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>


            <input type="checkbox" name="checkbox" value="check" id="agree" />
            <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
            <br>
            <br>
            <input class="btn btn-success mb-4" type="submit" name="submit" value="Add Product" />
            </form>
        </div>
      </div>
    </div>
@endsection
