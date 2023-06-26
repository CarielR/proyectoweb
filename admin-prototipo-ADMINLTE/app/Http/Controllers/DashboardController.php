namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtén los datos para el gráfico
        $chartData = $this->getChartData();

        // Crea el gráfico utilizando la biblioteca Charts de Laravel
        $chartData = Charts::create('pie', 'highcharts')
            ->title('Ejemplo de gráfico de pastel')
            ->labels($chartData['labels'])
            ->values($chartData['values'])
            ->dimensions(500, 300)
            ->responsive(false);

        // Renderiza la vista del dashboard con los datos del gráfico
        return view('dashboard', compact('chartData'));
    }

    private function getChartData()
    {
        // Aquí puedes obtener tus datos para el gráfico desde tu modelo o cualquier otra fuente de datos
        // En este ejemplo, usaremos datos de ejemplo

        $chartData = [
            'labels' => ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            'values' => [120, 80, 150, 200, 100, 180],
        ];

        return $chartData;
    }
}
