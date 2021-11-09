@section('preloader')
    <!-- PRE LOADER-->
    <div class="preloader" >
        <div class="sk-spinner sk-spinner-wordpress">
            <span class="sk-inner-circle"></span>
        </div>
    </div>

<script>
/*-------------------------------------------------------------------------------
PRE LOADER
-------------------------------------------------------------------------------*/
window.addEventListener('load',
    function() {
    $('.preloader').fadeOut(1500); // set duration in brackets
    }, false);
</script>
