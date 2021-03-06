<h1>Menu Library</h1>

<p>Nova's Menu library handles building all the menus throughout the system.</p>

<p class="alert alert-danger"><strong>Note:</strong> This library is initialized automatically by the system so there is no need to do it manually.</p>

<h2>$this->menu->build()</h2>

<p>Builds the menus based on the parameters passed to the method.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>type</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">main, sub, adminsub</td>
		<td class="td col4">The type of menu to be built. <strong>Main</strong> is used for the main navigation, <strong>sub</strong> is used for sub navigation in the main and wiki sections, and <strong>adminsub</strong> is used for sub navigation in the admin section.</td>
	</tr>
	<tr>
		<td class="td col1"><strong>category</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3">main, personnel, sim, wiki, acp, site, manage, reports, user, write, messages, character</td>
		<td class="td col4">Determines which items to pull from the database</td>
	</tr>
</table>

<h3>Return</h3>

<p>Returns an unordered list to be put into the template.</p>

<h3>Examples</h3>

<p>To build the main navigation as seen in the main, sim, personnel, search admin and wiki sections, you can use the following code:</p>

<pre>$this->menu->build('main', 'main');</pre>

<p>To build the sub navigation for the sim section, you can use the following code:</p>

<pre>$this->menu->build('sub', 'personnel');</pre>

<p>Finally, admin sub navigation can be build by changing a few parameters. The following example would build the private messages sub navigation menu:</p>

<pre>$this->menu->build('adminsub', 'messages');</pre>