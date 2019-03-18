

<li>
    <a data-toggle="collapse" href="#tablesExamples">
        <!-- <i class="material-icons">grid_on</i> -->
        <p> QUẢN LÝ TÀI KHOẢN
            <b class="caret"></b>
        </p>
    </a>
    <div class="collapse" id="tablesExamples">
        <ul class="nav">
            <?php if($_SESSION['cap_do']!=1){ ?>
            <li>
                <a href="./tables/regular.html">
                    <span class="sidebar-mini"> CN </span>
                    <span class="sidebar-normal"> Cá nhân </span>
                </a>
            </li>
            <li>
                <a href="./tables/extended.html">
                    <span class="sidebar-mini"> KH </span>
                    <span class="sidebar-normal"> Khách hàng </span>
                </a>
            </li>
            <li>
                <a href="tai_khoan/xem_admin.php">
                    <span class="sidebar-mini"> AD </span>
                    <span class="sidebar-normal"> Admin </span>
                </a>
            <?php } 
            else{
            ?>
            <li>
                <a href="./tables/regular.html">
                    <span class="sidebar-mini"> CN </span>
                    <span class="sidebar-normal"> Cá nhân </span>
                </a>
            </li>
            <li>
                <a href="./tables/extended.html">
                    <span class="sidebar-mini"> KH </span>
                    <span class="sidebar-normal"> Khách hàng </span>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
</li>
