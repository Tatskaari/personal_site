---
layout: post
title:  "Crawley Flyfishers Club website round-up"
date:   2014-01-27
categories: cff
author: Jonathan Poole
---
I have been working on <a href="http://cff.poole.uk.to">a website</a> for a local fly-fishing club called Crawley Flyfishers Club. I decided to start working on it when my Dad was talking about how he wanted the site to be modern so the club had a decent face on the internet. The current site is maintained by a 70 year old retired man and is very dated. He has to use dreamweaver to add new news posts which are in the form of PDF files.

I plan to address many of these problems by building a site that looks decent, is consistent in it's design and has features that allow him to update the news posts and add events easily. I have been working on the site, on and off for the better part of a year now and it has come a long way. Newsletters can be posted, edited and deleted using a simple web interface. Calender events can be scheduled and maintained using google calendar. They can then be viewed on the site thanks to googles simple iframe calendar. Images dropped in the image folder appear in the gallery. Clicking on them will make them full screen. Theses are the main things that need to be completed for the site to reach the minimum feature set before it can go live. I have reached them now so it's just a matter of polishing off the site.

There are a few issues that I have with the site in it's current state. The images in the carousel and the gallery will be squashed and distorted if the screen's aspect ratio or the image aspect ratio is extreme. The only way I can think to fix this is through some javascript that set the width or the height to 100% depending on which will fill the div. I also need an easy way to upload images and to have albums of images in the gallery. The gallery could also do with pagination.  

Once that is done, I just need to figure out how to host the site. The site requires PHP which I don't think the current plan allows. Upgrading the plan is still an option as it probably still wont cost that much more. I would like to get full root access to a virtual machine however I don't know if that is necessary. 