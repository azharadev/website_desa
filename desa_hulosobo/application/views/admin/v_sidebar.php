<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <li class="active">
                <a href="<?php echo base_url() . 'admin/dashboard' ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url() . 'admin/pengguna' ?>">
                    <i class="fa fa-users"></i> <span>Pengguna</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url() . 'admin/penduduk' ?>">
                    <i class="fa fa-graduation-cap"></i> <span>Data Penduduk</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Berita</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List Berita</a></li>
                    <li><a href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
                    <li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i> Kategori</a></li>
                </ul>
            </li>

            <!-- <li>
                <a href="<?php echo base_url() . 'admin/agenda' ?>">
                    <i class="fa fa-calendar"></i> <span>Agenda</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li> -->
            <!-- <li>
                <a href="<?php echo base_url() . 'admin/laporan' ?>">
                    <i class="fa fa-volume-up"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li> -->
            <li>
                <a href="<?php echo base_url() . 'admin/files' ?>">
                    <i class="fa fa-download"></i> <span>Download</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-camera"></i>
                    <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() . 'admin/album' ?>"><i class="fa fa-clone"></i> Album</a></li>
                    <li><a href="<?php echo base_url() . 'admin/galeri' ?>"><i class="fa fa-picture-o"></i> Photos</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Surat</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url() . 'admin/inbox' ?>">
                            <i class="fa fa-envelope"></i> <span>Inbox Surat</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
                            </span>
                        </a>
                    </li>

                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>