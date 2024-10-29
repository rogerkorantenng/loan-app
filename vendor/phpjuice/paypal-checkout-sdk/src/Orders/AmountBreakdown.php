<?php

namespace PayPal\Checkout\Orders;

use Brick\Money\Exception\UnknownCurrencyException;
use Brick\Money\Money;

/**
 * https://developer.paypal.com/docs/api/orders/v2/#definition-Amount_breakdown.
 */
class AmountBreakdown extends Amount
{
    /**
     * The subtotal for all items. Required if the request includes purchase_units[].items[].unit_amount.
     * Must equal the sum of (items[].unit_amount * items[].quantity) for all items.
     * item_total.value can not be a negative number.
     * @var Money
     */
    protected Money $item_total;

    /**
     * The discount for all items within a given purchase_unit. discount.value can not be a negative number.
     * @var Money|null
     */
    protected ?Money $discount = null;

    /**
     * create a new AmountBreakdown instance.
     * @param  string  $value
     * @param  string  $currency_code
     * @throws UnknownCurrencyException
     */
    public function __construct(string $value, string $currency_code = 'USD')
    {
        parent::__construct($value, $currency_code);
        $this->item_total = Money::of($value, $currency_code);
    }

    /**
     * @param  string  $value
     * @param  string  $currency_code
     * @return AmountBreakdown
     * @throws UnknownCurrencyException
     */
    public static function of(string $value, string $currency_code = 'USD'): self
    {
        return new self($value, $currency_code);
    }

    /**
     * Get the instance as an array.
     * @return array
     */
    public function toArray(): array
    {
        $data = [
            'currency_code' => $this->getCurrencyCode(),
            'value' => $this->getValue(),
            'breakdown' => [
                'item_total' => [
                    'currency_code' => $this->item_total->getCurrency()->getCurrencyCode(),
                    'value' => (string) $this->item_total->getAmount(),
                ],
            ],
        ];

        if ($this->hasDiscount()) {
            /** @var Money $discount */
            $discount = $this->getDiscount();
            $data['breakdown']['discount'] = [
                'currency_code' => $discount->getCurrency()->getCurrencyCode(),
                'value' => (string) $discount->getAmount(),
            ];
        }

        return $data;
    }

    public function hasDiscount(): bool
    {
        return (bool) $this->discount;
    }

    public function getDiscount(): ?Money
    {
        return $this->discount;
    }

    public function setDiscount(Money $discount): AmountBreakdown
    {
        $this->discount = $discount;

        return $this;
    }

    public function getItemTotal(): Money
    {
        return $this->item_total;
    }

    public function setItemTotal(Money $item_total): AmountBreakdown
    {
        $this->item_total = $item_total;

        return $this;
    }
}
