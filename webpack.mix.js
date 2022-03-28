const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.styles([
        'resources/admin/plugins/fontawesome-free/css/all.min.css',
        'resources/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'resources/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'resources/admin/plugins/jqvmap/jqvmap.min.css',
        'resources/admin/dist/css/adminlte.min.css',
        'resources/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'resources/admin/plugins/daterangepicker/daterangepicker.css',
        'resources/admin/plugins/summernote/summernote-bs4.css',
        'resources/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
        'resources/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        'resources/admin/plugins/datatables-colreorder/css/colReorder.bootstrap4.min.css',
        'resources/admin/plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css',
        'resources/admin/plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css',
        'resources/admin/plugins/datatables-keytable/css/keyTable.bootstrap4.min.css',
        'resources/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
        'resources/admin/plugins/datatables-rowgroup/css/rowGroup.bootstrap4.min.css',
        'resources/admin/plugins/datatables-rowreorder/css/rowReorder.bootstrap4.min.css',
        'resources/admin/plugins/datatables-scroller/css/scroller.bootstrap4.min.css',
        'resources/admin/plugins/datatables-select/css/select.bootstrap4.min.css',
],'public/css/main.css')
    .scripts([
        'resources/admin/plugins/jquery/jquery.min.js',
        'resources/admin/plugins/jquery-ui/jquery-ui.min.js',
        'resources/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'resources/admin/plugins/chart.js/Chart.min.js',
        'resources/admin/plugins/sparklines/sparkline.js',
        'resources/admin/plugins/jqvmap/jquery.vmap.min.js',
        'resources/admin/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'resources/admin/plugins/jquery-knob/jquery.knob.min.js',
        'resources/admin/plugins/moment/moment.min.js',
        'resources/admin/plugins/daterangepicker/daterangepicker.js',
        'resources/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'resources/admin/plugins/summernote/summernote-bs4.min.js',
        'resources/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'resources/admin/dist/js/adminlte.js',
        'resources/admin/plugins/bootstrap/js/bootstrap.min.js',
        'resources/admin/plugins/datatables/jquery.dataTables.min.js',
        'resources/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
        'resources/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js',
        'resources/admin/plugins/datatables-colreorder/js/dataTables.colReorder.min.js',
        'resources/admin/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js',
        'resources/admin/plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js',
        'resources/admin/plugins/datatables-keytable/js/dataTables.keyTable.min.js',
        'resources/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js',
        'resources/admin/plugins/datatables-rowgroup/js/dataTables.rowGroup.min.js',
        'resources/admin/plugins/datatables-rowreorder/js/dataTables.rowReorder.min.js',
        'resources/admin/plugins/datatables-scroller/js/dataTables.scroller.min.js',
        'resources/admin/plugins/datatables-select/js/dataTables.select.min.js',
], 'public/js/main.js');
