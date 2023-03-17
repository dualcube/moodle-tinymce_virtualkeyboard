Moodle Virtual Keyboard Plugin [tinymce_virtualkeyboard]
=======================
* Developed by: Team DualCube
* Copyright: (c) 2022 DualCube (https://dualcube.com)
* License: [GNU GENERAL PUBLIC LICENSE](LICENSE)
* Contributors:  DualCube

Description
===========
This is a TinyMCE editor add-on plugin that helps to type without Keyboard. It's add a virtual Keyboard on web-page with bunch of language and functionality.

This is a modification of JavaScript Graphical / Virtual Keyboard Interface by GreyWyvern,
see http://www.greywyvern.com/code/javascript/keyboard


_Added features include:_
* Language: Default Language is “US International”. You can change the language by selecting from this dropdown list.
* Number Pad: This will show the number, basic arithmatic notation and currency symbols.
* Enlarge/Shrink: For zoom In/Out the keyboard.
* Clear Editor: Clear the whole editor text, Image or any others content.
* Close: Close the keyboard.
* Backspace: Delete the character in backward direction of the selected line.
* Enter: Create the new line.
* Right/Left Shift: Toggle the charecter (Small to capital or capital to small) and symbols/numbers.
* Alt: Mathematical symbols and special notation (¼, ß, æ, ø, ¥).
* Space: Single space between character.
* Toggle Dead Key: This will show the dead keys (ù, ò, é, ū).
* Caps: Show the capital letter of the selected language.


Installation
============
1. Login to your moodle site as an “admin user” and follow the steps.
2. Upload the zip package from Site administration > Plugins > Install plugins. or Add files to ["lib/editor/tinymce/plugins/"], check the acknowledgement and install.
3. Go to Administration > Plugins > Text editors > TinyMCE HTML editor > General settings Settings tab and add the keyword “keyboard” in any position of the “editor_tinymce | customtoolbar ” .
4. Go to Administration > Plugins > Text editors > Manage editors and ensure thet “TinyMCE HTML editor (legacy)” is in the top of the ‘Available text editors’ list. 
5. This completes all the steps from the administrator end. Now all users can use virtual keyboard in any editable form successful, which will appearon the top of the editor.

Requirements
------------
* Moodle 2.5.0 - 4.1
* Authorize.net account



Uninstall
=========
* Go to Administration > Plugins > Text editors > TinyMCE HTML editor > General settings and find Virtual keyboard on the Plugins list and uninstall.
