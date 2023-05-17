<body>

    <nav role='navigation'>
        <ul class="main">
            <li class="posts">
                <a class="posts_menu" href="#">Quản lý bài viết</a>
                <ul class="posts_menu-item">
                    <li>
                        <a href="listPost.php">Danh sách</a>
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
<script>
    CKEDITOR.replace('post_input', {
        filebrowserBrowseUrl: 'https://example.com/ckfinder/ckfinder.html',
        filebrowserUploadUrl: 'https://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });
    CKEDITOR.replace('post_input1');
   
</script>

</html>