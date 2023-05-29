<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Producto::create([
            'nombre' => 'El Mentiroso',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Sulfato, Cereales',
            'precio' => 15,
            'descripcion' => 'a',
            'ingredientes' => 'vacío',
            'imagen' => 'el-mentiroso-nachos.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Cochiloco',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Sulfato, Soja',
            'precio' => 15,
            'descripcion' => 'a sal de grano y el secretazo de la tía, ca',
            'ingredientes' => 'vacío',
            'imagen' => 'El-cochiloco.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Chacaloso',
            'existencias' => 200,
            'alergenos' => 'Lácteos, Gluten',
            'precio' => 15,
            'descripcion' => 'acon, (como lo prefieras). Viene acompañado con 4 tortillas de harina para taquear.',
            'ingredientes' => 'vacío',
            'imagen' => 'chacalosoewc.png',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'La Chingona',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Altramuz, Gluten',
            'precio' => 15,
            'descripcion' => 'UM al carbón, lonchas de bacon, placa de 4 quesles.',
            'ingredientes' => 'vacío',
            'imagen' => 'Hamburguesa-La-Chingona.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Traidor (Fajitas)',
            'existencias' => 200,
            'alergenos' => 'Huevos, Mostaza, Altramuz, Gluten',
            'precio' => 15,
            'descripcion' => ' con aceite de trufa. Acompañadas de 6 tortillas para taquear.',
            'ingredientes' => 'vacío',
            'imagen' => 'El-traidor-fajitas.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Chilaquiles MX La Malquerida',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Mostaza, Altramuz',
            'precio' => 15,
            'descripcion' => 'braciones mexicanas.',
            'ingredientes' => 'vacío',
            'imagen' => 'chilaquiles.png',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Burrito Tijuana',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Mostaza, Altramuz, Gluten, Soja',
            'precio' => 15,
            'descripcion' => 'Un , frijoles norteños, lechuga y aderezos muy mexicanos, con unae 33 cm.',
            'ingredientes' => 'vacío',
            'imagen' => 'Burrito-Tijuana.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Viva México Cabrones',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => ' y a sus alrededores trae un poco de toda la carta de la Tía Juana con 9 tortillas para taquear.',
            'ingredientes' => 'vacío',
            'imagen' => 'El-viva-Mexico-Cabrones-2.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Chiquillo Chillón',
            'existencias' => 200,
            'alergenos' => 'Lácteos, Gluten',
            'precio' => 15,
            'descripcion' => 'Poll".',
            'ingredientes' => 'vacío',
            'imagen' => '25-CHIQUILLO-CHILLÓN.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Cariño Latoso',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => 'as.',
            'ingredientes' => 'vacío',
            'imagen' => '26-CARIÑO-LATOSO.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Oración al Viento',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => 'l cacao.',
            'ingredientes' => 'vacío',
            'imagen' => 'La-Tía-Juana-Oración-al-Viento-819x1024.jpeg',
            'categoria' => 'postre',
        ]);

        Producto::create([
            'nombre' => 'Virgen de Guadalupe',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => 'pecado.',
            'ingredientes' => 'vacío',
            'imagen' => 'La-Tía-Juana-Virgen-de-Guadalupe-819x1024.jpeg',
            'categoria' => 'postre',
        ]);

        Producto::create([
            'nombre' => 'Perro Descalzo',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'Una mezcla de TEQUILA - RON con el amor maldito de la o.',
            'ingredientes' => 'vacío',
            'imagen' => '07-png-peq-PERRO-DESCALZO.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Tinto en Acapulco',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'del buen TEQUILA.',
            'ingredientes' => 'vacío',
            'imagen' => '08-png-TINTO-EN-ACAPULCO.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Un No Mames',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'Bupiña.',
            'ingredientes' => 'vacío',
            'imagen' => '09-png-UN-NO-MAMES-768x1316.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'El Zopilote',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'De Tijuita resaca".',
            'ingredientes' => 'vacío',
            'imagen' => '10-psd-LA-CUBANA.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Agüita de Calzón',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'TE mandarina.',
            'ingredientes' => 'vacío',
            'imagen' => '11-png-AGUITA-DE-CALZON.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Tortura Sexual',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'Mezcla de + granadina.',
            'ingredientes' => 'vacío',
            'imagen' => '12-png-TORTURA-SEXUAL.png',
            'categoria' => 'bebida',
        ]);
    }
}
