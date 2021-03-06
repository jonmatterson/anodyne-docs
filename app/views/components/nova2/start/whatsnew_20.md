## New File Structure

One of the biggest reasons for doing Nova 2 was to improve the file structure of Nova. We've heard from people that updating Nova is difficult and time consuming. For a product that promises to "get you back to playing your game" that's unacceptable. We went back to the drawing board with our file structure to make sure updating Nova is dead simple and we think we've nailed it.

When it comes time to update Nova, all you'll need to do is delete the `nova` directory and upload the newer copy. After that, just run the update script from your web browser like you would normally and you're done. No more wading through files and making sure you don't accidentally update a file you shouldn't. In, out and back to your game.

## New Database Configuration Process

Taking cues from SMS, Nova 2 includes a brand new database configuration process. Instead of having to open files up and edit them before starting the Nova 2 install, you'll simply go to the site and if there's no database configuration file, you'll be taken through a simple process that will collect your information and create the file for you. Before the file is created though, Nova will actually try to connect to the database and will let you know right away if something is wrong. We think this new process will make it easier and faster to get your game up and running on Nova 2.

## Refreshed Default Look

After a year and a half with the same default look, Nova 2 has gotten a facelift. Sporting an updated and simpler default interface, Nova 2 leverages HTML5 and CSS3 to a greater degree than previous versions of Nova. The old version of the skin will continue to work, but we felt that given the larger nature of the changes, a refreshed look and feel was appropriate.

## Thresher R2

By far, the majority of our focus has been on Thresher and getting it up to Release 2. There are a ton of improvements to our mini-wiki that will make using it even better than before.

### System Pages

People told us they wanted more control of some of the static content in Thresher and we came up with a solution that does just that. System pages are specialized wiki pages that cannot be deleted but can be edited like any other wiki page. Make the front Thresher page just what you want by editing the system page in the same place you'd edit a normal wiki page. In addition to the main page, we've added system pages for the all categories listing page, individual category page and creating and editing pages.

### Page Restrictions

Have a page that only a few people should be able to get to? In Thresher R1, you were out of luck. In Thresher R2, you can simply set access level restrictions on the page and only those access levels will be able to see them.

### Brand New Category Selection Interface

Let's be honest, a list of checkboxes wasn't much of an interface for selecting categories. Now, a more elegant solution makes it easier to categorize your pages.

### Create Categories On-the-Fly

Another one of the big things users told us they wanted to be able to do was to create categories right from the create/edit page. Now you can. Don't have a category for what you want? Just create it then select it and your page will be using that category. Just getting started with Thresher and don't have any categories yet? Don't worry, Thresher will prompt you to create some categories right on the page.

### User Experience Improvements

We're always looking to make the user experience of our products better than before. In Thresher R2, we've made viewing a wiki page a much better and simpler experience. In addition, we've overhauled the Manage Pages section with a whole new user interface that puts more controls at admins fingertips and allows filtering pages by restrictions, the type of page and more.

### Better Searching

This one is pretty self-explanatory. We've worked out several bugs that existed in the search features for Thresher so that you'll get more accurate search results. In addition, we've brought search front and center on the main page with an option to search the minute you land in Thresher.

## Simplified Character/User Management

One of Nova 1's major features was the separation of users and characters, allowing a single user to control multiple characters. While this was a great feature, the management piece was a bit of a struggle for a lot of admins. It was all-to-easy to deactivate a character but leave the user active or vice versa. To help with this management headache, we've borrowed from Nova 3's planned features to provide a dead-simple way to manage characters and users. If you want to take action on a character (activate, deactivate, make an NPC or make an NPC a playing character), admins will do so now with a series of buttons:

<ul>
	<li><strong>Activating an Inactive Character</strong> &ndash; Only displayed with inactive characters, this button will not only activate an inactive character, but will also give admins the ability to activate the user if they're inactive, make the character the primary character for the user or even assign the character to a completely different user.</li>
	<li><strong>Deactivating an Active Character</strong> &ndash; Only displayed with active characters, this button will deactivate the active character and check the user for any other active characters. If the user doesn't have any other active characters, admins will have an option to deactivate the user right then and there. If the user does have other characters and the one being deactivated is their main character, a dropdown menu will allow admins to set a new main character for that user.</li>
	<li><strong>Making an Active or Inactive Character an NPC</strong> &ndash; Displayed for both active and inactive characters, this button will move an active or inactive character to be an NPC. If the character in question is someone's main character, a dropdown menu will allow admins to set a new main character for that user. The character will continue to be associated with that user even as an NPC unless the admins selects the option to clear the user association. In the event that making an active character an NPC leaves a user without an active character, admins will have the option to deactivate the user as well.</li>
	<li><strong>Making an NPC an Active Character</strong> &ndash; Only displayed for non-playing characters, this button will move an NPC to be an active character. Admins will be able to associate the character with a user or change the user the character is associated with in addition to setting the character to be the primary character. In the event a character is being associated with an inactive user, the option will be given to activate that user.</li>
	<li><strong>Activating a User</strong> &ndash; Only displayed for inactive user accounts, this button will activate an inactive user as well providing admins with the ability to activate any of that user's inactive characters at the same time.</li>
	<li><strong>Deactivating a User</strong> &ndash; Only displayed for active user accounts, this button will deactivate an active user as well as deactivate all of their active characters.</li>
</ul>

## Nested Mission Groups

One of the final additions to Nova 1 was mission groups as a way to pull missions together. After seeing how people are using the feature, we've expanded mission groups to allow them to be nested down one level. This means you can now have groups inside groups. Along with this, we've completely re-written the user interface for viewing mission groups which will give users more information at a glance than before.

## Brand-New Character Selection

On pages where you can select multiple characters (writing a mission post, editing a mission post, writing a private message, etc.), the UI was never that good. Select a user and click a link. Select another user and click a link. It was bulky and quite a pain to maintain. In Nova 2, we've changed the UI to be a lot more friendly. Now, just start typing a character name and the list will filter for you. Click the name and you're done. Want to remove a character from the list? Just click on the X next to their name.

## Updates to Site Messages

One of the biggest complaints about Nova is that it makes adding content more difficult than it needs to be. For us, it's always been a security issue to allow script, audio, video, iframe and object tags in the site messages. There are just too many documented cases of people using those for malicious purposes. Sadly, our focus on security made it more difficult for games to do the things they could do before with SMS. That shouldn't be the case. Because of that, we've relented on this issue and now allow all of the previously disallowed HTML tags in site messages. That means that games can now link to YouTube and Vimeo media without having to use seamless substitution. We think this is a big win for our users, though it does come at a cost. You should make sure you absolutely trust the source of any code you put in to your site messages so there are no security issues.

## Deck Listing Updates

The deck listing page received several much-needed user interface updates for Nova 2.

The first change you'll notice on the deck listing page is the new menu at the top that will let you quickly move from item to item without having to scroll forever. Games that have a lot of decks in their deck listing will find this especially handy.

The second change is that decks are now displayed outside of a table. The previous table-based layout made the page look messy. Without tables, the deck listing flows a little better and makes it significantly easier to read, especially for games with lots of decks and even more content.

## Post Locking

One of the most requested features since SMS 2 was the ability to "lock" a post when someone was working on it so that another user couldn't come in and overwrite the work being done. This was a tricky request and one that took a lot of time to come up with a good solution, but we've done it. Post locking relies on a very simple premise: when you start editing a post, no one else can edit it until you're done.

Of course, it's significantly more complicated than that, but that's the basic idea. When you edit a post, you're granted a 5 minute lock. After 5 minutes, Nova will check to see if you're still editing the post. If you are, it'll renew the lock for another 5 minutes, but if you've walked away and left the page up, it'll auto-save your work and then release the lock. If you go to a post that's locked, you'll see a notification the post is locked and you won't be able to edit anything.

## Top Open Positions

Sometimes, you want to highlight a few open positions to prospective players, but the open positions listing can be daunting, especially if you have a lot of positions open. Now, the top open positions listing makes it easier to nudge prospective players toward the positions you want to fill. To get started, simply update the position you want to highlight and change the Top Open Position option to Yes. The next time you go to the manifest and click on Open Positions, a new section will appear at the top of the manifest that highlights those top open positions.

## Rules

Returning from the ashes of SMS 2, Nova now includes a dedicated rules page that admins can update from Site Messages.

## Bug Fixes

As with any update, we've taken time to fix several nagging issues in Nova, some of which have existed from the very beginning. In all, we've address over a dozen bugs to make your experience with Nova 2 even better than with version 1. Some of the major issues addressed include:

<ul>
	<li>Using seamless substitution with images in the <code>_base_override</code> directory didn't work properly</li>
	<li>When replying to or forwarding private messages, the RE and FWD prefixes would always be added to the subject line instead of just once</li>
	<li>When replying to a private message, the person sending the message would end up on the recipient list and the message would appear in their inbox</li>
	<li>The join form could be submitted without an email address and password</li>
	<li>Users who were deactivated kept their system flags (webmaster, system administrator, game master, etc.)</li>
	<li>Reactivated users didn't have their access role properly set</li>
	<li>Inactive users saw a link to upload images even though they don't have permission to do so</li>
	<li>Users could reset their password without needing a security question</li>
	<li>Open slots for positions always weren't properly updated when a character was deactivated</li>
	<li>Pulsar and Titan didn't always display properly in Internet Explorer 9</li>
	<li>The "Nominated By" line was shown even when there was no nominee (only an issue for people who upgraded from SMS)</li>
	<li>The Enterprise genre file had several issues</li>
	<li>Patched several potential security issues</li>
	<li>Much more...</li>
</ul>