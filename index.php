<?php
session_start();

$page = $_GET['page'];
$rutaimagen = "Fotos/";
$absoluteruta = '/moixero-home/tdiw/tdiw-d1/public_html/Fotos/';

require __DIR__.'/Model/functions_connect.php';
$categorias = getCategories();
switch ($page) {
    case 'home':
        include __DIR__.'/Controller/Home.php';
        break;
    case 'login':
        include __DIR__.'/Controller/IniciarSesion.php';
        break;
    case 'signup':
        include __DIR__.'/Controller/Registrarse.php';
        break;
    case 'contactus':
        include __DIR__.'/Controller/Contacto.php';
        break;
    case 'categoria':
        include __DIR__.'/Controller/Categoria.php';
        break;
    case 'subcategoria':
        include __DIR__.'/Controller/SubCategoria.php';
        break;
    case 'logout':
        include __DIR__.'/Controller/Logout.php';
        break;
    case 'checklogin':
        include __DIR__.'/Controller/Checklogin.php';
        break;
    case 'carrito':
        include __DIR__.'/Controller/Carrito.php';
        break;
    case 'buscador':
        include __DIR__.'/Controller/Buscador.php';
        break;
    case 'admin':
        include __DIR__.'/Controller/Admin.php';
        break;
    case 'listaproductos':
        include __DIR__.'/Controller/ListaProductosAdmin.php';
        break;
    case 'listacompra':
        include __DIR__.'/Controller/ListaCompraAdmin.php';
        break;
    case 'productos':
        include __DIR__.'/Controller/Producto.php';
        break;
    case 'panel':
        include __DIR__.'/Controller/PanelControl.php';
        break;
    case 'add':
        include __DIR__.'/Model/add.php';
        break;
    case 'vaciarcarrito':
        include __DIR__.'/Model/VaciarCarrito.php';
        break;
    case 'pagar':
        include __DIR__.'/Controller/Pagar.php';
        break;
    case 'nuevoproducto':
        include __DIR__.'/Controller/NuevoProducto.php';
        break;
    case 'miperfil':
        include __DIR__.'/Controller/MiPerfil.php';
        break;
    case 'listadecompras':
        include __DIR__.'/Controller/ListaCompras.php';
        break;
    case 'producto':
        include __DIR__.'/Controller/Popup.php';
        break;
    case 'pagado':
        include __DIR__.'/View/Pagado.php';
        break;
    default:
        include __DIR__.'/Controller/Home.php';
        break;
    }
?>
