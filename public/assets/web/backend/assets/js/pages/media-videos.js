$( document ).ready(function() {
        
    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('admin.list.videos') }}",
      columns: [
          {data: 'id', name: 'id'},
          {data: 'title', name: 'title'},
          {data: 'description', name: 'description'},
          {data: 'action', name: 'action', orderable: false, searchable: false},
      ]
  });
      
});