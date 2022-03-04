<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
//Modal Openng
    $().ready(function() {
        $(document).on('click', '.delete', function($e) {
            var id = $(this).attr('data');
            $.ajax({
                url: "{{route('delete')}}",
                type: "get",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal").modal("show");
                    // console.log(data);
                    $(".modal-body").html(data);
                }
            });
        });
    });
// Deleting Data
    $().ready(function() {
        $(document).on('click', '.deleted', function($e) {
            var id = $(this).attr('data-value');
            $.ajax({
                url: "{{route('deleted')}}",
                type: "get",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal").modal("hide");
                    // console.log(data);
                    location.reload();
                }
            });
        });
    });
// Modal Closed
    $(document).on('click', '.closed', function($e) {
        $("#modal").modal("hide");
    });
</script>