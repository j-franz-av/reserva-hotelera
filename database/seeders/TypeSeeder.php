<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Habitación Estándar',
            'Habitación Superior',
            'Habitación de Lujo',
            'Suite Junior',
            'Suite',
            'Suite Presidencial',
            'Habitación Individual',
            'Habitación Doble',
            'Habitación Doble',
            'Habitación Familiar/Triple',
            'Habitación Conectada',
            'Habitación Murphy',
            'Habitación Accesible/Para Personas con Discapacidad',
            'Habitación para Fumadores/No Fumadores',
            'Habitación Cabaña',
        ];

        $information = [
            'Como su nombre indica, el tipo de habitación estándar es el tipo de habitación de hotel más básico. Por lo general, estas habitaciones tienen un precio relativamente económico. Las instalaciones ofrecidas son estándar, como una cama king size o dos camas queen size. Sin embargo, las ofertas varían según cada hotel. Las habitaciones estándar de hoteles de 1 estrella y 5 estrellas son diferentes.',
            'Básicamente, la habitación superior es un tipo de habitación ligeramente mejor que la habitación estándar. Las diferencias pueden estar en las instalaciones ofrecidas, el interior de la habitación o la vista desde la habitación.',
            'Por encima de la habitación superior se encuentra la habitación de lujo. Estas habitaciones suelen ser más grandes y ofrecen opciones de camas dobles o camas gemelas. Por lo general, el interior de estas habitaciones parece más lujoso.',
            'La habitación junior suite se caracteriza por tener una sala de estar. Sin embargo, esta sala de estar todavía está en la misma habitación que la cama. La sala de estar suele estar separada o dividida por un armario grande para que la cama no sea visible.',
            'La suite está por encima de la habitación junior suite en los hoteles. La sala de estar en este tipo de habitación de hotel está separada del dormitorio. En términos de instalaciones, es diferente de la habitación junior suite. Además de la sala de estar, este tipo de habitación de hotel suele estar equipado con una cocina.',
            'La suite presidencial es el tipo de habitación de hotel más lujoso y caro. De hecho, no todos los hoteles tienen una suite presidencial. Las instalaciones ofrecidas son las mejores, desde el interior hasta la vista de la habitación, y mucho más.',
            'La habitación individual es el tipo de habitación de hotel más común. Estas habitaciones constan de una cama individual, un sofá y un baño. La habitación no es muy grande. Por lo general, este tipo de habitación de hotel es elegido por mochileros o viajeros solitarios debido a sus instalaciones para una sola persona y su precio asequible.',
            'Por el nombre, es evidente que este tipo de habitación de hotel tiene dos camas individuales separadas. Este tipo de habitación de hotel es adecuado para parejas o grupos de amigos de 2 a 3 personas.',
            '¿Quieres una estancia más cómoda y con mejores instalaciones? Puedes reservar una habitación doble en el hotel. Este tipo de habitación de hotel suele tener una cama grande como una king size. ¡La habitación doble es perfecta para parejas que quieren una luna de miel inolvidable!',
            '¿Viajas con familiares o amigos? Puedes elegir una habitación familiar en el hotel. En términos de tamaño, estas habitaciones son mucho más grandes que otros tipos de habitaciones de hotel. Las habitaciones familiares suelen tener una cama king size y una cama más pequeña.',
            'El tipo de habitación Connecting Room es ideal para aquellos que viajan con familiares o grupos y desean tener sus propias habitaciones. Tu habitación y la de otros miembros de tu familia estarán contiguas y habrá una puerta que las conecta. Entonces, si tú o algún otro miembro de tu familia quieren ir a la habitación del otro, pueden hacerlo a través de la puerta de conexión sin tener que pasar por la puerta principal, ¡genial!',
            'La habitación Murphy es un tipo de habitación de hotel que ofrece un sofá cama. Este sofá cama se utiliza como cama por la noche y como sala de estar durante el día. El tamaño de la habitación Murphy es de aproximadamente 20 a 40 metros cuadrados. ¡Es un concepto emocionante!',
            'El tipo de habitación Accessible Room/Disable Room está disponible para huéspedes con discapacidades. La existencia de este tipo de habitación también es obligatoria por ley para evitar la discriminación. También se ha creado para hacer que la estancia de estos huéspedes en el hotel sea más fácil.',
            'Por lo general, no se permite fumar en las habitaciones. Sin embargo, muchos hoteles ofrecen habitaciones de tipo Smoking/Non Smoking Room. Esto también es útil para no molestar a los próximos huéspedes con el olor a humo en las habitaciones. Entonces, si eres fumador, ahora puedes reservar una habitación con el tipo de habitación de fumadores.',
            '¿Quieres nadar justo después de abrir la puerta de tu habitación? ¿O tener una piscina privada? ¡Elige la habitación Cabana en el hotel! Este tipo de habitación de hotel está diseñado con una piscina privada para los huéspedes que reservan esa habitación. El tamaño de la habitación Cabana es de aproximadamente 30 a 40 metros cuadrados.',        
            ];

        for ($i = 0; $i < count($name); $i++) {
            Type::create([
                'name' => $name[$i],
                'information' => $information[$i],
            ]);
        }
    }
}
