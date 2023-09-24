# CUSHS
CUSHS Exam Code Parser written in PHP (Mar 8, 2022). 

The purpose of this github project was to highlight and demonstrate the security vulnerabilities in the exam procedures at CUSHS (CU Senior High School). 
By exploiting these security holes, the tool allowed individuals to obtain exam codes and take the exams at any time, even outside the scheduled timeframe.

It's important to note that the intention behind creating this tool was solely to bring attention to the security issue and notify the appropriate school authorities. The project was not intended for misuse or unauthorized access. Its purpose was to raise awareness about the vulnerabilities present in the exam procedures and prompt necessary action to address and rectify them.

## Warning:

**Originally intended for demonstration (PoC) purposes.**

https://cushs-testrun.herokuapp.com/


## How it works: 
The first step involves sending a GET request to the Google Forms URL using cURL or a similar technique. This action aims to retrieve the necessary data from the form.
Once the data is obtained, the next step is to parse the code using regular expressions (RegEx). Regular expressions are a powerful tool for pattern matching and can be utilized to extract specific information from the retrieved data.


# Update:
To clarify, the proper authorities at CU Senior High School were informed about the security issue related to the GitHub project. Subsequently, they made the decision to change the exam procedures in order to address the issue. As a result, the GitHub project became obsolete and was archived since it was no longer useful under the revised procedures.

