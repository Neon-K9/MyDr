<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class AppointmentPresenter extends Presenter
{
    public function status(): string
    {
        if ($this->entity->status === 'pending') {
            return 'Pending';
        }
        if ($this->entity->status === 'confirmed') {
            return 'Confirmed';
        }
        return 'Cancelled';
    }
}
