<!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright 2024 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6 pull-right text-end">
                            <p class=" mb-0">Hand crafted & made with<i class="ri-heart-line"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>

    <div class="bottom-space"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--chartist js-->
    <script src="assets/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="assets/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="assets/js/prism/prism.min.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="assets/js/chart/peity-chart/peity.jquery.js"></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--sparkline chart js-->
    <script src="assets/js/chart/sparkline/sparkline.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!--dashboard custom js-->
    <script src="assets/js/dashboard/default.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="assets/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

    <!-- DataTables JS CDN -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Global DataTables & Search Logic for Admin Tables -->
    <script>
        function initAdminDataTable(targetSelector) {
            if (typeof jQuery === "undefined" || !jQuery.fn.DataTable) return;
            
            const selector = targetSelector || "table.table-category, table.all-package, table.table";
            const $tables = jQuery(selector);

            $tables.each(function() {
                const $table = jQuery(this);
                
                // Ensure table has thead
                if ($table.find("thead").length === 0) return;

                // Cleanly destroy previous DataTable instance before checking new rows
                if (jQuery.fn.DataTable.isDataTable($table)) {
                    $table.DataTable().clear().destroy();
                }

                const bodyRows = $table.find("tbody tr");
                if (bodyRows.length === 0 || (bodyRows.length === 1 && bodyRows.text().toLowerCase().includes("no "))) return;

                $table.DataTable({
                    pageLength: 10,
                    lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                    responsive: true,
                    ordering: true,
                    autoWidth: false,
                    destroy: true,
                    language: {
                        search: "Search Data:",
                        searchPlaceholder: "Type to search...",
                        lengthMenu: "Show _MENU_ entries",
                        info: "Showing _START_ to _END_ of _TOTAL_ entries",
                        paginate: {
                            previous: '<i class="fa fa-angle-left"></i>',
                            next: '<i class="fa fa-angle-right"></i>'
                        }
                    }
                });
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Prevent search forms from refreshing on submit
            const searchForms = document.querySelectorAll(".search-form");
            searchForms.forEach(form => {
                form.addEventListener("submit", function (e) {
                    e.preventDefault(); 
                });
            });
        });
    </script>
</body>


<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2026 07:10:37 GMT -->
</html>