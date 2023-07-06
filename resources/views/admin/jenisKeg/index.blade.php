@extends('admin.jeniskeglayout.index')
@section('content')
<div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-library"></i>
            </span> Book
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span> <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
<div class="container">
    <a href="{{ url('/dashboard/book/create')}}" class="btn btn-success" >tambah Buku</a>
      <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
          <thead>
              <tr class=""> 
                  <th>No</th>
                  <th>Jenis Kegiatan</th>
                  
                  <th></th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
          <tr>
                      <td>1</td>
                      <td>ngawi musical</td>
                      <td></td>
                      <td>
              
  <a href="" class="btn btn-primary">show</a>
  <a href="" class="btn btn-warning">Edit</a>
  <form action="" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
  <button type="submit" class="btn btn-danger ">Delete</button>
  </form>
  </td>
                  </tr>
                  
              
          </tbody>
      </table>  

@endsection