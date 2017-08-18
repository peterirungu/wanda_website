<?php
  include 'header.php';
  include 'navigation.php';
?>
<!-- Page Content -->
    <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb page-header">
                <li><a href="index.php">Home</a>
                </li>
                <li class="active">Network</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Digital Farm Shops
                </h1>
            </div>
        </div>
        <!-- /.row -->
            
        <div class="row">
            <div class="col-md-8">
               <!-- Map Column -->
                <div class="col-md-12">
                    <!-- Embedded Google Map -->
                    <div id="map" style="width: 100%; height: 600px;"></div>
                    <script async defer 
                        src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCfsnjGOi2rj3dWyA9VpQt6fhC7Z5amnDA&callback=initMap">
                    </script>
                      <!--  Google Map load -->
                </div>
            </div>
            <div class="col-md-4">
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