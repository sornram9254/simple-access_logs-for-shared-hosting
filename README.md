# simple-access_logs-for-shared-hosting

for wordpress
insert script to : /wp-content/themes/THEME_NAME/header.php
  <?php include("/path/to/script/access_logs.php");
save log to home directory, DO NOT UPLOAD TO /home/USER/public_html/
edit save log location => access_logs.php => line 32
