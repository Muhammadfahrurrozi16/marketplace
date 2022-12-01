@extends('layout.back_app')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><a class="text-muted fw-light" href="/admin/dashboard" >Home/</a><a href="/admin/dashboard/user">kelola user</a></h4>

            <!-- Basic Bootstrap Table -->
            <a class="btn btn-success" href="/admin/dashboard/user/create"><i class="fa fa-plus"></i> Tambah </a><br><br>
              <div class="card">
                <h5 class="card-header">Kelola user</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>nama</th>
                        <th>email</th>
                        <th>Role</th>
                        <th>Toko</th>
                        <th>image</th>
                        <th>aktif</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($user as $k => $v) 
                      <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->email }}</td>
                        <td>{{ $v->Role->role }}</td>
                        <td>{{ $v->Toko->nama }}</td>
                        <td><img src="{{ asset('upload/user/'.$v->image) }}" width="50px" height="50px" alt=""> 
                        </td>
                        <td>{{ $v->aktif }}</td>
                        <td>
                          <form action="{{ route('kategori.destroy', $v['id']) }}" method="POST"> 
                            <a href="{{ route('kategori.edit', $v['id']) }}"class="btn btn-sm btn-success">Edit</a> 
                         @csrf 
                         @method('DELETE') 
                           <button type="submit">Delete</button> 
                           </form> 
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
@endsection('konten')
