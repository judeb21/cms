<script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js')}} "></script>
<script src="{{ asset('admin/assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js')}} "></script>
<script src="{{ asset('admin/assets/vendor/popper.min.js')}} "></script>
<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js ')}}"></script>
<script src="{{ asset('assets/vendor/lobicard/js/lobicard.js')}} "></script>
<script class="include " type="text/javascript " src="{{ asset('admin/assets/vendor/jquery.dcjqaccordion.2.7.js')}} "></script>

<!-- Data table Js Plugin -->
<script src="{{asset('admin/assets/vendor/data-tables/jquery.dataTables.min.js')}} "></script>
<script src="{{asset('admin/assets/vendor/data-tables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Dsweet alert Js Plugin -->
<script src="{{asset('admin/assets/js/sweetalert2.min.js')}}"></script>
<!--init scripts-->
<script src="{{asset('admin/assets/js/scripts.min.js')}} "></script>
<script src="{{asset('admin/assets/js/custom.js')}} "></script>
<script>
$(document).ready(function() {
    $('#bs4-table').DataTable({
        
        "ordering": false,
        "info": false
        
    });
});
</script>
<script>
$('.Delete').on('click', function() {
    swal({
        title: 'Are you sure?',
        text: "This category cant be reverted back!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            swal(
                'Deleted!',
                'This Post has been deleted.',
                'success'
                )
            }
        })
    });
    </script>
    <script>
    $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
    
    @section('footer')
    @show