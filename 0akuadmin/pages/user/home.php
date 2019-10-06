<h1> Dashboard Petugas BKK</h1><hr>
<div class="row">    
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-group fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <div style="font-size : 35px;">
                        <?php
                        $sql = "SELECT * from tbl_member";
                        $query = $koneksi->query($sql);
                        $jmlh = mysqli_num_rows($query);
                        echo $jmlh;
                        ?>
                    </div>
                        <div>Member</div>
                    </div>
                </div>
            </div>
            <a href="?page=member">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-child fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <div style="font-size : 35px;">
                        <?php
                        $sql = "SELECT * from tbl_pelamar";
                        $query = $koneksi->query($sql);
                        $jmlh = mysqli_num_rows($query);
                        echo $jmlh;
                        ?>
                    </div>
                        <div>Pelamar</div>
                    </div>
                </div>
            </div>
            <a href="?page=pelamar">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list-alt fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div style="font-size : 35px;">
                            <?php
                            $sql = "SELECT * from tbl_artikel";
                            $query = $koneksi->query($sql);
                            $jmlh = mysqli_num_rows($query);
                            echo $jmlh;
                            ?>
                        </div>
                        <div>Artikel</div>
                    </div>
                </div>
            </div>
            <a href="?page=artikel">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-envelope-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <div style="font-size : 35px;">
                        <?php
                        $sql = "SELECT * from tbl_pesan";
                        $query = $koneksi->query($sql);
                        $jmlh = mysqli_num_rows($query);
                        echo $jmlh;
                        ?>
                    </div>
                        <div>Pesan Pengunjung</div>
                    </div>
                </div>
            </div>
            <a href="?page=pesan">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>