<h1><?php echo $header;?></h1>

<p>To avoid pages of information without any rhyme or reason, Nova uses sections to break up relevant information into groups to make the docking form easier to read. Sections, are built on the fly from the database, meaning they can be changed to whatever you want through a simple interface. If you want a section that doesn't have a title, you can accomplish this by setting the section's name to a blank field.</p>

<h3>Permissions</h3>

<p>In order to manage the docking form sections, a user needs to have <kbd>site/dockingform</kbd> permissions.</p>

<h2>Adding a Section</h2>

<p>Clicking the Add Docking Section link will open a pop-up window and let you create a brand new section, including its name and order. Once you've filled out the information, click submit at the section will be added to the database and available to put fields inside.</p>

<h2>Editing a Section</h2>

<p>You can update a section's name and order by clicking on the edit icon in the table on the docking sections management page. You will be given a pop-up window with fields populated with the current data. Change the values to what you want then click Submit and Nova will update the section. If you don't want the section to use a header, simply leave the name field blank.</p>

<h2>Deleting a Section</h2>

<p>If you decide that you don't want one of the sections that comes with Nova or one that you created, you can delete them by clicking on the delete icon in the table on the docking sections management page. You will be presented with a pop-up window verifying that you want to delete the section as well as a dropdown menu. Because sections have fields inside them, you need to select a new section so Nova can move those fields from the section you're deleting to the new section to avoid orphan data in the database. This ensures that you will still have access to fields even if you remove a section. Click Submit and Nova will delete the section and return you to the docking section management page.</p>