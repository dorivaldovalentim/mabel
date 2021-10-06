<?php

function isAdmin() {
    return (auth() && (auth()->user()->is_admin == 1 || auth()->user()->is_admin == 0));
}

function isSuperAdmin() {
    return (auth() && auth()->user()->is_admin == 0);
}