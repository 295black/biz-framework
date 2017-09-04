<?php

namespace Codeages\Biz\Framework\Order\Service;

interface OrderService
{
    public function findOrderItemsByOrderId($orderId);

    public function findOrderItemsByOrderIds($orderIds);

    public function findOrderItemDeductsByItemId($itemId);

    public function getOrder($id);

    public function getOrderBySn($sn, $lock = false);

    public function searchOrders($conditions, $orderBy, $start, $limit);

    public function countOrders($conditions);

    public function analysisPaidCourseOrderDataByTime($startTime, $endTime);

    public function analysisPaidClassroomOrderDataByTime($startTime, $endTime);

    public function searchOrderItems($conditions, $orderBy, $start, $limit);

    public function countOrderItems($conditions);

    public function findOrdersByIds(array $ids);

    public function findOrderItemDeductsByOrderId($orderId);

    public function findOrderLogsByOrderId($orderId);
    
    public function countOrderLogs($conditions);

    public function searchOrderLogs($conditions, $orderBy, $start, $limit);
}