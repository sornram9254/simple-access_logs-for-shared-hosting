# custom access log for shared hosting

for wordpress<br />
insert script to : /wp-content/themes/THEME_NAME/header.php<br />
  <?php include("/path/to/script/access_logs.php");<hr />
save log to home directory, DO NOT SAVE TO /home/USER/public_html/<br />
edit save log location => access_logs.php => line 31<hr />
![alt tag](https://raw.githubusercontent.com/sornram9254/simple-access_logs-for-shared-hosting/master/screenshot.png)
