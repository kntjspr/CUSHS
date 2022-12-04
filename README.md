# CUSHS
CUSHS Exam Code Parser written in PHP (Mar 8, 2022). 

The entire code was written in 45 mins (approximately) so expect some spaghetti code.

## Warning:

**Originally intended for demonstration (PoC) purposes.**

https://cushs-testrun.herokuapp.com/


## How it works: 
I always wondered how the codes are being validated so quickly (in milliseconds), whilst a traditional authentication would take at least a few seconds (establishing db connection + decrypting process), my curiosity got ahead of me.

I found out that google forms uses javascript data validation technique in storing exam codes so instead of decrypting codes in the database like a normal password, they are stored in plaintext. All we have to do is to scrape that data to get the codes.

1. Send GET request to the google form url using cURL or other similar techniques.
2. Parse the code using Regex.
