<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Remate; 
use Carbon\Carbon; // Para manejar las fechas

class UpdateRemateStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remate:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza el estado de los remates según las fechas de inicio y fin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Obtener la fecha y hora actuales
        $now = Carbon::now();

        // Actualizar los remates cuyo estado deba ser "activo" (1)
        Remate::where('estado', 0) // Estado pendiente (0)
              ->where('fecha_inicio', '<=', $now)
              ->update(['estado' => 1]); // Cambiar a estado activo (1)

        // Actualizar los remates cuyo estado deba ser "finalizado" (2)
        Remate::where('estado', 1) // Estado activo (1)
              ->where('fecha_fin', '<=', $now)
              ->update(['estado' => 2]); // Cambiar a estado finalizado (2)

        // Mostrar mensaje en la consola
        $this->info('Estados de los remates actualizados correctamente.');
    }
}
