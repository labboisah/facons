<?php

if (!function_exists('toast')) {
    /**
     * Flash a toast notification message to the session.
     *
     * @param string $message
     * @param string $type (success, error, warning, info)
     * @return void
     */
    function toast(string $message, string $type = 'info'): void
    {
        $validTypes = ['success', 'error', 'warning', 'info'];

        if (!in_array($type, $validTypes)) {
            $type = 'info';
        }

        session()->flash($type, $message);
    }
}

if (!function_exists('toast_success')) {
    /**
     * Flash a success toast notification.
     *
     * @param string $message
     * @return void
     */
    function toast_success(string $message): void
    {
        toast($message, 'success');
    }
}

if (!function_exists('toast_error')) {
    /**
     * Flash an error toast notification.
     *
     * @param string $message
     * @return void
     */
    function toast_error(string $message): void
    {
        toast($message, 'error');
    }
}

if (!function_exists('toast_warning')) {
    /**
     * Flash a warning toast notification.
     *
     * @param string $message
     * @return void
     */
    function toast_warning(string $message): void
    {
        toast($message, 'warning');
    }
}

if (!function_exists('toast_info')) {
    /**
     * Flash an info toast notification.
     *
     * @param string $message
     * @return void
     */
    function toast_info(string $message): void
    {
        toast($message, 'info');
    }
}