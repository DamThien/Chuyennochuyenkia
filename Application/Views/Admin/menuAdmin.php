
    <nav role='navigation'>
        <ul class="main">
            <li class="posts">
                <a class="posts_menu" href="#">Quản lý bài viết</a>
                <ul class="posts_menu-item">
                    <li>
                        <a href="<?= Redirect("Admin") ?>">Danh sách</a>
                    </li>
                    <li>
                        <a href="<?= Redirect("PostView") ?>">Đăng bài</a>
                    </li>
                    <li>
                        <a href="<?= Redirect("AdminCategory") ?>">Danh mục</a>
                    </li>
                </ul>
            </li>
            <li class="users"><a href="#">Quản lý tài khoản</a></li>
        </ul>
    </nav>