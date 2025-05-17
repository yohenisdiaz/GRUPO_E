<footer class="app-footer">
  <!--begin::To the end-->
  <div class="float-end d-none d-sm-inline">Anything you want</div>
  <!--end::To the end-->

  <!--begin::Copyright-->
  <strong>
    Copyright &copy; 2025&nbsp;
    <a href="https://adminlte.io" class="text-decoration-none">Group YJAJM LTDA</a>.
  </strong>
  Todos los derechos reservados.
  <!--end::Copyright-->
</footer>

<!-- ========== SCRIPTS NECESARIOS ========== -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap & Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<!-- OverlayScrollbars -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>

<!-- AdminLTE -->
<script src="<?php echo $ruta; ?>dist/js/adminlte.js"></script>

<!-- SortableJS -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>

<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" crossorigin="anonymous"></script>

<!-- DataTables y extensiones -->
<script src="<?php echo $ruta; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $ruta; ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Inicialización de OverlayScrollbars -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sidebarWrapper = document.querySelector('.sidebar-wrapper');
    if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
      OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: {
          theme: 'os-theme-light',
          autoHide: 'leave',
          clickScroll: true,
        },
      });
    }
  });
</script>

<!-- Inicialización de Sortable -->
<script>
  const connectedSortables = document.querySelectorAll('.connectedSortable');
  connectedSortables.forEach((el) => {
    new Sortable(el, {
      group: 'shared',
      handle: '.card-header',
    });
  });

  document.querySelectorAll('.connectedSortable .card-header').forEach((header) => {
    header.style.cursor = 'move';
  });
</script>

<!-- Tu archivo JavaScript específico para la vista -->
<script src="../vistas/codigosjs/categoria.js"></script>
