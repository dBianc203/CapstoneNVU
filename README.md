# CapstoneNVU

LINK ADDRESS: https://biancfitness.000webhostapp.com/

Capstone Project for NVU. This project is a website that allows users to keep track of their workouts along with keeping track of their BMI

![](ReadMeIMAGES/NavBar.jpg)
This bar will bring bring the user to the part of the page that they click on, so that they dont have to scroll down to whatever part of the page they want to be at. Should have it so that the bar stays on the top of the users screen regardless of what page they are on, and not just the home page.
12/12/2021 - User will have the options to select Home, About Us, Contact Us, Your Workouts, Workout History, Login, and Logout

![](ReadMeIMAGES/BMIpage.jpg)
The first page you'll see when entering the website is the home page, this is where you'll enter all your information. Things like your height,weight, and age will all be taken into consideration when calculating your BMI.

EDIT 11/1/2021 The home page will now allow you to calculate your BMI based on the info given, and then display your BMI at the bottom of the home page. BMI is calculated using the following formula: [[weight (lb) / height (in) / height (in)] x 703] (CDC)
I will also add an indicator of what your BMI means for you and have it change over time (About Adult BMI)
edit 11/15/2021
Added BMI status that displays interpritation based on BMI numbers calculated and the status is determined based on information from the CDC https://www.cdc.gov/healthyweight/assessing/bmi/adult_bmi/index.html
12/12/2021- added indication of what your bmi means for you according to the CDC

EDIT 12/06/2021
Added a login system with PHP that will log the user in if the user has an account in the MySQL database
![](ReadMeIMAGES/Login.jpg)

![](ReadMeIMAGES/WelcomeLogin.jpg)
If the user successfully logins, it will bring them to this page to indicate everything worked out 

![](ReadMeIMAGES/Signup.jpg)
Page that allows user to create a username and password that is inserted into the MySQL database

![](ReadMeIMAGES/AboutUs.jpg)
The about us page is brief, just a generic page that basically explains why this website/project exists and what it's meant to do.

![](ReadMeIMAGES/ContactUs.jpg)
The Contact us page will be used for any user that has questions related to the site, currently there is a form setup to enter your name,email, and subject of what you want to send. The final version will have a full-functional form used to send an email to a certain destination.

EDIT 11/1/2021: Looking for a hosting service so that I can run the php script that will successfully send me an email through the contact form. will update and post link to working link that will run code

EDIT 11/15/2021
Removed form that sends email, currently having issues with hosting site and sending emails (port issue?) May reintroduce in future 

EDIT 11/24/2021
Form has been restored and SUCCESSFULLY sends an email from the messanger *PROOF BELOW*

![](ReadMeIMAGES/EmailTest.jpg)

![](ReadMeIMAGES/YourWorkouts.jpg)
This will be the main part of the website. Here you can enter your workouts and view pastworkouts aswell. Right now, there is nothing but the finished version will have a working system where you can log your exercises.Most of the project work will focus on this part of the website, everything above is more for aesthetics.

![](ReadMeIMAGES/WorkoutHistory.jpg)
11/23/2021 - Displays history of workouts 


![](ReadMeIMAGES/Footer.jpg)
11/26/2021 - Added a footer to the website for navigation
# References
???About Adult BMI.??? Centers for Disease Control and Prevention. Centers for Disease Control and Prevention, August 27, 2021. https://www.cdc.gov/healthyweight/assessing/bmi/adult_bmi/index.html. <br />
???About Child &amp; Teen BMI.??? Centers for Disease Control and Prevention, Centers for Disease Control and Prevention, 17 Mar. 2021, https://www.cdc.gov/healthyweight/assessing/bmi/childrens_bmi/about_childrens_bmi.html#percentile. <br />
Bakken, Stig S??ther. PHP Manual. IUniverse.com, Inc., 2000. <br />
???CDC - Calculating BMI Using the English System - BMI for Age Training Course - DNPAO.??? Centers for Disease Control and Prevention. Centers for Disease Control and Prevention, May 9, 2014. https://www.cdc.gov/nccdphp/dnpao/growthcharts/training/bmiage/page5_2.html. <br />
Infinity. ???How to Create a Mysql Database on 000webhost.??? 000webhost Forum, 13 Nov. 2016, https://www.000webhost.com/forum/t/how-to-create-a-mysql-database-on-000webhost/39142?__cf_chl_jschl_tk__=38bMoPFBVl_zR9bddE0GSyH0kegwLFa3mffqRfLAYvk-1639378602-0-gaNycGzNCuU. <br />
???Window.localStorage - Web Apis: MDN.??? Web APIs | MDN, 14 Sept. 2021, https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage. 
