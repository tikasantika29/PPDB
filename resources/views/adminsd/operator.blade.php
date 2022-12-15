@extends('templates.main_sd')
@section('container')
<div class="conatiner-fluid content-inner mt-n5 py-0">
   <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Informasi Operator</h4>
                </div>
                <div>
                    <a class="btn btn-success btn-sm mb-4" href="{{ url('tambah_operator') }}">
                        <i class="icon">
                            <svg width="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                
                                <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>                                
                                <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>                                
                                <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>                                
                            </svg>                                                                             
                        </i>
                        <span class="item-name">Tambah Operator</span>
                    </a>
                    {{-- <a href="{{ url('tambah_operator') }}" class="btn btn-success btn-sm mb-4">Tambah Operator</a> --}}
             </div>
             </div>
         <div class="table-responsive">
            <table id="datatable" class="table table-striped" data-toggle="data-table">
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>Nama</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  {{-- @foreach ($users as $item)
                  <tr>
                      <td>{{ $loop -> iteration }}</td>
                      <td>{{ $item -> name }}</td>
                      <td>{{ $item -> email }}</td>
                      <td>{{ $item -> role }}</td>
                      <td><div class="flex align-items-center list-user-action">
                        <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ ('tampil_edit') }}">
                           <span class="btn-inner">
                              <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                        </a>
                        <form action="{{ url('users/'.$item->id) }}" method="POST">
                           @method('delete')
                           @csrf
                           <button class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                           <span class="btn-inner">
                              <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                 <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
                           </button>
                        </form>
                     </div></td>
                  </tr>
                  @endforeach --}}
               </tbody>
            </table>
         </div>
         <a href="{{ url('index') }}" class="btn btn-primary btn-sm mb-2 mt-3">Tutup</a>
      </div>
   </div>
      </div>
   </div>
   </div> 
</div>
@include('sweetalert::alert')
</body>
{{-- <script>
   $('.delete').click(function(){
      var userid = $(this).attr('data-id');
      swal({
  title: "Apakah kamu yakin akan menghapus data ini?",
  text: "Jika data terhapus, data tidak bisa kembali lagi dengan id "+userid+"!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   window.location = "/users/"+userid+""
    swal("Data Berhasil Dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak berhasil dihapus!");
  }
});
});
</script> --}}
@endsection