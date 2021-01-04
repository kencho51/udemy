<?php


class OrderSpies
{
    /**
     * @var integer
     */
    public $quantity;

    /**
     * @var float
     */
    public $unit_price;

    /**
     * @var float
     */
    public $amount;

    /**
     * OrderSpies constructor.
     * @param $quantity
     * @param $unit_price
     *
     * @return void
     */
    public function __construct($quantity, $unit_price)
    {
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;

        $this->amount = $quantity * $unit_price;
    }

    /**
     * Charge the total amount
     * @param PaymentGateway $geteway Payment gateway object
     *
     * @return void
     */
    public function process(PaymentGateway $gateway)
    {
        $gateway->charge($this->amount);
    }

}