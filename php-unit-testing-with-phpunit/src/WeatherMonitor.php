<?php


class WeatherMonitor
{
    /**
     * Temperature service
     * @var TemperatureService
     */
    protected $service;

    /**
     * TemperatureService constructor.
     * @param TemperatureService $service Temperature service dependency
     * @return  void
     */
    public function __construct(TemperatureService $service)
    {
        $this->service = $service;
    }


    public function getAverageTemperature($start, $end)
    {
        $start_temp = $this->service->getTemperature($start);
        $end_temp = $this->service->getTemperature($end);

        return ($start_temp + $end_temp) / 2;
    }

}