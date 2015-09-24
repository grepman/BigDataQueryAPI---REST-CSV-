# BigDataQueryAPI     REST     O/P- CSV

In this contribution I'm gonna tell you how I generated Real Time Big Data.(Time Series)

> Quick view @ [Demo here ](http://bluearth.in/pykih/polldata) 

<div style="text-align:center"><img src ="http://checkthiscloud.com/admin/github/BigData/1.png" />
<img src ="http://checkthiscloud.com/admin/github/BigData/2.png" />
<img src ="http://checkthiscloud.com/admin/github/BigData/3.png" />
</div>

# So What is Big Data?
Extremely large data sets that may be analysed computationally to reveal patterns, trends, and associations, especially relating to human behaviour and interactions.

# What I need to Generate Big Data?
1. PHP Server
2. Curl
3. Cron

# Which type of Data is it?
Timeseries

# So How can someone Generate Real Time Big Data ?
Explanation :
1. Generate a Curl Script Executing (GET), to scrape the url where you have a PHP Script Running.

2. In the GET PHP Script (The Scrapped One) enter Data to a Data Base, 

3. You can choose the execution speed (In my case I delay my For Loop with 4 Sec. for real time simulation of my data entry every 4 sec's into my dataBase (MySQL))

4. So My PHP Script is iterating 12 times with a delay of 4 sec's in a <b>Minute</b>

5. What needs to be taken care is Put a cron job Inside the Server Shell which runs every <b>1 Minute</b> to simulate real time Situation and avoid Script Overloading in the Server which you are using.

6. Generate as much ITERATION + PUB/SUB Data ID's for Simulation of Real Time Big Data

7. Using this Methodology You can Generate 17,280 real time Data Points from One Node in One day, If you wish you can go further <Max to 9 nodes for 1GB RAM PHP SERVER>






