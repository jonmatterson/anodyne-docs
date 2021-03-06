<style type="text/css">
	.strikethrough { text-decoration: line-through; }
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$('input[type=checkbox]').click(function(){
			var strike = $(this).next('span').attr('class');
			
			if (strike == 'strikethrough')
				$(this).next('span').removeClass('strikethrough');
			else
				$(this).next('span').addClass('strikethrough');
		});
	});
</script>

<h1>Updating From 1.2 to 1.2.1</h1>

<h2>Step 1: Turn on Maintenance Mode</h2>

<p>Nova includes a new feature called maintenance mode that allows admins to shut off access to the site to everyone except system administrators. This is especially handy when doing updates, ensuring no one is accessing the database while you're running the update.</p>

<p class="alert alert-info"><strong>Note:</strong> You can turn maintenance mode on from the Site Settings page in the Admin Control Panel.</p>

<h2>Step 2: Update the CodeIgniter Core</h2>

<!--<p>Replace these files and directories in your <samp>core</samp> folder with the new versions:</p>
	
<p class="alert alert-danger"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<ul class="changelog">
	<li class="script"><input type="checkbox" /> <span>core/codeigniter/CodeIgniter.php</span></li>
	<li class="script"><input type="checkbox" /> <span>core/libraries/Router.php</span></li>
</ul>-->

<p><em>There are no updates to the CodeIgniter core in Nova 1.2.1.</em></p>

<h2>Step 3: Update the Nova Core</h2>

<p>Upload these files/directories after deleting the original files (if they exist):</p>

<p class="alert alert-danger"><strong>Warning:</strong> Most Windows FTP clients have serious issues overwriting files on a server. To prevent issues, make sure you delete the file(s) you want to overwrite then upload the new version(s).</p>

<p class="alert alert-info"><strong>Note:</strong> To help you out when uploading files, we've included a checkbox to mark when you've deleted and uploaded a file to your server.</p>

<ul class="changelog">
	<li class="folder"><input type="checkbox" /> <span>application/assets/install</span></li>
	<li class="folder"><input type="checkbox" /> <span>application/assets/update</span></li>
	<li class="script"><input type="checkbox" /> <span>application/controllers/base/ajax_base.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/controllers/base/feed_base.php</span></li>
	<li class="script"><input type="checkbox" /> <span>application/views/_base/admin/pages/manage_positions.php</span></li>
	<li class="script"><input type="checkbox" /> <span>banned.php</span></li>
	<li class="script"><input type="checkbox" /> <span>exclamation.png</span></li>
</ul>

<h2>Step 4: Run the Update Script</h2>

<p>Open your browser and navigate to <samp>http://&lt;yoursite&gt;/index.php/update</samp>. Verify your email address and password to be given access to the page and then click on the link to begin the database update.</p>