<?php
    setcookie('auth', 'no', time() + 3600*24, '/');
    setcookie('login', '', time() - 3600*24*7, '/');
    setcookie('password', '', time() - 3600*24*7, '/');