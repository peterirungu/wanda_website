<?php
  include 'header.php';
  include 'navigation.php';
?>
<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Digital Farm Shops
                </h1>
            </div>
        </div>
        <!-- /.row -->
            
        <div class="row">
            <div class="col-md-9">
               <!-- Map Column -->
                <div class="col-md-12">
                    <!-- Embedded Google Map -->
                    <div id="map" style="width: 100%; height: 600px;"></div>
                    <script async defer 
                    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCs8TftSacg6u9qan-uOmfeVVTyYa6bXMM&callback=initMap">
                </script>
                </div>
            </div>
            <div class="col-md-3">
               <div class="panel panel-success">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-building"></i> Digital Farm Shops</h4>
                </div>
                <div class="panel-body">
                    <!-- add shops here -->
                    <?php include 'assets/includes/digital_shops.php'; ?>
                </div>
            </div>
            </div>
        </div>
        <!-- /.row -->
        <?php include 'assets/includes/bottom_banner.php'; ?>
        <hr>
    </div>
    <!-- /.container -->
<?php
  include 'footer.php';
?>