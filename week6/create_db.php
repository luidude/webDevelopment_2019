<?php

/**
 * Go here to create database
 * http://localhost:8888/phpMyAdmin/?lang=en
 * 
 * 1. Click on Databases Tab
 * 2. Under "create database" fill in form with 'php_crud'
 * 3. Click create button
 * Congrats you have created a database!
 * It should be listed in left hand navigation list in PhpMyAdmin.
 */


require_once "./databaseConn.php";

$dropTable1 = "DROP TABLE IF EXISTS php_crud.users";

$dropTable2 = "DROP TABLE IF EXISTS php_crud.blog_posts";

$dropTable3 = "DROP TABLE IF EXISTS php_crud.omments";

$dropTable4 = "DROP TABLE IF EXISTS php_crud.views";

$result = $connect->query($dropTable1);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}

$result = $connect->query($dropTable2);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}
$result = $connect->query($dropTable3);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}
$result = $connect->query($dropTable4);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}

$users_table = "CREATE TABLE IF NOT EXISTS php_crud.users
(
    id SMALLINT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    active INT DEFAULT 0 NOT NULL,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    PRIMARY KEY (id)
);";

$result = $connect->query($users_table);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "users table created" . $result ."</br>";
}

$blogPostTable = "CREATE TABLE IF NOT EXISTS php_crud.blog_posts
(
    id SMALLINT NOT NULL AUTO_INCREMENT,
    MESSAGE VARCHAR(5000) NOT NULL,
    subject VARCHAR(128) NOT NULL,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    username VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);";

$result = $connect->query($blogPostTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "blogPostTable table created" . $result ."</br>";
}

$commentsTable = "CREATE TABLE IF NOT EXISTS php_crud.comments
(
    id SMALLINT NOT NULL AUTO_INCREMENT,
    blog_post_id SMALLINT NOT NULL,
    MESSAGE VARCHAR(140) NOT NULL,
    username VARCHAR(100) NOT NULL,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
    PRIMARY KEY (id)
);
";

//
$result = $connect->query($commentsTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "commentsTable table created" . $result ."</br>";
}

$viewsTable = "CREATE TABLE IF NOT EXISTS php_crud.views
(
    id SMALLINT NOT NULL AUTO_INCREMENT,
    device_type VARCHAR(256),
    ip_address VARCHAR(15),
    username VARCHAR(100) NOT NULL,
    created_date DATETIME NOT NULL,
    comment_id SMALLINT NOT NULL,
    PRIMARY KEY (id)
);
";

$result = $connect->query($viewsTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "viewsTable table created" . $result ."</br>";
}





$seedData = "
INSERT INTO php_crud.users (id, first_name, last_name, username, active) VALUES (1, 'John', 'Doe', 'jd1', 1);
INSERT INTO php_crud.users (id, first_name, last_name, username, active) VALUES (2, 'Jane', 'Doe', 'jd2', 1);
INSERT INTO php_crud.users (id, first_name, last_name, username, active) VALUES (3, 'Luis', 'Cornejo', 'lui', 1);

INSERT INTO php_crud.blog_posts (id, message, subject, created_date, username) VALUES (1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae leo sodales ante ornare tincidunt. Vivamus rhoncus tellus nunc, vel egestas erat pharetra ut. Etiam ante justo, viverra a tempus vel, hendrerit sit amet sapien. Aenean efficitur venenatis sapien viverra volutpat. Integer ipsum enim, pharetra sed pulvinar placerat, ultricies sit amet lectus. Aliquam vel semper augue. Praesent ut metus vitae velit tempor vulputate. Integer ornare massa quis ipsum eleifend, vitae mollis est elementum. Nam porttitor condimentum nulla, a blandit orci facilisis nec. Nunc risus mauris, ullamcorper id interdum eu, ultricies sit amet purus. Quisque interdum varius dolor, in dictum magna aliquam sed. Vestibulum cursus rhoncus nunc ac aliquet. Sed vitae volutpat magna. In id lectus odio. Maecenas urna ex, congue vitae magna eu, consequat pulvinar mi. Sed commodo tellus sed mauris posuere pretium.', 'My first Blog Post', '2019-10-03 23:32:01', 'lui');
INSERT INTO php_crud.blog_posts (id, message, subject, created_date, username) VALUES (2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae leo sodales ante ornare tincidunt. Vivamus rhoncus tellus nunc, vel egestas erat pharetra ut. Etiam ante justo, viverra a tempus vel, hendrerit sit amet sapien. Aenean efficitur venenatis sapien viverra volutpat. Integer ipsum enim, pharetra sed pulvinar placerat, ultricies sit amet lectus. Aliquam vel semper augue. Praesent ut metus vitae velit tempor vulputate. Integer ornare massa quis ipsum eleifend, vitae mollis est elementum. Nam porttitor condimentum nulla, a blandit orci facilisis nec. Nunc risus mauris, ullamcorper id interdum eu, ultricies sit amet purus. Quisque interdum varius dolor, in dictum magna aliquam sed. Vestibulum cursus rhoncus nunc ac aliquet. Sed vitae volutpat magna. In id lectus odio. Maecenas urna ex, congue vitae magna eu, consequat pulvinar mi. Sed commodo tellus sed mauris posuere pretium.', 'Another Blog Post', '2019-10-03 23:33:41', 'lui');
INSERT INTO php_crud.blog_posts (id, message, subject, created_date, username) VALUES (3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae leo sodales ante ornare tincidunt. Vivamus rhoncus tellus nunc, vel egestas erat pharetra ut. Etiam ante justo, viverra a tempus vel, hendrerit sit amet sapien. Aenean efficitur venenatis sapien viverra volutpat. Integer ipsum enim, pharetra sed pulvinar placerat, ultricies sit amet lectus. Aliquam vel semper augue. Praesent ut metus vitae velit tempor vulputate. Integer ornare massa quis ipsum eleifend, vitae mollis est elementum. Nam porttitor condimentum nulla, a blandit orci facilisis nec. Nunc risus mauris, ullamcorper id interdum eu, ultricies sit amet purus. Quisque interdum varius dolor, in dictum magna aliquam sed. Vestibulum cursus rhoncus nunc ac aliquet. Sed vitae volutpat magna. In id lectus odio. Maecenas urna ex, congue vitae magna eu, consequat pulvinar mi. Sed commodo tellus sed mauris posuere pretium.', 'My Blog Post', '2019-10-03 23:33:48', 'lui');
INSERT INTO php_crud.blog_posts (id, message, subject, created_date, username) VALUES (4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae leo sodales ante ornare tincidunt. Vivamus rhoncus tellus nunc, vel egestas erat pharetra ut. Etiam ante justo, viverra a tempus vel, hendrerit sit amet sapien. Aenean efficitur venenatis sapien viverra volutpat. Integer ipsum enim, pharetra sed pulvinar placerat, ultricies sit amet lectus. Aliquam vel semper augue. Praesent ut metus vitae velit tempor vulputate. Integer ornare massa quis ipsum eleifend, vitae mollis est elementum. Nam porttitor condimentum nulla, a blandit orci facilisis nec. Nunc risus mauris, ullamcorper id interdum eu, ultricies sit amet purus. Quisque interdum varius dolor, in dictum magna aliquam sed. Vestibulum cursus rhoncus nunc ac aliquet. Sed vitae volutpat magna. In id lectus odio. Maecenas urna ex, congue vitae magna eu, consequat pulvinar mi. Sed commodo tellus sed mauris posuere pretium.', 'My Blog Post', '2019-10-03 23:35:04', 'jd1');
INSERT INTO php_crud.blog_posts (id, message, subject, created_date, username) VALUES (5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae leo sodales ante ornare tincidunt. Vivamus rhoncus tellus nunc, vel egestas erat pharetra ut. Etiam ante justo, viverra a tempus vel, hendrerit sit amet sapien. Aenean efficitur venenatis sapien viverra volutpat. Integer ipsum enim, pharetra sed pulvinar placerat, ultricies sit amet lectus. Aliquam vel semper augue. Praesent ut metus vitae velit tempor vulputate. Integer ornare massa quis ipsum eleifend, vitae mollis est elementum. Nam porttitor condimentum nulla, a blandit orci facilisis nec. Nunc risus mauris, ullamcorper id interdum eu, ultricies sit amet purus. Quisque interdum varius dolor, in dictum magna aliquam sed. Vestibulum cursus rhoncus nunc ac aliquet. Sed vitae volutpat magna. In id lectus odio. Maecenas urna ex, congue vitae magna eu, consequat pulvinar mi. Sed commodo tellus sed mauris posuere pretium.', 'Some Blog Post', '2019-10-03 23:35:15', 'jd1');

INSERT INTO php_crud.comments (id, blog_post_id, message, username, created_date) VALUES (1, 1, 'Awesome post', 'lui', '2019-10-03 23:21:53');
INSERT INTO php_crud.comments (id, blog_post_id, message, username, created_date) VALUES (2, 1, 'Awesome post', 'jd1', '2019-10-03 23:22:34');

INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (1, 'ipad', '1.0.0.0', 'lui', '2019-10-03 00:00:00', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (2, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 00:00:00', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (3, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 23:18:12', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (4, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 23:18:19', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (5, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:23', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (6, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 23:18:23', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (7, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:24', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (8, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:24', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (9, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 23:18:24', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (10, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:24', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (11, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:24', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (12, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:24', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (13, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:24', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (14, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 23:18:25', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (15, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:25', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (16, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:25', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (17, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:25', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (18, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 23:18:25', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (19, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:25', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (20, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:26', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (21, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:26', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (22, 'ipad', '1.0.0.0', 'jd1', '2019-10-03 23:18:26', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (23, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:26', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (24, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:26', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (25, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:26', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (26, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:26', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (27, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:27', 1);
INSERT INTO php_crud.views (id, device_type, ip_address, username, created_date, comment_id) VALUES (28, 'ipad', '1.0.0.0', 'lui', '2019-10-03 23:18:27', 1);
";


echo 'add users'."</br>";
$result = $connect->multi_query($seedData);
echo $result ."</br>";
