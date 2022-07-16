<?php 
	const BASE_URL = "http://localhost/www/PruebaTecnica";


	//Zona horaria
	date_default_timezone_set('America/Bogota');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	// const DB_NAME = "db_tiendavirtual";
	const DB_NAME = "prueba_tecnica_dev";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "PRUEBA TECNICA";
	// const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const EMAIL_REMITENTE = "jose.jdgo97@gmail.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.abelosh.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Cra 7 Tbis #76-12 Alfonzo Lopez,<br> Cali-Colombia";
	const TELEMPRESA = "+(602)3043459";
	const WHATSAPP = "+57(314)7072792";
	const EMAIL_EMPRESA = "jose.jdgo97@gmail.com";
	const EMAIL_PEDIDOS = "jose.jdgo97@gmail.com"; 
	const EMAIL_SUSCRIPCION = "jose.jdgo97@gmail.com";
	const EMAIL_CONTACTO = "jose.jdgo97@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'JD';
	const METHODENCRIPT = "AES-128-ECB";



 ?>