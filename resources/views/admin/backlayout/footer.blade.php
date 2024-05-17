<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('backhand/js/script.js')}}"></script>  
<x-alert/>
@stack('js')
<script>
     function deletedata(e){
        alert(e);
     }

    $('.file').dropify({
        imgFileExtensions: ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'webp']
    });
</script>
</body>
</html>