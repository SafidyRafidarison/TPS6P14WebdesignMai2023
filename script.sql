Create database intelligence;
alter database intelligence owner to s5;
\c intelligence s5;


Create table auteur(
    idAuteur serial primary key,
    auteur varchar(50),
    picture varchar
);

Create table type(
    idType serial primary key,
    type varchar(30)
);

Create table information(
    idInformation serial primary key,
    idType int references type(idType),
    idAuteur int references auteur(idAuteur),
    date_publication timestamp default now(),
    date_creation timestamp default now(),
    titre varchar,
    contenus text
);

Create table Photos(
    idPhotos serial primary key,
    idInformation int references information(idInformation),
    lien varchar
);

insert into auteur(auteur) values('Thierry Maubant');
insert into type(type) values('Actualite');

insert into information(idType,idAuteur,date_publication,date_creation,titre,contenus) values(1,1,'5-5-2023','5-5-2023','Nouvelle vague d innovations propulsées par l IA pour Microsoft Bing et Edge','Trois mois tout juste après avoir dévoilé les nouveaux Microsoft Bing et Edge, Microsoft a annoncé ce 4 mai une nouvelle vague d innovations propulsées par l’IA pour son moteur de recherche et son navigateur, incluant notamment de nouvelles façons d effectuer des tâches, des résultats plus visuels et une disponibilité élargie de l expérience en open preview.');