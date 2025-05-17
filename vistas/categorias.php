<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <?php
    require_once "header.php";
  ?>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php
        require_once "nav.php";
      ?>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./categorias.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="<?php echo $ruta; ?>dist/assets/img/Logo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Group YJAJM LTDA</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <?php
          require_once "main.php";
        ?>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
      <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="box-title">Categoría <button class="btn btn-success" id="botonagregar"
                                        onclick="mostrarFormulario(true)"><i class="fa fa-plus-circle"></i>
                                        Agregar</button>
                                </h1>
                                <div class="box-tools pull-right">
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <!-- centro -->
                            <div class="panel-body table-responsive" id="listadoRegistros">
                                <table id="tablalistado"
                                    class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                        <th>Opciones</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <th>Opciones</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="card-body" id="formularioRegistros">
                                <form name="formulario" id="formulario" method="POST">
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label>nombre</label>
                                                <input type="hidden" name="idcategoria" id="idcategoria">
                                                <input type="text" class="form-control" name="nombre" id="nombre"
                                                    placeholder="escribir nombre" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>descripcion</label>
                                                <input type="text" class="form-control" name="descripcion"
                                                    id="descripcion" placeholder="escribir descripcion" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-primary" type="submit" id="botonGuardar"><i
                                                class="fa fa-save"></i> Guardar</button>

                                        <button class="btn btn-danger" onclick="cancelarFormulario()" type="button"><i
                                                class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                            <!--Fin centro -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php
        require_once "footer.php";
      ?>
      <!--end::Footer-->
    </div>

    <script type="text/javascript" src="../vistas/codigosjs/categoria.js"></script>
    <!--end::Script-->
    <!--end::App Wrapper-->
  </body>
  <!--end::Body-->
</html>


