<?php
    //SE DECLARAN LAS VARIABLES GLOBALES DE LA EMPRESEA
    const EMPRESA = '** Tu empresa **';
    const LOGOTXT = 'empresa';
    //nombre que aparecera en los email enviados
    const EMPRESAEMAIL ='Boot mail';
    const BASE_URL = '../';
    const URL_FULL = 'http://dominio.test';

    const PUBLICDOCS = URL_FULL.'/public';
    //constante para mandar a llamar el header
    const METATAGS = 'views/_layouts/metatags.php';
    const CAB = 'views/_layouts/header.php';
    const FOOT = 'views/_layouts/footer.php';

    //zona horaria
    date_default_timezone_set('America/Mexico_City');

    //constantes para la conexion a la DB en local
    const DB_HOST = '127.0.0.1';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_NAME = 'dbName';
    const DB_CHARSET = 'utf8';
    //const DB_CHARSET = 'charset=utf8';
    
    //constantes para la conexion a la DB en produccion
    //const DB_HOST = 'localhost';
    //const DB_USER = '';
    //const DB_PASS = '';
    //const DB_NAME = '';
    //const DB_CHARSET = 'utf8';



    //formas de contacto empresa
    const DIRECCION ='tu direccion';
    const TELEFONO =  'tu tel';
    //cuenta general de la empressa
    //const EMAIL = 'hetacombe.2021@hotmail.com';
    const EMAIL = 'email@g****.com.mx';
    const EMAILHOST ='emailqueRecibe@gmail.com';
    //cuenta que enviara correos al usuario
    const SENDMAILER ='emailquemandamails@gmail.com.mx';
    const ACCESSWORD ='pass_del_Correo_SENDMAILER';
    //cuenta de email de contacto
    const EMAILCONTAC ='contacto@gmail.com';
    const FACEBOOK = 'https://www.fb.com/tu_face';
    const INSTAGRAM = 'https://www.instagram.com/tu_instagram';

    //variables para el los meta para compartir productos en redes sociales
    const EMPMETA = 'slogan';
    const DESCRIPCION = 'tu descripcion';
    const SHAREHASH = 'tus Hashtag';

    //delimitadores decimal y millar ej 24,1989.00
    const SPD ='.';
    const SPM =',';
    //simbolo de moneda
    const SMONEY ='$'; 
    const MONEYMEX ='MXN';
    //precio por defecto
    const PRECIO = 219;
    //costo envio
    const ENVIO = 89;
    //si compra es mayor a 800 envio gratis
    const ENVIOGRATIS = 800;

    //info PMP
    const PUBLIC_KEY = 'CRED_MERCADO_PAGO';
    const ACCESS_TOKEN = 'CRED_MERCADO_PAGO';
   
    
    //encriptar id
    const KEY = 'mecg';
    const METHODENCRIPT ='AES-128-ECB';

    //encriptar id adress
    const KEY_ADDRESS = 'az';
    const ROL_ACCESS = 321;

    //productos para pagina Home
    const PZSHOME = 12;
    //productos por pagina para tienda
    const PZSTIENDA = 16;
    //productos por pagina para busqueda
    const PZSBUSQUEDA = 12;
    //constante para el inicio de scroll infinito usado en account/favorites account/compras y tienda/section
    const INITIALSCROLL = 0;
    //productos por scroll compras
    const SCROLLCOMPRAS = 2;
    //productos por pagina para busqueda
    const SCROLLFAVS = 3;
    //PRODUCTOS POR COLLECCION
    const SCROLLCOLLECTIONS = 8;

    const DEV ='tu';
