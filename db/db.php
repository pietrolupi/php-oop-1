<?php

$productions = [
  new Movie('Pulp Fiction', 'Vincent Vega and Jules Winnfield are hitmen with a penchant for philosophical discussions. In this ultra-hip, multi-strand crime movie, their storyline is interwoven with those of their boss, gangster Marsellus Wallace.',['Neo-Noir','Pulp'], new Media('img/pulpfiction.jfif', 'Pulp Fiction'),1994, 150),

  new TvSerie('Game Of Thrones', 'Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. Meanwhile, a force is rising after millenniums and threatens the existence of living men.', ['fantasy', 'drama', 'explicit'], new Media('img/got.jpg', 'gameofthrones'), 2011 , 2019, 82, 8),
  
  new Movie('Fight Club', 'A depressed man suffering from insomnia meets a strange soap salesman named Tyler Durden and soon finds himself living in his squalid house after his perfect apartment is destroyed. The two bored men form an underground club with strict rules and fight other men who are fed up with their mundane lives.',['Satirical Novel', 'Thriller'], new Media('img/fightclub.webp', 'Fight Club'),1999,139),

  new TvSerie('The Boys', 'Superheroes are often as popular as celebrities, as influential as politicians, and sometimes even as revered as gods. But thats when theyre using their powers for good. What happens when the heroes go rogue and start abusing their powers?', ['parody', 'action', 'explicit'], new Media('img/TheBoys.jpg', 'theBoys'), 2019, 2023, 36, 3),

  new Movie('American Psycho', 'A wealthy New York City investment banking executive, Patrick Bateman, hides his alternate psychopathic ego from his co-workers and friends as he delves deeper into his violent, hedonistic fantasies.',['Thriller','Comedy', 'Horror'], new Media('img/American_Psycho.png', 'American Psycho'),2000, 101),

  new TvSerie('Better Call Saul', 'Ex-con artist Jimmy McGill turns into a small-time attorney and goes through a series of trials and tragedies, as he transforms into his alter ego Saul Goodman, a morally challenged criminal lawyer.', ['Drama', 'Black Comedy', 'Legal Drama'], new Media('img/saul.jpg', 'BetterCallSaul'), 2018, 2022, 52, 4),

  new Movie('Drive', 'Driver is a skilled Hollywood stuntman who moonlights as a getaway driver for criminals. Though he projects an icy exterior, lately hes been warming up to a pretty neighbor named Irene and her young son, Benicio. When Irenes husband gets out of jail, he enlists Drivers help in a million-dollar heist. The job goes horribly wrong, and Driver must risk his life to protect Irene and Benicio from the vengeful masterminds behind the robbery.',['Neo-Noir','Soundtrack','Cyberpunk Aesthetic'], new Media('img/drive.jfif', 'Drive'), 2011, 100),

  new Movie('Blade Runner 2049', 'In 2049, 30 years after the events of Blade Runner, bioengineered humans known as replicants are slaves. K (short for serial number, KD6-3.7), a Nexus-9 replicant, works for the Los Angeles Police Department (LAPD) as a "blade runner", an officer who hunts and "retires" (kills) rogue replicants.',['Si-Fi'], new Media('img/bladerunner.jpg', 'BladeRunner' ),2017, 163),

  new Movie('The Big Lebowski', 'Jeff The Dude Leboswki is mistaken for Jeffrey Lebowski, who is The Big Lebowski. Which explains why hes roughed up and has his precious rug peed on. In search of recompense, The Dude tracks down his namesake, who offers him a job. His wife has been kidnapped and he needs a reliable bagman. Aided and hindered by his pals Walter Sobchak, a Vietnam vet, and Donny, master of stupidity.',['Comedy'], new Media('img/The-big-lebowski-tracie-ching-poster.webp', 'Lebowski'),1997, 117)
];