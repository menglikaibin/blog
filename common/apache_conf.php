<VirtualHost *:80>
    ServerName blogdemo2.com                                     //虚拟主机名
    DocumentRoot "C:/xampp/htdocs/advanced/frontend/web"

    <Directory "C:/xampp/htdocs/advanced/frontend/web">           //虚拟主机根目录
    # use mod_rewrite for pretty URL support
    RewriteEngine on                                              //打开重写引擎
    # If a directory or a file exists, use the request directly   //如果文件不存在就重写
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . index.php

    # use index.php as index file
    DirectoryIndex index.php

    # ...other settings...
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerName admin.blogdemo2.com
    DocumentRoot "C:/xampp/htdocs/advanced/backend/web"

    <Directory "C:/xampp/htdocs/advanced/backend/web">
    # use mod_rewrite for pretty URL support
    RewriteEngine on
    # If a directory or a file exists, use the request directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # Otherwise forward the request to index.php
    RewriteRule . index.php

    # use index.php as index file  //默认时的索引文件
    DirectoryIndex index.php

    # ...other settings...
    </Directory>
</VirtualHost>