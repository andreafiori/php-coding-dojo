<?php

namespace design_patterns\structural\adapter\notification_manager;

interface NotificationInterface {

    /**
     * @param $data
     * @return mixed
     */
    public function setData($data);

    public function sendNotification();
}
