# firetracer

firetracer is a project for trace the forest fire around the world.

firetracer is at it begins, the fires detected are located in France for the moment.

Host 000webhost.com (or cheapest)
code : PHP

## features

- posts
- grafs
- datas
- api (embed)
- gifts (buymeacoffee.com)

## firetracer Embed API

People can include datas from firetracer with the iframes - on each data/article there is a button to copy the integration html code.

Here the squeleton of a firetracer embed API iframe : 
<iframe src="https://firetracer.io/embed.php?rcs=[resource_type]&id=[resource_id]" width="100%" height="300" name="[resource_name] - firetracer" sandbox=""></iframe>

With : 
- resource_type : datas / article
- resource_id : integer / primary key
- resource_name : name of the resource (e.g "Fires number")
- width + height can be update by the user
- N.B : if rcs=datas&id=0 => include all the datas

Terms of use of firetracer embed API :
- the user can include all type of data (datas and articles).
- the user must put a link to the data on firetracer.io (as if to cite his sources). This link must be a referring link.
- the user can't use the firetracer Embed API to damage the integrity of the service or the reputation of firetracer, its contributors or sponsors.
