<h1><?php echo $header;?></h1>

<p>There's always a lot of taking about making sure to back up SMS and/or Nova before attempting to update it or upgrade from SMS to Nova, but how do you backup the systems? Creating a backup of either system is pretty straightforward.</p>

<h2>Backing Up SMS</h2>

<p>Before you attempt to upgrade from SMS to Nova, you should create a backup of your SMS system in the event something goes wrong. The last thing you want is to lose data and be out of luck. We can't stress enough the importance of a solid backup.</p>

<p>New to Nova is a step at the start of the upgrade process that attempts to backup your database and store it on the server before doing the upgrade. Unfortunately, the backup process requires a lot of memory so if you have a large database, the backup may not be able to run. A message will notify you whether or not the process ran. In the event it's unable to run, the following steps will help you in backing up your SMS installation.</p>

<h3>The Files</h3>

<p>The first step to creating a solid backup is to save the SMS files off your server to your computer. To do that, you'll need to have an FTP program to connect to the server. Once you've connected to your account with the username, password and location your host gave to you when your account was created, you can download the files. The best way of going about this is to create a folder on your Desktop called <code>sms_backup</code> and to copy all the files directly over to that folder. Make sure you get all the files! Once you have all the files, you can disconnect from the server and close your FTP program.</p>

<h3>The Database</h3>

<p>The database is the most important part of the system. In order to backup your database, you'll need to access phpMyAdmin. On some hosts, you would've been given a direct link to phpMyAdmin and on others, you'll have access to it through cPanel. Once you've logged in to phpMyAdmin, make sure you've selected the database with your SMS tables. You'll know you're in the right place if you see a full list of all the SMS tables. Click on the Export tab across the top of the page.</p>

<p>In the export box, click Select All and make sure the SQL option is selected below. In the Options box to the right, make sure both Structure and Data checkboxes are checked. Finally, click the Save as File checkbox then Go. The system will offer you a download of the SQL database. Save the file to your <code>sms_backup</code> folder on your Desktop.</p>

<h3>Zip It Up</h3>

<p>Now that you have your complete backup, you should zip your backup up into a zip archive and name it <code>sms_backup_{date}</code> where <strong>{date}</strong> is today's date. Make sure you save the zip file in a safe place in case you need to get at it. That's it. You've successfully backed up SMS!</p>

<h2>Backing Up Nova</h2>

<p>Before you attempt to update Nova, you should create a backup of your system in the event something goes wrong. The last thing you want is to lose data and be out of luck. We can't stress enough the importance of a solid backup.</p>

<p>New to Nova is a step at the start of the update process that attempts to backup your database and store it on the server before doing the update. Unfortunately, the backup process requires a lot of memory so if you have a large database, the backup may not be able to run. A message will notify you whether or not the process ran. In the event it's unable to run, the following steps will help you in backing up your Nova installation.</p>

<h3>The Files</h3>

<p>The first step to creating a solid backup is to save the Nova files off your server to your computer. To do that, you'll need to have an FTP program to connect to the server. Once you've connected to your account with the username, password and location your host gave to you when your account was created, you can download the files. The best way of going about this is to create a folder on your Desktop called <code>nova_backup</code> and to copy all the files directly over to that folder. Make sure you get all the files! Once you have all the files, you can disconnect from the server and close your FTP program.</p>

<h3>The Database</h3>

<p>The database is the most important part of the system. In order to backup your database, you'll need to access phpMyAdmin. On some hosts, you would've been given a direct link to phpMyAdmin and on others, you'll have access to it through cPanel. Once you've logged in to phpMyAdmin, make sure you've selected the database with your Nova tables. You'll know you're in the right place if you see a full list of all the Nova tables. Click on the Export tab across the top of the page.</p>

<p>In the export box, click Select All and make sure the SQL option is selected below. In the Options box to the right, make sure both Structure and Data checkboxes are checked. Finally, click the Save as File checkbox then Go. The system will offer you a download of the SQL database. Save the file to your <code>nova_backup</code> folder on your Desktop.</p>

<h3>Zip It Up</h3>

<p>Now that you have your complete backup, you should zip your backup up into a zip archive and name it <code>nova_backup_{date}</code> where <strong>{date}</strong> is today's date. Make sure you save the zip file in a safe place in case you need to get at it. That's it. You've successfully backed up Nova!</p>