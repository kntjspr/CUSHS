# CUSHS
CUSHS Exam Code Parser written in PHP (Mar 8, 2022).

The entire code was written in 45 mins (approximately) so expect some spaghetti code.

## Warning:

**Originally intended for demonstration (PoC) purposes.**

**The repository was made public temporarily for the goal of demonstrating to capitol university faculty.**

**THIS PRODUCT IS NOT INTENDED FOR USE IN ACTUAL EXAMS.**

https://cushs-testrun.herokuapp.com/


## How it works: 
I'd always wondered how the codes could be confirmed so quickly (in milliseconds), yet decrypting even a few ascii characters would take at least a few seconds, and I'd finally had time to mess around. 

I found out that google forms uses javascript data validation technique in storing exam codes so instead of decrypting codes in the server like a normal password, they are stored in plaintext. All we have to do is to scrape that data to get the exam codes
1. Send request to the google form url using cURL or other techniques.
2. Parse it using Regex.
