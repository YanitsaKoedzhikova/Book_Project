Games System

University PHP Frameworks - Laravel project

The site is about games. Here players who dont know what to play can search for a new good game.It has a page with all the games where they have a decsription,creator,genre and release date.It can be searched by game name.The site also has pages about Creators of the games and genres.It can be surched by Creator name and Genre name. If players dont know what genre of the game  he likes in the first page, here is where you can see all genres and their description..The site also has a page, where you can add images of different games. The start up page has a menu with Games, Creators, Genres and Images.At all time it is possible to go back to the star up page, by clicking the button at the bottom of the page, ot just clik on laravel in the navbar.People who have a registration can update, create and delete games,creators and genres,otherwise they can only see the information.






I. Controllers are:

    1.Game Controller    
    2.Creator Controlle
    3.Genre Controller
    4.Image Controller
    5.Search Controller
    6.Controller
    7.Home Controller




II.Models are:


    1.Game:
        --filds to fill in:
            -GameName
            -ReleaseDat
            -Creator
            -Genre
            -Description
	    
	    
    2.Creators:
        --filds to fill in:
            -Creator Name
            -Creating Company
            -Description
	    
	    
	    
    3.Genre:
        --filds to fill in:
            -GenreName
            -Description
	    
	    
    4.Image:
        --fields to fill in:
            -fileName
            -imageDescription
	    
	    
    5.User
       --fields to fill in:
            -name
            -email
            -password
       --hidden fields:
            -password
            -remember_token
	    
	    
	    
	    
	    
	    
	    
III.Views:

    1.auth
       -password
       -email
       -reset 
       -login 
       -register 
       -verify
    
    
    2.houses:    
       -create view: can make a new game filling the fields GamaName, ReleaseDate, Creator and Genre and add the new game in the list of all games;
       -index view: can see all games;
       -edit view: can edit the information about current game;
       -show view: can see information about one game;
       -searsh view: can search a game of all games, by name;
       -it have option to delete a choosen game;
       
       
    3.images:   
       -create view: can add new image and give it a name
       -index view:show the list of all images
       
       
    4.creators:
        -index view: can see all creators;
        -edit view: can edit the information about current creatorl;
        -show view: can see information about one creatorel;
        -create view: can make a new creator filling the fields CreatorName, Creating Company and add the new creator in the list of all creators;
        -search view: can search a creator of all creators by name;
        -it have option to delete a choosen creator;
	
	
	
    5.genres:
       -create view:can create a new genre by filling the fields GenreName and add the new genre in the list of all genres;
       -edit view:  can edit current genre;
       -show view: can see information about one genre;
       -index viwe: can see a list of all genres;
       -search view: can search a genre by name;
       -it have option to delete a choosen genre;
