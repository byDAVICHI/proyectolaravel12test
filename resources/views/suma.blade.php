{{-- resources/views/suma.blade.php --}}
@extends('layouts.app')

@section('title', 'Sumar 2 Números')

@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-md-6">
    <div class="card shadow-sm">
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Sumar 2 Números</h2>

        <form action="{{ url('/suma') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="num1" class="form-label">Número 1</label>
            <input type="number" name="num1" id="num1" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="num2" class="form-label">Número 2</label>
            <input type="number" name="num2" id="num2" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Sumar</button>
        </form>

        @if(isset($res))
          <div class="alert alert-info text-center mt-4">
            <strong>Resultado:</strong> {{ $res }}
          </div>
        @endif

      </div>
    </div>
  </div>
</div>
@endsection
