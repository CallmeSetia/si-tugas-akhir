@extends('layout.app')
@section('title', 'Halaman Dashboard Mahasiswa')

@section('main')
    {{--  isi props dfengan data user yang dilempar ke halaman ini  --}}
    <x-navbar :nama="$user['nama']"/>
{{--    <x-sidebarmahasiswa/>--}}
    <h1>ini hal mahasiswa</h1>

@endsection
