
------------------------------------------------------------------------------
  PHP ContactMe v1.0 
------------------------------------------------------------------------------

Freelance Web Developer -  PHP, Perl and Javascript programming
Web:  www.stevedawson.com
Written by Steve Dawson

After unzipping the contactme.zip file you should have the following files:

contact.htm             - Contains the form to be filled in
contact_.php           - Sends the emails
thankyou.htm          - The than you page
readme.txt              - This one your reading now!

-------------------------------------------------------------------------------
  OVERVIEW
-------------------------------------------------------------------------------
The purpose of this script is to allow a visitor to your website to fill in a
form on your website and you will receive the information they have
typed in, in an email. The person who filled in the form will be sent a
curtesy email informing them you have received their enquiry and
will deal with it as soon as you can. The emails sent out can be easily
customised to suit your needs.

FEATURES:

 - Javascript error checking, the required details must be filled in before
    the form can be sent.

 - The form can only be submitted once. This is to prevent a user constantly
   hitting the 'Send Email' button.

 -  Easily customisable. Enter you own text in the sent emails (SEE BELOW)

 - Curtesy email sent to the user who filled in the form

 - After sending the emails, the user will be directed to a 'Thankyou' page.
   Customise the one supplied or if you do not want a thank you page 
   forward them to any website address.


-------------------------------------------------------------------------------
  INSTALLATION
-------------------------------------------------------------------------------
If all the files are in the same directory, then you only need to edit the
file contact_.php

contact.htm
This file is the form that is displayed for the user to fill in the details to
recommend your website. Edit the file to match the look and feel of your
website but leave the FORM variables as is.

contact_.php
This file is the guts of the script. Its job is to catch the details in the form
format them and send out the emails. The file is well documented and
should be easy to configure. To change the text in the emails, simply type
in what you want to say!.
The following requires changing in contact_.php for the script to work

$SendToEmail = " ";                      ## Your Email Address
$YourWebsiteURL = " ";                 ## Your Website URL 
$YourName = " ";                         ## Your Name or Company Name
$yoursubject = " ";                       ## The Email Subject Line
$ThankyouURL = " ";                    ## Thankyou page direct   
$EmailFooter = " ";                      ##  The Email sigature

In the file contact_.php it is well documented so you should not have any problems.
Change the details in the page to your own so you receive the emails

thankyou.htm
Edit this file as you want, it is a static page just to say thanks for using
recommend feature of the website. It is always nice when you submit
a form on the net that someone has the curtesy to inform you that
everything went OK.

All other changes to be made for custimisation are documented in the
contact_.php file. Use a text editor to do the changes.

============================================

If you would like to use PHP ContactMe as a pop-up window as I have done in
the demo, available online at www.stevedawson.com then you will have to
follow the two simple steps below:

STEP ONE:
Copy and paste the code below in between the <HEAD></HEAD> tags
of the page the link will be on.

<SCRIPT LANGUAGE="JavaScript"><!-- Begin
function ContactMe(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "',
'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,
width=550,height=500,left = 50,top = 50');");
}
// End --></SCRIPT>

STEP TWO:
Copy and paste the code below into the page wherever you want the
link to appear. You can change the text 'Contact Me' to say
what every you want.

<A HREF="javascript:ContactMe('contact.htm')">Contact Me</A>

Now, when you click on the link, a new window will open with the size
width=550,height=500. These can be changed by modify the Javascript
in the code in the <HEAD></HEAD> tags in your page.
-------------------------------------------------------------------------------
  HAVING PROBLEMS?
-------------------------------------------------------------------------------
If you are having any problems with this script, make sure you have got
PHP installed on your server!. If not, change to a decent Web Hosting
company like www.4squarehosts.com

If you would like this script seemlessly integrated within your websites
current design. I offer an installation service for a one off fee of £25.
Please contact me via the web at www.stevedawson.com with your
requirements. Or if you would like a custom form of any description
including secure order forms, autoresponse forms, etc. please contact me.

Comments and suggestions are more than welcome.

That's it, have fun with PHP ContactMe
and an email would be appreciated for websites that make use this script.

-------------------------------------------------------------------------------
THIS SCRIPT IS AS IS. UNDER NO CIRCUMSTANCES CAN I BE HELD
RESPONSIBLE FOR ANYTHING TO DO WITH THIS SCRIPT OR ANYTHING
ELSE THAT HAPPENS IN THIS WORLD.

**** For more free scripts visit www.stevedawson.com ****
