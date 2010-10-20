<h1><?php echo $header;?></h1>

<p>Nova includes a maintenance mode that allows system administrators to "turn off" Nova while maintenance is being done on the system, such as updating to a newer version of Nova. When maintenance mode is activated, only users who are flagged as system administrators can log in to the site. All other users are re-directed to a page that notifies them that maintenance mode is active. Some sites though, may want to use a different maintenance page that what comes with Nova by default. Creating your own maintenance page is easy.</p>

<p>To override Nova's default maintenance page, all you need to do is create a file called <samp>maintenance.php</samp> in the <samp>application/views</samp> directory. If Nova finds that file, it will use that file instead of the default page. The maintenance page you create is not bound to the site template, so you can make it a full HTML file with exactly the markup you want. This allows you to create a page that doesn't rely on the template but still can allow you to use PHP if necessary.</p>

<p class="important"><strong>Note:</strong> If you want to use jQuery, you will have to manually call it and any other plugins you may want to use in.</p>