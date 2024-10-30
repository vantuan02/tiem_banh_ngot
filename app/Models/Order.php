<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //oder
    const ORDER_STATUS = [
        'pending'=>'Chờ xác nhận',
        'confirmed'=>'Đã xác nhận',
        'preparing'=>'Đang chuẩn bị hàng',
        'shipping'=>'Đang giao',
        'delivered'=>'Đã giao',
        'cancel'=>'Hủy'
    ];
    const STATUS_PENDING = 'pending';

    //payment
    const PAYMENT_STATUS = [
        'paid'=>'Đã thanh toán',
        'unpaid'=>'Chưa thanh toán'
    ];
    const UNPAID = 'unpaid';
}
