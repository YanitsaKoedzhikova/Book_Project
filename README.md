Games System

University PHP Frameworks - Laravel project

I. Controllers are
    Game Controller
    Creator Controller
    Genre Controller
    Image Controller
    Search Controller
    Controller
    Home Controller

II.Models are:
    1.Game:
        --filds to fill in:
            -GameName
            -ReleaseDat
            -Creator
            -Genre
    2.Creators:
        --filds to fill in:
            -Creator Name
            -Creating Company
    3.Genre:
        --filds to fill in:
            -GenreName
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
    1.auth -password - email - reset -login -register -verify
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
