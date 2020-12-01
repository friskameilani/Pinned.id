@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row ml-1" style="margin-bottom:10px;">
                        <div class="col-6 mt-2">
                            <h4><i class="fa fa-user"></i> Profil Saya</h4>
                        </div>
                        <div class="col-6" style="padding-right: 30px;">
                            <a href="{{ url('profile/edit') }}" class="btn btn-primary float-right">Edit Profile</a>
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td width="10">:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>No HP</td>
                                <td>:</td>
                                <td>{{ $user->phone_number }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection