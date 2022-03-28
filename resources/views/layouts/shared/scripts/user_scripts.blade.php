
<script>
    // DataTable here
    $(document).ready(function(){

        //DataTable

        $('#clients').DataTable({
            select: true    
        });

        //Hide Flash message
        setTimeout(function() {
            $('#alert').fadeOut('fast');
        }, 5000);
        
    });
    
</script>