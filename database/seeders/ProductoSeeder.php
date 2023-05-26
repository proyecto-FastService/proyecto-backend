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
            'descripcion' => 'Con un perfil goloso y coquetos nachos de maíz doraditos y caseros, regodeándose con frijoles norteños. Lleva un guiso de carne picada premium mexicana. Flanqueado por pico de gallo, sobre 4 quesos mexicanísimos y aderezo fresco de chipotle cilantro.',
            'ingredientes' => 'vacío',
            'imagen' => 'el-mentiroso-nachos.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Cochiloco',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Sulfato, Soja',
            'precio' => 15,
            'descripcion' => 'Sensual preparación antigua callejera mexicana del guacamole, aguacate, cebolla, cilantro, lima mexicana, sal de grano y el secretazo de la tía, con seductores nachos doraditos caseros.',
            'ingredientes' => 'vacío',
            'imagen' => 'El-cochiloco.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Chacaloso',
            'existencias' => 200,
            'alergenos' => 'Lácteos, Gluten',
            'precio' => 15,
            'descripcion' => 'Prepotente variado de quesos fundidos dentro de un volcán de piedra con toques mexicanísimos y aromas de los dioses. Puede ser de champiñón, jamón de york o bacon, (como lo prefieras). Viene acompañado con 4 tortillas de harina para taquear.',
            'ingredientes' => 'vacío',
            'imagen' => 'chacalosoewc.png',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'La Chingona',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Altramuz, Gluten',
            'precio' => 15,
            'descripcion' => 'Encabronada y acicalada HAMBURGUESA con 185 gramotes de CARNE PREMIUM al carbón, lonchas de bacon, placa de 4 quesos doradita y bestial salsa BBQ enchipotlada, un golpe de guacamole, montada SOBRE 2 DONUTS GLASEADOS. Acompañada con patatas artesanales.',
            'ingredientes' => 'vacío',
            'imagen' => 'Hamburguesa-La-Chingona.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Traidor (Fajitas)',
            'existencias' => 200,
            'alergenos' => 'Huevos, Mostaza, Altramuz, Gluten',
            'precio' => 15,
            'descripcion' => 'Fajitas de POLLO DE GRANJA, CERDITO DE ALTA GAMA o CHAMPI (mixtas también), con guisado de verduras salteadas y horneadas a la mexicana con aceite de trufa. Acompañadas de 6 tortillas para taquear.',
            'ingredientes' => 'vacío',
            'imagen' => 'El-traidor-fajitas.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Chilaquiles MX La Malquerida',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Mostaza, Altramuz',
            'precio' => 15,
            'descripcion' => 'De POLLO, CERDITO DE ALTA GAMA o CHAMPI. Van con queso fundido, frijolitos y salsa de mole. Plato de celebraciones mexicanas.',
            'ingredientes' => 'vacío',
            'imagen' => 'chilaquiles.png',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Burrito Tijuana',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Mostaza, Altramuz, Gluten, Soja',
            'precio' => 15,
            'descripcion' => 'Un alcurnioso y excelso BURRITO creado en Tijuana. Puede ser de: POLLO, CERDO o CHAMPIÑONES. Aderezado con mayonesa chipotle, frijoles norteños, lechuga y aderezos muy mexicanos, con una mezcla de quesos sobre una tortilla de harina de 33 cm.',
            'ingredientes' => 'vacío',
            'imagen' => 'Burrito-Tijuana.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'El Viva México Cabrones',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => 'Escandalosa e irresponsablemente piedra volcánica, profundamente mexicana pero ardiente, con salsa molcajeteada y tatemada. En el fondo y a sus alrededores trae un poco de toda la carta de la Tía Juana con 9 tortillas para taquear.',
            'ingredientes' => 'vacío',
            'imagen' => 'El-viva-Mexico-Cabrones-2.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Chiquillo Chillón',
            'existencias' => 200,
            'alergenos' => 'Lácteos, Gluten',
            'precio' => 15,
            'descripcion' => 'Pollo de granja a la plancha en fajitas con aceites de girasol y patatas caseras deliciosas. "te lo juro".',
            'ingredientes' => 'vacío',
            'imagen' => '25-CHIQUILLO-CHILLÓN.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Cariño Latoso',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => 'Quesadilla mexicanísima de jamón de york con queso y patatas caseras.',
            'ingredientes' => 'vacío',
            'imagen' => '26-CARIÑO-LATOSO.jpg',
            'categoria' => 'plato',
        ]);

        Producto::create([
            'nombre' => 'Oración al Viento',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => 'Presumida tarta de chocolate recién castigada por los dioses del cacao.',
            'ingredientes' => 'vacío',
            'imagen' => 'La-Tía-Juana-Oración-al-Viento-819x1024.jpeg',
            'categoria' => 'postre',
        ]);

        Producto::create([
            'nombre' => 'Virgen de Guadalupe',
            'existencias' => 200,
            'alergenos' => 'Huevos, Lácteos, Gluten, Altramuz',
            'precio' => 15,
            'descripcion' => 'Engordable tarta de queso con mermelada de frutos del bosque, bien presentada para deglutirla sin temor al pecado.',
            'ingredientes' => 'vacío',
            'imagen' => 'La-Tía-Juana-Virgen-de-Guadalupe-819x1024.jpeg',
            'categoria' => 'postre',
        ]);

        Producto::create([
            'nombre' => 'Perro Descalzo',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'Una mezcla de TEQUILA - RON con el amor maldito de la piña + la fruta de la pasión y crema de coco.',
            'ingredientes' => 'vacío',
            'imagen' => '07-png-peq-PERRO-DESCALZO.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Tinto en Acapulco',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'Sangría mexicana + un poco de coco piña con mucho hielo e irresponsable CERVEZA VOLCADA y un golpe del buen TEQUILA.',
            'ingredientes' => 'vacío',
            'imagen' => '08-png-TINTO-EN-ACAPULCO.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Un No Mames',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'Buen TEQUILAZO del amor, lo acidito del pomelo, mezclado con lo dulcito de la piña.',
            'ingredientes' => 'vacío',
            'imagen' => '09-png-UN-NO-MAMES-768x1316.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'El Zopilote',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'De Tijuana llega esta sangrita de tomate con golpe de lima, cerveza de grifo, salsa perris y valentina. "La quita resaca".',
            'ingredientes' => 'vacío',
            'imagen' => '10-psd-LA-CUBANA.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Agüita de Calzón',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'TEQUILA mezclado con lo acidito del limón, zumito de mango y licor de mandarina.',
            'ingredientes' => 'vacío',
            'imagen' => '11-png-AGUITA-DE-CALZON.png',
            'categoria' => 'bebida',
        ]);

        Producto::create([
            'nombre' => 'Tortura Sexual',
            'existencias' => 200,
            'alergenos' => 'Ninguno',
            'precio' => 7,
            'descripcion' => 'Mezcla de ron blanco y ron obscuro, zumo de fruta de la pasión, toque de lima y naranja + granadina.',
            'ingredientes' => 'vacío',
            'imagen' => '12-png-TORTURA-SEXUAL.png',
            'categoria' => 'bebida',
        ]);
    }
}
