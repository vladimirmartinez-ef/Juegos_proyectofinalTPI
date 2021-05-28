<?php

use Illuminate\Database\Seeder;
use App\Clasificacion;
use App\Clave;
use App\Juego;
use App\JuegoClave;

class JuegoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clasificaciones
        $clasificacion = new Clasificacion();
        $clasificacion->clasificacion = "accion";
        $clasificacion->save();

        $clasificacion = new Clasificacion();
        $clasificacion->clasificacion = "RPG";
        $clasificacion->save();

        $clasificacion = new Clasificacion();
        $clasificacion->clasificacion = "carreras";
        $clasificacion->save();

        $clasificacion = new Clasificacion();
        $clasificacion->clasificacion = "estrategia";
        $clasificacion->save();

        $clasificacion = new Clasificacion();
        $clasificacion->clasificacion = "aventura";
        $clasificacion->save();

        // claves 40
        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhajv1s";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bssdydhjvkvascnsjhbasknvskbhajv2";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsvddgddyvwvbhajv3s";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "weffwfscvjhascnsjhbasknvskbhaj4dd";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "ttebjhascnsjhbasknvskbhajvs5sdvdv";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshj6nkscrgegvvvvejhbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjh7fdbascregernvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "egrgdscvjhascn8bfsjhbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscv9jaffrbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhasc10dbnsjhbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "b11shjnkscvjhascnsjhbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhaj12s";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhaj13";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhaj14hd";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhajvs15dee";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhaj16tys";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhaj17pp";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhaj18fg";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhajv19hs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvskbhaj20ubhs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbasknvs21vdfvugcs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjhbas22knvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhas23cnsjhbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvjhascnsjh24hdusbhhvbhdbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bjhsvkssvk25vhsdbjsdvbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "ajaavjnvjn26aaacnsjhbasknvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "njfbdbdfoindblfdbdmbdfbombkbndnbod27";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "njfbdbdfoindblfdbdmbd28bjkmluvgb";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "njfbdbdfoindbl29tvbhnjklhjnk";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "fdbdmbdfbombkbndnbod30vghjkklghbjn";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "fvghjkascnsj31hbasknvskbhajvsghhjb";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "nsjhbasknvskbhajv32yuybhjhhhbhs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "njfbdbdfoindbfghjmk33gbhjkhjnkidd";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "njfbdbdfcvjhascnsjhbas34knvskbhajvs";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "njfbdbdfoind35cvujknjvubyehv";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "lfdbdmbdfbombkbndnbod36cvubkubjh";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "bshjnkscvj37hascnsjhbasknkjnkvbh";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "dfbombkbndnbod38yvbnjknkinjkfss";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "nkscvjhascnsjhbaskn39vbhjknkbbvh";
        $claves->save();

        $claves = new Clave();
        $claves->clave = "frbjbrhdvhjbvjvjsvkn40vghsbvhjj";
        $claves->save();

        //JUEGOS DE AVENTURA
        $juegos = new Juego();
        $juegos->nombrejuego = "IT TAKES TWO";
        $juegos->descripcion ="It Takes Two es una innovadora aventura de acción cooperativa a cargo de Hazelight Studios y Electronic Arts, en la que una mecánica muy diversa y una narrativa emotiva se entrelazan en un fantástico viaje. Embárcate en la aventura más loca de tu vida con It Takes Two, un juego cooperativo multigénero. Invita a un amigo a acompañarte gratis con el Pase de amigo en una emotiva historia repleta de desafíos deliciosamente rompedores";
        $juegos->requerimientos = "SO Windows 8.1 64 bits o Windows 10 64 bits Procesador: Intel core i3-2100T 2.5 GHz, AMD FX 6100 Memoria: 8 GB de RAM Gráficos: NVIDIA GeForce GTX 660 2 GB, AMD R7 260x 2 GB";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 5;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Hazelight Studios y Electronic Arts";
        $juegos->precio = 39.99;
        $juegos->image="https://i2.wp.com/www.gameoverla.com/wp-content/uploads/2021/03/It-Takes-Two.jpg?fit=860%2C641&ssl=1";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "SUBNAUTICA";
        $juegos->descripcion ="Subnautica, desarrollado y distribuido por Unknown Worlds, es una aventura de mundo abierto ambientado en las profundidades oceánicas en el que podremos construir y gestionar nuestro propio mundo submarino. Crea equipamiento, pilota submarinos y burla a la fauna salvaje para explorar exuberantes arrecifes de coral, volcanes y sistemas de cuevas.";
        $juegos->requerimientos = "SO Windows Vista SP2 64-bits Procesador: Intel Haswell 2.5 GHz Memoria: 4 GB de RAM Gráficos: Intel HD 4600 DirectX: Versión 11 Almacenamiento: 20 GB de espacio disponible";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 5;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Unknown Worlds";
        $juegos->precio = 29.99;
        $juegos->image="https://image.api.playstation.com/vulcan/img/rnd/202009/3006/C76j3lYg8BNBWJRSYtI2ONbo.png";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "RiMe";
        $juegos->descripcion ="SRiME es una aventura de acción desarrollada por Tequila Works. Deberemos ayudar a un niño a superar multitud de peligros en forma de arriesgadas plataformas y criaturas malignas dentro de una isla de luminosa atmósfera mediterránea. Una isla inexplorada se abre ante ti. Explora el hermoso y duro mundo de RiME. Tu ingenio, tu voluntad de superación y un zorro guía serán tus únicas ayudas a la hora de explorar la isla, alcanzar la cima de la torre y desentrañar sus secretos mejor guardados";
        $juegos->requerimientos = "SO Windows 7 64-bits Procesador: Intel Core i5 2310 2.9 GHz / AMD FX-6300 Memoria: 4 GB de RAM Gráficos: GTX 550 Ti 1 GB / Radeon 6950 1 GB Almacenamiento: 7400 MB de espacio disponible";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 5;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Tequila Works";
        $juegos->precio = 29.99;
        $juegos->image="https://www.lavanguardia.com/files/image_449_220/uploads/2019/05/24/5fa52bf7eab79.jpeg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "NIGHT IN THE WOODS";
        $juegos->descripcion ="Night in the Woods, desarrollado y distribuido por Infinite Fall para PC y PlayStation 4, es una divertida aventura de plataformas 2D protagonizada por unos simpáticos animales plasmada en la pantalla como si de una película de animación se tratara.";
        $juegos->requerimientos = "SO Windows 7 64-bits Procesador: Intel Core i5 2310 2.9 GHz / AMD FX-6300 Memoria: 4 GB de RAM Gráficos: GTX 550 Ti 1 GB / Radeon 6950 1 GB Almacenamiento: 7400 MB de espacio disponible";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 5;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Infinite Fall";
        $juegos->precio = 24.08;
        $juegos->image="https://as01.epimg.net/meristation/imagenes/2018/07/02/game_cover/1530502655_502655_019919_gameplatform.jpg";
        $juegos->save();

        //JUEGOS DE CARRERA
        $juegos = new Juego();
        $juegos->nombrejuego = "DIRT 5";
        $juegos->descripcion ="Es una nueva entrega de la famosa saga de conducción y rallies a cargo de Codemasters para PC, PlayStation 4, Xbox One, PlayStation 5, Xbox Series X y Stadia. La experiencia todoterreno más audaz de todos los tiempos, con un modo Carrera plagado de estrellas, pantalla dividida para cuatro jugadores, innovadores modos en línea, editor de diseños distintivos y mucho más. Abre camino en circuitos mundiales de grava, hielo, nieve y arena, con vehículos que abarcan desde los emblemáticos coches de rallies hasta camionetas e iconos de GT.";
        $juegos->requerimientos = "Sistema Operativo: Windows 10 (64-Bit),Procesador: AMD FX 4300 / Intel Core i3 2130, Memoria: 8 GB de RAM, Gráficos: AMD RX 480 (DirectX12 Graphics Card) / NVIDIA GTX 970, DirectX: Versión 12, Red:Conexión de banda ancha a Internet, Almacenamiento: 60 GB de espacio disponible, Tarjeta de sonido: DirectX Compatible.";
        $juegos->sistema = "windows";
        $juegos->idclasificacion = 3;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Codemasters";
        $juegos->precio = 84.00;
        $juegos->image = "https://cdn-products.eneba.com/resized-products/ABl-o90RlpFaUBdw0Mu2IGA6RJj0b3N9DvoNn0lv7Aw_350x200_1x-0.jpeg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "Monster Truck Championship";
        $juegos->descripcion ="Monster Truck Championship es un videojuego de conducción a cargo de Teyon y Nacon para PC, PlayStation 4, Xbox One y Switch. Una experiencia de carreras de motor única y exigente donde la victoria en modo local u online depende exclusivamente de tu destreza al volante. ¡16 camiones personalizables, 25 arenas y 3 ligas que ganar para ser el campeón!";
        $juegos->requerimientos = "Requiere un procesador y un sistema operativo de 64 bits, SO: Windows 7/8/10 64-bit, Procesador: Intel Core i3 4160 @ 3.6GHz/AMD FX 8350 @ 4.0GHz o mejor, Memoria: 6 GB de RAM, Gráficos: Nvidia GTX 660 / AMD RX 560 or better, Almacenamiento: 26 GB de espacio disponible.";
        $juegos->sistema = "windows";
        $juegos->idclasificacion = 3;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Teyon";
        $juegos->precio = 25;
        $juegos->image = "https://s1.gaming-cdn.com/images/products/7044/orig/monster-truck-championship-cover.jpg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "MXGP 2020";
        $juegos->descripcion ="MXGP 2020 es una nueva entrega de la saga de conducción y motocross MXGP de la temporada 2020 del Campeonato Mundial a cargo de Milestone para PC, PlayStation 4, Xbox One y PlayStation 5. Súbete a tu moto y siente la adrenalina correr con esta nueva experiencia de juego. Toma el control y descubre las novedades de la serie oficial. Desafía a todos los pilotos y equipos de las categorías MXGP y MX2 de 2020. Saca al piloto que llevas dentro y conviértete en el campeón que siempre has soñado.";
        $juegos->requerimientos = "Sistema operativo: Windows 8.1 (64-bit), Procesador: Intel Core i5-2500K / AMD FX-6350, Memoria: 8 GB de RAM, Gráficos: GeForce GTX 960 / GeForce GTX 1050, DirectX: Versión 11, Tarjeta de sonido: DirectX compatible";
        $juegos->sistema = "windows";
        $juegos->idclasificacion = 3;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Milestone";
        $juegos->precio = 72.00;
        $juegos->image = "https://s2.gaming-cdn.com/images/products/7864/orig/mxgp-2020-the-official-motocross-videogame-cover.jpg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "MotoGP 21";
        $juegos->descripcion ="MotoGP 21 es una nueva entrega de la saga de conducción y motociclismo a cargo de Milestone para PC, PlayStation 4, Xbox One, PlayStation 5, Xbox Series y Switch. Vive la temporada 2021 al máximo con las clases MotoGP, Moto2 y Moto3. Vive la experiencia de carreras en 2 ruedas más auténtica con más de 120 pilotos oficiales, más de 20 pistas y nuevas características mejoradas para un nivel de realismo único.";
        $juegos->requerimientos = "Sistema operativo: Windows 8.1 o posterior (64-bit), Procesador: Intel Core i5-3470, AMD FX-6350 o equivalente, Memoria: 8 GB de RAM, Gráficos: NVIDIA GeForce GTX 1050 con 2 GB VRAM o más, AMD Radeon HD 7950 con 2 GB VRAM o más, DirectX: Versión 11, Almacenamiento: 22 GB de espacio disponible.";
        $juegos->sistema = "windows";
        $juegos->idclasificacion = 3;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Milestone";
        $juegos->precio = 27.84;
        $juegos->image = "https://cdn2.unrealengine.com/egs-motogp21-milestonesrl-s2-1200x1600-cf611a0571ca.jpg";
        $juegos->save();

        //JUEGOS DE RPG
        $juegos = new Juego();
        $juegos->nombrejuego = "Final Fantasy VII";
        $juegos->descripcion ="En Midgar, una ciudad controlada por la gran conglomeración Shinra Inc., el reactor Mako nº 1 ha sido destruido por un grupo de rebeldes llamado AVALANCHE.AVALANCHE es un grupo formado en secreto para empezar una rebelión contra Shinra Inc., una organización que absorbe energía Mako destruyendo así los recursos naturales del planeta. Cloud, un ex miembro de las fuerzas de combate de élite de Shinra, los SOLDIER, participó en la explosión del reactor Mako.
        ¿Podrán Cloud y AVALANCHE proteger al planeta de la temible poderosa Shinra Inc.?";
        $juegos->requerimientos = "Mínimo
        Procesador:2 GHz
        Memoria:1 GB RAM
        Gráficos:DirectX 9.0c-compatible graphic card
        Almacenamiento:3 GB HD ";
        $juegos->sistema = "Windows XP/Vista/7 (32/64bits)";
        $juegos->idclasificacion = 2;
        $juegos->estado = "disponible";
        $juegos->proveedor = "SQUARE ENIX";
        $juegos->precio = 11.99;
        $juegos->image = "https://as01.epimg.net/meristation/imagenes/2019/09/24/noticias/1569339153_711256_1569339294_noticia_normal.jpg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "NieR: Automata";
        $juegos->descripcion ="NieR: Automata narra la historia de los androides 2B, 9S y A2, que luchan para recuperar el mundo distópico dirigido por las máquinas que han invadido unas poderosas formas de vida mecánicas.Unos alienígenas mecanizados han invadido la Tierra, obligando a la humanidad a abandonarla. En un último intento por recuperar el planeta, la resistencia humana envía un ejército de soldados androides para acabar con los invasores. La guerra entre las máquinas y los androides se vuelve cada vez más encarnizada. Una guerra que pronto pondrá al descubierto la verdad sobre este mundo.";
        $juegos->requerimientos = "Procesador: Intel Core i3 2100 or AMD A8-6500
        Memoria: 4 GB de RAM
        Gráficos: NVIDIA GeForce GTX 770 VRAM 2GB or AMD Radeon R9 270X VRAM 2GB
        DirectX: Versión 11
        Red: Conexión de banda ancha a Internet
        Almacenamiento: 50 GB de espacio disponible";
        $juegos->sistema = "Windows 7 /8.1 /10 64bit";
        $juegos->idclasificacion = 2;
        $juegos->estado = "disponible";
        $juegos->proveedor = "PlatinumGames";
        $juegos->precio = 59.99;
        $juegos->image = "https://1.bp.blogspot.com/-INjoqGqX-Uk/X7E4jD9ZtTI/AAAAAAABe8E/Ici2JtwDDgQchZLCrhmve8n8o6GSDyLaACLcBGAsYHQ/s16000/1.jpg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "Undertale";
        $juegos->descripcion ="RPG muy peculiar por su mecánica, su apartado visual y su propuesta en la que nos adentraremos en un mundo subterráneo del que deberemos escapar. Allí habitan unos monstruos que deberemos de decidir si queremos asesinarlos o perdonarles la vida optando por una vía pacífica, aunque las decisiones que tomemos cambiarán por completo el argumento, los personajes que aparecerán, los diálogos o la jugabilidad, causando que la experiencia se pueda volver incluso más complicada de lo normal.";
        $juegos->requerimientos = "Procesador: 2 GHz+
        Memoria: 3 GB de RAM
        Gráficos: 512MB
        Almacenamiento: 200 MB de espacio disponible";
        $juegos->sistema = "Windows XP/Vista/7/10 (32/64bits)";
        $juegos->idclasificacion = 2;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Toby Fox";
        $juegos->precio = 9.99;
        $juegos->image = "https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/undertale-ree-orn.jpg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "Monster Hunter: World";
        $juegos->descripcion ="¡Bienvenidos a un nuevo mundo! Conviértete en un gran cazador y acaba con feroces monstruos en un ecosistema lleno de vida donde podrás aprovechar tu entorno y su variada flora y fauna para vencer. ¡Caza solo o en cooperativo con hasta tres jugadores más y usa los materiales abandonados por tus enemigos caídos para crear nuevo equipo con que luchar con bestias aún más grandes y poderosas!";
        $juegos->requerimientos = "Procesador: Intel® Core™ i5-4460, 3.20GHz o AMD FX™-6300
        Memoria: 8 GB de RAM
        Gráficos: NVIDIA® GeForce® GTX 760 o AMD Radeon™ R7 260x (VRAM 2GB)
        DirectX: Versión 11";
        $juegos->sistema = "WINDOWS® 7, 8, 8.1, 10 (requiere 64 bits)";
        $juegos->idclasificacion = 2;
        $juegos->estado = "disponible";
        $juegos->proveedor = "CAPCOM";
        $juegos->precio = 39.99;
        $juegos->image = "https://generacionxbox.com/wp-content/uploads/2018/01/monster-hunter-world-wallpaper-generacion-xbox.jpg";
        $juegos->save();

        //JUEGOS DE ACCION
        $juegos = new Juego();
        $juegos->nombrejuego = "Destiny";
        $juegos->descripcion ="Juego de acción y aventura en el que el jugador crea su propio avatar y en el  transcurso evoluciona con el propósito de salvar el universo distópico mostrado";
        $juegos->requerimientos = " Windows 7 64-Bit, Procesador: Intel Core i5 2400 @ 3.1GHz o AMD FX 6100, Memoria RAM: 6GB, Tarjeta de vídeo: NVIDIA GTX 560 1GB VRAM / AMD Radeon R7 260 1GB (DirectX 11), Espacio en disco: 40GB.";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 1;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Bungie - Activision";
        $juegos->precio = 87.99;
        $juegos->image = "https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2017/06/destiny_2_caratula.png?itok=3014kE94";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "Crysis";
        $juegos->descripcion ="Videojuego sci-fi de disparos en primera persona. Gira en torno a un grupo de militares los cuales tienen armaduras tecnológicas avanzadas que les da una mayor fuerza física, velocidad, defensa y habilidades de camuflaje.";
        $juegos->requerimientos = " Windows 10 64-Bit, Procesador: Procesador Core i5 3450 o Ryzen 3 1200, Memoria RAM: 8GB, Tarjeta de vídeo: RX 470 o GTX 1050 Ti, Espacio en disco: 20GB, DirectX 11, 4 GB de memoria gráfica para jugarlo en 1080p ";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 1;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Crytek";
        $juegos->precio = 22.99;
        $juegos->image = "https://image.api.playstation.com/vulcan/ap/rnd/202009/0715/rNqpXMO3CX4zfiNMwiFNpWf5.png";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "Call of Duty";
        $juegos->descripcion =" Juego de disparos en primera persona de tipo belico. Es el primer juego de la franquicia la cual comparte el mismo nombre";
        $juegos->requerimientos = "Windows 98 / Windows ME / Windows 2000 / Windows XP, Procesador: Intel Pentium III Mobile 750MHz / AMD Athlon 64 2000+, Memoria RAM: 128 MB, Tarjeta de vídeo: GeForce 7600 GT / Radeon HD 7310G, Espacio en disco: 2GB, DirectX 9";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 1;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Activision";
        $juegos->precio = 236.34;
        $juegos->image = "https://www.tonica.la/__export/1588799347389/sites/debate/img/2020/05/06/call-of-duty-black-ops-2-portada.jpg_423682103.jpg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "DOOM - Eternal Standard Edition";
        $juegos->descripcion ="Es un videojuego de accion y disparos en primera persona. Se desarrolla en un universo alterno en el que los ejércitos del infierno han invadido la tierra y bajo la identidad del personaje de Slayer cruza dimensiones aniquilando demonios para detener la destrucción definitiva de la humanidad.";
        $juegos->requerimientos = "Windows 7/10 de 64 bits, Procesador: Intel Core i5 @ 3.3 GHz o superior / AMD Ryzen 3 @ 3.1 GHz o superior, Memoria RAM: 8 MB, Tarjeta de vídeo: NVIDIA GeForce GTX 970 (4GB), GTX 1060 (6GB), GTX 1650 (4GB) o AMD Radeon R9 290 (4GB) / RX 470 (4GB), Espacio en disco: 50GB";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 1;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Bethesda Softworks";
        $juegos->precio = 84.41;
        $juegos->image = "https://image.api.playstation.com/vulcan/ap/rnd/202009/2814/GGyEnCkIXoyiVlN9sRHkzUPo.png";
        $juegos->save();

        //JUEGOS DE ESTRATEGIA
        $juegos = new Juego();
        $juegos->nombrejuego = "Crying Suns";
        $juegos->descripcion ="Crying Suns es un roguelite de exploración táctica en el que encarnas a un gran almirante que explora su imperio caído. Descubre la verdad sobre el Imperio y sobre ti mismo en una profunda historia narrativa.";
        $juegos->requerimientos = "Windows Vista, 7, 10 (64 bits), Procesador: Dual-core 2.5 GHz o equivalente /Core i3 2,5 GHz o equivalente, Memoria RAM: 4 GB, Tarjeta de vídeo: GPU dedicada, 1 GB de VRAM/AMD HD5750 o equivalente/GPU dedicada, 2 GB de VRAM/GTX 750ti o equivalente, Espacio en disco: 2 GB,";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 4;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Humble Games";
        $juegos->precio = 24.99;
        $juegos->image = "https://cdn.cloudflare.steamstatic.com/steam/apps/873940/header.jpg?t=1612466716";
        $juegos->save();
        //https://cdn2.unrealengine.com/egs-cryingsunsisatacticalroguelite-altshift-ic1-400x225-528455333.png?h=270&resize=1&w=480
        
        $juegos = new Juego();
        $juegos->nombrejuego = "Age of Empires II";
        $juegos->descripcion ="Explora todas las campañas originales para un jugador de la expansión Age of Kings y The Conquerors, elige entre 18 civilizaciones que abarcan más de mil años de historia y dirígete a Internet para desafiar a otros jugadores en tu búsqueda por la dominación mundial a lo largo de los siglos..";
        $juegos->requerimientos = "Windows Vista, 7, 8 Pro+, Procesador: 1.2GHZ CPU, Memoria RAM: 1 GB, Tarjeta de vídeo: Direct X 9.0c Capable GPU, Espacio en disco: 2 GB,";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 4;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Xbox Game Studios";
        $juegos->precio = 19.99;
        $juegos->image = "https://cdn.cloudflare.steamstatic.com/steam/apps/221380/header.jpg?t=1620144521";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "Death Coming";
        $juegos->descripcion ="Death Coming es un juego de lógica no lineal en el que deberás cosechar almas humanas al estilo de la franquicia 'Destino final'. Sin embargo, los molestos mortales no son tu único problema, ya que los agentes de la luz harán todo lo posible para detenerte.";
        $juegos->requerimientos = "Windows Vista, 7 / 8 /10, Procesador: Intel i3, Memoria RAM: 4 GB, Espacio en disco: 500 MB,";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 4;
        $juegos->estado = "disponible";
        $juegos->proveedor = "NExT Studios";
        $juegos->precio = 6.99;
        $juegos->image = "https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fdeath-coming%2Fhome%2FEGS_DeathComing_NExTStudios_G2_00-1920x1080-3b64e307a2d9b178a0f54127466dad4c530bf83e.jpg";
        $juegos->save();

        $juegos = new Juego();
        $juegos->nombrejuego = "The Colonists";
        $juegos->descripcion ="Construye un hogar nuevo para tu equipo de robots, mientras inician una vida nueva en un planeta lejano, en donde podrán hacer realidad su sueño más anhelado: ser humanos.";
        $juegos->requerimientos = "Windows de 64 bits, Procesador: Multicore compatible con conjunto de instrucciones SSE, Memoria RAM: 4 GB, Tarjeta de vídeo: DX9 de 1 GB (Shader Model 3.0), Espacio en disco: 1 GB,";
        $juegos->sistema = "Windows";
        $juegos->idclasificacion = 4;
        $juegos->estado = "disponible";
        $juegos->proveedor = "Mode 7";
        $juegos->precio = 24.99;
        $juegos->image = "https://cdn.akamai.steamstatic.com/steam/apps/677340/header.jpg?t=1606393452";
        $juegos->save();

        //CLAVE JUEGOS

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 1;
        $juegosclave->idclaves = 1;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 1;
        $juegosclave->idclaves = 2;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 2;
        $juegosclave->idclaves = 3;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 2;
        $juegosclave->idclaves = 4;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 3;
        $juegosclave->idclaves = 5;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 3;
        $juegosclave->idclaves = 6;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 4;
        $juegosclave->idclaves = 7;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 4;
        $juegosclave->idclaves = 8;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 5;
        $juegosclave->idclaves = 9;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 5;
        $juegosclave->idclaves = 10;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 6;
        $juegosclave->idclaves = 11;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 6;
        $juegosclave->idclaves = 12;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 7;
        $juegosclave->idclaves = 13;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 7;
        $juegosclave->idclaves = 14;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 8;
        $juegosclave->idclaves = 15;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 8;
        $juegosclave->idclaves = 16;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 9;
        $juegosclave->idclaves = 17;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 9;
        $juegosclave->idclaves = 18;
        $juegosclave->estadoclave = true;
        $juegosclave->save();


        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 10;
        $juegosclave->idclaves = 19;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 10;
        $juegosclave->idclaves = 20;
        $juegosclave->estadoclave = true;
        $juegosclave->save();


        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 11;
        $juegosclave->idclaves = 21;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 11;
        $juegosclave->idclaves = 22;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 12;
        $juegosclave->idclaves = 23;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 12;
        $juegosclave->idclaves = 24;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 13;
        $juegosclave->idclaves = 25;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 13;
        $juegosclave->idclaves = 26;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 14;
        $juegosclave->idclaves = 27;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 14;
        $juegosclave->idclaves = 28;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 15;
        $juegosclave->idclaves = 29;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 15;
        $juegosclave->idclaves = 30;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 16;
        $juegosclave->idclaves = 31;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 16;
        $juegosclave->idclaves = 32;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 17;
        $juegosclave->idclaves = 33;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 17;
        $juegosclave->idclaves = 34;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 18;
        $juegosclave->idclaves = 35;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 18;
        $juegosclave->idclaves = 36;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 19;
        $juegosclave->idclaves = 37;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 19;
        $juegosclave->idclaves = 38;
        $juegosclave->estadoclave = true;
        $juegosclave->save();


        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 20;
        $juegosclave->idclaves = 39;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

        $juegosclave= new JuegoClave();
        $juegosclave->idjuegos = 20;
        $juegosclave->idclaves = 40;
        $juegosclave->estadoclave = true;
        $juegosclave->save();

    }
}
