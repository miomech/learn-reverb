<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Enums\OrderStatus;

class changeFirstOrderStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:change-order-status {status}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Convert the string to an integer
        $statusAsInt = (int) $this->argument('status');

        $status = match ($statusAsInt) {
            0 => OrderStatus::PENDING,
            1 => OrderStatus::PROCESSING,
            2 => OrderStatus::COMPLETED,
            3 => OrderStatus::CANCELLED,
            default => null,
        };

        if ($status === null) {
            $this->error('Invalid status');
            return;
        }

        $order = Order::first();
        $order->status = $status;
        $order->save();
    }
}
