@extends('layouts.super')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">

            <div class="card-header">{{ __('Akses') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{action('AksesController@store')}}">
                                    @csrf

                            <div class="form-group row">

                            <label for="kumpulan" class="col-md-3 col-form-label text-md-right">{{ __('Kumpulan Pengguna') }}</label>

                            <div class="col-md-6">
                                <select id="kumpulan" name="kumpulan" class="form-control @error('kumpulan') is-invalid @enderror" required>
                                    {{-- @foreach($roles as $role)
                                    <option value="{{ $role->kod }}">{{ $role->nama }}</option>
                                    @endforeach --}}
                                </select>
                                @error('kumpulan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row mb-0">
                             <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cari') }}
                                </button>
                            </div>

                            </div>
                            <br><br><br>

                            <table class="table table-bordered" style="width: 70%; margin-left: 11%">
                            <thead class="thead-light">
                                <tr>
                                <th colspan="3" style ="text-align: center">Form</th>
                                <th colspan="5" style ="text-align: center">Rekod</th>
                                </tr>

                                <tr>
                                <th scope="col">Bahagian</th>
                                <th scope="col">Kod</th>
                                <th scope="col">Nama</th>

                                <th scope="col">Buka</th>
                                <th scope="col">Cari</th>
                                <th scope="col">Baru</th>
                                <th scope="col">Kemas</th>
                                <th scope="col">Padam</th>
                                </tr>

                                @foreach ($accesses as $access)
                                <tr>
                                    <td text-align="left">{{ $access->data->bahagian }}</td>
                                    <td text-align="left">{{ $access->data->kod }}</td>
                                    <td text-align="left">{{ $access->data->nama }}</td>
                                    @foreach ($access->permission as $permission)
                                        <td text-align="center"><input type="checkbox" name="{{ $permission->permission_name }}" {{ $permission->is_active ? 'checked' : ''}}>{{ $permission->permission_name }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </thead>
                            </table>
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
@endsection
