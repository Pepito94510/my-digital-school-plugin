<?

namespace App\MyDigitalSchool;

use Exception;

class TemperatureConverter
{

    public function convert($temperature, $unite)
    {
        switch ($unite) {
            case 'C':
                $temperature = ($temperature * 9 / 5) + 32;
                break;
            case 'F':
                $temperature = ($temperature - 32) * 5 / 9;
                break;
            default:
                throw new Exception("Error Processing Request", 1);
                break;
        }
        return $temperature;
    }
}
