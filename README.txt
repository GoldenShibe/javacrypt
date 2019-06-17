# javacrypt
An easy way to encrypt and decrypt text offline.


How to Use
-
For the inner workings of the code, this application runs on a series of rules set using JavaScript's bitwise operations. 
The more characters that are pressed, the more complex the encryption will be.
First enter the text you want to encrypt; then make a key that is long yet memorable (ex. a cell phone number).
Be sure that you enter in your key after putting in your message.
Then, you'll find your text encrypted in the box below, and all that's left to do is let the recipient know what your key is.
For the decryption process, follow these steps similarly.


Download Option
-
There is an option to download your key as a text file.
The attatchment that does this is ```download.php```, but is not needed for javacrypt to work.
You can automatically generate and download a key that is longer than what you could memorize by selecting the length you desire.
*<-- This feature is not made yet.*


Storage
-
If you ever need to make the size of this application smaller, you can always save the code as a .txt file and compress it into a .zip file. Once you have to use it again, save the program as the file type it originally was.


# Goals
As for the making of this project, it revolves around a few general things:
* Purely offline, client-side code; no dependencies, servers, websites, or need to connect to links to run files
* Keeping as much code in the main file while making the size of it as small as possible
* Prevent bugs and exploits while making usage entirely confidential
* Have all encryption "rules" able to be used more than once without the effect being reversed
