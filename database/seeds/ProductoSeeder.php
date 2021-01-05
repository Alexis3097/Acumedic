<?php

use App\Models\Producto;
use App\Models\fotoProducto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'Nombre' => 'crema la mer',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '001',
        ]);
        fotoProducto::create([
            'IdProducto' => 1,
            'Nombre' => 'producto1.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'crema la pons',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '002',
        ]);
        fotoProducto::create([
            'IdProducto' => 2,
            'Nombre' => 'producto2.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'crema la avena grisi',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '003',
        ]);
        fotoProducto::create([
            'IdProducto' => 3,
            'Nombre' => 'producto3.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'jabon facial men',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '004',
        ]);
        fotoProducto::create([
            'IdProducto' => 4,
            'Nombre' => 'producto4.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'jabon facial garnier',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '005',
        ]);
        fotoProducto::create([
            'IdProducto' => 5,
            'Nombre' => 'producto5.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'toallitas huggies',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '006',
        ]);
        fotoProducto::create([
            'IdProducto' => 6,
            'Nombre' => 'producto6.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'toallitas members',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '007',
        ]);
        fotoProducto::create([
            'IdProducto' => 7,
            'Nombre' => 'producto7.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'Testo ultra',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '008',
        ]);
        fotoProducto::create([
            'IdProducto' => 8,
            'Nombre' => 'producto8.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'Testo tech',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '009',
        ]);
        fotoProducto::create([
            'IdProducto' => 9,
            'Nombre' => 'producto9.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);

        Producto::create([
            'Nombre' => 'nazil',
            'PrecioCompra' => 50,
            'PrecioPublico' => 100,
            'Estrellas' => 5,
            'DescripcionCorta' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se d',
            'DescripcionLarga' => ' Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.',
            'CodigoBarra' => '010',
        ]);
        fotoProducto::create([
            'IdProducto' => 10,
            'Nombre' => 'producto10.jpg',
            'Titulo' => 'producto',
            'TextoAlterno' => 'producto',
        ]);
    }
}
