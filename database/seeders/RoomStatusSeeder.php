<?php

namespace Database\Seeders;

use App\Models\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Vacante',
            'Ocupada',
            'Ocupada - Limpia',
            'Ocupada - Sucia',
            'Vacante - Limpia - Inspeccionada',
            'Vacante - Limpia',
            'Vacante - Sucia',
            'Felicitación',
            'Uso del Hotel',
            'No Molestar',
            'Durmiendo Fuera',
            'Ocupada - Sin Equipaje',
            'Puerta Doble',
            'Fuera de Servicio',
            'Fuera de Orden',
            'Salida Pendiente / Salida Esperada',
            'Llegada Esperada',
            'Salida',
            'Salida Tardía',
            'Ocupada - Sin Equipaje',
            'Doble Cerradura',
        ];

        $codes = [
            'V',
            'O',
            'OL',
            'OS',
            'VLI',
            'VL',
            'VS',
            'FE',
            'UH',
            'NM',
            'DF',
            'OSE',
            'FDS',
            'PD',
            'LLE',
            'SP/SE',
            'SA',
            'ST',
            'OSE',
            'DC',
        ];

        $informations = [
            'Habitación vacía.',
            'Una habitación ocupada por una persona de manera legal y registrada como huésped del hotel.',
            'Una habitación ocupada por una persona de manera legal y registrada como huésped del hotel en una habitación limpia.',
            'Una habitación ocupada por una persona de manera legal y registrada como huésped del hotel en una habitación sucia. Esto ocurre debido a un cambio de estado de OC a OD después de una noche de estancia.',
            'Una habitación vacía que ha sido limpiada e inspeccionada por el supervisor de piso y está lista para recibir huéspedes (para ser vendida).',
            'Una habitación vacía en condiciones limpias.',
            'Una habitación vacía en condiciones sucias. Una habitación sucia puede ocurrir debido a un huésped que ya ha realizado el check-out o debido al programa de limpieza del departamento de limpieza.',
            'Una habitación registrada por un huésped, pero la habitación es gratuita (gratis).',
            'Una habitación registrada pero utilizada por la gerencia del hotel.',
            'Una habitación con esta señal significa que el huésped no desea ser molestado.',
            'Un huésped aún registrado, pero la habitación no se está utilizando porque el huésped debe dejar el hotel durante varios días o el huésped está durmiendo fuera del área del hotel.',
            'Un huésped que abandona el hotel antes de liquidar todas sus obligaciones.',
            'Estado de la habitación en reparación.',
            'Una habitación que requiere reparaciones graves, generalmente más de un día. Este estado puede ocurrir debido a daños en la habitación o al programa de limpieza del departamento de limpieza. Fuera de servicio reduce la disponibilidad de habitaciones.',
            'Lista de habitaciones que se espera que hagan el check-out hoy según la fecha de salida.',
            'Lista de nombres de huéspedes que se espera que lleguen hoy.',
            'Un huésped que ha abandonado el hotel hoy después de liquidar todas sus obligaciones, incluida la entrega de las llaves utilizadas en la recepción.',
            'La solicitud de un huésped para quedarse en el hotel más allá de la hora de salida especificada.',
            'Un huésped aún registrado en una habitación sin ningún objeto dentro de ella.',
            'La solicitud de un huésped al hotel para realizar un doble bloqueo para que nadie pueda entrar en la habitación.',
        ];

        for ($i = 0; $i < count($codes); $i++) {
            RoomStatus::create([
                'name' => $names[$i],
                'code' => $codes[$i],
                'information' => $informations[$i],
            ]);
        }
    }
}
