@extends('layouts.super')

@section('content')

<div class="container">
  <div class="profile" style="margin-top: 5%">

            <table class="table table-bordered" style="width: 70%; margin-left: 11%">
                <thead class="thead-dark">
                   <!-- <tr>
                    
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Programme</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">email</th>
                    

                    
                  </tr>
                </thead>
              
                <tbody>
                 
                  <tr>
                      <td>{{$user->studID}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->program}}</td>
                      <td>{{$user->mobile}}</td>
                      <td>{{$user->email}}</td>
                      
                  </tr>  -->
                  <tr >
                    <th scope="col">Nama</th>
                    <td>{{$user->name}}</td>
                  </tr>

                  <tr>
                    <th scope="col">Email</th>
                    <td>{{$user->email}}</td>
                  </tr>

                  <tr>
                    <th scope="col">Kata Laluan</th>
                    <td>{{$user->password}}</td>
                  </tr>

                  <tr>
                    <th scope="col">Nama Pengguna</th>
                    <td>{{$user->namaP}}</td>
                  </tr>

                  <tr>
                    <th scope="col">kumpulan</th>
                    <td>{{$user->kumpulan}}</td>
                  </tr>

                  
                </tbody> 
              
              </table>
              <a href="/profile/{{$user->id}}/edit" class= "btn btn-small bg-gradient-primary" style="margin-left: 11%"><i class="fa fa-edit"></i> Kemaskini Profile</a>
  </div>
</div>
              
        
       
@endsection













