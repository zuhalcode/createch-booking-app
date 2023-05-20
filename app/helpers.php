<?php

function getStatusBadgeClass($status)
{
    $statusClasses = [
        'pending' => 'bg-primary',
        'processed' => 'bg-info',
        'completed' => 'bg-success',
        'canceled' => 'bg-danger',
        'expired' => 'bg-danger',
    ];

    return $statusClasses[$status] ?? 'bg-secondary';
}
