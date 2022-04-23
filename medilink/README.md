
# Medi-Link

Our client already has a website but it looks awful.


## Installation :


### To work on local 
- Go to your file in your commander

Run the command to install the bedrock plugin
```bash
  composer create-project roots/bedrock
```

Go to the .env file and modify
```bash
DB_NAME='name of your data base'
DB_USER='name of your local environment user'
DB_PASSWORD='if you are on windows it'll probably be '' and if your are on another OS it might be 'root''


WP_ENV='development'
WP_HOME='http://localhost:8000/'
WP_SITEURL="${WP_HOME}/wp"

# Specify optional debug.log path
# WP_DEBUG_LOG='/path/to/debug.log'


# Generate your keys here: https://roots.io/salts.html, take the ENV FORMAT
AUTH_KEY='vY+5#aYCZpXWz07ZKDH@&h7_R%ycmj$#c@-bfS|AGl@!|F.`6apEQc>STzqLE4I'
SECURE_AUTH_KEY='4re7%@ta%@@TD?#!e7$+RgS]Su!Vld=G6NIFEfjeE:B}o2/[iMCex4e.0WvPfs3_'
LOGGED_IN_KEY='9z!FA|<X$uKq^J>p[@XpfS_/QxpMD=F{Jj9}+J;5*[I*jt:UF?WlFhcs+Eoodn@v'
NONCE_KEY='qMuYCxh:Vb6,KoCpJ+_s!*eWO/O%>Ea}.pvK16Aw>i+xqfaz;Ub.Qzvu;2e[P(39'
AUTH_SALT='^%=@YwP,,]|{SWr.K98Wr=NqC8<@6To54t>D>jX+E$fgy(LkZ$#}D5'
SECURE_AUTH_SALT='$TRjJsxolbBKZR^l3izjLdopK.OsE;M44eU!KjK>ABl^pUKW7+KzYo-h+O]Z)sI'
LOGGED_IN_SALT='g4YY@Lf<G>W;+Mqu%rFAB*(H]FaP}af9X4e0Bf_l>goTwqTC$&d:|UivQ|MhW?nU'
NONCE_SALT='4W2$7gIL6CjKP?f/q+/J(N7oUmG#-@T^77TT!:CrE,O?>oTL3&1gUaA4.WNw?%Aw'
```


Run the command to run the local environment
```bash
  php -S localhost:8000 -t bedrock/web
```

## WordPress Things

Add acf to your wordpress extensions
[advanced-custom-fields-pro-20211124T081654Z-001_2.zip](https://github.com/BAP44/medilink/files/8529098/advanced-custom-fields-pro-20211124T081654Z-001_2.zip)

Import on TablePlus/PhpMyAdmin / your sql software the database
[medi-link.zip](https://github.com/BAP44/medilink/files/8529092/medi-link.zip)

Download the medilink's theme file and make it active in your wordpress
[medi-link (1).zip](https://github.com/BAP44/medilink/files/8529056/medi-link.1.zip)

We used Ninja Forms for the contact form & WhatTheFile to know on what file are we while viewing the page


## Author

- [@Pierrooooo](https://github.com/Pierrooooo)
- [@Namacha0908](https://github.com/Namacha0908)
- [@Creepail](https://github.com/Creepail)
- [@Romain]()

