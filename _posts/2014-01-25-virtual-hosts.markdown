---
layout: post
title:  "Virtual hosts"
date:   2014-01-25
categories: development update
author: Jonathan Poole
---
I have set up virtual hosts on my server so <a href="http://cff.poole.uk.to">cff.poole.uk.to</a> links to the CFFC website and <a href="http://poole.uk.to">poole.uk.to</a> links to this site. You can still get to individual users site by adding /~username to the end of either URL. To do this I had to enable virtual hosts for apache and add some dns records for them but appart from that it's ralatively painless. Thanks for the help with this <a href="http://graymalk.in/" target="_blank">Simon</a>.

At some point in the future I will have to buy a domain rather than suing a sub-domain of  uk.to but for now it's working quite well. It's a bit slow to update the DNS records when out IP changes however that only happens once every few weeks. 

At some point I should also install debian or netBSD on my server. My server is the same laptop that I used for lectures and the operating system in the same install of arch from last year. I stripped xorg, gnome and a whole bunch of other packages out the other day to make the full system upgrade smaller however I think I may have been a bit heavy handed and removed somethings I need. 
