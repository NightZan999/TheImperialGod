<!doctype html>
<html>
    <head>
        <title>TheImperialGod - Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Get custom SCSS and SASS cuz CSS sucks-->
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <style>
            body {
                background-color: yellow;
            }
        </style>
    </head>
    <body>
        <?php 
        include "partials/navbar.html";
        ?>
        <!--Main jumbotron-->
        <div class="jumbotron">
            <h1>TheImperialGod</h1>
            <p>The best discord bot to help your discord server!</p>
        </div>
        <!--The Content-->
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="mod">
                    <h2>Moderation</h2>
                    <p>TheImperialGod has superior moderation features. These are for server admins and people who want the
                        server to receive raids and more. <br> <br>
                        It also has lock and unlock commands in which modrators can close channels. <br> <br>
                        Its purge command purges upto infinite messages. And even has a command which tells you how many messages
                        have been sent in a channel. <br>
                    </p>
                    <ul>
                        <li>Kick - Kicks users</li>
                        <li>Ban - Bans users</li>
                        <li>Softban - Bans a user and then unbans the user</li>
                        <li>Purge - Mass deletes messages</li>
                        <li>Lock - Locks a channel so that only mods can talk in the channel</li>
                        <li>Unlock - Unlocks a locked channel</li>
                        <li>Mute - Mutes a user</li>
                        <li>Unmute - Unmutes a muted user</li>
                        <li>Setmuterole - Sets a muterole</li>
                        <li>Setdelay / Setslowmode - Sets a slowmode to a <b>custom amount of seconds</b></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <br> <br> <br> <br>
                    <br> <br> <br> <br>
                    <i class="fas fa-hammer fa-10x"></i>
                </div>
            </div>
            <div class="row" id="utils">
                <div class="col-md-6">
                    <br> <br> <br> <br>
                    <br> <br> <br> <br>
                    <i class = "fas fa-lightbulb fa-10x"></i>
                </div>
                <div class="col-md-6">
                    <h2>Utilities</h2>
                    <p>TheImperialGod loves utilities and you and your friends could have a <b>TON</b> of fun!</p>
                    <ol>
                        <li>Coinflip - Flips a coin</li>
                        <li>Random Number - Gives a random number in a range</li>
                        <li>Code - Changes a message into code</li>
                        <li>Guess - Plays a guess game with you</li>
                        <li>Respect - Show your respect for something</li>
                        <li>Poll - Creates a poll</li>
                        <li>Thank - Show your grattitude</li>
                        <li>Reverse - Reverses a message</li>
                        <li>Eightball - Classic eightball</li>
                        <li>Fight - Fight someone, in BETA</li>
                        <li>Wanted - Lmao, can't spoil it!</li>
                    </ol>
                </div>
            </div>
            <br> <br> <br> <br>
            <div class="row" id = "gaws">
                <div class="col-md-6">
                    <h2>Giveaways</h2>
                    <h6>TheImperialGod can host giveaways! </h6>
                    <p>So he will ask you some questions and you will have to give proper answers <br>
                        If you correctly answer the questions regarding the giveaways
                        he will host it in that specific channel, this is in BETA
                        and will be improved in the future. <br>

                        He has outages which means if your giveaway gets disrupted you can simply
                        do imp reroll #channel [msg-id]  <br> <br>

                        Do note that for this, you need to give the embeds message id.
                    </p>

                </div>
                <div class="col-md-6">
                    <br> <br> <br> <br>
                    <i class = "fas fa-gift fa-10x"></i>
                </div>
            </div>
            <br> <br> <br> <br>
            <div class="row" id="economy">
                <div class="col-md-6">
                    <br> <br> <br> <br>

                    <i class = "fas fa-coins fa-10x"></i>
                </div>
                <div class="col-md-6">
                    <h2>Economy</h2>
                    <p>TheImperialGod is an economy bot which has some fun economy. <br>
                        Its economy is still in BETA and will have constant updates
                        join the support server to know more! But it still is there!

                        Anyways it can do plenty of stuff and economy is just for fun, so
                        don't hate!
                    </p>
                </div>
            </div>
            <br> <br> <br> <br>
            <div class="row" id = "misc">
                <div class="col-md-6">
                    <h2>Miscellaneous Commands:</h2>
                    <p>Some commands cannot be categorized in any categories thus made in this category:</p>
                    <ol>
                        <li>Invite - Shows you the invite link to invite the bot</li>
                        <li> Show_toprole - Shows a toprole of a user</li>
                        <li>Passwordgenerator - Generates a random password and sends it to you in DMs</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <br> <br> <br> <br>
                    <i class = "fas fa-question-circle fa-10x"></i>
                </div>
            </div>
            <br> <br><br><br>
            <div class="row" id = "math">
                <div class="col-md-6">
                    <br> <br><br><br>
                    <i class="fas fa-calculator fa-10x"></i>
                </div>
                <div class="col-md-6">
                    <h2>Math Commands</h2>
                    <p>Too lazy to do math and your in need of business or need it in a conversation. Well your in luck since TheImperialGod has
                        mathematic features and that itself is awesome. <br> <br>
                        The bot is a great help in doing it, sadly it does not work with decimals <b>yet.</b>
                    </p>
                </div>
            </div>
            <br> <br> <br> <br>
            <div class="row" id="fun">
                <div class="col-md-6">
                    <h2>Fun Commands</h2>
                    <p>Well how about you do not like math and just wanna have fun and don't care about anything else. <br> <br>
                        Well I recognize these people and provide them with it. Do you like memes? <br> <br>
                    </p>
                    <ul>
                        <li>Dog and some other animals</li>
                        <li>Meme - See some memes</li>
                        <li>Guess and random number are also fun commands</li>
                        <li>Some utils</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <br> <br> <br> <br>
                    <i class="fas fa-dog fa-10x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br> <br> <br> <br>
                    <i class="fas fa-newspaper fa-10x"></i>
                </div>
                <div class="col-md-6" id = "info">
                    <h2> Information Commands</h2>
                    <p>Everyone needs to know things about the server or a user or some alt account and more <b>information.</b>
                        <br> <br> Which is why TheImperialGod has built in information commands to help you get started with things
                    </p>

                    <ul>
                        <li>Userinfo - If a user is suspicious take in all the data you need</li>
                        <li>Channelinfo - BETA, shows you information about the current channel your in!</li>
                        <li>Serverinfo - Shows you all the information you need about the current server your in!</li>
                        <li>Avatar - Shows you the avatar of a person.</li>
                    </ul>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6" id="admin">
                    <h2>Admin  / Owner Commands</h2>
                    <p><b>Note: all these commands require the <u>administrator permission.</u> if you do
                            not have it then these commands will not work.
                        </b></p>
                    <ul>
                        <li>Enableautomod - Enables automoderation for the entire server excluding NSFW channels</li>
                        <li>Disableautomod - Disables automoderation for the entire server</li>
                        <li>Checkautomod - Shows you your current status!</li>
                        <li>Serverinfo - That's an information command which also shows you the automoderation status</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <br> <br> <br> <br>
                    <i class="fas fa-cog fa-10x"></i>
                </div>
            </div>
        </div>

        <br> <br> <br> <br>
        <div class="jumbotron">
            <h2>New Features</h2>
            <p>The bot keeps getting updated, because any bot is boring without updates. <br> Here is what we have in plan for the near future of the bot<br>
                <br> Also note that it is in order. Meaning the first one on the list is the one coming the soonest. <br><br>
                Even made progress bars to show how much of it the Dev team has done.
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6" id = "warn">
                    <h2>Warn Points System</h2>
                    <p>Yes it is official that I AKA NightZan999#0194 am making a <b>warn points system.</b>
                        <br> <br> I have started to work on this and it is going to be about latest in a month. I am
                        using databases and more to track the number of warns. <br> <br>
                        It will have a system in which moderators can warn users and they can check the amount of
                        warns a user has. <br> <br>
                        Additionally we will have a command in which server admins can set a number of warns in which a user
                        gets automatically banned. Example: I set it to 5 and when the bot finds a user with 5 warns it bans the user.
                    </p>
                    <br> <br>
                    <br>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:75%"></div>
                    </div>
                    <br> <br>
                    <i class="fas fa-trophy fa-10x"></i>
                </div>
                <div class="col-md-6" id = "tick">
                    <h2>Tickets to contact Staff - BETA</h2>
                    <p>This is almost esstential for any server to have, just like giveaways and economy this is
                        complex and will take months to prepare, since it has complex stuff like permissions and more.
                        <br> <br>
                        This is going to take time, but I can almost confirm that it will be there!<br> <br>
                        I could easily make the normal stuff, but I can't make it so that admins can take the conversation
                        in a .txt file. That is why, I am working on it, its getting to become big though.
                        <br> <br> Also I have to code it for all servers and not just my own so I need to get better!
                    </p>

                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:50%"></div>
                    </div>
                    <br> <br>
                    <i class="fas fa-clipboard-list fa-10x"></i>
                </div>
            </div>
            <br> <br>
            <br>
            <br> <br>
            <br>
            <div class="row">
                <div class="col-md-6" id = "rr">
                    <h2>Reaction Roles</h2>
                    <p>Yes, the hardest task of all, is coming <b>soon.</b> People usually use bots like Carl Bot
                        and YAGDB-XYZ for reaction roles. My personal favorite is Carl because he has different modes like
                        unique and reversed. <br> <br>
                        We are also getting a web dashboard probably around the same time too! Which means you
                        can customize the bot with a click of a button. <br> <br>
                        I am trying and slowly understanding how to perform complex reaction roles. The
                        amount of complexity it is is almost impossible to understand. But well, if all goes well I should be able
                        to figure this one out. <b>No confirmation that this will come out to the public. It maybe so that
                            I need the server id and that it can only happen when I hard code it. Join the support server for more information</b>
                    </p>
                    <br> <br>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:30%"></div>
                    </div>
                    <br> <br><br> <br>
                    <i class="fas fa-user-tag fa-10x"></i>
                </div>
                <div class="col-md-6" id = "m">
                    <h2>Music | 🎶</h2>
                    <p>The music is going to be awesome. I have already done join and leave commands before so that would
                        be no problem for me at all! The hard part is to play the music which the user asks for! <br> <br>
                        This feature will <b>100% come out at one time or another.</b> <br> <br>
                        Sadly its not as easy as it <b>sounds</b> like! (pun intended). Music will be our top priority after tickets and
                        reaction roles.
                    </p>
                    <br> <br>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:68%"></div>
                    </div>
                    <br> <br><br> <br>
                    <i class="fas fa-music fa-10x"></i>
                </div>
            </div>
        </div>
        <br> <br>
        <!--Customer reviews-->
        <!--Get the jumbotron-->
        <div class="jumbotron">
            <h1>Customer Reviews</h1>
            <p>This shows how other people like our bot! <br>
            They think that TheImperialGod is the perfect bot for your server!
            </p>
        </div>
        <br> <br> <br> <br>
        <!--Text and quotes-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-quote-left fa-7x"></i>
                </div>
                <div class="col-md-4">
                    <h3>Code Congrats</h3>
                    <img src="./assets/code_congo.jpg" alt="Someone congratulating me for coding!">
                    <p>Someone congratulating me for coding TheImperialGod and uploading the code on github!</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-quote-right fa-7x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-quote-left fa-7x"></i>
                </div>
                <div class="col-md-4">
                    <h3>Top.gg Reviews</h3>
                    <p>All the top.gg reviews are found and available on their website in the bot page!
                        <a href="https://top.gg/bot/768695035092271124">Click here</a>
                        to go there! 
                    </p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-quote-right fa-7x"></i>
                </div>
            </div>
        </div>
        <!--Additional scripts-->
        <script src = "js/index.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    </body>
</html>