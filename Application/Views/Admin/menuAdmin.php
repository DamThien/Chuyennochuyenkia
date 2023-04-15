<body>

    <nav role='navigation'>
        <ul class="main">
            <li class="dashboard"><a href="adminView.php">Dashboard</a></li>
            <li class="posts">
                <a class="posts_menu" href="#">Quản lý bài viết</a>
                <ul class="posts_menu-item">
                    <li>
                        <a href="#">Danh sách</a>
                    </li>
                    <li>
                        <a href="post.php">Đăng bài</a>
                    </li>
                    <li>
                        <a href="category.php">Danh mục</a>
                    </li>
                </ul>
            </li>
            <li class="users"><a href="#">Quản lý tài khoản</a></li>
        </ul>
    </nav>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>

<script>
    CKEDITOR.replace('post_input');
</script>

</html>