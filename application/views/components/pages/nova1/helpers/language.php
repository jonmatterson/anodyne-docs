<h1>Language Helper</h1>

<p>The Language Helper file contains functions that assist in working with language files.</p>

<p class="critical"><strong>Note:</strong> This library is initialized automatically by Nova so there is no need to do it manually.</p>

<p class="important"><strong>Note:</strong> This helper has been extended from the CodeIgniter default. Changes to this library can be found in the <strong>MY_language_helper.php</strong> file in <strong>application/helpers</strong>. Do not edit the CodeIgniter core helper file!</p>

<h2>lang_output</h2>

<p>Outputs text from a language file properly formatted with the parameters passed to the function.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>line</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The language key to print out</td>
	</tr>
	<tr>
		<td class="td col1"><strong>element</strong></td>
		<td class="td col2">p</td>
		<td class="td col3">Any paired HTML element</td>
		<td class="td col4">The type of tag to surround the text with</td>
	</tr>
	<tr>
		<td class="td col1"><strong>class</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any classes to be added to the enclosing tags</td>
	</tr>
	<tr>
		<td class="td col1"><strong>nl2br</strong></td>
		<td class="td col2">TRUE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">Whether or not to convert new lines to HTML break tags</td>
	</tr>
</table>

<h3>Returns</h3>

<p>The string along with any HTML tags and classes.</p>

<h3>Examples</h3>

<pre>echo lang_output('text', 'h1', 'red');

// would produce
&lt;h1 class="red">The text in the $lang['text'] string&lt;/h1>

echo lang_output('text', '');

// would produce
The text in the $lang['text'] string</pre>

<h2>text_output</h2>

<p>Outputs the text string properly formatted with the parameters passed to the function.</p>

<h3>Parameters</h3>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder">
	<tr>
		<th class="blue">Parameter</th>
		<th class="blue">Default Value</th>
		<th class="blue">Options</th>
		<th class="blue">Description</th>
	</tr>
	<tr>
		<td class="td col1"><strong>line</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">The text string to print out</td>
	</tr>
	<tr>
		<td class="td col1"><strong>element</strong></td>
		<td class="td col2">p</td>
		<td class="td col3">Any paired HTML element</td>
		<td class="td col4">The type of tag to surround the text with</td>
	</tr>
	<tr>
		<td class="td col1"><strong>class</strong></td>
		<td class="td col2"><em>None</em></td>
		<td class="td col3"><em>None</em></td>
		<td class="td col4">Any classes to be added to the enclosing tags</td>
	</tr>
	<tr>
		<td class="td col1"><strong>nl2br</strong></td>
		<td class="td col2">TRUE</td>
		<td class="td col3">TRUE/FALSE</td>
		<td class="td col4">Whether or not to convert new lines to HTML break tags</td>
	</tr>
</table>

<h3>Returns</h3>

<p>The string along with any HTML tags and classes.</p>

<h3>Examples</h3>

<pre>echo text_output($header, 'h1', 'page_head');

// would produce
&lt;h1 class="page_head">Welcome to Nova&lt;/h1>

echo text_output('This is some text', 'span');

// would produce
&lt;span>This is some text&lt;/span></pre>