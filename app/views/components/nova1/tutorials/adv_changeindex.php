<h1><?php echo $header;?></h1>

<p>Nova is incredibly flexible and allows admins to change the name of the file used to access the system. Changing the index file of the application is pretty straightforward.</p>

<h2>The Scenario</h2>

<p>You are running an RPG called USS Enterprise on your own web space. You decide one day that you'd like to have a splash page that users go to before going to your site, but you don't want to screw around with a .htaccess file.</p>

<h2>The Steps</h2>

<h3>1. Rename the index file</h3>

<p>You can rename the index file to whatever you want provided the file is still a PHP file. In this case, we're going to rename the file to <code>enterprise.php</code> so our splash page can be index.php.</p>

<h3>2. Change the index page variable</h3>

<p>Open <code>application/config/config.php</code> and find the variable <var>$config['index_page']</var>. Now, we're going to change the content in quotes to the name of our file, including the .php extension. In the end, our variable should look like this:</p>

<pre>$config['index_page'] = 'enterprise.php';</pre>

<h3>3. Save and upload</h3>

<p>Save the <code>config.php</code> file and upload it to your server, overwriting the existing one. Next time we navigate to our site, we'll need to use the <code>enterprise.php</code> file instead of index.php. We can now develop our splash page at index.php so that users see that first before they get to our site.</p>