---
layout: post
title:  "Acorn keyboard"
date:   2014-01-26
categories: interests
author: Jonathan Poole
---
I was in my house-mate’s room for whatever reason and I decided to pick up his acorn electron and play with it. Being a mechanical keyboard nut, I wanted to know what type of switches were in there. We decided to remove the key caps and look at the switch. The switch looks and feels similar to a topre switch however it's too old for that. I can't seem to be able to find any information on what the switches actually are though. Regardless, the keys are a delight to type on so we wanted to turn it into a usable keyboard.
{% include image.html url="http://files.poole.uk.to/BBC%20micro%20keyboard%20project/The%20switch.jpg" description="The switches" %}

Simon has a arduino Leonardo lying around which has a tiny micro controller on it that allows it to connect to a desktop. This thing can be re-purposed to allow it to appear as a HID compliment keyboard so it can be used on any operating system without custom drivers.
{% include image.html url="http://files.poole.uk.to/BBC%20micro%20keyboard%20project/22%20pin%20connector.jpg" description="The IO pins" %} 

The keyboard uses a matrix to send key codes to the main board. It has 22 pins of which one is 5v+ and one is 0v. Caps-lock and break also have their own special pins. There are 4 rows and 14 columns which make up the other18 pins. The arduino has 14 digital IO pins and 6 analogue pins which gives us the required number of IO pins to make this work. It's like it was meant to be!
{% include image.html url="http://files.poole.uk.to/BBC%20micro%20keyboard%20project/wired%20up.jpg" description="All wired up" %}

Hooking it up the the arduino didn't take long thanks to the service manual which explains how the matrix works. All that is left to do it write some code to get it speaking to the computer. How hard can that be? 
