<!-- CIERRE CONTAINER-->
</div>
<!-- INICIO FOOTER-->
<div class="footerF">
    <p class="margenDelFooter">©1998-2018 ZTE Corporation - ZTE Colombia. All rights reserved</p>
</div>

<script>
    var click = true;
    var clickreportes = true
    var user_in_session = <?php echo json_encode($this->session->userdata()); ?>;
    var base_url = "<?= base_url(); ?>";
    var formato_fecha = new Date();
    const meses_anual = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var fecha_actual = formato_fecha.getDate() + " de " + meses_anual[formato_fecha.getMonth()] + " de " + formato_fecha.getFullYear();
    function w3_open() {
        $('#mySidebar').show(200);
    }
    function w3_close() {
        $('#mySidebar').hide(200);
        click = false;
<?php if ($this->session->userdata('role') == 'lider'): ?>
            abrir_reportes();
            clickreportes = false;
            abrirOcerrarReportesNormales();
<?php endif ?>

    }

</script>
<script type="text/javascript"> var baseurl = "<?php echo base_url(); ?>";</script>

<!--************************************************* NO TOUCH     DON'T TOCAR ************************************************* -->
<?php if ($this->uri->segment(1) == 'Vm' && $this->uri->segment(2) == 'index') : ?>
    <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/js/actividad_vm.js?v=" . validarEnProduccion()) ?>"></script>
<?php endif ?>


<script src="<?= base_url("assets/plugins/validate/validate.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/validate/validate.js") ?>"></script>

<script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.min.js") ?>"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

<!-- Gestion de usuarios -->
<script src="<?= base_url("assets/js/gestion_usuarios.js") ?>"></script>
<script src="<?= base_url("assets/js/eventos_gestion_usuarios.js") ?>"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<!-- **********************************************datatables *********************************************-->
<script src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables/js/dataTables.bootstrap.js?v=1.0') ?>"></script>

<!-- ********************************************** SWEET ALERT 2 *********************************************-->
<script src="<?= base_url("assets/plugins/sweetalert2/sweetalert2.all.js") ?>"></script>
<!-- ********************************************** HELPER FUNCVIONES GLOBALES *********************************************-->
<script src="<?= base_url("assets/js/modules/helper.js?v=" . validarEnProduccion()) ?>"></script>
<script src="<?= base_url("assets/js/modules/configuracion_user.js?v=" . validarEnProduccion()) ?>"></script>


<!-- <script type="text/javascript">
    $.post(base_url + 'Temp/getLastDateTemp', {}, function(data) {
        const hour = JSON.parse(data);
        $('#hora_actualizacion').append('<h6 class="h6-il">última actualización </h6>' + hour);
    });
</script> -->



<!--**********************************************FIN NO TOUCH   END DON'T TOCAR********************************************** -->



<!-- <?php if ($this->session->userdata('role') == 'lider'): ?>

<?php endif ?> -->


<!-- **********************************************datatables plus (excel ... ) *********************************************-->
<?php if ($this->uri->segment(1) == 'Mannagement' && !$this->uri->segment(2)): ?>
    <script src="<?= base_url('assets/js/modules/comoVamos/graficas.js'); ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(2) == 'allTickets'): ?>
    <script src="<?= base_url('assets/js/modules/all_tickets.js'); ?>"></script>
<?php endif ?>

<?php if ($this->uri->segment(1) == 'Migrar_data'): ?>
    <script src="<?= base_url('assets/js/modules/loadExcel/migrar_data.js'); ?>"></script>
<?php endif ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<?php if ($this->uri->segment(2) == 'reporte_bitacoras' && $this->session->userdata('role') == 'lider'): ?>
    <script src="<?= base_url("assets/js/modules/reporte_bitacoras.js?v=" . validarEnProduccion()) ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.buttons.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/jszip.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/pdfmake.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/vfs_fonts.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.html5.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/buttons.print.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("assets/plugins/datatables/js/dataTables.select.min.js") ?>"></script>
<?php endif ?>

<?php if ($this->session->userdata('role') == 'lider'): ?>
    <script>

        function abrir_reportes() {
            if (click) {
                $('#exportar_reportes').css({'background': '#084C6F',
                    'color': 'white'
                });
                $('#reportesExport').show(200);
                clickreportes = false;
                abrirOcerrarReportesNormales();
                click = false;
            } else {
                $('#exportar_reportes').css({'background': 'white',
                    'color': '#084C6F'
                });
                $('#reportesExport').hide(200);
                click = true;
            }
            // $('#ReportesMain').hide(200);
        }
        function abrirOcerrarReportesNormales() {
            if (clickreportes) {
                $('#menuReportes').css({'background': '#084C6F',
                    'color': 'white'
                });
                $('#ReportesMain').show(200);
                clickreportes = false;
                click = false;
                abrir_reportes();
            } else {
                $('#menuReportes').css({'background': 'white',
                    'color': '#084C6F'
                });
                $('#ReportesMain').hide(200);
                clickreportes = true;
            }
            // $('#reportesExport').hide(200);
        }
        $('#menuReportes').click(abrirOcerrarReportesNormales)


    </script>
<?php endif ?>


<!-- COLVIs PARA MOSTRAR U OCULTAR COLUMNAS -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script> -->

<?php if ($this->uri->segment(1) == 'Welcome' && $this->uri->segment(2) == 'showUsers'): ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/ConfigTableUsers.js'); ?>"></script>
<?php endif ?>

</body>
</html>
