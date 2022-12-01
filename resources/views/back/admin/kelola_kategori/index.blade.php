@extends('layout.back_app')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><a class="text-muted fw-light" href="/admin/dashboard" >Home/</a><a href="/admin/dashboard/kategori">kelola kategori</a></h4>

            <!-- Basic Bootstrap Table -->
            <a class="btn btn-success" href="/admin/dashboard/kategori/create"><i class="fa fa-plus"></i> Tambah </a><br><br>
              <div class="card">
                <h5 class="card-header">Kelola kategori</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>nama kategori</th>
                        <th>Deskripsi</th>
                        <th>logo</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($Kategori as $k => $v) 
                      <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->deskripsi }}</td>
                        <td><img src="{{asset('uploud/kategori/'.$v->icon)}}" width="50px" height="50px" alt=""> 
                        </td>
                        <td>
                          <form action="{{ route('kategori.destroy', $v['id']) }}" method="POST"> 
                            <a href="{{ route('kategori.edit', $v['id']) }}"class="btn btn-sm btn-success">Edit</a> 
                         @csrf 
                         @method('DELETE') 
                           <button type="submit">Delete</button>  
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
@endsection('konten')